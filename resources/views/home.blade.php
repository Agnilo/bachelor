<?php

?>
<!---------------------------START HTML----------------------------------->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!----------------------START EXTARNAL LINK------------------------------->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-3.2.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-3.2.0/dist/css/bootstraptheme.min.css">
<link rel="stylesheet" href="jquery-1.11.3.js">
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css
">
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/fontawesome.min.css" rel="stylesheet">
34
<!---------------------------END LINK------------------------------------->
<title>Online Employement Management System</title>
</head>
<body>
<!-------------------START HTML------------------------------------------->
<!---------------------START PAGE CONTAINER------------------------------->
<div class="container-fluid">
<!--------------------Top Navigation Bar--------------------------------->
<div class="navbar">
 <div class="navbar-inner" style="height:15px;" >
 <ul class="nav" >

 <li style="position:relative;bottom:15px;">

<b><H2>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nb
sp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nb
sp;


 ONLINE EMPLOYEE MANAGEMENT SYSTEM</H2></b></li>
 </li>
 </ul>

 </div>
</div>
<!-----------END Top Navigation Bar-------------------------------------->

<!------------------USER INFO NAVIGATION BAR----------------------------->
<div class="navbar">

 <div class="navbar-inner" style="position: relative; bottom:40px;">

 <ul class="nav">
 <a class="brand" href="#"><span class="glyphicon glyphicon-user"
style="color:blue;"></span></a>
 <li class="active"><a href="#"><?php echo "Hi, Mr.".$adminname;
?></a></li>
 <li><a href="#">Employee Code :<?php echo $employeecode; ?></a></li>
 <a class="brand" href="dashboard.php"><span class="glyphicon
glyphicon-home" style="color:green;"></span></a>
 <li><a href="#"><span class="glyphicon glyphicon-off"
style="color:red;"></a></li>

 <ul>
 </div>
</div>
<!-----------------------END OF USER INFO-------------------------------->
<!----------------------- START MAIN BODY-------------------------------->

<div class="row-fluid">

<!---------------START NAVIGATION---------------------------------------->
 <div class="span4">
 <div class="col-xs-10" style="background-color: gray; height:540px;
position:relative; bottom:60px;">

35
 <div class="panel-group" id="accordion" style="position:relative;
top:30px;">
 <div class="panel panel-default">
 <div class="panel-heading">
 <h4 class="panel-title">
 <a data-toggle="collapse" data-parent="#accordion"
href="#collapse1"><B>SYSTEM MANAGER</B></a>
 </h4>
 </div>
 <div id="collapse1" class="panel-collapse collapse in">
 <ul>
 <a href="adddepartment.php" style="text-decoration:none;
color:black;"><li>Department</li></a>
 <a href="adddesignation.php" style="text-decoration:none;
color:black;"><li>Designation</li></a>
 <a href="addjoblocation.php" style="text-decoration:none;
color:black;"><li>Location</li></a>
 <a href="adddegree.php" style="text-decoration:none;
color:black;"><li>Degree</li></a>
 <a href="addbank.php" style="text-decoration:none;
color:black;"><li>Bank</li></a>
 <a href="addshift.php" style="text-decoration:none;
color:black;"><li>Shift</li></a>
 <a href="addjoblevel.php" style="text-decoration:none;
color:black;"><li>Job Level</li></a>

 </ul>
 </div>
 </div>
 <div class="panel panel-default">
 <div class="panel-heading">
 <h4 class="panel-title">
 <a data-toggle="collapse" data-parent="#accordion"
href="#collapse2"><B>EMPLOYEE MANAGEMENT</B></a>
 </h4>
 </div>
 <div id="collapse2" class="panel-collapse collapse">
 <ul>
 <a href="addemployeeinfo.php" style="text-decoration:none;
color:black;"><li>Add Employe</li></a>
 <a href="transfer.php" style="text-decoration:none;
color:black;"><li>Transfer</li></a>
 <a href="resignation.php" style="text-decoration:none;
color:black;"><li>Resignation</li></a>
 <a href="promotion.php" style="text-decoration:none;
color:black;"><li>Promotion</li></a>
 </ul>
 </div>
 </div>
 <div class="panel panel-default">
 <div class="panel-heading">
 <h4 class="panel-title">
 <a data-toggle="collapse" data-parent="#accordion"
href="#collapse3"><B>ATTENDANCE MANAGEMENT</B></a>
 </h4>
 </div>
 <div id="collapse3" class="panel-collapse collapse">
 <ul>
 <a href="dailyattendance.php" style="text-decoration:none;
color:black;"><li>Add Attendance</li></a>
36
 <a href="uploadattendance.php" style="text-decoration:none;
color:black;"><li>Upload Attendance</li></a>
 </ul>
 </div>
 </div>
<div class="panel panel-default">
 <div class="panel-heading">
 <h4 class="panel-title">
 <a data-toggle="collapse" data-parent="#accordion"
href="#collapse4"><B>LEAVE MANAGEMENT</B></a>
 </h4>
 </div>
 <div id="collapse4" class="panel-collapse collapse">
 <ul>
 <a href="leaveadminpanel.php" style="text-decoration:none;
color:black;"><li>Leave Settings</li></a>
 <a href="loginpage.php" style="text-decoration:none;
color:black;"><li>Leave Apply</li></a>

 </ul>
 </div>
 </div>
<div class="panel panel-default">
 <div class="panel-heading">
 <h4 class="panel-title">
 <a data-toggle="collapse" data-parent="#accordion"
href="#collapse5"><B>REPORTS</B></a>
 </h4>
 </div>
 <div id="collapse5" class="panel-collapse collapse">
 <ul>
 <a href="#" style="text-decoration:none; color:black;"><li>Employe
List</li></a>
 <a href="#" style="text-decoration:none; color:black;"><li>Daily
Attendace Report</li></a>
 <a href="#" style="text-decoration:none;
color:black;"><li>Leave Report</li></a>
 <ul>
 </div>
 </div>
 </div>
 </div>

 </div>
 <!----------------------END NAVIGATION---------------------------------->

 <!-----------------------START BODY------------------------------------->
 <div class="span5">
 <div class="col-xs-14" style="background-image:url('peopleicon.jpg');
background-repeat: no-repeat; height:540px; position: relative; bottom:
60px;">

 </div>
 </div>
 <!--------------------END BODY------------------------------------------>

<div class="span3" style="position:relative; bottom:60px;">
 <!------------------------------START CALENDER-------------------------->

37
 <iframe
src="https://calendar.google.com/calendar/embed?src=76qninj8g47ui49of3vp3b7
8gs%40group.calendar.google.com&ctz=Asia%2FDhaka" style="border: 0"
width="300" height="300" frameborder="0" scrolling="no" ></iframe>
 <!-----------------END CALENDER---------------------------------------->

 <!---------------------START MASSAGE---------------------------------->

 <!---------------------------END MESSAGE------------------------------->
 </div>
</div>

</div>
<!------------------------------END PAGE CONTAINER------------------------>
</body>
</html>
<!-------------------------END HTML---------------------------------------> 