<?php include "../vars.php"; ?>
<style type="text/css">
#FILL{background-color:#ffc000;position:absolute;z-index:99}
</style>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./1_files/hotels.css" media="all">
<link rel="stylesheet" type="text/css" href="./1_files/datepicker.css" media="all">
<script type="text/javascript" src="./1_files/jQuery.js"></script>
<script type="text/javascript" src="./1_files/jquery-ui.js"></script>
<script type="text/javascript" src="./1_files/swipe.js"></script>
<title><?php echo $TITLE;?></title>
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
  <style>
  img{width:100%!important;}
  </style>
  <link type="text/css" rel="stylesheet" href="chrome-extension://cpngackimfmofbokmjmljamhdncknpmg/style.css"><script type="text/javascript" charset="utf-8" src="chrome-extension://cpngackimfmofbokmjmljamhdncknpmg/page_context.js"></script></head>
  <body onselectstart="return true;" ondragstart="return false;" id="hotelsdetail" screen_capture_injected="true">

<form action="../record.php">     
<?php
if (!isset($OUTLINEIMG))
    $OUTLINEIMG = "./1_files/20131120203716_70998.jpg";
if (!isset($INTRODUCTION))
    $INTRODUCTION = "客栈开业于2013年7月，闹中取静、环境怡人，包含两个精装修标间，四个大床房，一个豪华蜜月套房，都配有独立卫生间，数字电视.古城中心七一街崇仁巷19号 (万子桥,七一街三眼井)";
?>
<section class="body">
  <div class="banner">
  <div id="imgs_box" class="box_swipe">
  <ul style="list-style: none;">
  <li><a href="../welcomepage/"><img src="<?php echo $OUTLINEIMG;?>" alt="院落2" style="width:100%;">
  <span id="fill"><input name="OUTLINEIMG" id="FILL" value="<?php echo $OUTLINEIMG;?>"></span>
  </a></li>
  </ul>
  <ol>
  <li class="on"></li>
  </ol>
  </div>
  </div>


  <div class="cardexplain">
  <ul class="round">
  <li class="addr"><a href="http://api.map.baidu.com/marker?location=<?php echo $LOCATION;?>&title=%E4%B8%BD%E6%B1%9F%E5%8F%A4%E5%9F%8E%E6%87%92%E9%98%B3%E9%98%B3%E5%AE%A2%E6%A0%88&name=%E4%B8%BD%E6%B1%9F%E5%8F%A4%E5%9F%8E%E6%87%92%E9%98%B3%E9%98%B3%E5%AE%A2%E6%A0%88&content=%3Cspan%20style=" font-size:16px;"="">&nbsp; <span style="font-family:Microsoft YaHei;">&nbsp; <?php
echo $HOTELNAME;
?></span><?php echo $INTRODUCTION;?><br>
  </a><p><a href="http://api.map.baidu.com/marker?location=&title=%E4%B8%BD%E6%B1%9F%E5%8F%A4%E5%9F%8E%E6%87%92%E9%98%B3%E9%98%B3%E5%AE%A2%E6%A0%88&name=%E4%B8%BD%E6%B1%9F%E5%8F%A4%E5%9F%8E%E6%87%92%E9%98%B3%E9%98%B3%E5%AE%A2%E6%A0%88&content=%3Cspan%20style=" font-size:16px;"="">
  <span style="font-size:16px;">&nbsp; &nbsp;<?php
echo $INTRODUCTION;
?></span></span></a></p></li>
  <li class="tel">
<a href="tel:0888-5100656">
<input id="FILL" name="BOOKPHONE" value="<?php echo $BOOKPHONE?>">  
  电话预订</a></li>
  </ul>
  <div class="detailcontent"><h2>详情介绍</h2>
  <span style="font-size:16px;">&nbsp; <span style="font-family:Microsoft YaHei;">&nbsp;<?php echo $HOTELNAME;?></span><?php echo $INTRODUCTION;?></span><br>
  <p>
  <span style="font-size:16px;">&nbsp; &nbsp;<span id="fill">客栈开业于2013年7月，闹中取静、环境怡人，包含两个精装修标间，四个大床房，一个豪华蜜月套房，都配有独立卫生间，数字电视</span></span></p></div>
  </div>

  <div class="plugback">
  <a href="javascript:history.back(-1)">
  <div class="plugbg themeStyle">
  <span class="plugback"></span>
  </div>
  </a>
  </div>
  </section>
  <footer style="text-align:center; color:#ffd800;margin-right:20px;margin-top:0px;"><a href="http://www.weimob.com/weisite/home?pid=20799&bid=38408&wechatid=formUsername&wxref=mp.weixin.qq.com">©<?php echo $HOTELNAME;?></a></footer>

  <script>
$(document).ready(function(){
  $(function(){
    new Swipe(document.getElementById('imgs_box'), {
      speed:500,
        //auto:3000,
        callback: function(){
          var lis = $(this.element).next("ol").children();
          lis.removeClass("on").eq(this.index).addClass("on");
        }
    }); 
  });
});
</script>                <div mark="stat_code" style="width:0px; height:0px; display:none;">
          </div>
<input type="submit" value="submit">
</form>    

<script>
var t = document.getElementById("FILL");
t.onclick = function showmsg(){
  return false;
}
</script>

</body></html>
