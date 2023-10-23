<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('layout/head.php') ?>
    <link rel="stylesheet" href="../public/js/myjs.js">
    <link href="../public/global.css" rel="stylesheet">
    <link rel="stylesheet" href="../foooter.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
<style>


</style>
</head>
<body>
   
    <!-- navbar  -->
    <?php include('layout/main-head.php')?>
    <!-- end of navbar -->      
    
    <!-- header -->
    <header class="header">
        <div class="brand" dir="rtl">
            <div>
                <img src="https://res.cloudinary.com/dddptppkn/image/upload/v1668240279/myfolder/mysubfolder/crown_urgqku.png" width="80">
            </div>
            <h3 class="hotel-heading">مكتبة اقرأ </h3>
        </div>

        <div class="banner">
            <h1 class="banner-heading">مرحبا بكم في مكتبة اقرأ </h1>
            <p class="banner-paragraph">أجعل حياتك اسهل واعتني بغذاء عقلك</p>
            <a href="about-us/about-us.php"><button class="banner-button">المزيد</button></a>
        </div>
    </header>
    <section class="about-us">
        <div class="about-us-content">
            <h1 class="about-us-heading"> من نحن</h1>
            <h3 class="sub-heading">مكتبة اقرأ</h3>
            <p class="about-us-paragraph">
موقع الكتروني مهتم بنشر الثقافة والوعي وتوفير الكتب المتنوعة للرقي والنهوض بالأمة
            </p>
            <a href="about-us/about-us.php"><button class="about-us-btn">
                 المزيد
                <i class="fas fa-angle-double-right btn-arrow"></i>
            </button></a>
        <!-- </div> -->
 </div>
    </section>
    
	
    <div class="row" style="margin-top: 30px;">
    <h1 class="about-us-heading">اقسام الكتب</h1>
    </div>
    <div class="row">
      <?php
        include('../config.php');
        $select = mysqli_query($con, "SELECT * FROM categories");
        if (mysqli_num_rows($select) > 0) {
            while ($row = mysqli_fetch_array($select)) {
                echo '
                <div class="col-lg-3 col-md-4 col-sm-6 m-5 text-end">
                    <a href="sections/index.php?id=' . $row["id"] . '">
                        <div class="cartCategories">
                            <span class="maintxt mt-5">' . $row["name"] . '</span>
                        </div>
                    </a>
                </div>';
            }
        }
     ?>
    </div>


   
    <!-- books gallaries -->
    <div class="row" style="margin-top: 60px;">
    <h1 class="about-us-heading">افضل الكتب </h1>
    </div>
    <div class="row book-wrapper">
    <?php
        include('../config.php');
        
        $select = mysqli_query($con, "SELECT * FROM be");
        
        if (mysqli_num_rows($select) > 0) {while ($row = mysqli_fetch_array($select)) {
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
                      <img
                        src='". $row['image'] ."'
                        class='room-img'
                      />
                      <p class='book-card-paragraph'>
                         $row[name]
                      </p>
                      <a href='". $row['file'] ."'>
                        قراء وتصفح
                        <i class='fas fa-angle-double-right btn-arrow'></i>
                      </a>
                    </div>
                </div>

                
                ";
            }
        }
    ?>

    </div>
    <!-- customers -->
    <section class="customers">
        <div class="common-header">
            <h1 class="common-heading">أراء الزائرين</h1>
            <div class="underline">
                <div class="small-underline"></div>
                <div class="big-underline"></div>
            </div>
        </div>

        <p class="customers-paragraph">
            في مكتبتنا، نولي اهتمام كبير بالزوار، إننا نأخذ ردودهم بمثابة تقييم لنا، نسعى دائما للاعتناء بالزائرين الكرام، وتوفير احتياجاتهم من الكتب التي تغذي العقول .        </p>

            <div class="customers-card-wrapper">
                <div class="row" style="justify-content: space-around;">
                    <div class="column">
                        <div class="card">
                            <div class="img">
                                <img src="https://i.pinimg.com/originals/87/47/b5/8747b55695ada1067fd22e3cdfdd88e3.jpg" class="img">
                            </div>
                            <span><h3 class="customer-fullname">ساري السالم</h3></span>
                            <p class="customer-p">زائر</p>
                            <p class="info">كوني باحث في التأريخ الاسلامي والحضارات العربية، احتاج العديد من الكتب والمصادر، لاجل الدراسات التي اقوم بها غالبا ما ألجأ إلى هذه المكتبة، إنها تزودني بالكثير من المصادر والكتب 
                                حقًا أشعر بالفخر، شكرًا لهذه المكتبة العظيمة</p>
                            
                            
                          </div>

                    </div>
                <div class="column">
                    <div class="card">
                        <div class="img">
                            <img src="https://i0.wp.com/www.almuheet.net/wp-content/uploads/%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D9%8A%D9%86-15-560x700.jpg" class="img">
                        </div>
                        <span><h3 class="customer-fullname">راكان صالح</h3></span>
                        <p class="customer-p">زائر</p>
                        <p class="info">
                            أعتدت تصفح مكتبة أقرأ بشكل يومي، إنها غذاء للعقل، يتم تزويدنا يوميا بالعديد من الكتب المفيدة، والجيدة نها تبلي بلاء حسنًا،لم اكن من زوار المواقع، وكانت الكتب المطبوعة تشكل عبئ على كل قارئ  شكرًا لهذه المكتبة الرائعة
                        </p>
                    </div>
                </div>
            </div>
            </div>
    </section>
    <!-- end of customers -->
    <?php include('../auth/login.php')?>
    <!-- footer -->
     <?php include('layout/main-footer.php')?>
    <!-- end of footer -->
    <script src="../../../public/js/myjs.js"></script>

    
 
</body>
</html>