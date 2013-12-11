/**
--------------------------------
*	首页焦点图
*
--------------------------------
*/
var n=1;
function setDot(value){
	for(var i=1;i<5;i++){
	   if(value==i){
			document.getElementById("a"+value).className='cur';
			document.getElementById("dot"+value).className='cur';
		}else{
			document.getElementById("a"+i).className='nor';
			document.getElementById("dot"+i).className='nor';
		}
	}
}
function playPic(value){
	for(i=1;i<5;i++){
		if(i==value){
			document.getElementById("pc_"+value).style.display="block";
		}else{
			document.getElementById("pc_"+i).style.display="none";
		}
	}
}
function setNum(value){
	n=value;
	setDot(value);
	playPic(value);
}
function auto(){
	n++;
	if(n>4)n=1;
	setDot(n);
	playPic(n);
} 
function clearAuto(){
	clearInterval(autoStart)
}
function setAuto(){
	autoStart=setInterval("auto(n)", 3000)
}
function prev(){
	n--;
	if(n<1)n=4;
	setDot(n);
	playPic(n);
}
function next(){
	n++;
	if(n>4)n=1;
	setDot(n);
	playPic(n);
}
setAuto();

/*
--------------------------------
*	快速导航
*
--------------------------------
*/
$(document).ready(function(){
	$("a",".lmenu").hover(function(){
		$(".quick").show().hover(function(){
			$(this).show();
			$(".link",this).hover(function(){
				$(this).addClass("curr");
			},function(){
				$(this).removeClass("curr");
			});
		},function(){
			$(this).hide();
		});
	});
});


/*
 -------------------------------
 * 院系下的常用链接
 -------------------------------
*/
$(document).ready(function(){
	$("span",".clink").click(function() {
		$("ul",".clink").animate({height:"100px",speed:1000});
	});
});





