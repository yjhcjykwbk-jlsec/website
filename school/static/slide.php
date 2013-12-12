<style>
.slide_box{
  overflow: hidden; 
  /*  width very big and will overflow */
  position: relative;
}
.slide_box ol {
  margin:0;
  display: block;
  width: 100%;
  list-style-type: decimal;
  -webkit-margin-before: 1em;
  -webkit-margin-after: 1em;
  -webkit-margin-start: 0px;
  -webkit-margin-end: 0px;
  -webkit-padding-start: 40px;
  float:right;
}
.slide_box ol li {
  display: inline-block;
  margin: 5px 0;
  width: 8px;
  height: 8px;
  background-color: #757575;
  border-radius: 8px;
  list-style: none;
}
.slide_box ol li.on{
    background-color:#ffffff;
}
.slide_box ol {
  height: 20px;
  position: relative;
  z-index: 10;
  margin-top: -25px;
  text-align: right;
  padding-right: 15px;
  background-color: rgba(0,0,0,0.3);
}
</style>
<?php $slidewidth=sizeof($slides)*1000; ?>
</script>
<div id="slide_box" class="slide_box" style="visibility: visible;">
<ul style="list-style: none; width: <?php echo $slidewidth;?>px; transition: 500ms; -webkit-transition: 500ms; -webkit-transform: translate3d(-9177px, 0, 0);">
  <?php foreach($slides as $it=>$slide){
  ?>
    <li style=" display: table-cell; vertical-align: top;">
    <a href="<?php echo $slide['href'];?>">
    <img src="<?php echo $slide['img'];?>" alt="1" style="width:100%;">
    </a>
    </li>
  <?php } ?>
</ul>
<ol>
  <?php foreach($slides as $it=>$slide){ ?>
  <li class=""></li>
  <?php } ?>
</ol>
</div>
