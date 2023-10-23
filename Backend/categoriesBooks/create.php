<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">اضافة فئة</h1>
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
            <textarea class="form-control" name="discrabtion" id="message-text"></textarea>
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