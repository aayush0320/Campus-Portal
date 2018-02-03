<html>
<head>   
<link href="calendar/calendar.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php
include 'calendar/calendar.php';
 
$calendar = new Calendar();
 
echo $calendar->show();
?>
</body>
</html>
