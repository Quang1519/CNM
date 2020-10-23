<?php
class Model {

  protected $connect;
	public function __construct($request)
	{
		$dsn="mysql:host=".DB_HOST.";dbname=".DB_NAME."";

		$username=DB_USER;

		$password=DB_PASS;

		$options=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');

		$this->connect = new PDO($dsn,$username,$password,$options);

  }


	function loaddulieu($sql)

    {

        $link=$this->connect;

        $ketqua=$link->prepare($sql);

        $ketqua->setFetchMode(PDO::FETCH_ASSOC);

        $ketqua->execute();

        return $ketqua->fetchAll();

    }


    function themdulieuuser($user,$pass,$hodem,$ten,$phanquyen,$sdt,$diachi)

    {

	    $link=$this->connect;

	    $ketqua=$link->prepare("INSERT into taikhoan(username,password,phanquyen,hotendem,ten,sdt,diachi) VALUES(:username, :password,:phanquyen,:hotendem,:ten,:sdt,:diachi)");
	    // print_r($ketqua);
	    // die();

	    $ketqua->bindParam(':username',$user);

	    $ketqua->bindParam(':password',$pass);

	    $ketqua->bindParam(':phanquyen',$phanquyen);

	    $ketqua->bindParam(':hotendem',$hodem);

	    $ketqua->bindParam(':ten',$ten);

	    $ketqua->bindParam(':sdt',$sdt);

	    $ketqua->bindParam(':diachi',$diachi);

	    if($ketqua->execute())

	    {

	      return 1;

	    }

	    else

	    {

	      return 0;

	    }

    }


    public function themxoasua($sql) {
		$link = $this->connect;

		$ketqua = $link->prepare($sql);
		// print_r($sql); die();
		$ketqua->execute();
		// print_r($ketqua); die();
		return $link->lastInsertID();
	}
	function themxoasuakhonglastid($sql)
	{
		$link = $this->connect;

		$ketqua = $link->prepare($sql);
		// print_r($sql); die();
		if($ketqua->execute())
		{
			return 1;
		}
		else
		{
			return 0;
		}
		// print_r($ketqua); die();
	}
	function themxoasualastid($sql) {
		$link = $this->connect;

		$ketqua = $link->prepare($sql);
		// print_r($sql); die();
		if($ketqua->execute()) {
			$id=$link->lastInsertId();
			return $id;
		}
		else {
			return 0;
		}
	}



	function vn_to_str ($str){
		$unicode = array(

		'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',

		'd'=>'đ',

		'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',

		'i'=>'í|ì|ỉ|ĩ|ị',

		'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',

		'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',

		'y'=>'ý|ỳ|ỷ|ỹ|ỵ',

		'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

		'D'=>'Đ',

		'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

		'I'=>'Í|Ì|Ỉ|Ĩ|Ị',

		'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

		'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

		'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',

		);

		foreach($unicode as $nonUnicode=>$uni){

		$str = preg_replace("/($uni)/i", $nonUnicode, $str);

		}
		$str = str_replace(' ','',$str);


		return strtolower($str);

		}
}
?>