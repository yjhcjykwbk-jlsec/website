<style>
.three-list {
overflow: hidden;
}
.three-list-item {
width: 33.3%;
height: 108px;
display: inline-block;
padding: 0;
background: inherit;
border: none;
float: left;
}
.three-list-item-box {
top: 20px;
position: relative;
margin: auto;
display: table;
}
.three-list-item-bg span {
font-size: 35px;
color: rgb(244,91,137);
}
.three-list-item-bg {
min-height: 100%;
text-align: center;
padding-top: 10px;
}
</style>
<div class="three-list">
<?php foreach ($threelistitems as $it=>$items){?>
<a  href="." class="three-list-item">
<div class="three-list-item-bg">
<div><span class="icon-phone"><img src="<?php echo $items['icon'];?>"></span></div>
<div class="three-list-item-box">
<div class="three-list-item-line">
<div class="three-list-item-title"><?php echo $items['title'];?></div>
</div>
</div>
</div>
</a>
<?php } ?>
</div>
