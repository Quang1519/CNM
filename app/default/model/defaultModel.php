<?php

class defaultModel extends Model {

  public function login($username,$password){
    $url = "https://ptta-cnm.herokuapp.com/taikhoan/".$username;
    $result = $this->loaddulieu($url);
    $numrow=-1;
    foreach($result as $key => $val){
      $numrow=$key;
    }
    if ($numrow>0) {
      return false;
    }elseif ($numrow == -1) {
      # code...
      return false;
    }
    else{
      return $result;
    }
    
  }

  public function register($ten,$hoten,$mssv){
    $url = "https://ptta-cnm.herokuapp.com/dangkyve/create/".rawurlencode($hoten."/".$mssv."/".$ten."/0");
    $result = $this->loaddulieu($url);
    return $result;
  }

}


?>