<?php 
session_start(); // بدء الجلسة
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('../config.php');

if(isset($_POST['login'])){
	
	$email=$_POST['email'];
	$password=$_POST['password'];
    // استعلام SQL للتحقق من وجود المستخدم في جدول المستخدمين
    $userQuery = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    
    // تنفيذ الاستعلام
    $result = $con->query($userQuery);
    
    // التحقق من وجود نتائج
    if ($result->num_rows > 0) {
    	$_SESSION['email'] = $email;
        header("Location: http://localhost:9000");
        exit();
    } else {
        $adminQuery = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
        $adminResult = $con->query($adminQuery);
    
        if ($adminResult->num_rows > 0) {
            $_SESSION['email'] = $email;
            header("Location: ../Backend/index.php");
    		$_SESSION['email'] = $email;
            exit();
        } else {
            header("Location: http://localhost:9000");
        }
    }
    
    // إغلاق اتصال قاعدة البيانات
    $con->close();
    
    
    
}

if(isset($_POST['register'])){
	
    $name=$_POST['name'];	
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$insert="INSERT INTO users(name,email,password) VALUES('".$name."','".$email."','".$password."')";
   
	if(mysqli_query($con,$insert)){
        $_SESSION['email'] = $email;
		echo'<script>alert("succcefuly save date")</script>';
        header("Location: http://localhost:9000");
	}
	else{
	echo"error:" .$insert .mysqli_error($con);
	}
}
