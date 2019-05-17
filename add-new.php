<?php 
// start the session
session_start();

// force users to be logged
if(empty($_SESSION)) {
	header("Location: login.php?error=You've got to login first'");
	exit;
}

// get the user from the session
$user = $_SESSION['username'];
    
?>
<?php "partials/header.php" ?>

<div class="row">
	<div class="col-sm">
        <h1>Add New Post</h1>

		<form action="add-new-submit.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="image">Add image</label>
				<input type="file" class="form-control-file" id="image" name="image">
			</div>
			<div class="form-group">
				<label for="title">Add post title</label>
				<input type="text" class="form-control" id="title" name="title">
			</div>
			<div class="form-group">
				<label for="blog-post">Add blog post</label>
				<input type="text" class="form-control" id="blog-post" name="blog-post">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>

<?php include "partials/footer.php" ?>


