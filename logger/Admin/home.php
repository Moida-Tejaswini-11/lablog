<?php
include("../configASL.php");
include('update.php');
LabStatus($al);


session_start();

$aid = $_SESSION['aid'];
$sql = "SELECT * FROM `admin` WHERE `aid`='$aid';";
$res1 = mysqli_query($al, $sql);
if(!mysqli_num_rows($res1) > 0) {
    header("location: ../logout.php");
    exit; 

}  

?>
<!doctype html>
<html>
<head>
<title>Dashboard</title>
<link href="admin.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="sty.css">

</head>

<body>
	
    <nav>
         <label class="logo">Admin Panel</label>
         <ul>
            <li><a class="active" href="home.php">Home</a></li>
            <li>
               <a href="search.php">Search
               <i class="fas fa-caret-down"></i>
               </a>
            
            </li>
            <li>
               <a href="tech.php">Assign Lab
               <i class="fas fa-caret-down"></i>
               </a>
            
            </li>
            <li>
               <a href="#">student view
               <i class="fas fa-caret-down"></i>
               </a>
               <ul>
                  <li style="width:100%;" ><a href="reg.php">Add Student</a></li>
                  <li><a href="viewst.php">Students</a></li>
                
               </ul>
            </li>
            <li><a href="feedback.php">Feedback</a></li>
<li>
               <a href="#">settings
               <i class="fas fa-caret-down"></i>
               </a>
               <ul>
                  <li><a href="editadmin.php?id=addFaculty">Add Faculty</a></li>
                    <li><a href="editadmin.php?id=changePassword">Change Password</a></li>
               </ul>
            <li><a href="exit1.php">Logout</a></li>
         </ul>
      </nav>
<br>
<br>
<br>
      <div class="wrapper">
    <div class="static-txt">Hello,</div>
</div><div class ="wrapper1">
    <ul class="dynamic-txts">
      <li><span>Admin</span></li>
    <li><span>I Can Manage lab</span></li>
      <li><span> Admin</span></li>
 <li><span>Can Manage lab</span></li>
      <li><span> Admin</span></li>
 <li><span>Can Manage lab</span></li>
      <li><span> Admin</span></li>
      <li><span> Admin</span></li>
      <li><span> Admin</span></li>
    </ul>

  </div>
<br>
<br>
<p >Digital lab log book will help you to access & analyze data instantly,save time,and achieve better security</p>
<p class="p1">This log book enables easy data collection & approval via user friendly interface</p>

<p >This is a page of admin we can search the lab logs here.</p>
<p class="p1">we can register students to lab and manage them.</p>
<p >we can track all the lab records.</p>

</body>
</html>