<?php

include_once("config.php");

$sql = "SELECT DISTINCT category FROM posts";
$query_run = mysql_query($sql);

if(! $query_run)
{
	echo "Could not fetch data successfully".mysql_error();
} 
else
{
	echo "Fetched Data successfully";
}

while($row  = mysql_fetch_assoc($query_run))
{
	$category = $row['category'];

	echo "<br><strong><a href=display_category_posts.php?item=$category".">$category</strong>";

}