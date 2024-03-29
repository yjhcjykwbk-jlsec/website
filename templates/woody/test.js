var title, theme_list = [],
    theme_info, theme, theme_id, laborator_main_frame, laborator_switcher_pane, laborator_switcher_pane_height, current_theme, win, init = false,
    init_2 = false,
    other_options, laborator_buy, device_types, vmargin = 0;
$(document).ready(function () {
    title = document.title;
    laborator_main_frame = $("#laborator_main_frame");
    laborator_switcher_pane = $("#laborator_switcher_pane");
    laborator_switcher_pane_height = laborator_switcher_pane.outerHeight();
    laborator_buy = $("a.buy");
    other_options = $("#other_options"), device_types = $(".device_types a");
    $('a[title]').tipsy({
        gravity: 'n'
    });
    var index = 0;
    for (theme_id in themes) {
        theme_info = themes[theme_id];
        themes[theme_id].index = index;
        theme = {
            text: theme_info.name,
            value: theme_id,
            description: theme_info.desc,
            selected: theme_info.hasOwnProperty('selected') ? theme_info.selected : false
        };
        theme_list.push(theme);
        index++;
    }
    $("#theme_selector").ddslick({
        data: theme_list,
        width: 170,
        selectText: "Choose theme",
        onSelected: function (data) {
            var value = data.selectedData.value;
            switchTheme(value);
        }
    });
    var theme_selector = $("#theme_selector"),
        methods = theme_selector.data('ddslick').methods,
        intent = null;
    device_types.each(function (i, el) {
        var device = $(el);
        device.click(function (ev) {
            ev.preventDefault();
            resizeContainer(device.data('device-type'));
        });
    });
    $(".close").click(closeFrame);
    changeHeight();
    getThemeByHash();
    init_2 = true;
    var index_counter = 100,
        overlay_lock = $(".overlay_lock");
    theme_selector.find('li > a').each(function (i, el) {
        var $this = $(el),
            $image = $('<img class="image_preview" />');
        theme = (function () {
            for (var j in themes) {
                if (themes[j].index == i) {
                    return themes[j];
                }
            }
            return {};
        })();
        if (theme.scrshot) {
            $image.attr({
                src: theme.scrshot
            });
            $this.after($image);
            $this.hover(function () {
                $image.stop().css({
                    zIndex: index_counter
                }).show();
                index_counter++;
                overlay_lock.stop().fadeTo(250, 1);
            }, function () {
                $image.stop().hide();
                overlay_lock.stop().fadeOut(250);
            });
        }
    });
});
var switchTheme = function (_theme_id) {
    var theme = themes[_theme_id];
    if (!theme)
        return;
    current_theme = theme;
    theme_id = _theme_id;
    laborator_buy.attr('href', current_theme.buy);
    laborator_buy.find('span').html(current_theme.desc);
    resizeContainer(current_theme.default_device);
    setFrameURL(theme.url);
    document.title = theme.name + ' | ' + title;
    var options = theme.hasOwnProperty('options') ? theme.options : null;
    var theme_args;
    if (options) {
        generateOptions(options, theme);
    }
    if (init_2) {
        window.location.hash = 'theme=' + theme_id;
    }
    init = true;
};
var generateOptions = function (options, theme) {
    other_options.html('');
    for (var option_name in options) {
        var element = $('<select name="' + option_name + '" id="' + option_name + '">');
        var select_options = options[option_name];
        for (var select_option_id in select_options) {
            var select_item = select_options[select_option_id];
            if (select_options[select_option_id].hasOwnProperty('value')) {
                select_option_id = select_options[select_option_id].value;
            }
            var select_item_el = $('<option value="' + select_option_id + '">' + select_item.name + '</option>');
            if (select_item.hasOwnProperty('value')) {
                select_item_el.attr('value', select_item.value);
            }
            if (select_item.hasOwnProperty('selected') && select_item.selected) {
                select_item_el.attr('selected', true);
            }
            if (select_item.hasOwnProperty('desc')) {
                select_item_el.data('description', select_item.desc);
            }
            element.append(select_item_el);
        }
        other_options.append(element);
    }
    for (var option_name in options) {
        var element = $('#' + option_name);
        var width = 170;
        if (theme.hasOwnProperty(option_name + '_width')) {
            width = theme[option_name + '_width'];
        }
        element.ddslick({
            width: width,
            onSelected: function (data) {
                var value = data.selectedData.value;
                var index_id = (function (_options, _data, _value) {
                    for (var i in _options) {
                        if (_options[i].value == _value) {
                            return i;
                        }
                    }
                    return _value;
                })(options[option_name], data, value);
                onThemeOptionsUpdate(value, data, option_name, index_id);
            }
        });
    }
};
var onThemeOptionsUpdate = function (value, data, option_key, index_id) {
    if (value) {
        var all_params = parseThemeParams(current_theme);
        setThemeByParams(theme_id);
    }
};
var parseThemeParams = function (theme) {
    var params = {};
    if (theme.hasOwnProperty('options')) {
        for (var option_id in theme.options) {
            var el = $("#" + option_id);
            var val_index = el.is('select') ? el.val() : el.data('ddslick').selectedIndex;
            params[option_id] = val_index;
        }
    }
    return params;
};
var closeFrame = function (ev) {
    ev.preventDefault();
    if (current_theme && current_theme.hasOwnProperty('url')) {
        laborator_switcher_pane.fadeTo(500, 0.8);
        window.location.href = current_theme.url;
    }
    return false;
};
var changeHeight = function () {
    laborator_main_frame.height($(window).height() - laborator_switcher_pane_height - vmargin).css('margin-top', vmargin / 2);
};
var setFrameURL = function (url) {
    laborator_main_frame.attr('src', url);
}
var setThemeByParams = function (theme_id) {
    var hash_id = '';
    var theme = themes[theme_id];
    if (theme) {
        var options = theme.hasOwnProperty('options') ? theme.options : {};
        hash_id = 'theme=' + theme_id;
        var query_url = theme.url;
        if (options) {
            query_url += '?';
            var i = 0;
            for (var option_id in options) {
                var option = options[option_id];
                var el = $("#" + option_id);
                var ddslick = el.data('ddslick');
                if (ddslick) {
                    var value = ddslick.selectedData.value;
                    var is_url = value.match(/^http/),
                        option_index;
                    if (is_url) {
                        for (var sub_option_id in options[option_id]) {
                            if (options[option_id][sub_option_id].value == value) {
                                option_index = sub_option_id;
                            }
                        }
                    }
                    query_url += (i > 0 ? '&' : '') + option_id + '=' + value;
                    hash_id += ';' + option_id + '=' + (is_url ? option_index : value);
                    if (is_url) {
                        query_url = value;
                        break;
                    }
                }
                i++;
            }
        }
    }
    if (init_2)
        window.location.hash = hash_id;
    setFrameURL(query_url);
};
var getThemeByHash = function () {
    var hash = window.location.hash.toString(),
        theme;
    var _hash = hash.replace('#', '').split(';');
    var theme_id = _hash[0].split('=')[1];
    if (theme = themes[theme_id]) {
        var options = theme.options;
        var theme_index = 0;
        var i = 0;
        for (var _theme_id in themes) {
            if (_theme_id == theme_id) {
                theme_index = i;
                break;
            }
            i++;
        }
        $("#theme_selector").ddslick('select', {
            index: theme_index
        });
        var defined_vars = {};
        var params = parseThemeParams(theme);
        _hash.shift();
        for (var i = 0; i < _hash.length; i++) {
            var hash_var = _hash[i].split('=');
            var _var = hash_var[0];
            var _val = hash_var[1];
            if (options[_var]) {
                var index = (function () {
                    var index = 0;
                    for (var _i in options[_var]) {
                        if (_i == _val) {
                            return index;
                        }
                        index++;
                    }
                })();
                $("#" + _var).ddslick('select', {
                    index: index
                });
            }
        }
    }
}
$(window).resize(function () {
    changeHeight();
}).load(function () {
    changeHeight();
});

function resizeContainer(device_type) {
    var left = 0,
        marginLeft = 0;
    var device_dimensions = {
        largescreen: {
            width: '100%',
            vmargin: 0
        },
        tablet: {
            width: 820,
            vmargin: 40
        },
        smartphone: {
            width: 450,
            vmargin: 50
        }
    };
    var device = device_dimensions[device_type];
    device_types.removeClass('current');
    device_types.filter('[data-device-type="' + device_type + '"]').addClass('current');
    if (typeof device.width == 'number') {
        left = '50%';
        marginLeft = -device.width / 2;
    }
    laborator_main_frame.css({
        left: left,
        marginLeft: marginLeft,
        width: device.width
    });
    vmargin = device.vmargin;
    changeHeight();
}

