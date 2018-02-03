<?php
  if(!isset($_COOKIE['username']))
        {
          header("location: index.php");
          exit();
        }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Campus Portal</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
		
	<div="maindiv">
		<div id="head">
			<p>Welcome to Campus Portal</p>
		</div>
		<div id="right">
			<form name="f1" method="post" action="valid_password.php">
			<table id="table"><tr><td>
			<div align="center">
					<img src="images/demo/download.gif" width="100px" height="100px">
				</div>
				<div id="title">Log In Page<br>
				<input type="password" name="password" placeholder="Enter your Password" size="30" class="required" required name="password" id="password"><br>
				</div>
				<div id="button">
					<input type="submit" name="button" value="Next" >
				</div>
				<div id="msg">

				</div>
				<div>
					<a href="forgotpassword.php" style="color:#FFFFFF">Forgot password?</a>
				</div>

			</td></tr></table>
			</form>
		</div>
	</div>
</body>
</html>