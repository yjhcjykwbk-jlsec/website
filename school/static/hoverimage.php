<div class="hoverimg-div">
<?php foreach($hoverimgs as $it=>$img){ 
  $i=$it%6+1;
?>
<div class="hoverimg" id="hoverimg-<?php echo $i;?>">
<?php if($i!=3){ ?>
          <div class="mask"></div>
<?php } else { ?>
          <div class="mask-1"></div>
          <div class="mask-2"></div>
<?php } ?>
          <img src="<?php echo $img; ?>">
        </div>	
<?php } ?>
</div>
