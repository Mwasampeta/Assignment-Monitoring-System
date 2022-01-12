<?php
include_once 'config.php';

if (isset($_POST['delete'])) {
	$sql="DELETE FROM tbl_uploads WHERE id>'0'";
	if(mysqli_query($con, $sql)){
		echo "Records were deleted successfully.";
	}
	else{
		echo "ERROR:Could not able to execute $sql.".mysqli_error($con);
	}
}
 ?>