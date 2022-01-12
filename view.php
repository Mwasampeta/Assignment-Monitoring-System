<?php
include_once 'config.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>View assignment</title>
<link rel="stylesheet" href="css/upload.css" type="text/css" />
</head>
<style type="text/css">
  .view {
  text-decoration: none;
  background-color: #FF9900;
  color: white;
  padding: 0.5rem;
  font-family: "Roboto", sans-serif;;
  border-radius: 0.3rem;
  cursor: pointer;
  margin-top: 1rem;
}

.bg-img{
  background: url('images/img11.jpg');
  height: 100vh;
  background-size: cover;
  background-position: center;
}
</style>
<body class="bg-img">
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
    <br><h3 style="float: right; text-decoration: none; background-color:white;"><a href="dashboard.php">Submit assignment</a></h3><br>
<div id="body">
 <table width="80%" border="1" style="background-color: white;">
    <tr>
    <th colspan="4"><h2>Uploaded Assignments</h2></th>
    </tr>
    <tr>
    <td>Subject Name</td>
    <td>Deadline</td>
    <td>marks</td>
    <td>Assignment</td>
    </tr>
    <?php
 $sql="SELECT * FROM tbl_uploads";
 $result_set=mysqli_query($con, $sql);
 while($row=mysqli_fetch_array($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row['subject'] ?></td>
        <td><?php echo $row['deadline'] ?></td>
        <td><?php echo $row['marks'] ?></td>
        <td ><a href="uploads/<?php echo $row['file'] ?>" target="_blank" class="view">view file</a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    
</div>
</body>
</html>