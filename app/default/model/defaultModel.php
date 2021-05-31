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

  public function register($ten,$hoten,$mssv,$masukien, $message){
    $url = $this->link."dangkyve/create/".rawurlencode($hoten."/".$mssv."/".$ten."/0/".$masukien);
    $result = $this->themxoasua($url);
    if($result){
      return [1,$message, 'Bạn đăng ký thành công hãy đợi quản trị viên xác nhận. Cảm ơn', 'index'];
    }
    else {
      return [0, $message, 'Bạn đăng ký vé không thành công. Cảm ơn', 'index'];
    }
  }

  public function kiemtra($mssv){
    $url = "https://ptta-cnm.herokuapp.com/dangkyve/".$mssv;
    $result = $this->loaddulieu($url);
    $numrow=-1;
    foreach($result as $key => $val){
      $numrow=$key;
    }
    if ($numrow !=-1) {
      return 1;
    }
    else{
      return 0;
    }
  }

  // public function kiemtra($mssv){
  //   $url = "https://ptta-cnm.herokuapp.com/dangkyve/".$mssv;
  //   $result = $this->loaddulieu($url);
  //   $numrow=-1;
  //   foreach($result as $key => $val){
  //     $numrow=$key;
  //   }
  //   if ($numrow>0) {
  //     return 0;
  //   }elseif ($numrow == -1) {
  //     # code...
  //     return 0;
  //   }
  //   else{
  //     return 1;
  //   }
  // }

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

  public function sohuuve($mssv) {
    $url = $this->link."sohuuve/".$mssv;
    $result = $this->loaddulieu($url);
    // var_dump($result[0]['mave']);
    if(!empty($result)) {
      if($result[0]['mave']) {
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
    
  }

  public function checkChuyenVe($mssvYecau, $mssvNhan) {
    // if($this->sohuuve($mssvYecau))
    $url = $this->link."checkchuyenve"."/".$mssvYecau."/".$mssvNhan;
    $result = $this->loaddulieu($url);
    if($result['success']) {
      return true;
    } else {
      return false;
    }
  }


  public function chuyenVe($mssvYecau, $mssvNhan) {
    if($this->checkChuyenVe($mssvYecau, $mssvNhan)) {
      $url = $this->link."chuyenve"."/".$mssvYecau."/".$mssvNhan;
      $result = $this->loaddulieu($url);
      // if($re)
      // var_dump($result['success']);
      if($result['success']) {
        return true;
      } else {
        return false;
      }
    } else {
      return false;
    }
    
  }


  public function changePass($mssv, $password){
    $url = $this->link."/taikhoan/updatepass/".$mssv."/".$password;
    return $this->themxoasua($url);
  }
}


?>