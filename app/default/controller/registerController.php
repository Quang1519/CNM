<?php
  class registerController extends Controller {
    public function index() {
      $resultkt=0;
      
      if(isset($_SESSION['mssv'])){

        $password = $this->model->thongtin($_SESSION['mssv']);
        if($password[0]['password'] == md5(1111)){
          $resultkt = -1;
        }else {
          $resultkt = $this->model->kiemtra($_SESSION['mssv']);
        }
        // if($password) {

        // }
      }

      if(isset($_REQUEST['register'])){
        $ten = $_SESSION['ten'];
        $hoten = $_SESSION['hoten'];
        $mssv = $_SESSION['mssv'];
        $result = $this->model->register($ten,$hoten,$mssv);
        if ($result == 1) {
          # code...
          $this->view->message= "<script type=\"text/javascript\"> Notiflix.Report.Success( 'Bạn đăng ký thành công', 'Bạn đăng ký thành công hãy đợi quản trị viên duyệt đơn. Cảm ơn', 'Xác nhận',function(){window.location='index.html';});</script>";
        }else{
          $this->view->message="<script type=\"text/javascript\"> Notiflix.Report.Failure( 'Bạn đăng ký thất bại', 'Bạn đăng ký vé không thành công. Cảm ơn', 'Xác nhận', function(){window.location='index.html';});</script>";
        }

      }
      $this->view->data=['kiemtra'=>$resultkt];
      $this->view->render('register','registerView');
    }
  }
?>