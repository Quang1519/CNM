<?php

class adminModel extends Model {
  protected $link = 'https://ptta-cnm.herokuapp.com/';

  public function makeUrl($link, $data = ''){
    if($data) {
      $url = '';
      foreach($data as $key => $value){
        $url .= $value."/";
      }
      $url = substr($url, 0, -1);
      return $this->link.$link.rawurlencode($url);
    }
    else {
      return $this->link.$link;
    }
  }

  public function getUsers(){
    $url = $this->makeUrl("/taikhoan");
    return $this->loaddulieu($url);
  }

  public function addUser($data){
    $message = "Thêm tài khoản mới";
    $url = $this->makeUrl("taikhoan/create/", $data);
    $result = $this->themxoasua($url);
    if($result){
      return [1, $message];
    }
    else {
      return [0, $message];
    }
  }

  public function getEvent(){
    $url = $this->makeUrl("sukien");
    return $this->loaddulieu($url);
  }

  public function updateEvent($data){
    $message = "Cập nhật sự kiện";
    $url = $this->makeUrl("sukien/update/", $data);
    $result = $this->themxoasua($url);
    if($result){
      return [1, $message];
    }
    else {
      return [0, $message];
    }
  }

  public function createEvent($data){
    $message = "Thêm mới sự kiện";
    $url = $this->makeUrl("sukien/create/", $data);
    $result = $this->themxoasua($url);
    if($result){
      return [1, $message];
    }
    else {
      return [0, $message];
    }
  }

}


?>