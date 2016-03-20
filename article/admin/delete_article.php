<?php 
	include_once("../conn.php");
	$id = $_GET["id"];
	$sql = "delete from article where id = $id";
	mysql_query($sql);
	if(mysql_affected_rows()) {
		echo "删除成功";
	}
?>