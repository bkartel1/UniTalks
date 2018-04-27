<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['Username']) || empty($_SESSION['Username'])){
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php require "head.php";?>
</head>
<body onresize="stickyfooter()">
<?php require "header.php";?>
<div class="wrapper">
<div class="chats">
<nav class="chatList">
	<?php require "available_chats.php"?>
	</nav>
</div>
<div class="container-chats">
	<main>
		<?php echo $_SERVER['REQUEST_URI'] ?>
	<p>JAVA PROGRAM HERE</p>
	</main>
</div>
<?php require "settings.php";?>
</div>
<?php require "scripts.php";?>
</body>
</html>