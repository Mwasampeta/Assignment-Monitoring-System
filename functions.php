<?php

function logout(){
	unset($_SESSION['login']);
unset($_SESSION['id']);
unset($_SESSION['loggeduser']);
echo "<meta http-equiv='refresh' content='0; url=welcome.php'>";


}

?>
