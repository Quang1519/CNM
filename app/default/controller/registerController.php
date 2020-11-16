<?php
  class registerController extends Controller {
    public function index() {
      if(isset($_SESSION['mssv'])){
        $resultkt = $this->model->kiemtra($_SESSION['mssv']);
      }else{
        $resultkt = 0;
      }
      if(isset($_REQUEST['register'])){
        $ten = $_SESSION['ten'];
        $hoten = $_SESSION['hoten'];
        $mssv = $_SESSION['mssv'];
        $result = $this->model->register($ten,$hoten,$mssv);
        foreach ($result as $value) {
            if($value){
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
      }
      $this->view->data=['kiemtra'=>$resultkt];
      $this->view->render('register','registerView');
    }
  }
?>