<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>تسجيل الدخول</h2>
    </div>
    <hr>
    <div class="modal-body">
        <form method="post" action="../auth/op.php" class="navigation-search" enctype="multipart/form-data">
            <label class="lablogin" for="">البريد الكتروني</label><br>
            <input name="email" type="email" class="navigation-search-input form-control" placeholder="ادخل البريد الكتروني" required><br>
  
              <label class="lablogin"for="">كلمة المرور</label><br>
              <input name="password" type="password" class="navigation-search-input form-control" placeholder="ادخل كلمة المرور" required>
              <br><br>
              
              <div class="modal-footer">
                <button type="submit" name="login" class="btnlogin">دخول </button>
                <button type="button" class="btnlogin close">الغاء</button>
              </div>
          </form>
        <hr>
        <a  class="register"href="http://localhost:9000/register">تسجيل حساب في مكتية اقرأ</a><br><br>


      </div>
  </div>

</div>
