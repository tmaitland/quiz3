<?php

$error = isset($_GET['error']) ? $_GET['error'] : "";

?>

<?php "partials/header.php" ?>
<body>
	<!-- show error if any -->
	<?php if ($error) { ?>
		<div class="error"><?= $error ?></div>
	<?php } ?>

	<!-- form -->
	<h1>Log In to your Blog</h1>
	<form action="login-submit.php" method="post">
		<input type="text" name="username"><br>
		<input type="password" name="password"><br>
		<button type="submit">Log In</button>
	</form>
</body>
</html>