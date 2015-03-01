<?php
session_start(); // starts the current session
session_destroy();
header("location:index.php?msg=successfully Logged out");
?>
