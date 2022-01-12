<?php
include_once 'config.php';
if(isset($_POST['send']))
{  
   $mark = $_POST['mark'];
   $sql = "INSERT INTO stsubmit (marks)
   VALUES ('$mark')";
   if (mysqli_query($con, $sql)) {
    echo "New record created successfully !";
   } else {
    echo "Error: " . $sql . "
" . mysqli_error($con);
   }
   mysqli_close($con);
}
?>