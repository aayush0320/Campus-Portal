<?php
	
	$con=mysql_connect("localhost","root","");
	mysql_select_db("student_info",$con);

	$result=mysql_query($_COOKIE['query']);	

	$row=mysql_fetch_array($result);

	if($row['email']==$_POST['email'])
	{
		header("location:forgotpassword_con.php");
		exit();
	}
	else
	{
		echo "same";	
	}
?>