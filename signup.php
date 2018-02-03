<!DOCTYPE html>
<html>
<head>
	<title>Campus Portal</title>
	<link rel="stylesheet" type="text/css" href="mainsignup.css">
	
</head>
<body>
<div id="mainbody">
<div id="maindiv">
	<div id="header">
		<p style="color:white;">Sign Up Page</p>	
	</div>
	<div id="maintable">
	<form name="f1" action="valid_signup.php" method="post">
		<table>
			<tr id="row">
				<td> Name </td>
				<td>
				<input type="text" placeholder="Username" name="username" size="30" class="required" required name="firstname" id="firstname"></td>
			</tr>

			<tr id="row">
				<td> Enrollment No<span style="color:red">*</span> </td>
				<td> <input type="text" placeholder="Enrollment-No" name="userenrollment" size="30" class="required" required name="enrollment" id="enrollment"></td>
			</tr>

			<tr id="row">
				<td> E-mail </td>
				<td> <input type="text" placeholder="Email-id" name="useremail" size="30" class="required" required name="email-id" id="email-id"></td>
			</tr>

			<tr id="row">
				<td> Phone Number </td>
				<td> <input type="text" placeholder="Phone.No" name="userphone" size="30"></td> 
			</tr>

			
			<tr id="row">
				<td> Type <span style="color:red">*</span> </td>
				<td> <input type="password" size="30" placeholder="Faculty/Student" name="type" class="required" required name="cpassword" id="cpassword"></td>
			</tr>
			
			<tr id="row">
				<td> Password<span style="color:red">*</span> </td>
				<td> <input type="password" size="30" placeholder="Password"name="userpassword" class="required" required name="password" id="password"></td>
			</tr>

			<tr id="row">
				<td> Confirm Password<span style="color:red">*</span> </td>
				<td> <input type="password" size="30" placeholder="Re-type Password" name="ucpsw" class="required" required name="cpassword" id="cpassword"></td>
			</tr>

			<tr id="row">
				<td style="float:right; padding-top:20px;"> <input type="reset" name="resetbutton" value="Reset"></td>
				<td style="padding-left:50px; padding-top:20px;"> <input type="submit" name="submitbutton" value="Submit"></td>
			</tr>
		</table>
		</form>
	</div>
</div>	
</div	
></body>
</html>