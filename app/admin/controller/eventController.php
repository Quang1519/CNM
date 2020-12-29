<?php
  class eventController extends Controller {
    public function index(){

      $this->view->message = [-1];
      if(isset($_REQUEST['create'])){

        $data['chongoi'] = $_REQUEST['chongoi'];
        $data['diadiem'] = $_REQUEST['diachi'];
        $data['khachmoi'] = $_REQUEST['khachmoi'];
        $data['thoigian'] = $_REQUEST['batdau']."-".$_REQUEST['ketthuc'];
        $data['trangthai'] = 0;
        $data['masukien'] = $_REQUEST['masukien'];
        $data['ngay'] =  str_replace("/", "-", $_REQUEST['ngay']);
        $data['trangthai'] = $_REQUEST['customRadio'];

        if($_REQUEST['create'] == "New") {
          $this->view->message = $this->model->createEvent($data);
        }
        else {
          $this->view->message = $this->model->updateEvent($data);
        }
      }

      $this->view->data = $this->model->getEvent();

      $this->view->render('event', 'eventTable');

    }
  }


?>