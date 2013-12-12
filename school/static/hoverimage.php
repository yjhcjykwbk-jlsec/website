<style>
.hoverimg-div{
  width:100%;
  text-align: center;
}
.hoverimg{
  -webkit-transform:scale(0.6);
  -moz-transform:scale(0.6);
  -o-transform:scale(0.6);
  float:left;
  margin-left:-30px;
  margin-right:-70px;
  margin-top:-10px;
  -webkit-transition-duration: 0.5s;
  -moz-transition-duration: 0.5s;
  -o-transition-duration: 0.5s;
  }
.hoverimg hoverimg{
    padding:10px;
    border:1px solid #fff;
}
.hoverimg:hover{
  -webkit-transform:scale(0.8);
  -webkit-box-shadow:0px 0px 30px #ccc;
  -moz-transform:scale(0.8);
  -moz-box-shadow:0px 0px 30px #ccc;	
  -o-transform:scale(0.8);
  -o-box-shadow:0px 0px 30px #ccc;	
}	 
.hoverimg .mask{
  width: 100%;
  background-color: rgb(0, 0, 0);
  position: absolute;
  height: 100%; 
  opacity:0.6;
  cursor:pointer;
  -webkit-transition-duration: 0.5s;
  -moz-transition-duration: 0.5s;
  -o-transition-duration:0.5s;
}
#hoverimg-1:hover .mask{
  height:0%;	
}
#hoverimg-2:hover .mask{
  height:0%;	
  margin-top:130px;
}
#hoverimg-4:hover .mask{
  margin-left:219px;
  margin-top:135px;
  height:0%;
  width:0%;
}
#hoverimg-3 #mask-1 {
  width:50%;
}
#hoverimg-3 #mask-2{
  width:50%;
  margin-left:211px;
}
#hoverimg-3:hover #mask-1{
  width:0%;
}
#hoverimg-3:hover #mask-2{
  margin-left:430px;
  width:0%;
}
#hoverimg-5:hover .mask{
  margin-left:219px;
  margin-top:135px;
  height:0%;
  width:0%;
  -webkit-transform: rotateX(360deg);
  -moz-transform: rotate(360deg);
  -o-transform: rotate(-360deg);
}
#hoverimg-6:hover .mask{
  margin-left:219px;
  margin-top:135px;
  height:0%;
  width:0%;
  -webkit-transform: rotateZ(750deg);
  -moz-transform: rotateZ(750deg);
  -o-transform: rotat(750deg);
}
</style>
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
