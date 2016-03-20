var turnplate={
		restaraunts:[],				//大转盘奖品名称
		colors:[],					//大转盘奖品区块对应背景颜色
		outsideRadius:200,			//大转盘外圆的半径
		textRadius:155,				//大转盘奖品位置距离圆心的距离
		insideRadius:12,			//大转盘内圆的半径
		startAngle:0,				//开始角度
		bRotate:false				//false:停止;ture:旋转
};

$(document).ready(function(){
	//动态添加大转盘的奖品与奖品区域背景颜色
	turnplate.restaraunts = ["谢谢", "谢谢", "三等奖", "谢谢", "二等奖", "谢谢", "谢谢", "二等奖", "三等奖", "谢谢", "三等奖", "一等奖"];
	turnplate.colors = ["#a71f24", "#d71318","#a71f24", "#d71318","#a71f24", "#d71318","#a71f24", "#d71318","#a71f24", "#d71318","#a71f24", "#d71318"];

	
	var rotateTimeOut = function (){
		$('#wheelcanvas').rotate({
			angle:0,
			animateTo:2160,
			duration:8000,
			callback:function (){
				alert('网络超时，请检查您的网络设置！');
			}
		});
	};

	//旋转转盘 item:奖品位置; txt：提示语;
	var rotateFn = function (item, txt){
		var angles = item * (360 / turnplate.restaraunts.length) - (360 / (turnplate.restaraunts.length*2));
		if(angles<270){
			angles = 270 - angles; 
		}else{
			angles = 360 - angles + 270;
		}
		$('#wheelcanvas').stopRotate();
		$('#wheelcanvas').rotate({
			angle:0,
			animateTo:angles+1800,
			duration:8000,
			callback:function (){
				// $("#pointer").show();
				// alert(txt);
				turnplate.bRotate = !turnplate.bRotate;
				succFn(txt);//抽奖之后函数

			}
		});
	};

	//点击开始抽奖
	$('#page9 #start').click(function (){
		// if(is_weixin()) {
		// 	$("#pointer").hide();
		// }
		if(turnplate.bRotate)return;
		turnplate.bRotate = !turnplate.bRotate;
		//获取随机数(奖品个数范围内)
		var item = rnd(1,turnplate.restaraunts.length);
		//此处item使用ajax后台传送过来
		// $.ajax()

		//奖品数量等于10,指针落在对应奖品区域的中心角度[252, 216, 180, 144, 108, 72, 36, 360, 324, 288]
		rotateFn(item, turnplate.restaraunts[item-1]);
		console.log(item);
	});
});

function rnd(n, m){
	var random = Math.floor(Math.random()*(m-n+1)+n);
	return random;
	
}
//判断安卓下的微信浏览器或qq浏览器
function is_weixin(){
	var ua = navigator.userAgent.toLowerCase();
	if(ua.indexOf("android") > 0 && (ua.indexOf("micromessenger") > 0 || ua.indexOf("qqbrowser") > 0)) {
		return true;
 	} else {
		return false;
	}
}
//页面所有元素加载完毕后执行drawRouletteWheel()方法对转盘进行渲染
window.onload=function(){
	drawRouletteWheel();
};

window.onresize = function() {
	$(".banner .turnplate").height($(".banner .turnplate").width());//转盘高度等于宽度
}

function drawRouletteWheel() {    
  var canvas = document.getElementById("wheelcanvas");    
  if (canvas.getContext) {
	  //根据奖品个数计算圆周角度
	  var arc = Math.PI / (turnplate.restaraunts.length/2);
	  var ctx = canvas.getContext("2d");
	  //在给定矩形内清空一个矩形
	  ctx.clearRect(0,0,422,422);
	  //strokeStyle 属性设置或返回用于笔触的颜色、渐变或模式  
	  // ctx.strokeStyle = "#FFBE04";
	  //font 属性设置或返回画布上文本内容的当前字体属性
	  // ctx.font = '16px Microsoft YaHei';      
	  // for(var i = 0; i < turnplate.restaraunts.length; i++) {       
		 //  var angle = turnplate.startAngle + i * arc;
		 //  ctx.fillStyle = turnplate.colors[i];
		 //  ctx.beginPath();
		 //  //arc(x,y,r,起始角,结束角,绘制方向) 方法创建弧/曲线（用于创建圆或部分圆）    
		 //  ctx.arc(211, 211, turnplate.outsideRadius, angle, angle + arc, false);    
		 //  ctx.arc(211, 211, turnplate.insideRadius, angle + arc, angle, true);
		 //  ctx.stroke();  
		 //  ctx.fill();
		 //  //锁画布(为了保存之前的画布状态)
		 //  ctx.save();   
		  
		 //  //----绘制奖品开始----
		 //  ctx.fillStyle = "#fff";
		 //  var text = turnplate.restaraunts[i];
		 //  //translate方法重新映射画布上的 (0,0) 位置
		 //  ctx.translate(211 + Math.cos(angle + arc / 2) * turnplate.textRadius, 211 + Math.sin(angle + arc / 2) * turnplate.textRadius);
		  
		 //  //rotate方法旋转当前的绘图
		 //  ctx.rotate(angle + arc / 2 + Math.PI / 2);
		  
		  
		 //  //在画布上绘制填色的文本。文本的默认颜色是黑色
		 //  //measureText()方法返回包含一个对象，该对象包含以像素计的指定字体宽度
		 //  ctx.fillText(text, -ctx.measureText(text).width / 2, 0);
		 //  //把当前画布返回（调整）到上一个save()状态之前 
		 //  ctx.restore();
		 //  //----绘制奖品结束----
	  // }     
	  var img= document.getElementById("turnplatePic");
	  img.onload=function(){  
		  ctx.drawImage(img,0,0);      
	  }; 
	  ctx.drawImage(img,0,0);  
  } 
}

function succFn(prize){
	$(".page").hide();
	$("#page10").show();
	switch(prize) {
		case "谢谢":
			break;
		case "三等奖":
			$("#awardBox").show();
			$("#shareBox").hide();
			$("#awardBox .section-1 img").attr("src","img/prize03.png");
			break;
		case "二等奖":
			$("#awardBox").show();
			$("#shareBox").hide();
			$("#awardBox .section-1 img").attr("src","img/prize02.png");
			break;
		case "一等奖":
			$("#awardBox").show();
			$("#shareBox").hide();
			$("#awardBox .section-1 img").attr("src","img/prize01.png");
			break;
	}
}