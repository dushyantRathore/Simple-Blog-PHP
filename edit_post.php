<?php 

//$date = date("m/d/Y h:i:s ", time());
//echo $title."<br>".$content."<br>".$category."<br>".$date;

include_once("blog_main.php");

$idd = $_GET['id'];
echo $idd;

if(isset($_POST['title'], $_POST['content'], $_POST['category']))
{

	$title = $_POST['title'];
	$content = $_POST['content'];
	$category = $_POST['category'];

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
		update_post($_GET['id'],$title,$content,$category);
	}
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit Post</title>
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="add_post.css">

<body>
	<h1 align="center"><u>Edit Your Post</u></h1>
	<div class="container">
		<form role="form" action="edit_post.php" method="post">
			<div class="form-group">
				<label for="usr">Title</label>
				<input type="text" name="title" class="form-control" id = "usr">
			</div>
			<div class="form-group">
				<label for="comment">Content</label>
				<textarea class="form-control" rows="15" id="comment" name="content"></textarea>
			</div>
			<div class="form-group">
				<label for ="usr">Category</label>
				<input type="text" name="category" id = "usr" class="form-control">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</body>
	</html>