<?php
  class schedulesController extends Controller {

    public function index(){
			$sukien = $this->model->sukien();
			$this->view->message = [-1];

			$thongtin = 0;
			$sohuuve = 0;
    	if(isset($_SESSION['mssv'])){
				$thongtin = $this->model->thongtin($_SESSION['mssv']);
				$sohuuve = $this->model->sohuuve($_SESSION['mssv']);
				$this->password = $thongtin[0]['password'];
    	}

			if(isset($_REQUEST['changePass'])) {
        $oldPass = $_REQUEST['oldPass'];
        $newPass = $_REQUEST['newPass'];
        $reNewPass = $_REQUEST['reNewPass'];
        if($this->password == md5($oldPass) && $newPass != $oldPass && $newPass == $reNewPass ){
					$result = $this->model->changePass($_SESSION['mssv'], md5($reNewPass));

					if($result == 1){
						session_destroy();
						$this->view->message = [1, "Đổi mật khẩu"];
						// echo '<script type="text/javascript">window.location="logout.html"</script>';
					}
					else {
						$this->view->message = [0, "Đổi mật khẩu"];
					}
				}
				else {
					$this->view->message = [0, "Đổi mật khẩu"];
				}

			}

			if(isset($_REQUEST['requestChangeTicket'])) {
				$mssvYecau = $_SESSION['mssv'];
				$mssvNhan = $_REQUEST['mssvNhan'];

				$result = $this->model->chuyenve($mssvYecau, $mssvNhan);

				if($result) {
					$this->view->message=[1, "Yêu cầu chuyển vé"];
				} else {
					$this->view->message=[0, "Yêu cầu chuyển vé"];
				}
			}


    	$this->view->data=['sukien'=>$sukien,'thongtin'=>$thongtin, 'sohuuve' => $sohuuve];
    	$this->view->render('schedules','schedulesView');
    }
  }

?>