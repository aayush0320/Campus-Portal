<html>
<head>

<?php
	$name=$_POST['username'];
	$enrollment=$_POST['userenrollment'];
	$email = $_POST['useremail'];
	$phone=$_POST['userphone'];
	$password=$_POST['userpassword'];
	$type=$_POST['type'];

	$con=mysql_connect("localhost","root","");

	mysql_select_db("Student_info",$con);

	$result=mysql_query("SELECT enrollment from student WHERE enrollment='".$enrollment."'");

	$row=mysql_fetch_array($result);

	if($row["enrollment"]==$enrollment)
	{
		echo "user alredy registered.";
		mysql_close($con);
	}
	else
	{
		echo "hello";
		$con1=mysql_connect("localhost","root","");
		mysql_select_db("Student_info",$con1);
		mysql_query("INSERT INTO student (email, enrollment, password, phone_number, sname, type) VALUES ('".$email."', '".$enrollment
			."', '".SHA1($password)."', '".$phone."', '".$name."', '".$type."')");
		mysql_close($con1);
		header("location:index.php");
		exit();
	}
?>

</head>
</html>