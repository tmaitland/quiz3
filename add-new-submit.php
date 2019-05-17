<?php
include 'Database.php';
// get params from post
$title = $_POST["title"];

// get user from the session
$userid = "1"; // @TODO load from session

// upload the image
$ext = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
$filename = md5(rand() . $title . date("l jS \of F Y h:i:s A") . ".$ext");
copy($_FILES["image"]["tmp_name"], "images/$filename");

$content = $_POST["blog-post"];

// insert into the database
$db->query("
	INSERT INTO blog_posts (userid, title, content, image) 
	VALUES ('$userid', '$title', '$content', '$filename')");

// redirect to list
header("Location: blog.php");