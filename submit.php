<?php
include_once 'config.php';
if(isset($_POST['stsubmit']))
{
     
   $file = rand(1000,100000)."-".$_FILES['file']['name'];
   $file_loc = $_FILES['file']['tmp_name'];
   $student_name = $_POST['stname'];
   $index_no = $_POST['regNo'];
   $folder="submit/";
 
 // new file size in KB
 //$new_size = $file_size/2024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
  
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO stsubmit(file,name,regno) VALUES('$final_file','$student_name','$index_no')";
  mysqli_query($con, $sql);
  ?>
  <script>
  alert('successfully uploaded');
        window.location.href='dashboard.php?success';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error while uploading file');
        window.location.href='dashboard.php?fail';
        </script>
  <?php
 }
}
?>