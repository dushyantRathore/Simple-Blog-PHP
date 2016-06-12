<?php 

include_once("blog_main.php");

//$date = date("m/d/Y h:i:s ", time());
//echo $title."<br>".$content."<br>".$category."<br>".$date;

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
		add_post($title,$content,$category);
	}
}


?>
