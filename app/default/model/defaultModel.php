<?php

class defaultModel extends Model {

  public function login($username,$password){
    $sql = "SELECT * from `user` where `mssv` = $username and `password` = '$password' limit 1";
    $result = $this->loaddulieu($sql);
    return $result;
  }

  public function register($ten,$hovatendem,$mssv,$lop,$email){
    $sql = "INSERT INTO `user`(`ten`,`hovatendem`,`mssv`,`lop`,`email`,`phanquyen`) VALUES('$ten','$hovatendem','$mssv','$lop','$email',0)";
    $result = $this->themxoasuakhonglastid($sql);
    return $result;
  }

}


?>