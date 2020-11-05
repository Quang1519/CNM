<?php
  class loginController extends Controller{
    public function index(){

      // print_r($_REQUEST);
      if(isset($_REQUEST['login'])){
        $username = $_REQUEST['username'];
        $password = md5($_REQUEST['password']);

        $user = $this->model->login($username,$password);
        // print_r($user);

        if($user) {
          $result = $user[0];
					$mssv=$result['mssv'];
					// $password=$result['password'];
          // $hotendem=$result['hotendem'];
          $ten = $result['ten'];
					$phanquyen=$result['phanquyen'];

					//session//

					$_SESSION['mssv']=$mssv;
					// $_SESSION['password']=$password;
					$_SESSION['phanquyen']=$phanquyen;
          $_SESSION['ten']=$ten;

          echo '<script type="text/javascript">window.location="admin/index.html"</script>';
				}

        else
        {
          $this->view->message =
          '<div class="alert alert-danger mt-3" role="alert">
            Bạn đã nhập sai mật khẩu hoặc tài khoản
          </div>';
        }


      }
      $this->view->render('login');

    }
  }

?>