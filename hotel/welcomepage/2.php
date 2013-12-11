<!DOCTYPE html>
<?php include "../vars.php";?>
<?php 
$TITLE="the title";
$SLIDERIMG=array(
  "http://mp.weixin.qq.com/mp/appmsg/show?__biz=MzA3OTEwOTQxMw==&appmsgid=10000030&itemidx=1&sign=1d2fe2a87452fd7b53d63aca88b2c991#wechat_redirect"
  ,"http://mp.weixin.qq.com/mp/appmsg/show?__biz=MzA3OTEwOTQxMw==&appmsgid=10000030&itemidx=1&sign=1d2fe2a87452fd7b53d63aca88b2c991#wechat_redirect"
  ,"http://mp.weixin.qq.com/mp/appmsg/show?__biz=MzA3OTEwOTQxMw==&appmsgid=10000030&itemidx=1&sign=1d2fe2a87452fd7b53d63aca88b2c991#wechat_redirect"
);
$SLIDERHREF=array(
  "http://www.baidu.com"
  ,"http://www.baidu.com"
  ,"http://www.baidu.com"
);
$SLIDERCNT=3;
?>
<!-- saved from url=(0122)http://www.weimob.com/weisite/home?pid=20799&bid=38408&wechatid=oJXuHty_xq3g7Q67ElQB_qWBKN5Q&from=1&wxref=mp.weixin.qq.com -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./2_files/snower.css" media="all">
<link rel="stylesheet" type="text/css" href="./2_files/weimob-ui-1-1.css" media="all">
<link rel="stylesheet" type="text/css" href="./2_files/common.css" media="all">
<link rel="stylesheet" type="text/css" href="./2_files/home-4.css" media="all">
<script type="text/javascript" src="./2_files/maivl.js"></script>
<script type="text/javascript" src="./2_files/jQuery.js"></script>
<script type="text/javascript" src="./2_files/swipe.js"></script>
<script type="text/javascript" src="./2_files/zepto.js"></script>
<title><?php echo $TITLE ?></title>

    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
        <!-- Mobile Devices Support @begin -->

            <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
            <meta content="no-cache" http-equiv="pragma">
            <meta content="0" http-equiv="expires">
            <meta content="telephone=no, address=no" name="format-detection">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <meta name="apple-mobile-web-app-capable" content="yes"> <!-- apple devices fullscreen -->
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <!-- Mobile Devices Support @end -->
        <link rel="shortcut icon" href="http://stc.weimob.com/img/favicon.ico">
    <link type="text/css" rel="stylesheet" href="chrome-extension://cpngackimfmofbokmjmljamhdncknpmg/style.css"><script type="text/javascript" charset="utf-8" src="chrome-extension://cpngackimfmofbokmjmljamhdncknpmg/page_context.js"></script></head>
    <body onselectstart="return true;" ondragstart="return false;" screen_capture_injected="true">


<link rel="stylesheet" type="text/css" href="./2_files/font-awesome.css" media="all">

<div class="weimob-page" style="display:block; padding-bottom:48px;">
    <!--
  幻灯片管理
  -->
  <div style="-webkit-transform:translate3d(0,0,0);">
    <div id="banner_box" class="box_swipe" style="visibility: visible;">
      <ul style="list-style: none; width: 10488px; transition: 500ms; -webkit-transition: 500ms; -webkit-transform: translate3d(-9177px, 0, 0);">
        <?php for($i=0;$i<$SLIDERCNT;$i++) {
	?>
                  <li style="width: 1311px; display: table-cell; vertical-align: top;">
                  <a href="<?php echo $SLIDERHREF[$i];?>">
                  <img src="<?php echo $SLIDERIMG[$i];?>" alt="<?php echo $i;?>" style="width:100%;">
                </a>
          </li>
                  <li style="width: 1311px; display: table-cell; vertical-align: top;">
                          <a href="http://www.weimob.com/weisite/list?pid=20799&bid=38408&wechatid=oJXuHt5hIJpHhZtLPSYAWeb_Xf6g&ltid=41700&wxref=mp.weixin.qq.com">
                          <img src="./2_files/20131204221951_26020.jpg" alt="<?php echo $SLIDERALT;?>" style="width:100%;">
                </a>
          </li>

        <?php;
} ?>
              </ul>
      <ol>
                  <li class=""></li>
                  <li class=""></li>
                  <li class=""></li>
                  <li class=""></li>
                  <li class=""></li>
                  <li class=""></li>
                  <li class=""></li>
                  <li class="on"></li>
              </ol>
    </div>
  </div>
<script>
$(function() {
	new Swipe(document.getElementById('banner_box'), {
    speed: 500,
      auto:3000,
      callback: function(){
        var lis = $(this.element).next("ol").children();
	lis.removeClass("on").eq(this.index).addClass("on");
}
  });
});
</script>
<br><header>
        <div class="snower">
            <script type="text/javascript"></script>
            <script type="text/javascript" src="./2_files/snower.js"></script>
        </div>
    </header>     		<!--
    用户分类管理
    -->

<?php 
$USERSERVICE=array(
  "拨打电话","拨打电话","拨打电话","拨打电话","拨打电话","拨打电话"
);
$SERVICEHREF=array(
  "tel:08885100656","tel:08885100656","tel:08885100656","tel:08885100656","tel:08885100656","tel:08885100656"
);
$SERVICEICON=array(
  "icon-phone","icon-phone","icon-phone","icon-phone","icon-phone","icon-phone"
);
$SERVICECNT=6;
?>
    <div class="weimob-content">
            <div class="weimob-list">
      <?php for($i=0;$i<$SERVICECNT;$i++) {
	?>
            <a href="<?php echo $SERVICEHREF[$i];?>" class="weimob-list-item">
                                  <div class="weimob-list-item-bg">
                                  <div><span class="<?php echo $SERVICEICON[$i];?>"></span></div>
                            <div class="weimob-list-item-box">
                                <div class="weimob-list-item-line">
                                <div class="weimob-list-item-title"><?php echo $USERSERVICE[$i];?></div>
                                </div>
                            </div>
                        </div>
                    </a>
        <?php;
} ?>
                            </div>
        </div>
    </div>

<!--
导航菜单
   后台设置的快捷菜单
-->

<!--
分享前控制
-->
<script>
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
	window.shareData = {
    "imgUrl": "http://img.weimob.com/static/c7/a0/6a/image/20131120/20131120195059_72208.jpg",
      "timeLineLink": "http://www.weimob.com/weisite/home?pid=20799&bid=38408&wechatid=fromUsername&wxref=mp.weixin.qq.com",
      "sendFriendLink": "http://www.weimob.com/weisite/home?pid=20799&bid=38408&wechatid=fromUsername&wxref=mp.weixin.qq.com",
      "weiboLink": "http://www.weimob.com/weisite/home?pid=20799&bid=38408&wechatid=fromUsername&wxref=mp.weixin.qq.com",
      "tTitle": "欢迎光临懒阳阳客栈",
      "tContent": "欢迎光临丽江最幸福客栈-懒阳阳客栈微信官网，点击进入吧！！",
      "fTitle": "欢迎光临懒阳阳客栈",
      "fContent": "欢迎光临丽江最幸福客栈-懒阳阳客栈微信官网，点击进入吧！！",
      "wContent": "欢迎光临丽江最幸福客栈-懒阳阳客栈微信官网，点击进入吧！！";
};

  // 发送给好友
WeixinJSBridge.on('menu:share:appmessage', function (argv) {
	WeixinJSBridge.invoke('sendAppMessage', {
      "img_url": window.shareData.imgUrl,
        "img_width": "640",
        "img_height": "640",
        "link": window.shareData.sendFriendLink,
        "desc": window.shareData.fContent,
        "title": window.shareData.fTitle;
},function (res) {
	_report('send_msg', res.err_msg);
})
  });

  // 分享到朋友圈
WeixinJSBridge.on('menu:share:timeline', function (argv) {
	WeixinJSBridge.invoke('shareTimeline', {
      "img_url": window.shareData.imgUrl,
        "img_width": "640",
        "img_height": "640",
        "link": window.shareData.timeLineLink,
        "desc": window.shareData.tContent,
        "title": window.shareData.tTitle;
},function (res) {
	_report('timeline', res.err_msg);
});
  });

  // 分享到微博
WeixinJSBridge.on('menu:share:weibo', function (argv) {
	WeixinJSBridge.invoke('shareWeibo', {
      "content": window.shareData.wContent,
        "url": window.shareData.weiboLink;
},function (res) {
	_report('weibo', res.err_msg);
});
  });
},false)
  </script>
              <footer>
        <div class="weimob-copyright">
          <a href="http://www.weimob.com/weisite/home?pid=20799&bid=38408&wechatid=oJXuHty_xq3g7Q67ElQB_qWBKN5Q&wxref=mp.weixin.qq.com">© 丽江古城懒阳阳客栈</a>
        </div>
              </footer>
        <div mark="stat_code" style="width:0px; height:0px; display:none;">
          </div>

</body></html>
