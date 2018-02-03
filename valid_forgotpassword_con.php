<?php
		$password=$_POST['password'];
		$con_password=$_POST['con_password'];

		if($password==$con_password)
		{ 
			$con=mysql_connect("localhost","root","");
			mysql_select_db("student_info",$con);
			$result=mysql_query($_COOKIE['query']);
			$row=mysql_fetch_array($result);
			mysql_query("update student set password='".SHA1($password)."' where enrollment='".$_COOKIE['username']."'");
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
		{?>
			<html>
			<body>
					<script type="text/javascript">
					 	var e=document.getElementById('msg');
					    alert("hello");
					</script>
			</body>
			</html>
	<?php
		}
?>