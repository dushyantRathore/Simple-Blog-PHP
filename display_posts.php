<?php

include_once("config.php");

$sql = "SELECT * FROM posts ORDER BY id DESC";
$query_run = mysql_query($sql);

if(! $query_run)
{
	echo "<br>Could not get data".mysql_error();
}
else
{
	echo "<br>Fetched Data successfully";
}

echo "<h1 align='center'><u>POSTS</u></h1>";

while($row = mysql_fetch_assoc($query_run))
{
	$id = $row['id'];
	$title  = $row['title'];
	$contents  = $row['contents'] ;
	$category = $row['category'];
	$date = $row['date_posted'];
	

	echo "
	<html>
	<head></head>
	<title>Posts</title>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js'></script>
	<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
	<link rel='stylesheet' type='text/css' href='display_posts.css'>
	<body>
		<br>
		<div id = 'post'>
			<h2 align='center'><u>".$title."</u></h2><br><div id='post_inner'>".$contents."</div><br><h4>Category : ".$category."</h4>Date Posted on :".$date."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=edit_post.php?title=$title&id=$id&category=$category>Edit Post</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href=delete_post.php?item=$id>Delete Post</a></div>
		</body>
		</html>"
		;

	}

	?>

