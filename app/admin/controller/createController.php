<?php
  class createController extends Controller {
    public function index(){

      if(isset($_REQUEST['create'])){
        $hovatendem = $_REQUEST['hovatendem'];
        $ten = $_REQUEST['ten'];
        $mssv= $_REQUEST['mssv'];
        $lop = $_REQUEST['lop'];

      }

      $this->view->data = $this->model->getUsers();
      $this->view->render('create', 'createdTableUsers');
    }
  }
?>