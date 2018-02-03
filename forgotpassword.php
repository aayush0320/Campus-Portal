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
	<title>Online Campus Portal</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
		
	<div="maindiv">
		<div id="head">
			<p>Welcome to Campus Portal</p>
		</div>
		<div id="right">
			<form name="f1" action="valid_forgotpassword.php" method="post">
			<table id="table"><tr><td>
				<div align="center">
					<img src="images/demo/download.gif" width="100px" height="100px">
				</div>
				<div id="title">Forgot Password???<br>
					<input type="text" name="email" placeholder="Enter your email id" size="30"><br>
				</div>
				<div id="button">
					<input type="submit" name="submit" value="submit">
				</div>
				<div id="msg">

				</div>
				</td></tr></table>
			</form>
		</div>
	</div>
</body>
</html>