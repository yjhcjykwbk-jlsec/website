<link type="text/css" rel="stylesheet" href="postlistview.woody.css">
<link type="text/css" rel="stylesheet" href="postlistview.index.css">
<?php
 $posts=array(
 array("title"=>"first post","desp"=>"first post content or digest","img"=>"../imgs/001.jpg"),
 array("title"=>"second post","desp"=>"second post content or digest","img"=>"../imgs/001.jpg")
 );
 ?>
<ul data-role="listview" data-inset="true" class="ui-listview ui-listview-inset ui-corner-all ui-shadow">
  <!-- Post -->
  <?php 
  foreach($posts as $it=>$post){ ?>
  <li data-theme="c" class="ui-btn ui-btn-icon-right ui-li-has-arrow ui-li ui-li-has-thumb ui-corner-top ui-btn-up-c"><div class="ui-btn-inner ui-li ui-corner-top"><div class="ui-btn-text">
      <a href="#post" class="ui-link-inherit">
      <img src="<?php echo $post['img'];?>" class="ui-li-thumb ui-corner-tl">
        <h3 class="ui-li-heading"><?php echo $post['title'];?></h3>
        <p class="ui-li-desc"><?php echo $post['desp'];?></p>
      </a>
  </div><span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span></div></li><!-- END OF: Post -->
  <?php } ?>
</ul>
