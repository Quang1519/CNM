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

  public function register($ten,$hovatendem,$mssv,$lop,$email){
    $sql = "INSERT INTO `user`(`ten`,`hovatendem`,`mssv`,`lop`,`email`,`phanquyen`) VALUES('$ten','$hovatendem','$mssv','$lop','$email',0)";
    $result = $this->themxoasuakhonglastid($sql);
    return $result;
  }

}


?>