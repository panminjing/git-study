<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<ol>	
		<!-- <li><a href=""></a></li> -->
		<?php 
			include_once("conn.php");
			$sql = "select * from article order by `id` desc";
			$result = mysql_query($sql);
			while($row = mysql_fetch_assoc($result)) {
				echo "<li><a href='article_details.php?id=".$row["id"]."'>";
				echo $row["title"];
				echo "</a></li>";
			}

		?>
	</ol>
</body>
</html>