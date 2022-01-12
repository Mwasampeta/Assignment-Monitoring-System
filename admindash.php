<?php include_once 'config.php';
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>dashboard</title>
  <link rel="stylesheet" href="css/upload.css" type="text/css" />
  <style type="text/css">
  .view {
  text-decoration: none;
  background-color: #19B3D3;
  color: white;
  padding: 0.5rem;
  font-family: "Roboto", sans-serif;;
  border-radius: 0.3rem;
  cursor: pointer;
  margin-top: 1rem;
}
.bg-img{
  background: url('images/img2.jpg');
  height: 100vh;
  background-size: cover;
  background-position: center;
}
input:focus, textarea:focus, select:focus{
       outline: none;
       font-weight: 900;
       width: 50px;
       justify-content: center;
    }
</style>
</head>
<body class="bg-img">
   <div class="container">
    <div class="one">
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
    </div>
    <br>
    <h3 style="float: right; background-color:white;"><a href="uploadlct.php">Upload Assignment</a></h3>
    <br>
    <div id="body">
 <table width="90%" border="1" action="uploadlct.php" style="background-color:white;">
    <tr class="hedd">
    <td>Sudent Name</td>
    <td>Registration number</td>
    <td>Assignment</td>
    </tr>
    <?php
    
 $sql="SELECT stsubmit.file, stsubmit.name, stsubmit.regno, stsubmit.dob  FROM tbl_uploads INNER JOIN stsubmit ON tbl_uploads.deadline> stsubmit.dob";

 $result_set=mysqli_query($con, $sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr style="letter-spacing: 0.1rem;">
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['regno'] ?></td>
        <td ><a href="submit/<?php echo $row['file'] ?>" target="_blank" class="view">view file</a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    <br>
    <br>
</div>
   </div>
      
</body>
</html>
