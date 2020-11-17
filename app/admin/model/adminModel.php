<?php

class adminModel extends Model {

  public function getUsers(){
    $url = 'https://ptta-cnm.herokuapp.com/taikhoan';
    $result = $this->loaddulieu($url);
    return $result;
  }

  public function addUser($data){
    $url = '';
    foreach($data as $key => $value){
        $url .= $value."/";
    }
    $url = substr($url, 0, -1);
    $url = "https://ptta-cnm.herokuapp.com/taikhoan/create/".rawurlencode($url);
    // die($url);
    $result = $this->themxoasua($url);
  }
}


?>