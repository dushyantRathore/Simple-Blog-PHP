<?php

function add_post($title, $content,$category)
{
$date = date("m/d/Y h:i:s ", time());

$sql = "INSERT INTO posts VALUES (NULL,'$title','$content', '$category', '$date')";
$query_run = mysql_query( $sql);

if(! $query_run ) 
{
echo "Could not add the post successfully";
}
else
{
echo "Post added successfully";
}

}

?>
