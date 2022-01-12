<?php
session_start();

include('config.php');
include('check-login.php');
check_login();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Student dashbord</title>
	<link rel="stylesheet" type="text/css" href="css/dash.css">
  <link rel="stylesheet" href="css/upload.css" type="text/css" />

	<style type="text/css">
form{
  margin-top: 10px;
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  box-shadow: 2px 2px 12px rgb(0,0,0,0.2), -1px -1px 8px rgb(0,0,0,0.2);
  
}

.input {
  margin: 10px 0px 10px 0px;
}
.input label{
  display: block;
  text-align: left;
  margin: 3px;
}

.input input{
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #22242A;
  border: none;
  border-radius: 5px;
}
.bg-img{
  background: url('images/img.jpg');
  height: 100vh;
  background-size: cover;
  background-position: center;
}
</style>
</head>
<body class="bg-img">
  <!----header----->
	<header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Assignment <span>Monitoring </span>System</h3>
      </div>
      <div class="right_area">
        <a href="logout.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!----header----->

    <!--sidebar start-->
    <div class="sidebar">
      <a href="dashboard.php"><i class="fas fa-desktop"></i><span>Submit Assignment</span></a>
      <a href="view.php"><i class="fas fa-cogs"></i><span>Uploaded assignment</span></a>
      <a href="result.php"><i class="fas fa-table"></i><span>Result</span></a>
    </div>
    <!--sidebar end-->
    <!--submit-->
    <div class="content">
      <!--Table-->
    <div id="body">
      <br>
      <br>
      <br>
     </div>
 <form action="submit.php" method="post" enctype="multipart/form-data">
  <div class="input">
      <label>Student Name:</label>
     <input type="text" name="stname" placeholder="Full name..." required>
  </div>
  <div class="input">
    <label>Registration No:</label>
     <input type="text" name="regNo" placeholder="Registration number..." required>
  </div>
  <div class="input" style="margin-top: 5px;">
     <input type="file" required name="file" />
  </div>
  <div class="input">
     <button type="submit" name="stsubmit" class="btn">submit</button>
  </div>
 </form>
    <br /><br />
    <?php
 if(isset($_GET['success']))
 {
  ?>
        
        <?php
 }
 else if(isset($_GET['fail']))
 {
  ?>
        <label>Problem While File Uploading !</label>
        <?php
 }
 else
 {
  ?>
        <?php
 }
 ?>
</div>
      <!--submit-->

    
</body>
</html>