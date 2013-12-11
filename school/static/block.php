<?php 
//blocks ...
?>
<div class="block_box" style="margin:auto;width:100%;">
<?php 
foreach($blocks as $it => $block){ ?>
<div class="feature_block">

  <i><span class="font-icon-graduation-cap">icon</span></i>

  <h3><?php echo $block['title'];?></h3>

  <div class="content">
    <?php echo $block['desp'];?>
  </div>

</div>
<?php } ?>
</div>
