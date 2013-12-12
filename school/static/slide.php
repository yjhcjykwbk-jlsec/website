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
