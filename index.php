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
		<div id="right1">
				<h2 style="color:white;">Log In Page</h2 >
		</div>
		<div id="right">
			<form name="f1" action="valid.php" method="post">
			<table id="table"><tr><td>
				<div align="center">
					<a href="signup.php"><img src="images/demo/download.gif" width="100px" height="100px" /></a>
				</div>
				<!--<div id="type">
					<input type="text" name="txtbox1" placeholder="Enter your type" size="30"><br>
				</div>-->
				<div id="title">
					<input type="text" name="userenrollment" placeholder="Enter your enrollment number" size="30" class="required" required name="enrollment" id="enrollment"> 
					<br>
				</div>
				<div id="button">
					<input type="submit" name="submit" value="submit">
				</div>
				<div id="msg">
					
				</div>
				<!--<div id="block_password_signup" >
						<a href="forgotpassword.php">Forgot password?</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="signup.php">Sign Up</a>
				</div>-->
			</td></tr></table>
			</form>
		</div>
	</div>
</body>
</html>