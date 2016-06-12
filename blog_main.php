<?php

include_once("config.php");

function add_post($title, $content,$category)
{
	$date = date("m/d/Y", time());
	$sql = "INSERT INTO posts VALUES (NULL,'$title','$content', '$category', '$date')";
	$query_run = mysql_query( $sql);
	if(! $query_run ) 
	{
		echo "Could not add the post successfully".mysql_error();
	}
	else
	{
		echo "Post added successfully";
	}
}

function update_post($id,$title, $content,$category)
{
	$sql = "UPDATE posts 
		SET title = '$title', contents='$content', catgeory='$category'
		WHERE id = $id ";
		$query_run=mysql_query($sql);
}


?>
