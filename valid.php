<?php
		$id=$_POST['userenrollment'];
			if($_COOKIE['username']==$id)
				{
					header("location: home.php");
					exit();
				}

		$con=mysql_connect("localhost","root","");

		mysql_select_db("student_info",$con);
		


		$result=mysql_query("SELECT enrollment from student WHERE enrollment='".$id."'");
		$row=mysql_fetch_array($result);

		if($row["enrollment"]==$id)
		{   
			//=========>>>>>COOKIE
			setcookie("query","SELECT * from student WHERE enrollment='".$id."'",time()+3600);
			setcookie("username",$id,time()+3600);
			setcookie("id",$id,time()+3600);
			header("location: password.php");
			exit();
		}
	else
		{
			header("location: index.html");
			exit();	
		}
?>
