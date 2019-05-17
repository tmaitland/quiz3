<?php

// start the session
session_start();

// delete the user from the session
unset($_SESSION['user']);

// destroy the session
session_destroy();

// redirect to login
header("Location: login.php?error=You were logged out correctly");