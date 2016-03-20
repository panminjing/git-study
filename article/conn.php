<?php 
	// $url = " w.rdc.sae.sina.com.cn:3307 ";
	// $root = "1205457431@qq.com";
	// $pwd = "pmj5201314123";
	@mysql_connect(SAE_MYSQL_HOST_M .':'. SAE_MYSQL_PORT, SAE_MYSQL_USER, SAE_MYSQL_PASS) or die("数据库连接失败");

	header("Content-Type:text/html;charset=utf8");
	mysql_select_db(SAE_MYSQL_DB);
	mysql_query("set names utf8");

?>