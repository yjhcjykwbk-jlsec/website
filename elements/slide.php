<script type="text/javascript" src="slide.js"></script>
<?php
$slides=array(
  array("href"=>"","img"=>""),
  array("href"=>"","img"=>""),
  array("href"=>"","img"=>""),
  array("href"=>"","img"=>""),
  array("href"=>"","img"=>""),
  array("href"=>"","img"=>""),
);
?>
<script>
<!-- mytransform=function(){ -->
  <!-- obj=$("#slide_box ul"); -->
  <!-- pos=obj.css("-webkit-transform"); -->
  <!-- console.log(pos); -->
  <!-- obj.css("-webkit-transform","matrix(1, 0, 0, 1, -0, 0)"); -->
  <!-- } -->
  window.onload=function(){
    new Swipe(document.getElementById('slide_box'), {
      speed:500,
        auto:3000
        <!-- callback: function(){ -->
        <!-- var lis = $(this.element).next("ol").children(); -->
        <!-- lis.removeClass("on").eq(this.index).addClass("on"); -->
        <!-- } -->
    });
  }

</script>
<div id="slide_box" style="visibility: visible;">
  <ul style="list-style: none; width: 10488px; transition: 500ms; -webkit-transition: 500ms; -webkit-transform: translate3d(-9177px, 0, 0);">
<?php foreach($slides as $it=>$slide){
?>
    <li style="width: 1311px; display: table-cell; vertical-align: top;">
    <a href="<?php echo $slide['href'];?>">
    <img src="<?php echo $slide['img'];?>" alt="1" style="width:100%;">
    </a>
    </li>
<?php } ?>
  </ul>
</div>
