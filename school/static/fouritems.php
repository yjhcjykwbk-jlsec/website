<style>
 .four-item  {
    float: left;
    display: inline;
    margin-left: 10px;
    margin-right: 10px;
  }
.four-item {
    width: 220px;
  }
.four-item  {
    position: relative;
    background: #FFF;
  }
.four-item  .saw_h {
    height: 10px;
    width: 100%;
    position: absolute;
    left: 0;
    top: -10px;
    background: url(img/saw_h.png) repeat-x;//波浪线
  }
 .four-item .four-item-info {
    position: relative;
    padding: 10px 15px;
  }
.four-item  .item_info h1 {
    font-size: 13px;
  }
.four-item  a, a:visited {
    color: #333;
    text-decoration: underline;
    outline: 0;
  }
.four-item  a:hover {
    color: #FFBF00;
  }
</style>
<?php foreach($fouritems as $it=>$fouritem){ ?>
<div class="four-item">

  <!-- portfolio item -->

  <a href="http://chromium.laborator.al/portfolio/santam/" target="_self">
    <img src="<?php echo $fouritem['img'];?>" alt="portfolio-thumb-1">	</a>

  <div class="four-item-info">
    <div class="saw_h"></div>
    <h3>
      <a href="<?php echo $fouritem['href'];?>"><?php echo $fouritem['title'];?></a>
    </h3>

    <span><p><?php echo $fouritem['desp'];?></p>
    </span>
  </div>
  <!-- end: portfolio item -->
</div>
<?php } ?>
