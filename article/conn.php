<?php 
	$url = "127.0.0.1:3306";
	$root = "root";
	$pwd = "";
	@mysql_connect($url, $root, $pwd) or die("数据库连接失败");

	header("Content-Type:text/html;charset=utf8");
	mysql_select_db("php_11");
	mysql_query("set names utf8");

?>