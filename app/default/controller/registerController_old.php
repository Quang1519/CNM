<?php
  class registerController extends Controller {
    public function index() {
      $resultkt=0;
      $this->view->message = [-1];

      if(isset($_SESSION['mssv'])){

        $password = $this->model->thongtin($_SESSION['mssv']);
        if($password[0]['password'] == md5(1111)){
          $resultkt = -1;
        }else {
          $resultkt = $this->model->kiemtra($_SESSION['mssv']);
        }
      }

      if(isset($_REQUEST['register'])){
        $ten = $_SESSION['ten'];
        $hoten = $_SESSION['hoten'];
        $mssv = $_SESSION['mssv'];
        $result = $this->model->sukien();
        $masukien = $result[0]['masukien'];
        if($masukien){
          $this->view->message = $this->model->register($ten,$hoten,$mssv,$masukien, "Đăng ký vé");
        }
        // $result = 1;
        // $this->view->message = $this->model->register();
        // if ($result == 1) {
        //   # code...
        //   $this->view->message= "<script type=\"text/javascript\"> Notiflix.Report.Success( 'Bạn đăng ký thành công', 'Bạn đăng ký thành công hãy đợi quản trị viên duyệt đơn. Cảm ơn', 'Xác nhận',function(){window.location='index.html';});</script>";
        // }else{
        //   $this->view->message="<script type=\"text/javascript\"> Notiflix.Report.Failure( 'Bạn đăng ký thất bại', 'Bạn đăng ký vé không thành công. Cảm ơn', 'Xác nhận', function(){window.location='index.html';});</script>";
        // }
        // print_r($this->view->message);
        // die();

      }
      $this->view->data=['kiemtra'=>$resultkt];
      $this->view->render('register','registerView');
    }
  }
?>