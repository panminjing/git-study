<?php 
	$url = " w.rdc.sae.sina.com.cn:3307 ";
	$root = "1205457431@qq.com";
	$pwd = "pmj5201314123";
	@mysql_connect($url, $root, $pwd) or die("数据库连接失败");

	header("Content-Type:text/html;charset=utf8");
	mysql_select_db("app_swiper");
	mysql_query("set names utf8");

?>