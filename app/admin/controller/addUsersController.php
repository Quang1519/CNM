<?php
  class addUsersController extends Controller {
    public function index(){

      if(isset($_REQUEST['create'])){
        $data = [];
        $data['gioitinh'] = $_REQUEST['gioitinh'];
        $data['hovaten'] = $_REQUEST['hovatendem'];
        $data['khoa'] = $_REQUEST['khoa'];

        $data['mssv'] = $_REQUEST['mssv'];
        $data['nganh'] = $_REQUEST['nganh'];
        $data['ngaysinh'] = str_replace("/", "-", $_REQUEST['ngaysinh']);
        $data['password'] = md5(1111);
        $data['phanquyen'] = 0;
        $data['ten'] = $_REQUEST['ten'];
        $data['trangthai'] = 0;
        $data['username'] = $_REQUEST['mssv'];

        $data['lop'] = $_REQUEST['lop'];
        $result = $this->model->addUser($data);
        // $url = "https://ptta-cnm.herokuapp.com/dangkyve/create/".rawurlencode(
        // die();


      }

      $this->view->data = $this->model->getUsers();
      $this->view->render('addUsers', 'createdTableUsers');
    }
  }
?>