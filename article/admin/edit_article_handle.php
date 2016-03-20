<?php
	include_once("../conn.php");
	$htmlData = '';
	//php函数延伸：http://www.nowamagic.net/librarys/veda/detail/1012
	//判断textarea是否为空
	if (!empty($_POST['content1'])) {
		//本函数取得 PHP 环境配置的变量 magic_quotes_gpc (GPC, Get/Post/Cookie) 值。返回 0 表示关闭本功能；返回 1 表示本功能打开。
		//当 magic_quotes_gpc 打开时，所有的 ' (单引号), " (双引号), (反斜线) and 空字符会自动转为含有反斜线的溢出字符。
		//其实这个函数就是判断PHP有没有自动调用addslashes 这个函数：
		if (get_magic_quotes_gpc()) {
			//stripslashes() 函数删除由 addslashes() 函数添加的反斜杠。该函数可用于清理从数据库中或者从 HTML 表单中取回的数据。
			$htmlData = stripslashes($_POST['content1']);
		} else {
			$htmlData = $_POST['content1'];
		}
	}
	$title = $_POST["title"];
	$author = $_POST["author"];
	$des = $_POST["description"];
	//date_default_timezone_set() 函数设置用在脚本中所有日期/时间函数的默认时区
	date_default_timezone_set("Asia/Shanghai");
	//设置时区
	echo date("Y-m-d H-i-s");
	// echo $htmlData;
	//插入语句
	$insertSql = "insert into article (id, title, author, date, description, content) values (null, '$title', '$author', '".date("Y-m-d H-i-s")."', '$des', '$htmlData')";
	echo $insertSql;
	//执行语句
	mysql_query($insertSql);
	if(mysql_insert_id()) {
		echo "插入成功";
	}

?>