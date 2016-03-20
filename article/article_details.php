<?php 
	include_once("conn.php");
	$id = $_GET["id"];
	$sql = "select * from article where id = $id";
	$result= mysql_query($sql);

	if(mysql_affected_rows() > 0) {
		$row = mysql_fetch_assoc($result);
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文章标题</title>
	<style type="text/css">
		* {
			margin:0;
			padding:0;
		}
		#wrap {
			width:800px;
			margin:0 auto;
		}
		#wrap h1 {
			text-align: center;
		}
		.article-msg {
			text-align: right;
		}
	</style>
</head>
<body>
	<div id="wrap">
		
		<h1>
			<?php echo $row["title"] ?>
		</h1>
		<div class="article-msg">
			<span>作者： <?php echo $row["author"] ?>	</span>
			<span>发表时间： <?php echo $row["date"] ?></span>
		</div>
		<p>
			<?php echo $row["description"] ?>
		</p>
		<div id="content">
			<?php echo $row["content"] ?>
		</div>
	</div>
</body>
</html>