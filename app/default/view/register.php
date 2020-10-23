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
<form role="form" method="post" id="registerForm" name="register-form" data-toggle="validator">
<div class="row">
<div class="col-md-6 form-line">
<div class="form-group">
<input type="text" class="form-control" id="name" name="ten" placeholder="Tên" required="" data-error="Vui lòng điền tên">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6 form-line">
<div class="form-group">
<input type="text" class="form-control" id="name" name="hovatendem" placeholder="Họ và tên đệm" required="" data-error="Vui lòng điền họ và tên đệm">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6 form-line">
<div class="form-group">
<input type="number" class="form-control" id="mssv" name="mssv" placeholder="Mã số sinh viên" required="" data-error="Vui lòng điền mã số sinh viên">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-6 form-line">
<div class="form-group">
<input type="text" class="form-control" id="lop" name="lop" placeholder="Lớp" required="" data-error="Vui lòng điền lớp">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-md-12 form-line">
<div class="form-group">
<input type="email" class="form-control" id="msg_subject" name="email" placeholder="Email" required="" data-error="Vui lòng điền email">
<div class="help-block with-errors"></div>
</div>
</div>
<!-- <div class="col-md-12">
<div class="form-group">
<textarea class="form-control" rows="4" id="message" name="message" required="" data-error="Write your message"></textarea> -->
</div>
<div class="form-submit">
<button type="submit" class="btn btn-common" id="form-submit" name="register"><i class="fa fa-paper-plane" aria-hidden="true"></i> Đăng ký</button>
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

<?php include 'components/script.php' ?>
</body>
</html>
