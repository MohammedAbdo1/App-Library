<!-- Deleted insurance -->
<div class="modal fade" id="Deleted<?php echo $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">حذف البيانات  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                <form action="op.php" method="post">
                  
                    <input type="hidden" name="id" value="<?php echo $row['id']?>">
                    <div class="row">
                        <div class="col">
                            <p class="h5 text-danger"> هل انت متاكد من حذف الكتاب  ؟ </p>
                            <input type="text" class="form-control" readonly value="<?php echo $row['name']?>">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button name="delete" class="btn btn-success">حذف</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
