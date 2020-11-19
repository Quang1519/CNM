<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'components/head.php' ?>
</head>
<body>

<?php include 'components/header.php' ?>
<?php include 'components/script.php' ?>


<!-- <section id="about" class="section-padding">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-12 col-xs-12">
<div class="img-thumb">
<img class="img-fluid" src="assets\img\about\img1.png" alt="">
</div>
</div>
<div class="col-lg-6 col-md-12 col-xs-12">
<div class="about-content">
<div>
<div class="about-text">
<h2>About The Conference</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ncididunt ametfh consectetur dolore magna aliqua. Ut enim ad minim veniam dolor sitame magnaelit ate consectetur adipisicing. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod.</p>
</div>
<ul class="stylish-list mb-3">
<li><i class="lni-check-mark-circle"></i>Networking Sessions</li>
<li><i class="lni-check-mark-circle"></i>Meet New Professional Faces</li>
<li><i class="lni-check-mark-circle"></i>Get Inspired by Amazing Speakers</li>
<li><i class="lni-check-mark-circle"></i>Lorem ipsum dolor sit ameterib</li>
<li><i class="lni-check-mark-circle"></i>Lorem ipsum dolor sit ameterib quodsi</li>
</ul>
<a class="btn btn-common" href="#">Learn More</a>
</div>
</div>
</div>
</div>
</div>
</section>
 -->



<section id="information-bar">
<div class="container">
<?php $this->page->sukienlist();?>
</div>
</section>



<section id="schedules" class="schedule section-padding mb-5">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title-header text-center">
<h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Thông tin sinh viên</h2>

</div>
</div>
</div>
<div class="row">

<div class="col-12">
<div class="schedule-area row wow fadeInDown" data-wow-delay="0.3s">
<div class="schedule-tab-content col-12 clearfix">
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="monday" role="tabpanel" aria-labelledby="monday-tab">
<div id="accordion">
	<?php $this->page->thongtinsinhvien(); ?>
	<div class="card">
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

	<!-- <div class="location">
	<span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
	</div> -->
	</div>
	</div>
	</div>

</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<?php include 'components/footer.php' ?>
<?php

	switch ($this->message){
		case 0:
			echo "<script type=\"text/javascript\"> Notiflix.Report.Failure( 'Đổi mật khẩu thất bại', '', 'Xác nhận', function(){
				;
			} ); </script>";
		break;
		case 1:
			echo "<script type=\"text/javascript\"> Notiflix.Report.Success( 'Đổi mật thành công', 'Vui lòng đăng nhập lại', 'Xác nhận', function(){
				window.location ='login.html';
			} ); </script>";
		break;
	}

		// if(isset($this->message)){
		// 	echo "<script type=\"text/javascript\"> Notiflix.Report.Failure( 'Đổi mật khẩu thất bại', '', 'Xác nhận', function(){
		// 		;
		// 	} ); </script>";
		// }

    ?>

</body>
</html>