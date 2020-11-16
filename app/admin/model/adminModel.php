<?php

class adminModel extends Model {

  public function getUsers(){
    $url = 'https://ptta-cnm.herokuapp.com/taikhoan';
    $result = $this->loaddulieu($url);
    return $result;
  }
}


?>