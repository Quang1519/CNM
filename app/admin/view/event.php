<!DOCTYPE html>
<html lang="en">
    <head>
       <?php include "components/head.php"; ?>
       <link href="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\footable\footable.core.min.css" rel="stylesheet" type="text/css">
       <link href="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\bootstrap-datepicker\bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
       <link href="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\clockpicker\bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css">

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
                        <!-- end page title -->



                    </div> <!-- container -->


                    <div class="container-fluid">
                    <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="header-title">Add &amp; Remove Rows</h4>
                                    <p class="sub-header">
                                        Add or remove rows from your FooTable.
                                    </p>

                                    <div class="mb-2">
                                        <div class="row">
                                            <div class="col-12 text-sm-center form-inline">
                                                <!-- <div class="form-group mr-2">
                                                    <button id="demo-btn-addrow" class="btn btn-primary"><i class="mdi mdi-plus-circle mr-2"></i> Add New Row</button>
                                                </div> -->
                                                <div class="form-group mr-2">
                                                    <button type="button" id="addEvent" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#update-modal"><i class="mdi mdi-plus-circle mr-2"></i>Thêm sự kiện mới</button>
                                                </div>
                                                <div class="form-group">
                                                    <input id="demo-input-search2" type="text" placeholder="Tìm kiếm" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                    <!-- demo-foo-addrow -->
                                    <table id="demo-foo-addrow" class="table table-hover table-bordered toggle-circle mb-0" data-page-size="7">
                                        <thead class="table-purple">
                                        <tr>
                                            <!-- <th data-sort-ignore="true" class="min-width"></th> -->
                                            <th data-sort-initial="true" data-toggle="true" class="text-dark min-width">STT</th>
                                            <th data-sort-ignore="true" class="text-dark">Mã sự kiện</th>
                                            <th class="text-dark">Số ghế</th>
                                            <th class="text-dark">Số khách mời</th>
                                            <th data-sort-ignore="true" class="text-dark">Thời gian</th>
                                            <th data-sort-ignore="true" class="text-dark">Ngày</th>
                                            <th data-sort-ignore="true" class="text-dark">Địa điểm</th>
                                            <th data-sort-ignore="true" class="text-dark">Trạng thái</th>
                                            <th data-sort-ignore="true" class="text-dark">Cập nhật</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $this->page->createEventTable() ?>

                                        </tbody>
                                        <tfoot>
                                        <tr class="active">
                                            <td colspan="9">
                                                <div class="text-right">
                                                    <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10"></ul>
                                                </div>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    </div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>

                        <!-- Modal here -->
                        <div id="update-modal" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header d-block">
                                    <h4 class="modal-title text-center">Câp nhật sự kiện</h4>
                                    <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                    </button> -->
                                  </div>
                                  <form class="needs-validation" novalidate method="POST">
                                  <div class="modal-body p-4">
                                      <div class="form-row">
                                          <div class="col-md-12">
                                              <div class="form-group">
                                                  <label for="masukien" class="control-label">Mã sự kiện</label>
                                                  <input type="text" class="form-control" id="masukien" placeholder="" name="masukien"  required >
                                                  <!-- <div class="invalid-feedback">
                                                    Vui lòng điền họ và tên đệm
                                                  </div> -->
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-row">
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label class="control-label ">Ngày tổ chức</label>
                                                  <div class="input-group">
                                                      <input type="text" class="form-control" data-provide="datepicker" data-date-autoclose="true" placeholder="dd/mm/yyyy" id="ngay" name="ngay" required>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i class="ti-calendar"></i></span>
                                                        </div>
                                                      <div class="invalid-feedback">
                                                        Vui lòng chọn ngày tổ chức
                                                      </div>
                                                  </div>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="form-row">

                                        <div class="col-md-6">
                                          <div class="form-group">
                                            <label>Thời gian bắt đầu</label>
                                            <div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true" required>
                                                <input type="text" class="form-control" placeholder="12:00" id="timeStart" name="batdau" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                                                </div>
                                                <div class="invalid-feedback">
                                                    Vui lòng chọn thời gian bắt đầu
                                                </div>
                                            </div>
                                            </div>
                                          </div>
                                          <div class="col-md-6">
                                          <div class="form-group">
                                            <label>Thời gian kết thúc</label>
                                            <div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true" required>
                                                <input type="text" class="form-control" placeholder="12:00" id="timeEnd" name="ketthuc" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                                                </div>
                                                <div class="invalid-feedback">
                                                    Vui lòng chọn thời gian kết thúc
                                                </div>
                                            </div>
                                            </div>
                                          </div>
                                      </div>

                                      <div class="form-row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label for="field-1" class="control-label">Số chỗ ngồi</label>
                                                  <input type="text" class="form-control" id="chongoi" placeholder="" name="chongoi"  required >
                                                  <div class="invalid-feedback">
                                                    Vui lòng điền số chỗ ngồi
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label for="field-2" class="control-label">Số khách mời</label>
                                                  <input type="text" class="form-control" id="khachmoi" placeholder="" name="khachmoi" required>
                                                  <div class="invalid-feedback">
                                                    Vui lòng điền số khách
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="form-row">
                                          <div class="col-md-12">
                                              <div class="form-group ">
                                                  <label for="diachi" class="control-label">Địa chỉ</label>
                                                  <input class="form-control" id="diachi" name="diachi" placeholder="Địa chỉ" required>
                                                  <div class="invalid-feedback">
                                                    Vui lòng điền địa chỉ
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Đóng</button>
                                      <button type="submit" id="create" name="create" class="btn btn-success waves-effect waves-light" value="">Cập nhật</button>
                                  </div>
                                  </form>
                              </div>
                          </div>
                      </div>

                    </div>

                </div> <!-- content -->

                <!-- Footer Start -->

                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- Right bar overlay-->
        <?php include "components/script.php"; ?>

        <?php include "components/footer.php"; ?>

        <script src="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\footable\footable.all.min.js"></script>


        <script src="<?php echo constant("DIR_APP") ?>admin\view\assets\js\pages\foo-tables.init.js"></script>


        <script src="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\bootstrap-datepicker\bootstrap-datepicker.min.js"></script>

        <script src="<?php echo constant("DIR_APP") ?>admin\view\assets\libs\clockpicker\bootstrap-clockpicker.min.js"></script>

        <script src="<?php echo constant("DIR_APP") ?>admin\view\assets\js\clockpicker.js"></script>




        <script>

            $(".btn-icon").on("click", function () {
                // console.log(this);
                var myValue = $(this).data('val');
                // $(".modal-body #bookId").val( myBookId );
                var obj = $("#update-modal");
                var time = myValue.thoigian.split("-");
                // console.log(test[0]);
                // var hi = test[0];
                // var start = hi.trim().slice(-2,2);
                $(obj).find(".modal-header .modal-title").text("Cập nhật sự kiện " + myValue.masukien);
                $(obj).find(".modal-footer #create").text("Cập nhật");
                $(obj).find(".modal-footer #create").prop('value', '');
                // console.log(start);
                $(obj).find(".modal-body #masukien").prop( "readonly", true );
                $(obj).find(".modal-body #masukien").val(myValue.masukien);
                $(obj).find(".modal-body #ngay").val(myValue.ngay);
                $(obj).find(".modal-body #timeStart").val(time[0]);
                $(obj).find(".modal-body #timeEnd").val(time[1]);
                $(obj).find(".modal-body #chongoi").val(myValue.chongoi);
                $(obj).find(".modal-body #khachmoi").val(myValue.khachmoi);
                $(obj).find(".modal-body #diachi").val(myValue.diadiem);
            });


            $("#addEvent").on("click", function () {
                // console.log(this);
                // var myValue = $(this).data('val');
                // $(".modal-body #bookId").val( myBookId );
                var obj = $("#update-modal");
                $(obj).find(".modal-header .modal-title").text("Thêm sự kiện mới");
                $(obj).find(".modal-footer #create").text("Thêm mới");
                $(obj).find(".modal-footer #create").prop('value', 'New');
                // $(".hidden").attr("placeholder", "Type here to search");
                $(obj).find(".modal-body #masukien").attr("placeholder", "IUHXXXX");
                $(obj).find(".modal-body #ngay").attr("placeholder", "12/12/2020");
                $(obj).find(".modal-body #timeStart").attr("placeholder", "6:00");
                $(obj).find(".modal-body #timeEnd").attr("placeholder", "18:00");
                $(obj).find(".modal-body #chongoi").attr("placeholder", "3000");
                $(obj).find(".modal-body #khachmoi").attr("placeholder", "20");
                $(obj).find(".modal-body #diachi").attr("placeholder", "Nguyễn Văn Bảo, Gò Vấp, Hồ Chí Minh");
            });

        </script>

        <?php THONGBAO::message($this->message)?>

    </body>
</html>