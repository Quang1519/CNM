<?php
  class schedulesController extends Controller {

    public function index(){
			$sukien = $this->model->sukien();
			$this->view->message = -1;

    	if(isset($_SESSION['mssv'])){
				$thongtin = $this->model->thongtin($_SESSION['mssv']);
				$this->password = $thongtin[0]['password'];
    	}else{
    		$thongtin = 0;
			}

			if(isset($_REQUEST['changePass'])) {
        $oldPass = $_REQUEST['oldPass'];
        $newPass = $_REQUEST['newPass'];
        $reNewPass = $_REQUEST['reNewPass'];
        if($this->password == md5($oldPass) && $newPass != $oldPass && $newPass == $reNewPass ){
					$result = $this->model->changePass($_SESSION['mssv'], md5($reNewPass));

					if($result == 1){
						session_destroy();
						$this->view->message= 1;
						// echo '<script type="text/javascript">window.location="logout.html"</script>';
					}
					else {
						$this->view->message = 0;
					}
				}
				else {
					$this->view->message = 0;
				}

			}

    	$this->view->data=['sukien'=>$sukien,'thongtin'=>$thongtin];
    	$this->view->render('schedules','schedulesView');
    }
  }

?>