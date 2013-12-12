<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link href="static/greybackground.css" rel="stylesheet">
<link href="static/slide.css" rel="stylesheet">
<link href="static/block.css" rel="stylesheet">
<link href="static/frame.css" rel="stylesheet">
<link href="static/footer.css" rel="stylesheet">
<link href="static/round.ul.css" rel="stylesheet">
<link href="static/hoverimage.css" rel="stylesheet">
<script type="text/javascript" src="static/jquery.js"></script>
<script type="text/javascript" src="static/slide.js"></script>
<title>北京大学深圳研究生院</title>
</head>
<body>
<?php
$slides=array(
  array("href"=>"","img"=>"img/head0.jpg"),
  array("href"=>"","img"=>"img/head1.jpg"),
  array("href"=>"","img"=>"img/head2.jpg"),
  array("href"=>"","img"=>"img/head3.jpg"),
);
include "static/slide.php";
?>

  <div class="primary-div"><h4 class="title"> 最新内容 </h4><?php 
$blocks=array(
  array("title"=>"最近新闻 News","desp"=>"吴云东课题组和港科大孙建伟课题组发表的研究.."),
  array("title"=>"通知 Notices","desp"=>"深圳大学首届抗衰老与再生医学前."),
  array("title"=>"讲座 Seminars","desp"=>"special Seminar on Dec. 13..."),
);
include "static/block.php";
?>
</div>

  <div class="primary-div"><h4 class="title"> 活动照片 </h4><?php 
$hoverimgs=array(
  "img/1.jpg",
  "img/2.jpg",
  "img/3.jpg",
  "img/4.jpg",
  "img/5.jpg",
  "img/6.jpg",
);
?>
<?php include "static/hoverimage.php"; ?>
</div>

<div class="primary-div">
  <ul class="round">
  <li>
  hello world
  </li>
  </ul>
  </div>
  <footer></footer>
  </body>
  </html>
