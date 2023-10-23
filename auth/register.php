<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../frontend/layout/head.php') ?>
    <link rel="stylesheet" href="../public/css/mystyle.css">
    <link href="../public/global.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
 
<!-- 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
</head>
<body>
   
    <!-- navbar  -->
    <?php include('../frontend/layout/main-head.php')?>
    <!-- end of navbar --> 
    <br><br><br><br><br><br>
    <form method="post" action="../auth/op.php">
      <div class="container">
        <h1>انشاء حساب</h1>
        
        <hr>
    
        <label for="psw-repeat"><b>الاسم</b></label><br>
        <input type="text" placeholder="ادخل الاسم الكامل" name="name" id="psw-repeat" required><br>

        <label for="email"><b>البريد الالكتروني</b></label><br>
        <input type="text" placeholder="ادخل البريد الالكتروني" name="email" id="email" required><br>
    
        <label for="psw"><b>كلمة المرور</b></label><br>
        <input type="password" placeholder="ادخل كلمة المرور" name="password" id="psw" required>

        <hr>
    
        <button type="submit" name="register" class="registerbtn">انشاء حساب</button>
      </div>
    </form>

    
    



    
    <!-- end of customers -->
    <?php include('login.php')?>
    <!-- footer -->
     <?php include('../frontend/layout/main-footer.php')?>
    <!-- end of footer -->
    <script src="../public/js/myjs.js"></script>
 
</body>
</html>