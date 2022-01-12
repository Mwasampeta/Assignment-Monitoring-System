
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Lecturer dashboard</title>
<link rel="stylesheet" href="css/upload.css" type="text/css" />
<style type="text/css">

form{
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
.dis {
  display: flex;
  justify-content: center;
}
.bg-img{
  background: url('images/img2.jpg');
  height: 100vh;
  background-size: cover;
  background-position: center;
}

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
      <a href="uploadlct.php"><i class="fas fa-desktop"></i><span>Upload Assignment</span></a>
      <a href="admindash.php"><i class="fas fa-cogs"></i><span>Submitted assignment</span></a>
      <a href="plagiarism.php"><i class="fas fa-table"></i><span>Plagiarism</span></a>
    <a href="marks.php"><i class="fas fa-table"></i><span>Marking</span></a>
    
    </div>

    <!--sidebar end-->

    <!----form----->
<div id="body">
 <form action="upload.php" method="post" enctype="multipart/form-data">
  <div class="input">
      <label>Subject:</label>
     <input type="text" name="title" placeholder="Subject name..." required>
  </div>
  <div class="input">
    <label>Deadline:</label>
     <input type="timedate" name="time" placeholder="Yyy-mm-dd" required>
  </div>
  <div class="input">
    <label>Assignment Marks:</label>
     <input type="text" name="marks" value="5" placeholder="Marks" required>
  </div>
  <div class="input" style="margin-top: 5px;">
     <input type="file" required name="file" />
  </div>
  <div class="dis">
    <div class="input">
     <button type="submit" name="btn-upload" class="btn"  style="margin-right: 5px;">upload</button>
  </div>
  </div>
 </form>
    <?php
 if(isset($_GET['success']))
 {
  ?>
        
        <?php
 }
 else if(isset($_GET['fail']))
 {
  ?>
        
        <?php
 }
 else
 {
  ?>
        <?php
 }
 ?>
</body>
</htsml>