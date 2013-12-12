<style>
.feature_block {
  background: #FFF;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  -moz-background-clip: padding;
  background-clip: padding-box;
  -webkit-box-shadow: 0px 0px 0px 2px #FFF, 0px 3px 1px rgba(0, 0, 0, 0.1), 0px 0px 8px rgba(0, 0, 0, 0.08);
  box-shadow: 0px 0px 0px 2px #FFF, 0px 3px 1px rgba(0, 0, 0, 0.1), 0px 0px 8px rgba(0, 0, 0, 0.08);
  border: 1px dashed #DDD;
  box-sizing: border-box;
  padding: 15px 0;
  text-align: center;
  -webkit-transition-duration: 0.3s;
  -o-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transform: rotate(0deg);
  transform: rotate(0deg);
  height:300px;
  width: 31%;
  display:inline-block; 
  /* note: it is for this blocks in a line and not damaged*/
  margin:10px;
}

.feature_block i {
  font-family: "Entypo", "EntypoSocial", "fontello";
  font-size: 34px;
  font-weight: normal;
  vertical-align: middle;
  line-height: 64px;
  margin-right: .1em;
  color: #333;
}
</style>
<?php 
//blocks ...
?>
<div class="block_box" style="margin:auto;width:100%;">
<?php 
foreach($blocks as $it => $block){ ?>
<div class="feature_block">

  <i><span class="font-icon-graduation-cap"><img src="img/news.jpg" style="width:200px;height:200px;"/></span></i>

  <h3><?php echo $block['title'];?></h3>

  <div class="content">
    <?php echo $block['desp'];?>
  </div>

</div>
<?php } ?>
</div>
