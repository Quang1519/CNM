<?php
  class THONGBAO {
    public static function message($message, $submessage = '', $location = ''){
      if(isset($message[2])) {
        $submessage = $message[2];
      }
      // echo $location;
      // print_r($message);
      // die();
      if(isset($message[3])){
        $location = 'window.location="'.$message[3].'.html"';
        // echo $location;
        // die();
      }
      switch ($message[0]){
        case 0:
            echo "<script type=\"text/javascript\"> Notiflix.Report.Failure( '".$message[1]." thất bại', '".$submessage."', 'Xác nhận', function(){".$location."
                ;
            } ); </script>";
        break;
        case 1:
            echo "<script type=\"text/javascript\"> Notiflix.Report.Success( '".$message[1]." thành công', '". $submessage."', 'Xác nhận', function(){".$location."
                ;
            } ); </script>";
        break;
      }
    }
  }

?>