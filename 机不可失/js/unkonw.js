var second_img = document.getElementById("second_img");
var title = document.getElementById("title");
var bottom = document.getElementById("bottom");
var timebar = document.getElementById("timebar");
var count = document.getElementById("count");
var start = 0;
var count_start = count.offsetLeft;
var count_end = 200;
var count_change = count_end - count_start;
var end = title.offsetWidth;
var end1 = timebar.offsetWidth;
var change1 = end1 - start;
var change = end - start;
var t = 0;
var naxt = 112;
var maxT =30;
var score = 0;
clearInterval(time);
var time = setInterval(function(){
	t++;
	second_img.style.display = "none";
	if(t >= maxT){
		clearInterval(time);
		second_img.style.display = "block";
		second_img.className = "animated bounceInUp";
	}
	title.style.width = Tween.Quint.easeInOut(t,start,change,maxT) + "px";
	
},80)
//进度条	
clearInterval(time1);
var timebarImg = document.getElementById("timebarImg");
var ricle_st = timebarImg.offsetLeft;
var ricle_en = 100;
var ricle_ch = ricle_en - ricle_st;
var rot_st = 0;
var rot_end = 360;
var time1 = setInterval(function(){
	score++;
	t++;
	
	
	if(t >= naxt){
		clearInterval(time1);
		timebar.style.display = "none";
		bottom.style.display = "none";
		timebarImg.style.display = "none";
		mySwiper.swipeNext();
	}
	count.innerHTML = score +"%";
	count.style.left = count_change/naxt*t+count_start + "px";
	timebar.style.width = change1/naxt*t + start + "px";
	timebarImg.style.left = ricle_ch/naxt*t+ricle_st + "%";
	timebarImg.style.webkitTransform = "rotate("+((rot_end-rot_st)*t/naxt + rot_st )+"deg)";
},50)

var activity = document.getElementById("activity");
var windo = document.getElementById("windo");
var th_btu = document.getElementById("th_btu");
var ret = document.getElementById("return");
var four_btu = document.getElementById("four_btu");
var next_btu = document.getElementById("next_btu");
var ji_btu = document.getElementById("ji_btu");
activity.onclick = function(){
	windo.style.display = "block";
	th_btu.className="";
}
ret.onclick = function(){
	windo.style.display = "none";
	th_btu.className="animated pulse infinite";
}
th_btu.onclick = function(){
	mySwiper.swipeNext();
}
four_btu.onclick = function(){
	mySwiper.swipeNext();
}
next_btu.onclick = function(){
	mySwiper.swipeNext();
}
ji_btu.onclick = function(){
	mySwiper.swipeNext();
}

 
var pan =document.getElementById("pan");
			var start_btu = document.getElementById("start_btu");
			var start_pan = 0;
			var end_pan = rand(360,720);
			var change_pan = end_pan - start_pan;
			var t_pan=0;
			var maxt_pan =30;
			var time_pan = 0;
			function rand(min,max){
				return parseInt( Math.random(max-min+1)*min);
			}
			var jiang1 = document.getElementById("jiang1");
			var jiang2 = document.getElementById("jiang2");
			var jiang3 = document.getElementById("jiang3");
			var han = document.getElementById("han");
			function tab(){
				time_pan = setInterval(function(){
					t_pan++;
					if(t_pan >= maxt_pan){
						clearInterval(time_pan);
						console.log(end_pan);
						switch(true) {
							case (end_pan<320&&end_pan>290):
								jiang1.style.display = "block";
								break;
							case (end_pan>50&&end_pan<80)||(end_pan>140 && end_pan<170):
								jiang2.style.display = "block";
								break;
							case (end_pan>20 && end_pan<50) || (end_pan>200 && end_pan<230) || (end>320 && end<350):
								jiang3.style.display = "block";
								break;
							default: han.style.display = "block";	
						}
					}
					pan.style.webkitTransform = "rotate("+(change_pan*t_pan/maxt_pan + start_pan )+"deg)";
			
				},50)
			}
			
			start_btu.onclick = function(){
				tab();
			}