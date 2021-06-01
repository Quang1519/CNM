<header id="header-wrap">

<nav class="navbar navbar-expand-lg bg-inverse fixed-top scrolling-navbar">
<div class="container">

<a href="index.html" class="navbar-brand"><img src="<?php echo constant("DIR_APP") ?>default\view\assets\img\logo.png" alt=""></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
<i class="lni-menu"></i>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
<ul class="navbar-nav mr-auto w-100 justify-content-end">
<li class="nav-item <?php echo $this->active=='index' ? 'active':'' ?>">
<a class="nav-link" href="index.html">
Trang chủ
</a>
</li>
<li class="nav-item <?php echo $this->active=='schedules' ? 'active':'' ?>" >
<a class="nav-link" href="schedules.html">
Thông tin
</a>
</li>
<li class="nav-item <?php echo $this->active=='speakers' ? 'active':'' ?>">
<a class="nav-link" href="speakers.html">
Khách mời
</a>
</li>
<!-- <li class="nav-item <?php echo $this->active=='register' ? 'active':'' ?>">
<a class="nav-link" href="register.html">
Nhận vé
</a>
</li> -->
<li class='nav-item <?php echo $this->active=='login' ? 'active':'' ?>'>
	<?php
	if (isset($_SESSION['mssv'])&&isset($_SESSION['phanquyen'])&&isset($_SESSION['ten'])) {
		# code...
		echo "<a class='nav-link' href='logout.html'>
  Đăng xuất
  </a>";
	}else{
		echo "<a class='nav-link' href='login.html'>
  Đăng nhập
  </a>";
	}
	?>


  </li>

</ul>
</div>
</div>
</nav>


<div id="hero-area" class="hero-area-bg">
<div class="overlay"></div>
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-9 col-sm-12">
<div class="contents text-center">
<div class="icon">
<i class="lni-mic"></i>
</div>
<!-- <p class="banner-info">23, 10 2020 - 371 Nguyễn Kiệm, P.3, Gò Vấp, HCM</p> -->
<h2 class="head-title">LỄ KHAI GIẢNG</h2>
<p class="banner-desc">
Ngày hội sinh viên tại trường vào buổi sáng có cộng điểm rèn luyện và lễ khai giảng được diễn ra vào buổi chiều.</p>
<div class="banner-btn">

</div>
</div>
</div>
</div>
</div>
</div>

</header>