<!DOCTYPE html>
<html lang="en">
    <head>
       <?php include "components/head.php"; ?>
       <link href="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\footable\footable.core.min.css" rel="stylesheet" type="text/css">
       <link href="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\bootstrap-datepicker\bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">

       <style>
          .pagination-rounded .page-link {
            border-radius:3px !important;
            margin:0 1.5px;
            /* border:none; */
            border: 1px solid #f1f5f7;
          }

          .page-link {
            position: relative;
            display: block;
            padding: .5rem .75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #323a46;
            background-color: #fff;
            border: 1px solid #f1f5f7;
          }

          .far {
            line-height: unset;
          }
       </style>
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <?php include "components/topbar.php"; ?>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php include "components/sidebar.php"; ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Minton</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                            <li class="breadcrumb-item active">Starter</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Starter</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Filtering</h4>
                                    <p class="sub-header">
                                        include filtering in your FooTable.
                                    </p>

                                    <div class="mb-2">
                                        <div class="row">
                                            <div class="col-12 text-sm-center form-inline">
                                                <div class="form-group mr-2">
                                                    <!-- <button id="demo-btn-addrow" class="btn btn-primary"><i class="mdi mdi-plus-circle mr-2"></i> Add New Row</button> -->
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal"><i class="mdi mdi-plus-circle mr-2"></i> Tạo tài khoản mới</button>
                                                </div>

                                                <div class="form-group">
                                                    <input id="demo-input-search2" type="text" placeholder="Tìm kiếm" class="form-control" autocomplete="off">
                                                </div>
                                                <!-- <div class="form-group ml-auto">
                                                    <select id="demo-foo-filter-status" class="custom-select custom-select">
                                                        <option value="">Show all</option>
                                                        <option value="active">Active</option>
                                                        <option value="disabled">Disabled</option>
                                                        <option value="suspended">Suspended</option>
                                                    </select>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Table here -->
                                    <div class="table-responsive">
                                        <table id="demo-foo-filtering" class="table table-bordered table-hover ">
                                            <thead class="thead-light">
                                            <tr class="">
                                                <th class="header-title text-dark">Mssv
                                                <span class="far fa-caret-square-down float-right "></span>
                                                </th>
                                                <th class="header-title text-dark">Họ và tên đệm
                                                <span class="far fa-caret-square-down float-right "></span>
                                                </th>
                                                <th class="header-title text-dark">Tên
                                                <span class="far fa-caret-square-down float-right "></span>
                                                </th>
                                                <th class="header-title text-dark">Lớp
                                                <span class="far fa-caret-square-down float-right "></span>
                                                </th>
                                                <th class="header-title text-dark">Trạng thái
                                                <span class="far fa-caret-square-down float-right "></span>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $this->page->createTable(); ?>
                                            <tr>
                                                <td>Lauri</td>
                                                <td>Hyland</td>
                                                <td>Blackjack Supervisor</td>
                                                <td>15 Nov 1985</td>
                                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr >
                                                <td colspan="5">
                                                    <div class="">
                                                        <!-- <ul class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0"></ul> -->
                                                        <nav>
                                                        <ul class="pagination pagination-rounded justify-content-end mb-0">
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Previous">
                                                                    <span aria-hidden="true">&laquo;</span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                            </li>
                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                            <li class="page-item">
                                                                <a class="page-link" href="#" aria-label="Next">
                                                                    <span aria-hidden="true">&raquo;</span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        </nav>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- end .table-responsive-->
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>

                        <!-- Modal here -->
                        <div id="con-close-modal" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header d-block">
                                    <h4 class="modal-title text-center">Tạo tài khoản</h4>
                                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                    </button> -->
                                  </div>
                                  <form class="needs-validation" novalidate method="POST">
                                  <div class="modal-body p-4">
                                      <div class="form-row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label for="field-1" class="control-label">Họ và tên đệm</label>
                                                  <input type="text" class="form-control" id="field-1" placeholder="Phạm Thái" name="hovatendem" required>
                                                  <div class="invalid-feedback">
                                                    Vui lòng điền họ và tên đệm
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label for="field-2" class="control-label">Tên</label>
                                                  <input type="text" class="form-control" id="field-2" placeholder="Văn" name="ten" required>
                                                  <div class="invalid-feedback">
                                                    Vui lòng tên
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-row">
                                          <div class="col-md-12">
                                              <!-- <div class="form-group">
                                                  <label for="field-3" class="control-label">Address</label>
                                                  <input type="text" class="form-control" id="field-3" placeholder="Address">
                                              </div> -->
                                            <div class="form-group">
                                              <label class="control-label ">Năm sinh</label>
                                              <!-- <div class="col-md-12"> -->
                                                  <div class="input-group">
                                                      <input type="text" class="form-control" data-provide="datepicker" data-date-autoclose="true" placeholder="dd/mm/yyyy" id="date" name="namsinh" required>
                                                      <!-- <div class="input-group-append">
                                                          <span class="input-group-text"><i class="ti-calendar"></i></span>
                                                      </div> -->
                                                      <div class="invalid-feedback">
                                                        Vui lòng điền ngày tháng năm sinh
                                                      </div>
                                                  </div>
                                              <!-- </div> -->
                                            </div>
                                          </div>
                                      </div>
                                      <div class="form-row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label for="field-4" class="control-label">MSSV</label>
                                                  <input type="text" class="form-control" id="field-4" placeholder="17059601" name="mssv" required>
                                                  <div class="invalid-feedback">
                                                    Vui lòng điền mã số sinh viên
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label for="field-5" class="control-label">Lớp</label>
                                                  <input type="text" class="form-control" id="field-5" placeholder="DHHTTT13B" name="lop" required>
                                                  <div class="invalid-feedback">
                                                    Vui lòng điền lớp học
                                                  </div>
                                              </div>
                                          </div>
                                          <!-- <div class="col-md-4">
                                              <div class="form-group">
                                                  <label for="field-6" class="control-label">Zip</label>
                                                  <input type="text" class="form-control" id="field-6" placeholder="123456">
                                              </div>
                                          </div> -->
                                      </div>
                                      <!-- <div class="form-row">
                                          <div class="col-md-12">
                                              <div class="form-group no-margin">
                                                  <label for="field-7" class="control-label">Personal Info</label>
                                                  <textarea class="form-control" id="field-7" placeholder="Write something about yourself"></textarea>
                                              </div>
                                          </div>
                                      </div> -->
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Đóng</button>
                                      <button type="submit" name="create" class="btn btn-success waves-effect waves-light">Thêm mới</button>
                                  </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                        <!-- End modal -->
                        <!-- end page title -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->

                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
        <?php include "components/footer.php"; ?>

        <!-- Right bar overlay-->
        <?php include "components/script.php"; ?>

        <!-- <script src="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\footable\footable.all.min.js"></script>


        <script src="<?php echo constant("DIR_APP") ?>admin\view\assets\js\pages\foo-tables.init.js"></script> -->

        <script src="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\bootstrap-datepicker\bootstrap-datepicker.min.js"></script>

        <script>

          // (function() {
          //   'use strict';
          //   window.addEventListener('load', function() {
          //     // Fetch all the forms we want to apply custom Bootstrap validation styles to
          //     var forms = document.getElementsByClassName('needs-validation');
          //     // Loop over them and prevent submission
          //     var validation = Array.prototype.filter.call(forms, function(form) {
          //       form.addEventListener('submit', function(event) {
          //         if (form.checkValidity() === false) {
          //           // event.preventDefault();
          //           // event.stopPropagation();
          //         }
          //         // form.classList.add('was-validated');
          //       }, false);
          //     });
          //   }, false);
          // })();

        </script>

    </body>
</html>