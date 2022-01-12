<!DOCTYPE html>
<?php
session_start();
include('config.php');
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Result Dashboard</title>
  <link rel="stylesheet" href="css/upload.css" type="text/css" />
  <style type="text/css">
    /*Sidebar*/
.sidebar{
  z-index: 1;
  top: 0;
  background: #2f323a;
  margin-top: 70px;
  padding-top: 30px;
  position: fixed;
  left: 0;
  width: 250px;
  height: 100%;
  transition: 0.5s;
  transition-property: left;
  overflow-y: auto;
}
.sidebar a{
  color: #fff;
  display: block;
  width: 100%;
  line-height: 60px;
  text-decoration: none;
  padding-left: 40px;
  box-sizing: border-box;
  transition: 0.5s;
  transition-property: background;
  border-bottom: 1px solid #ddd
}

.sidebar a:hover{
  background: #19B3D3;
}

.sidebar i{
  padding-right: 10px;
}

.outline{
  outline: none;
  display: block;
  border: solid 2px #0081D5;
  font-size: 18px;
  font-weight: 700;
  line-height: 1;
  padding: 20px 90px;
  border-radius: 0px;
  background: #fff;
  color: #0081D5;
  cursor: pointer;
  transition: all 0.3s linear;
  font-family: "Roboto", sans-serif;
}
.outline:hover,
.outline:focus{
  background: #0081D5;
  color: #fff;
}
.outline:active{
  background: #fff;
  color: #0081D5
}
.box {
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.item{
  padding: 10px;
  margin: 0px;
  border-radius: 0px; 
  box-shadow: 2px 2px 12px rgb(0,0,0,0.2), -1px -1px 8px rgb(0,0,0,0.2);
}
.bg-img{
  background: url('images/img2.jpg');
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
</body>
  <div class="box">
  <form method="POST" action="markset.php" >
      <div class="item">
        <button class="outline" name="mark" id="mark">RESULT</button>
      </div>
  </form>
  </div>
</html>