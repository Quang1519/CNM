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