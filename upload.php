<?php
include_once 'config.php';
if(isset($_POST['btn-upload']))
{  
 
   $text = $_POST['time'];
   $dob = date('Y-m-d', strtotime($_POST['time']));

   $file = rand(1000,100000)."-".$_FILES['file']['name'];
   $file_loc = $_FILES['file']['tmp_name'];
   $file_title = $_POST['title'];
   $file_marks = $_POST['marks'];
   $folder="uploads/";

 $new_file_name = strtolower($file);
  
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql = "UPDATE tbl_uploads SET file='$final_file', subject='$file_title', marks='$file_marks', deadline='$dob' WHERE id>0";

  mysqli_query($con, $sql);
  ?>
  <script>
  alert('successfully uploaded');
        window.location.href='uploadlct.php?success';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='uploadlct.php?fail';
        </script>
  <?php
 }
}
?>