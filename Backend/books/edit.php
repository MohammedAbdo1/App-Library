<div class="modal fade" id="ModalEdit<?php echo $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">تعديل كتاب</h1>
        <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="op.php" enctype="multipart/form-data">
          <div class="mb-3">
          <input type="hidden" name="id"  value="<?php echo $row['id']?>" class="form-control" id="recipient-name" required>

            <label for="recipient-name" class="col-form-label">الاسم</label>
            <input type="text" name="name"  value="<?php echo $row['name']?>" class="form-control" id="recipient-name" required>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">الوصف</label>
            <textarea class="form-control" name="description" id="message-text"><?php echo $row['description']?></textarea>
          </div>
          <div class="mb-3">
              <select name="categoriesID" class="form-control select2">

                <?php
                include('../../config.php');
                $selectu = mysqli_query($con, "SELECT * FROM categories");
            
                if (mysqli_num_rows($selectu) > 0) {
                  while ($rowu = mysqli_fetch_array($selectu)) {
                      echo "<option value='" . $rowu['id'] . "'";
                      if ($rowu['id'] == $row['categoriesID']) {
                          echo " selected";
                      } else {
                          // إضافة التعليمات الإضافية هنا
                          echo ""; // يمكنك إضافة التعليمات الإضافية هنا
                      }
                      echo ">" . $rowu['name'] . "</option>";
                  }
              }
                ?>
              </select>
            </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">الصوره</label>
            <input type="file" name="image"  class="form-control" id="recipient-name" >
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">ملف الكتاب(pdf)</label>
            <input type="file" name="file"  class="form-control" id="recipient-name" >
          </div>
          <div class="modal-footer">
            <button name="update" class="btn btn-primary">تعديل</button>
            <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">اغلاق</button>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</div>