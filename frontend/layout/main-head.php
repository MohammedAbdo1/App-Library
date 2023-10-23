<div class="navbar">
    <div class="top-bar">
     
      <div class="top-bar__content">
        <section class="phone">
          <i class="fa-solid fa-phone icon"></i>
          <span>00967775163208</span>
          <i class="fa-solid fa-envelope icon"></i>
          <span>mohammed@gmail.com</span>
        </section>
        <section class="login">
          <?php
            session_start(); // بدء الجلسة
            
            // التحقق من وجود قيمة اسم المستخدم في السيشن
            if(isset($_SESSION['email'])) {
                $email = $_SESSION['email'];
                echo '
                  "مرحبًا",
                  '.$email.'
                  <a href="/logout" name="logout" class="btn btn-primary">تسجيل خروج</a>
                ';
            } else {
                echo '<button type="button" id="myBtn" class="btn btn-primary">تسجيل دخول</button>
            
                      
                ';
            }
          ?>
                    
        </section>
      </div>
    </div>

    <div class="bottom-bar">
      <div class="bottom-bar__content">
        <a href="/" class="logo">
        <img src="https://res.cloudinary.com/dddptppkn/image/upload/v1668240279/myfolder/mysubfolder/crown_urgqku.png" width="80">
          <span class="logo__text">Iqra اقرأ</span>
        </a>
    
        <nav class="nav">
          <ul class="nav__list">
            <li class="nav__item2">
              <a class="nav__link2" href="#">اقسام الكتب</a>
            </li>
            <li class="nav__item2">
              <a class="nav__link2" href="#">Projects</a>
            </li>
            <li class="nav__item2">
              <a class="nav__link2" href="/register">تواصل معنا</a>
            </li>
          </ul>
        </nav>
  
        <div class="hamburger">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
      </div>
    </div>
</div>