<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">اضافة كتاب</h1>
        <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="op.php" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">الاسم</label>
            <input type="text" name="name"  class="form-control" id="recipient-name" required>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">الوصف</label>
            <textarea class="form-control" name="description" id="message-text"></textarea>
          </div>
          <div class="mb-3">
              <select name="category_id" class="form-control select2">
                    <option value="">------</option>
                      <?php
                       include('../../config.php');
                          $select = mysqli_query($con, "SELECT * FROM categories");

                       if (mysqli_num_rows($select) > 0) {
                            while ($row = mysqli_fetch_array($select)) {
                                echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
                            }
                        }
                         ?>
                       <br>
                        
              </select> 
            </div>

          <div class="mb-3">
            <label for="message-text" class="col-form-label">الصوره</label>
            <input type="file" name="image"  class="form-control" id="recipient-name" required>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">ملف الكتاب(pdf)</label>
            <input type="file" name="file"  class="form-control" id="recipient-name" required>
          </div>
          <div class="modal-footer">
            <button name="add" class="btn btn-primary">اضافة</button>
            <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal">اغلاق</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>