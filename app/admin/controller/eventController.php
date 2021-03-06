<?php
  class eventController extends Controller {
    public function index(){

      $this->view->message = [-1];
      if(isset($_REQUEST['create'])){

        $data['chongoi'] = $_REQUEST['chongoi'];
        $data['diadiem'] = $_REQUEST['diachi'];
        $data['khachmoi'] = $_REQUEST['khachmoi'];
        $data['thoigian'] = $_REQUEST['batdau']."-".$_REQUEST['ketthuc'];
        // $data['trangthai'] = 0;
        if(isset($_REQUEST['customRadio'])){
          $data['trangthai'] = $_REQUEST['customRadio'];
        }
        else {
          $data['trangthai'] = 1;
        }
        $data['masukien'] = $_REQUEST['masukien'];
        $data['ngay'] =  str_replace("/", "-", $_REQUEST['ngay']);
        // $data['trangthai'] = $_REQUEST['customRadio'];

        if($_REQUEST['create'] == "New") {
          $data['trangthai'] = 1;
          $message = "Thêm sự kiện mới";
          $this->view->message = $this->model->checkEvent($data, "create", $message);
        }
        else {
          $message = "Cập nhật sự kiện";
          $this->view->message = $this->model->checkEvent($data, "update", $message);
        }
      }

      $this->view->data = $this->model->getEvent();
      $this->view->render('event', 'eventTable');
    }

  }


?>