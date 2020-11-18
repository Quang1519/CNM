<?php

class schedulesView
{
    function sukienlist(){
    	$ketqua = $this->data['sukien'];
    	foreach($ketqua as $key=>$val){
    		if(isset($val)){
    			echo '<div class="row inforation-wrapper">
						<div class="col-lg-3 col-md-6 col-xs-12">
						<ul>
						<li>
						<i class="lni-map-marker"></i>
						</li>
						<li><span><b>Địa điểm</b> '.$val['diadiem'].'</span></li>
						</ul>
						</div>
						<div class="col-lg-3 col-md-6 col-xs-12">
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
    	if($ketqua!=0){
    		foreach($ketqua as  $val){
    		$gioitinh = ($val['gioitinh']==1) ? 'Nam':'Nữ';
    		$trangthai = ($val['trangthai']==0)? 'Đang học':'Nghỉ học';
    		
    		echo '
    		<div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
	<div class="images-box">
	
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
		</tr>
		<tr>
			<td>'.$val['khoa'].'</td>
			<td>'.$val['lop'].'</td>
			<td>'.$gioitinh.'</td>
			<td>'.$val['nganh'].'</td>
			<td>'.$val['ngaysinh'].'</td>
			<td class="text-danger">'.$trangthai.'</td>
		</tr>
	</table>
	</div>';
    	}
    }else
    	{
    		
    		echo "<script type=\"text/javascript\">
    		Notiflix.Confirm.Show('Thông báo','Bạn có muốn đăng nhập?','Yes','No',function(){window.location='login.html';});
    </script>";
    	}
    }
}
 ?>