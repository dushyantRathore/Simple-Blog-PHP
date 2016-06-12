<?php

include_once("config.php");

$sql = "SELECT DISTINCT category FROM posts";
$query_run = mysql_query($sql);

if(! $query_run)
{
	echo "<br>Could not fetch data successfully".mysql_error();
} 
else
{
	echo "<br>Fetched Data successfully";
}

echo "<h1 align='center' style='color:white;'><u>Categories</u></h1>";


while($row  = mysql_fetch_assoc($query_run))
{
	$category = $row['category'];

	echo "
	<html>
	<head></head>
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js'></script>
	<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
	<link rel='stylesheet' type='text/css' href='display_categories.css'>
	<body>
		<ul class='ulstyle'>
			<li class='ulstyle_li'>
				<<br><strong><a href=display_category_posts.php?item=$category><h2><u>$category</u></h2></a></strong>
			</li>
		</ul>
</body>
</html>"
;

}

?>
