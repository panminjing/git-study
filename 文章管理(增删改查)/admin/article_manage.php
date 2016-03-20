<?php 
	include_once("../conn.php");
	$sql = "select * from article";
	$result = mysql_query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
		}
		td,th {
			border:1px solid #000;
			padding:10px 20px;
		}
	</style>
</head>
<body>

	<table id="articleTable">
		<caption>文章管理</caption>
		<tr>
			<th>文章ID</th>
			<th>文章标题</th>
			<th>文章修改</th>
			<th>文章删除</th>
		</tr>
		<?php 
			while($row = mysql_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td><a href='../article_details.php?id=".$row["id"]."'>".$row['title']."</a></td>";
				echo "<td><a href='edit_article.php?action=edit&id=".$row["id"]."'>修改</a></td>";
				echo "<td><a href='delete_article.php?id=".$row["id"]."' class='del-btn'>删除</a></td>";
				echo "</tr>";
			}
		?>
		<!-- <tr>
			<td>1</td>
			<td>
				title
			</td>
			<td>
				<a href="">修改</a>
			</td>
			<td>
				<a href="">删除</a>
			</td>
		</tr>
		<tr>
			<td>2</td>
			<td>
				title
			</td>
			<td>
				<a href="">修改</a>
			</td>
			<td>
				<a href="">删除</a>
			</td>
		</tr>
		<tr>
			<td>3</td>
			<td>
				title
			</td>
			<td>
				<a href="">修改</a>
			</td>
			<td>
				<a href="">删除</a>
			</td>
		</tr> -->
	</table>
	<script type="text/javascript" src="../jquery.min.js"></script>
	<script type="text/javascript">
		$(document).on("click", function() {

			 // if(confirm("你这么逗逼，你妈妈知道吗？")) {
			 // 	//返回一个布尔值
			 // 	console.log("知道");
			 // }else {
			 // 	console.log("不知道");
			 // }
			 // var str = prompt("请输入。。。");
			 // console.log(str);
			 
		})
		$(".del-btn").on("click", function(e) {
			if(!confirm("确定删除这篇文章吗?")) {
				e.preventDefault();
			}
		})
		
	</script>
</body>
</html>