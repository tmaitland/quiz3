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
<body>
    <h1>Hello, <?= $user ?>!</h1>
    <div class="container">

    </div>
    <a href="add-new.php">add new post</a>
    <a href="logout.php">logout</a>

<?php "partials/footer.php" ?>