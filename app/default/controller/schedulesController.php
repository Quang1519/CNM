<?php
  class schedulesController extends Controller {

    public function index(){
    	$sukien = $this->model->sukien();
    	if(isset($_SESSION['mssv'])){
    		$thongtin = $this->model->thongtin($_SESSION['mssv']);
    	}else{
    		$thongtin = 0;
    	}
    	$this->view->data=['sukien'=>$sukien,'thongtin'=>$thongtin];
    	$this->view->render('schedules','schedulesView');
    }
  }

?>