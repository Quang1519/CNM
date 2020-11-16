<?php
  class loginController extends Controller{
    public function index(){

      // print_r($_REQUEST);
      if(isset($_REQUEST['login'])){
        $username = $_REQUEST['username'];
        $password = md5($_REQUEST['password']);

        $user = $this->model->login($username,$password);
        if ($user!=false) {
          # code...
          foreach($user as $key => $val){
            $user=$val['username'];
            $pass=$val['password'];
            if ($user==$username && $pass==$password) {
              //Code
              $mssv = $val['mssv'];
              $ten = $val['ten'];
              $hoten = $val['hovaten'];
              $phanquyen = $val['phanquyen'];
              $_SESSION['mssv']=$mssv;
              $_SESSION['phanquyen']=$phanquyen;
              $_SESSION['ten']=$ten;
              $_SESSION['hoten']=$hoten;
            }else{
              $this->view->message =
          '<div class="alert alert-danger mt-3" role="alert">
            Bạn đã nhập sai mật khẩu hoặc tài khoản
          </div>';

            }
          }
        }else{
          $this->view->message =
          '<div class="alert alert-danger mt-3" role="alert">
            Tài khoản của bạn không hợp lệ
          </div>';

        }
				}
        if(isset($_SESSION['mssv'])&&isset($_SESSION['phanquyen'])&&isset($_SESSION['ten'])&&isset($_SESSION['hoten'])){
          echo '<script type="text/javascript">window.location="index.html"</script>';

        }
        $this->view->render('login');
      }


    }


?>