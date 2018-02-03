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
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js" type="text/javascript"></script>
 <script src="http://designshack.net/tutorialexamples/ScrollLinks/jquery.localscroll.js" type="text/javascript"></script> 
<script src="http://designshack.net/tutorialexamples/ScrollLinks/jquery.scrollTo.js" type="text/javascript"></script> 
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="layout/scripts/contact_us.js"></script>
<script src="layout/scripts/news_activites.js"></script>
<script src="layout/scripts/student_corner.js"></script>
<script src="toggle.js"></script>
<script language="javascript"> 
function toggle() {
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("displayText");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "Advance Java";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "Advance Java";
	}
} 
</script>
 


 

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div>
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="#">Campus Portal</a></h1>
      <i class="fa fa-map-o"></i>
      <!--<p>An investment in knowledge pays the best interest.</p>-->
    </div>
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
       
        <li><a href="#">Pages</a>
          <ul>
             <li><a href="assignment.php">Assignment</a></li>
            <li><a href="questionbank.php">Question Bank</a></li>
            <li><a href="notices.php">Extra Notices</a></li>
            <li><a href="studymaterial.php">Study Material</a></li>
            <li><a href="examschedule.php">Exam Schedule</a></li>
            <li><a href="attendance.php">Attendance</a></li>
        </ul>
		</li>
		 <li class="active"><a href="#">Upload</a>
		 <ul>
		 <li><a href="assignment_f1.php">Advance Java</a></li>
		 <li><a href="assignment_f1.php">Data Structure</a></li>
		 <li><a href="assignment_f1.php">C++</a></li>
		 <li><a href="assignment_f1.php">Database Management</a></li>
		 </ul>
		 </li>
		 <li class="active"><a href="#">View</a>
		  <ul>
		 <li><a href="assignment_fileview.php">Advance Java</a></li>
		 <li><a href="assignment_fileview.php">Data Structure</a></li>
		 <li><a href="assignment_fileview.php">C++</a></li>
		 <li><a href="assignment_fileview.php">Database Management</a></li>
		 </ul>
		 </li>
     <li class="active"><a href=""><?php echo $_COOKIE['username']?><i class="fa fa-caret-down fa-fw"></i></a>
     <ul>
		 <li><a href="home.php"><div class="menu-icon"><i class=" fa fa-home"></i></div>  <div class="menu-text">Back to home</div></a></li>             
         <li> <a href="logout.php"> <div class="menu-icon"><i class=" fa fa-sign-out"></i></div>  <div class="menu-text">Sign Out</div> </a></li>        </li>       
     </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
  <div class="wrapper row0 bgded" style="background-image:url('images/demo/backgrounds/milky_way.jpg');"-->
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <div class="overlay inspace-30 btmspace-30">
        <p class="font-xs nospace"></p>
        <h2 class="heading">Assignment</h2>
        <p><h3>Learn. Interact. Connect.</h3>
		Assignments are tasks requiring student engagement and a final tangible product that enables you to assess what your students know and don’t know. They represent on of the most common ways to assess learning.  They can be either formative assessment or summative assessment, so the number and type of assignments will depend upon your course design, learning outcomes, and course enrollment numbers.<br><br>
		
		</p>
      </div>
      <footer>
        <ul class="nospace inline pushright">
        <!--  <li><a class="btn inverse" href="#">Consequat</a></li>
          <li><a class="btn" href="#">Scelerisque</a></li> -->
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
  <div class="wrapper coloured"><a name="subject"></a>
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h1 class="font-x3" style="color:#FFFFFF">Subjects</h1>
      <p class="nospace">Place where you can get the assignments subjects wise</p>
    </div>
 <div class="group">
      <div class="one_third first">
	  <h6 class="title"><a id="displayText" name="ajava"  href="#">Advance Java</a></h6>
	  <div id="toggleText" style="display: none" style="font-size:12px">
	  <h3><a href="javascript:toggle();"></a></h3>
	 <!-- <h3>Java Server Page</h3>
	  <h3>Spring</h3>
	  <h3>Hibernate</h3>
	  <h3>JDBC</h3> -->
	  </div> 
	  <h6 class="title"><a name="ds"><a href="#">Data Structure</a></a></h6>
	  <h6 class="title"><a name="c++"><a href="#">C++</a></a></h6>
	  <h6 class="title"><a name="dbms"><a href="#">Database Management</a></a></h6>
	  </div>
</div>
<!--<a id="displayText" href="javascript:toggle();">Advance Java</a> 
<div id="toggleText" style="display: none"><h1>peek-a-boo</h1></div> -->


 
</div>
</div>


<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<script src="layout/scripts/jquery.backtotop.js"></script>
</body>
</html>

