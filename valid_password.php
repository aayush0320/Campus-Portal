<?php

		$password=$_POST['password'];

		$con=mysql_connect("localhost","root","");

		mysql_select_db("Student_Info",$con);

		$result=mysql_query($_COOKIE['query']);
		$row=mysql_fetch_array($result);

		if($row["password"]==SHA1($password))
		{
			if($row["type"]=="student")
				{
					header("location: student_home.php");
					exit();
				}
			else
				{	
					header("location: home.php");
					exit();
				}
		}
		else
		{
			header("location: password.php");
			exit();	
		}

		/*if(mysql_query("select * from student where password=".$psw.""))
		{
			header("location: first.html");
			exit();
		}
		else
		{
			header("location: password.html");
			exit();
		}*/
	?>