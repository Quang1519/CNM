<?php
  class indexController extends Controller {
    public function index(){

      $this->view->render('index');
    }

    public function getEventTime() {
      $data = $this->model->sukien();
      // print_r($data[0]['ngay']);
      $process =  explode('-',$data[0]['ngay']);
      $result = $process[2]."/".$process[0]."/".$process[1];
      // for($i= count($process) -1; $i>=0 ;$i-- ){
      //   $result.= $process[$i].'/';
      // }
      // $result = substr($result, 0, -1);
      // echo $result;
      // die();
      print json_encode($result, JSON_UNESCAPED_UNICODE);
      // json_encode($result,JSON_UNESCAPED_UNICODE)
    }

    // public function
  }

?>