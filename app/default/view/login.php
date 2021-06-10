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
          <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Đăng nhập</h2>
          <p class="wow fadeInDown" data-wow-delay="0.2s">Chỉ dành cho những sinh viên có trong danh sách tham dự sự kiện.<br> Chức năng không dành cho tất cả sinh viên.</p>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-12 col-xs-12">
        <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
          <div class="form-wrapper">
          <form role="form" method="post" id="loginForm" name="login-form" data-toggle="validator">
            <div class="row">

              <div class="col-md-12 form-line">
                <div class="form-group">
                <input type="text" class="form-control" id="name" name="username" placeholder="Tên đăng nhập" required="" data-error="Vui lòng điền tên đăng nhập">
                <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-12 form-line">
                <div class="form-group">
                <input type="password" class="form-control" id="msg_subject" name="password" placeholder="Mật khẩu" required="" data-error="Vui lòng điền mật khẩu">
                <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-submit">
                  <button type="submit" class="btn btn-common" name="login" id="form-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Đăng nhập</button>
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



</script>
</body>
</html>
