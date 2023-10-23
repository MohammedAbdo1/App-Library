<?php 
$currentURL = $_SERVER['REQUEST_URI'];
$currentURL = str_replace('$', '', $currentURL);
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('../../config.php');

	if (isset($_POST['add'])) {
		$name = $_POST['name'];
		$description = $_POST['description'];
		$categoriesID = $_POST['category_id'];
	
		$image = $_FILES['image'];
		$image_loction = $_FILES["image"]["tmp_name"];
		$image_name = $name . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
		$image_up = 'images/' . $image_name;
		move_uploaded_file($image_loction, $image_up);
	
		$file = $_FILES['file'];
		$file_loction = $_FILES["file"]["tmp_name"];
		$file_name = $name . '.' . pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
		$file_up = 'files/' . $file_name;
		move_uploaded_file($file_loction, $file_up);

		$insert="INSERT be (categoriesID, name, description, image,file) VALUES('".$categoriesID."','".$name."','".$description."','".$image_up."','".$file_up."')";
   
	if(mysqli_query($con,$insert)){
		echo"succcefuly save date";
		header("location:index.php");
	}
	else{
	echo"error:" .$insert .mysqli_error($con);
	}
		if (move_uploaded_file($image_loction, $image_up) ){
			echo "تم حفظ البيانات بنجاح.";
			header("location:index.php");
		} else {
			echo "فشل في تحميل الملفات.";
		}
	}






	


if(isset($_POST['update'])){

    $_id=$_POST['id'];
    $name=$_POST['name'];	
	$description=$_POST['description'];
	$categoriesID=$_POST['categoriesID'];

	$image_name=$_FILES['image']['name'];
	$file_name=$_FILES['file']['name'];

	$imgold=mysqli_fetch_array(mysqli_query($con,"SELECT image,file FROM be where id=$_id"));
	
	if($image_name !=null && $file_name !=null){
		if (file_exists($imgold['image'])) {
			unlink($imgold['image']);
		}
		
		if (file_exists($imgold['file'])) {
			unlink($imgold['file']);
		}
	   
       $image_loction=$_FILES["image"]["tmp_name"];
	   $image_name=$_POST['name'] . '.' . pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
	   $image_up='images/'.$image_name;
	   move_uploaded_file($image_loction,$image_up);

	   $file_loction = $_FILES["file"]["tmp_name"];
		$file_name = $name . '.' . pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
		$file_up = 'files/' . $file_name;
		move_uploaded_file($file_loction, $file_up);

        $updata="update be set categoriesID=$categoriesID,name='$name',description	='$description',image='$image_up',file='$file_up' where id='$_id'";  
	    if(mysqli_query($con,$updata)){
	        header('location:index.php');
	    }
	    else{
	        echo"error:" .$updata .mysqli_error($con);
	    }
	}
	else{
        $updata="update be set categoriesID=$categoriesID,name='$name',description='$description',image='$imgold[image]',file='$$imgold[file]' where id='$_id'";  
        if(mysqli_query($con,$updata)){
			header('location:index.php');
		}
		else{
			echo"error:".$updata .mysqli_error($con);
		}
	}
}

if(isset($_POST['delete'])){

    $id=$_POST['id'];
    mysqli_query($con,"DELETE FROM be WHERE id=$id");
    header('location:index.php');

}
?>