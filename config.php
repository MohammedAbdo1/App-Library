<?php
$con=mysqli_connect('localhost','root','','library');
if($con->connect_errno){
    die("eroor connection databas " . $con->connect_errno);
}

?>