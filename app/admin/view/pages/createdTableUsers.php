<?php
 class createdTableUsers {
  public function createTable(){
    $data = $this->data;

    foreach ($data as $result){
        echo '<tr><td>'.$result['mssv'].'</td>
        <td>'.$result['hovaten'].'</td>
        <td>'.$result['ten'].'</td>
        <td>'.$result['lop'].'</td>';
        if($result['trangthai'] == 0){
          echo '<td><span class="badge label-table badge-success">Đã nhận vé</span></td></tr>';
        }
        else {
          echo '<td><span class="badge label-table badge-danger">Chưa nhận vé</span></td></tr>';
        }
    }
  }
 }

?>