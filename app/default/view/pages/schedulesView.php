<?php

class schedulesView
{
    function sukienlist(){
    	$ketqua = $this->data['sukien'];
    	foreach($ketqua as $key=>$val){
    		if(isset($val)){

					if(strlen($val['diadiem']) > 30){
						$diadiem = explode(",",$val['diadiem'],-1);
						$diadiem = implode(", ",$diadiem);
					}
					else {
						$diadiem = $val['diadiem'];
					}


    			echo '<div class="row inforation-wrapper">
						<div class="col-lg-3 col-md-6 col-xs-12">
						<ul>
						<li>
						<i class="lni-map-marker"></i>
						</li>
						<li><span><b>Địa điểm</b>'.$diadiem.'</span></li>
						</ul>
						</div>
						<div class="col-lg-3 col-md-6 col-xs-12">
						<ul>
						<ul>
						<li>
						<i class="lni-calendar"></i>
						</li>
						<li><span><b>Thời gian</b> '.$val['thoigian']. '</span></li>
						</ul>
						</div>
						<div class="col-lg-3 col-md-6 col-xs-12">
						<ul>
						<li>
						<i class="lni-mic"></i>
						</li>
						<li><span><b>Khách mời</b> '.$val['khachmoi'].' Khách mời</span></li>
						</ul>
						</div>
						<div class="col-lg-3 col-md-6 col-xs-12">
						<ul>
						<li>
						<i class="lni-user"></i>
						</li>
						<li><span><b>Chỗ ngồi</b> '.$val['chongoi'].' người</span></li>
						</ul>
						</div>
						</div>';
    		}else{
    			echo "<script type=\"text/javascript\">

    		Notiflix.Report.Failure( 'Lỗi', 'Hiện tại đang có chút vấn đề xin cáo lỗi', 'Xác nhận', function(){
				window.location='index.html';
    	});
    </script> ";
    		}
    	};
    }
    function thongtinsinhvien(){
    	$ketqua = $this->data['thongtin'];
    	$sohuu = $this->data['sohuuve'] ? "Có vé" : "Không"; 
    	if($ketqua!=0){
    		foreach($ketqua as  $val){
    		$gioitinh = ($val['gioitinh']==1) ? 'Nam':'Nữ';
    		$trangthai = ($val['trangthai']==0)? 'Đang học':'Nghỉ học';

				echo '
				<div class="card">
				<div id="headingOne">
				<div class="schedule-slot-time">
					Thông tin sinh viên
				</div>
				<div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
				<div class="images-box">
				<img class="img-fluid" src="assets\img\speaker\speakers-3.jpg" alt="">
				</div>
				<h4>'.$val['hovaten'].' '.$val['ten'].'</h4>
				<h5 class="name">'.$val['mssv'].'</h5>
				</div>
				</div>
				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
				<div class="card-body">
				<table class="table table-borderless">
				<tr>
					<th>Khoa</th>
					<th>Lớp</th>
					<th>Giới tính</th>
					<th>Chuyên Ngành</th>
					<th>Ngày Sinh</th>
					<th>Tình trạng</th>
					<th>Sở hữu vé</th>
				</tr>
				<tr>
					<td>'.$val['khoa'].'</td>
					<td>'.$val['lop'].'</td>
					<td>'.$gioitinh.'</td>
					<td>'.$val['nganh'].'</td>
					<td>'.$val['ngaysinh'].'</td>
					<td class="text-danger">'.$trangthai.'</td>
					<td class="text-danger">'.$sohuu.'</td>
				</tr>
				</table>
				</div>
				</div>
				</div>

		';

		$this->changePass();

		if($this->data['sohuuve']) {
			$this->chuyenve();
		}
    	}
    }else
    	{

    		echo "<script type=\"text/javascript\">
    		Notiflix.Confirm.Show('Thông báo','Bạn có muốn đăng nhập?','Yes','No',function(){window.location='login.html';});
    </script>";
    	}
    }


    public function changePass()
    {
    	echo '<div class="card">
	<div id="headingTwo">
	<div class="schedule-slot-time">
	<!-- <h5 class="name text-danger">Đổi mật khẩu</h5> -->
	<!-- <h6 class="h6">Bạn không thể đăng ký vé nếu chưa đổi mật khẩu</h6> -->
	Thay đổi mật khẩu
	</div>
	<div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		<div class="images-box">
		<!-- <img class="img-fluid" src="assets\img\speaker\speakers-2.jpg" alt=""> -->
		</div>
	<!-- <h5 class="name text-danger">Đổi mật khẩu</h5> -->
		<h6 class="h6">Bạn không thể đăng ký vé nếu chưa đổi mật khẩu</h6>
	</div>
	</div>
	<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
	<div class="card-body">

	<!-- <h4 class="h4 section-title wow fadeInUp" data-wow-delay="0.2s">Thông tin sinh viên</h4> -->
	<div class="col-md-12">
	<!-- <div class="form-wrapper"> -->
  <!-- <form role="form" method="post" id="loginForm" name="login-form" data-toggle="validator"> -->
			<div class="card-box">
					<!-- <h4 class="header-title mb-3">Horizontal form</h4> -->

					<form class="form-horizontal" name="changePass" role="form" method="post" data-toggle="validator">
							<div class="form-group row">
									<label for="inputEmail3" class="col-sm-3 col-form-label">Mật khẩu hiện tại</label>
									<div class="col-sm-9">
											<input type="password" class="form-control" id="inputEmail3" name="oldPass" placeholder="Nhập khẩu hiện tại" required data-error="Vui lòng điền mật khẩu hiện tại">
                			<div class="help-block with-errors"></div>
                	</div>
							</div>
							<div class="form-group row">
									<label for="inputPassword3" class="col-sm-3 col-form-label">Mật khẩu mới</label>
									<div class="col-sm-9">
											<input type="password" class="form-control" id="inputPassword3" name="newPass"  placeholder="Nhập khẩu mới" required data-error="Vui lòng điền mật khẩu mới">
											<div class="help-block with-errors"></div>
									</div>
							</div>
							<div class="form-group row">
									<label for="inputPassword5" class="col-sm-3 col-form-label">Nhập lại mật khẩu mới</label>
									<div class="col-sm-9">
											<input type="password" class="form-control" id="inputPassword5" name="reNewPass"  placeholder="Nhập lại mật khẩu mới" required data-error="Vui lòng điền lại mật khẩu mới">
											<div class="help-block with-errors"></div>
									</div>
							</div>

							<div class="form-group mb-0 justify-content-end row">
									<div class="col-sm-9">
											<button type="submit" name="changePass" class="btn btn-common">Xác nhận</button>
									</div>
							</div>
					</form>
			</div>
	</div>

	</div>
	</div>
	</div>';
    }


    public function chuyenVe()
    {
    	echo '<div class="card">
	<div id="headingThree">
	<div class="schedule-slot-time">
	 Yêu cầu chuyển vé
	</div>
	<div class="collapsed card-header" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		<div class="images-box">
		</div>
		<h6 class="h6">Bạn có thể chuyển vé của mình cho sinh viên khác có trong hệ thống</h6>
	</div>
	</div>
	<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
	<div class="card-body">

	<div class="col-md-12">
			<div class="card-box">

					<form class="form-horizontal" name="requestChangeTicket" role="form" method="post" data-toggle="validator">
							<div class="form-group row">
									<label for="inputEmail3" class="col-sm-3 col-form-label">Nhập mã số sinh viên nhận vé</label>
									<div class="col-sm-9">
											<input type="text" class="form-control" id="inputEmail3" name="mssvNhan" placeholder="Nhập mã số sinh viên nhận vé" required data-error="Vui lòng điền mã số sinh viên nhận vé">
                			<div class="help-block with-errors"></div>
                	</div>
							</div>
						

							<div class="form-group mb-0 justify-content-end row">
									<div class="col-sm-9">
											<button type="submit" name="requestChangeTicket" class="btn btn-common">Xác nhận</button>
									</div>
							</div>
					</form>
			</div>
	</div>

	</div>
	</div>
	</div>';
    }
}
 ?>