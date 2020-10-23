<?php
  class registerController extends Controller {
    public function index() {
      if(isset($_REQUEST['register'])){
        $ten = $_REQUEST['ten'];
        $hovatendem = $_REQUEST['hovatendem'];
        $mssv = $_REQUEST['mssv'];
        $lop = $_REQUEST['lop'];
        $email = $_REQUEST['email'];

        $result = $this->model->register($ten,$hovatendem,$mssv,$lop,$email);
        if($result){
          $this->view->message = '<div class="alert alert-success mt-3" role="alert">
          Đăng ký thành công
        </div>';
        }
        else {
          $this->view->message =  '<div class="alert alert-danger mt-3" role="alert">
          Đăng ký thất bại
        </div>';
        }
      }

      $this->view->render('register');
    }
  }
?>