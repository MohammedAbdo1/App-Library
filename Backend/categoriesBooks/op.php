<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('../../config.php');
if(isset($_POST['add'])){
	
    $name=$_POST['name'];	
	$discrabtion=$_POST['discrabtion'];
	
	$insert="INSERT INTO categories(name,discrabtion) VALUES('".$name."','".$discrabtion."')";
   
	if(mysqli_query($con,$insert)){
		echo'<script>alert("succcefuly save date")</script>';
		header("location:index.php");
	}
	else{
	echo"error:" .$insert .mysqli_error($con);
	}
}

if(isset($_POST['update'])){

    $_id=$_POST['id'];
    $name=$_POST['name'];	
	$discrabtion=$_POST['discrabtion'];
    $updata="update categories set name='$name',discrabtion='$discrabtion' where id='$_id'";
   
             
	  if(mysqli_query($con,$updata)){
	    header('location:index.php');
	    }
	  else{
	  echo"error:" .$updata .mysqli_error($con);
	  }
}

if(isset($_POST['delete'])){

    $id=$_POST['id'];
    mysqli_query($con,"DELETE FROM categories WHERE id=$id");
    header('location:index.php');

}
?>