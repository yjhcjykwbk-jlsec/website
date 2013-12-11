jQuery(document).ready(function($) {
    "use strict";

/*********** Animations ************************************************************/
        $(".ABs-animo").one('inview', function(event, isInView) {
            if (isInView) {
                var animation = $(this).data('animation');
                var duration = $(this).data('duration')/1000;
                var delay = parseInt($(this).data('delay'),10);
                var $element = $(this);
                setTimeout(function() {
                   $element.css({visibility: "visible"}).animo( { animation: animation, duration: duration} );
                }, delay);
                
            }
        });

        $(".ABs-animo-children").one('inview', function(event, isInView) {
            var animation = $(this).data('animation');
            var duration = $(this).data('duration')/1000;
            var delay = parseInt($(this).data('delay'),10);
            var difference = 0;
            if (isInView) {
                $(this).children().each(function(){
                    var $element = $(this);
                    setTimeout(function() {
                        $element.css({visibility: "visible"}).animo( { animation: animation, duration: duration} );
                    }, difference);
                    difference = difference + delay;
                });
            }
        });


/*********** Accordions ************************************************************/
    $( ".ABs-accordion" ).accordion({
        collapsible: true,
        active: false,
        heightStyle: "content",
        create: function( event, ui ) {
            var expanded = $(this).data("expanded");
            if(expanded===0){
                expanded = false;
            }
            else{
                expanded = expanded-1;
            }
            $(this).accordion( "option", "active", expanded);
        },
    }); 


/*********** Tabs ************************************************************/
    $('.ABs-tabs-horizontal').each(function() {
        var optionSelected = $(this).data("selected")-1;
        $(this).tabs({ 
            active:optionSelected,
            beforeActivate: function( event, ui ) {
                var parent = ui.oldPanel.parent();
                var diffHeight = parent.height() - (ui.oldPanel.height() - ui.newPanel.height());
                parent.animate({height: diffHeight}, 300, function() {
                    parent.height('auto');
                });
                if (ui.newTab.index() > ui.oldTab.index())
                    $( ".ABs-tabs-horizontal" ).tabs( "option", "show", { effect: "slide", direction: "right", duration: 400 } );
                else
                    $( ".ABs-tabs-horizontal" ).tabs( "option", "show", { effect: "slide", direction: "left", duration: 400 } );
            },
        });
    });

    $('.ABs-tabs-vertical').each(function() {
        var optionSelected = $(this).data("selected")-1;
        $(this).tabs({ 
            active:optionSelected,
            beforeActivate: function( event, ui ) {
                var parent = ui.oldPanel.parent();
                var diffHeight = parent.height() - (ui.oldPanel.height() - ui.newPanel.height());
                parent.animate({height: diffHeight}, 300, function() {
                    parent.height('auto');
                });
                if (ui.newTab.index() > ui.oldTab.index())
                    $( ".ABs-tabs-vertical" ).tabs( "option", "show", { effect: "slide", direction: "down", duration: 400 } );
                else
                    $( ".ABs-tabs-vertical" ).tabs( "option", "show", { effect: "slide", direction: "up", duration: 400 } );
            },
        }); 
    });


/*********** Alert Box ************************************************************/
    $( ".ABs_alert_box_close" ).click(function(){
        var $parent = $(this).parent();
        $parent.animate({height:"0px", paddingTop:"0px", paddingBottom:"0px", margin:"0px", opacity:"0"},400);
    });


/*********** Stats excerpt counter ************************************************************/
    function ABs_counter($object,interval,max,increment) {
        var number = parseInt($object.text(),10) + increment;
        $object.text(number);
        if (number < max)
            setTimeout(function() {ABs_counter($object,interval,max,increment);} ,interval);
    }

    $(".ABs_stats_number").one('inview', function(event, isInView) {
        if (isInView) {
            $(this).each(function(){
                var max = $(this).data("number");
                var increment = 1;
                if (max > 50) increment = 10;
                if (max > 500) increment = 100;
                if (max > 5000) increment = 200;
                if (max > 10000) increment = 1000;
                var interval = $(this).data("duration")/(max/increment);
                $(this).text('0');
                ABs_counter($(this),interval,max,increment);
            });
        }
    });


/*********** PrettyPrint ************************************************************/
    $(function(){
      window.prettyPrint && prettyPrint(); 
    });


/*********** Tooltip ************************************************************/
    $('.ABs_tooltip').tipsy({
        fade: true, 
        gravity: function(){
            return $(this).data("gravity");
        }
    });


/*********** Back to Top ************************************************************/
    $('.ABs_divider a').click(function(){
        event.preventDefault ? event.preventDefault() : event.returnValue = false;
        $('html, body').animate({scrollTop:0}, 'slow');
    });


/*********** Progress Bar ************************************************************/
    $(".ABs_meter > span").width(0);
    $(".ABs_meter > span").one('inview', function(event, isInView) {
      if (isInView) {
        var newwidth = $(this).data("percentage") + '%';
        $(this).animate({width: newwidth}, {
            duration:1500,
            step: function(now) {
                   $(this).html(Math.round(now) + '%');
            }
        });
      }
    });

    
});