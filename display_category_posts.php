<?php

include_once("config.php");
$category = $_GET['item'];

$sql = "SELECT * FROM posts WHERE category = '$category' ";
$query_run = mysql_query($sql);

if (! $query_run)
{
	echo "Could not fetch data successfully".mysql_error();
}
else
{
	echo "Fetched Data Successfully";
}

echo "<br><h1 align='center'><u>Posts related to $category</u></h1>";

while($row = mysql_fetch_assoc($query_run))
{
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
			<h2 align='center'><u>".$title."</u></h2><br><div id='post_inner'>".$contents."</div><br><h4>Category : ".$category."</h4>Date Posted on :".$date."<input type='button' class='btn btn-default ' value='Edit Post' style='position:relative;left:50%;'><input type='button' class='btn btn-danger ' value='Delete Post' style='position:relative;left:53%;'></div>
		</body>
		</html>"
		;

	}

	?>