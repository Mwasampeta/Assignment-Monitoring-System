<?php
 //$username = "";
 //$password = "";
 //$errors = array();

 $con= mysqli_connect('localhost' , 'root', '', 'register');

if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    echo "Failed to connect to Mysql:"  . mysqli_connect_error();
}

 ?>