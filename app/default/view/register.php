<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'components/head.php' ?>
</head>
<body>

<?php include 'components/header.php' ?>
<?php include 'components/script.php' ?>


<section id="contact-map" class="section-padding">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title-header text-center">
<h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Đăng ký nhận vé</h2>
<p class="wow fadeInDown" data-wow-delay="0.2s">Chương trình khai giảng hàng năm của đại học Công Nghiệp Thành Phố Hồ Chí Minh <br> Chương trình không dành cho tất cả sinh viên.</p>
</div>
</div>
</div>
<div class="row justify-content-center">
<div class="col-lg-8 col-md-12 col-xs-12">
<div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
<div class="form-wrapper">
	
<form role="form" method="post" id="registerForm" name="register-form" data-toggle="validator">
<div class="row">
<?php $this->page->dangky();  ?>
<!-- <div id="msgSubmit" class="h3 text-center hidden"></div> -->
<?php if(isset($this->message)) {echo $this->message;} ?>
</div>
</div>
</div>
</form>

</div>
</div>
</div>
</div>
</div>


</section>



<?php include 'components/footer.php' ?>


<?php
		if(empty($_SESSION['mssv'])&&empty($_SESSION['phanquyen'])&&empty($_SESSION['ten'])&&empty($_SESSION['hoten'])){
			echo "<script type=\"text/javascript\"> Notiflix.Report.Failure( 'Bạn chưa đăng nhập', 'Bạn phải đăng nhập để thực hiện đăng ký vé', 'Xác nhận', function(){
				window.location='login.html';
			} ); </script>";
		}
    ?>
    
</body>
</html>
