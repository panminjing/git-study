<?php
	include_once("../conn.php");
	$htmlData = '';
	if (!empty($_POST['content1'])) {
		if (get_magic_quotes_gpc()) {
			$htmlData = stripslashes($_POST['content1']);
		} else {
			$htmlData = $_POST['content1'];
		}
	}
	$id = $_POST["id"];
	$title = $_POST["title"];
	$author = $_POST["author"];
	$des = $_POST["description"];
	date_default_timezone_set("Asia/Shanghai");
	//设置时区
	echo date("Y-m-d H-i-s");
	// echo $htmlData;
	//插入语句
	// $insertSql = "insert into article (id, title, author, date, description, content) values (null, '$title', '$author', '".date("Y-m-d H-i-s")."', '$des', '$htmlData')";
	//更新语句
	$updateSql = "UPDATE `article` SET `title`='$title',`author`='$author',`date`='".date("Y-m-d H-i-s")."',`description`='$des',`content`='$htmlData' WHERE id = $id";
	// echo $insertSql;
	//执行语句
	mysql_query($updateSql);
	if(mysql_affected_rows()) {
		echo "更新成功";
	}

?>