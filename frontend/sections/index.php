<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../layout/head.php') ?>
    <link rel="stylesheet" href="../../../public/js/myjs.js">
    <link href="../../../public/global.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
</head>
<body>
   
    <!-- navbar  -->
    <?php include('../layout/main-head.php')?>
    <!-- end of navbar -->      
   
    <br><br><br><br><br><br>
    <!-- books categories -->
    
    <br>
    <?php
    include('../../config.php');
    
    $category_id = $_GET['id']; // تغيير القيمة حسب الفئة المرسلة

    $select = mysqli_query($con, "SELECT * FROM categories WHERE id = $category_id");
    
    if (mysqli_num_rows($select) > 0) {
        $category_name = mysqli_fetch_array($select);
        echo'
            <div class="row" >
                <h1 class="about-us-heading">'.$category_name['name'].'</h1>
            </div><br>
            <div class="row book-wrapper">
        ';
    }
    else{echo'';}

    $select = mysqli_query($con, "SELECT * FROM be WHERE categoriesID = $category_id ORDER BY RAND()");
    
    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_array($select)) {
            echo "
            <div class='column'>
                <div class='card-book'>
                  <div class='rate-star'>
                    <span class='fa fa-star checked'></span>
                    <span class='fa fa-star checked'></span>
                    <span class='fa fa-star checked'></span>
                    <span class='fa fa-star'></span>
                    <span class='fa fa-star'></span>
                  </div>
                  <img src='" . $row['image'] . "' class='room-img' />
                  <p class='book-card-paragraph'>" . $row['name'] . "</p>
                  <a href='https://www.noor-book.com/book/review/392061' class='-btn -bg -txt'>
                    قراء وتصفح
                    <i class='fas fa-angle-double-right btn-arrow'></i>
                  </a>
                </div>
            </div>";
        }
    }
    else{
        echo'<div class"text-center" style="height:200px;margin-top:100px;font-size:20px"> لا يوجد كتب لهذا الفئة</div>';
    }
    ?>
</div><br><br><br><br>

    <!-- end of customers -->
    <?php include('../../auth/login.php')?>
    <!-- footer -->
     <?php include('../layout/main-footer.php')?>
    <!-- end of footer -->
    <script src="../../public/js/myjs.js"></script>

    
</body>
</html>