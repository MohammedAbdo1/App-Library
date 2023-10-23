<!DOCTYPE html>
<html lang="en">

    <head>
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <title>الكتب</title>
    
        <!-- Custom fonts for this template-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="../../public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"rel="stylesheet">
        <link rel="stylesheet" href="../../public/css/mystyle.css">
        <link href="../../public/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="../../public/css/sb-admin-2.min.css" rel="stylesheet">
    
    </head>

    <body id="page-top" dir="rtl">
    
        <!-- Page Wrapper -->
        <div id="wrapper">
    
            <!-- Sidebar -->
            <?php include('../layout/sidebar.php')?>
            <!-- End of Sidebar -->
    
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
    
                <!-- Main Content -->
                <div id="content">
    
                    <!-- Topbar -->
                    <?php include('../layout/main-head.php')?>
                    <!-- End of Topbar -->
    
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
    
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mt-5 mb-4">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">اضافة كتاب</button>
                            <?php include('create.php')?>
                            



                            <div class="d-flex">
                                <span class="content-title mb-0 my-auto text-danger">
                                  <a href="http://localhost:9000/dashboard" style="color: #3f3f3f;text-decoration: none;">الرئيسية</a>
                                </span>
                                <span class="text-muted mt-1 tx-13 mr-2 mb-0">
                                  <span class="mx-1">/</span>
                                  <a style="color: #747f9e; font-size:15px">الكتب</a>
                                </span>
                            </div>
                        </div>
                        
                       
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">جميع الكتب</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>الرقم</th>
                                                <th>الاسم</th>
                                                <th>الوصف</th>
                                                <th>الفئة</th>
                                                <th>الصوره</th>
                                                <th>الملف</th>
                                                <th>العمليات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                include('../../config.php');
                                                
                                                $select = mysqli_query($con, "SELECT * FROM be");
                                                
                                                if (mysqli_num_rows($select) > 0) {
                                                    while ($row = mysqli_fetch_array($select)) {
                                                        echo "
                                                        <tr>
                                                            <td>" . $row['id'] . "</td>
                                                            <td>" . $row['name'] . "</td>
                                                            <td>" . $row['description'] . "</td>
                                                            <td>";
                                                                $categoryId = $row['categoriesID'];
                                                                $categoryQuery = mysqli_query($con, "SELECT name FROM categories WHERE id = $categoryId");
                                                                $categoryData = mysqli_fetch_array($categoryQuery);
                                                                echo $categoryData['name'];
                                                                 echo "
                                                            </td>
                                                            <td><img src='" . $row['image'] . "' width='50px'; height='30px'></td>
                                                            <td><a href='" . $row['file'] . "' target='_blank'>View PDF</a></td>
                                                            <td>
                                                                <button class='btn btn-sm btn-primary' data-bs-toggle='modal' data-bs-target='#ModalEdit" . $row['id'] . "'><i class='fas fa-edit'></i></button>
                                                                <button class='btn btn-sm btn-danger' data-toggle='modal' data-target='#Deleted" . $row['id'] . "'><i class='fas fa-trash'></i></button>    
                                                            </td>
                                                        </tr>";
                                                        include('edit.php');
                                                        include('delete.php');
                                                    }
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.container-fluid -->
    
                </div>
                <!-- End of Main Content -->
    
                <!-- Footer -->
                <?php include('../layout/main-footer.php') ?>
                <!-- End of Footer -->
    
            </div>
            <!-- End of Content Wrapper -->
    
        </div>
        <!-- End of Page Wrapper -->
    
        <!-- Scroll to Top Button-->
        <?php include('../layout/buttonTop.php') ?>
    
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Bootstrap core JavaScript-->
        <script src="../../public/vendor/jquery/jquery.min.js"></script>
        <script src="../../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../../public/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="../../public/js/sb-admin-2.min.js"></script>
        <script src="../../public/vendor/chart.js/Chart.min.js"></script>
        <script src="../../public/js/demo/chart-area-demo.js"></script>
        <script src="../../public/js/demo/chart-pie-demo.js"></script>
        <script src="../../public/vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="../../public/vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="../../public/js/demo/datatables-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    
    </body>

</html>