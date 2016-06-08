<?php

include_once("config.php");


if(isset($_POST['post_title'], $_POST['post_content'], $_POST['post_category']))
{
$title = trim($_POST['post_title']);
$content = ($_POST['content']);
$category = trim($_POST['post_category']);

if(empty($title))
{
echo "Title Cannot be empty";
}
else if (strlen($title) >255)
{
echo "The Title Length cannot be greater than 255 characters";
}
else if(empty($content))
{
echo "Please enter some content";
}
else if (empty($category))
{
echo "Please add a category to the post";
}
else if(!empty($title) && !empty($content) && !empty($category))
{
add_post($title,$content,$category);
}
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Add Post</title>
</head>
<body>
<h1><u>Add Post</u></h1>
<form action = "add_post.php" method="post">
<label>Title</label>
<br>
<input type = "text" name = "post_title">
<br>
<label>Content</label>
<br>
<textarea name = "content" rows="8" cols="50"></textarea>
<br>
<label>Category</label>
<br>
<input type="text" name= "post_category">
<br>
<br>
<input type="submit" name ="add" value ="Add Post">
</form>
</body>
</html>