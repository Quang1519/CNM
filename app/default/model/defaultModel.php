<?php

class defaultModel extends Model {

  protected $link = "https://ptta-cnm.herokuapp.com/";

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
    return $this->themxoasua($url);

  // public function load(){
  //   $url =
  }
  public function kiemtra($mssv){
    $url = "https://ptta-cnm.herokuapp.com/dangkyve/".$mssv;
    $result = $this->loaddulieu($url);
    $numrow=-1;
    foreach($result as $key => $val){
      $numrow=$key;
    }
    if ($numrow>0) {
      return 0;
    }elseif ($numrow == -1) {
      # code...
      return 0;
    }
    else{
      return 1;
    }
  }
  public function sukien()
  {
      $url ="https://ptta-cnm.herokuapp.com/sukien/trangthai";
      $result = $this->loaddulieu($url);
      return $result;
  }
  public function thongtin($mssv)
  {
    $url= "https://ptta-cnm.herokuapp.com/taikhoan/".$mssv;
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


  public function changePass($mssv, $password){
    $url = $this->link."/taikhoan/updatepass/".$mssv."/".$password;
    return $this->themxoasua($url);
  }
}


?>