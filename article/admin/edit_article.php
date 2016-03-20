<?php 
	//判断这是修改的页面，不是发布文章的
	// if(!empty($_GET["action"]) && ($_GET["action"] == "edit")) {
		

	// }
	include_once("../conn.php");
	$id = $_GET["id"];
	$sql = "select * from article where id = $id";
	$result = mysql_query($sql);
	if(mysql_affected_rows()) {
		$row = mysql_fetch_assoc($result);
	}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>KindEditor PHP</title>
	<link rel="stylesheet" href="../kindeditor/themes/default/default.css" />
	<link rel="stylesheet" href="../kindeditor/plugins/code/prettify.css" />
	<script charset="utf-8" src="../kindeditor/kindeditor.js"></script>
	<script charset="utf-8" src="../kindeditor/lang/zh_CN.js"></script>
	<script charset="utf-8" src="../kindeditor/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content1"]', {
				cssPath : 'kindeditor/plugins/code/prettify.css',
				uploadJson : 'kindeditor/php/upload_json.php',
				fileManagerJson : 'kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	</script>
</head>
<body>
	<form name="example" method="post" action="update_article.php">
		<div>
			<input type="hidden" name="id" value=<?php echo $row["id"] ?>>
			<label>标题：<input type="text" name="title" value=<?php echo $row["title"] ?>>
			</label>
			<label>作者：
				<input type="text" name="author" value= <?php echo $row["author"] ?>>
			</label>
		</div>
		<div>
			<label>描述：
				<input type="text" name="description" value= <?php echo $row["description"] ?>>
			</label>
		</div>
		<textarea name="content1" style="width:700px;height:200px;visibility:hidden;"><?php echo $row["content"] ?></textarea>
		<br />
		<input type="submit" name="button" value="提交内容" /> (提交快捷键: Ctrl + Enter)
	</form>
</body>
</html>

