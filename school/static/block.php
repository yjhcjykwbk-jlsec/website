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
