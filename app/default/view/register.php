<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'components/head.php' ?>
</head>
<body>

<?php include 'components/header.php' ?>


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
	<?php
		if(isset($_SESSION['mssv'])&&isset($_SESSION['phanquyen'])&&isset($_SESSION['ten'])&&isset($_SESSION['hoten'])){
    ?>
<form role="form" method="post" id="registerForm" name="register-form" data-toggle="validator">
<div class="row">
<div class="col-md-12 form-line">
<div class="form-group">
<p class="text-center">Hãy đảm bảo thông tin của bạn là chính xác.</p>
<div class="help-block with-errors"></div>
</div>
</div>
<!-- <div class="col-md-12">
<div class="form-group">
<textarea class="form-control" rows="4" id="message" name="message" required="" data-error="Write your message"></textarea> -->
</div>
<div class="form-submit">
<button type="submit" class="btn btn-common" id="nutdk" name="register"><i class="fa fa-paper-plane" aria-hidden="true"></i> Đăng ký</button>
<!-- <div id="msgSubmit" class="h3 text-center hidden"></div> -->
<?php if(isset($this->message)) {echo $this->message;} ?>
</div>
</div>
</div>
</form>
<?php  }
	else{
		echo '<div class="alert alert-danger text-center"  role="alert">
          Bạn phải đăng nhập để đăng ký vé
        </div>';
	}
?>
</div>
</div>
</div>
</div>
</div>


</section>



<?php include 'components/footer.php' ?>

<?php include 'components/script.php' ?>
</body>
</html>
