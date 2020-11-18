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
	<div class="card">
	<div id="headingOne">
	<div class="schedule-slot-time">
	<span>Thông Tin</span>
	Sinh Viên
	</div>
	<?php $this->page->thongtinsinhvien(); ?>
	</div>
	</div>
</div>
</div>
<!-- <div class="tab-pane fade" id="tuesday" role="tabpanel" aria-labelledby="tuesday-tab">
<div id="accordion2">
<div class="card">
<div id="headingOne1">
<div class="schedule-slot-time">
<span> 1.30 - 2.30 AM</span>
Workshop
</div>
<div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
<div class="images-box">
<img class="img-fluid" src="<?php echo DIR_APP ?>default\view\assets\img\speaker\speakers-2.jpg" alt="">
</div>
<h4>Web Design Principles and Best Practices</h4>
<h5 class="name">David Warner</h5>
</div>
</div>
<div id="collapseOne1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordion2">
<div class="card-body">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam earum nihil ex ipsa magni eligendi fugiat assumenda suscipit, accusantium, necessitatibus reiciendis odit sed, vero amet blanditiis?</p>
<div class="location">
<span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
</div>
</div>
</div>
</div>
<div class="card">
<div id="headingTwo2">
<div class="schedule-slot-time">
<span> 9.30 - 10.30 AM</span>
Workshop
</div>
<div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
<div class="images-box">
<img class="img-fluid" src="<?php echo DIR_APP ?>default\view\assets\img\speaker\speakers-1.jpg" alt="">
</div>
<h4>Web Design Principles and Best Practices</h4>
<h5 class="name">David Warner</h5>
</div>
</div>
<div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordion2">
<div class="card-body">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam earum nihil ex ipsa magni eligendi fugiat assumenda suscipit, accusantium, necessitatibus reiciendis odit sed, vero amet blanditiis?</p>
<div class="location">
<span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
</div>
</div>
</div>
</div>
</div>
</div> -->
<div class="tab-pane fade" id="wednesday" role="tabpanel" aria-labelledby="wednesday-tab">
 <div id="accordion3">
<!-- <div class="card">
<div id="headingOne3">
<div class="schedule-slot-time">
<span> 10.30 - 11.30 AM</span>
Workshop
</div>
<div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3">
<div class="images-box">
<img class="img-fluid" src="<?php echo DIR_APP ?>default\view\assets\img\speaker\speakers-1.jpg" alt="">
</div>
<h4>Web Design Principles and Best Practices</h4>
<h5 class="name">David Warner</h5>
</div>
</div>
<div id="collapseOne3" class="collapse show" aria-labelledby="headingOne3" data-parent="#accordion3">
<div class="card-body">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam earum nihil ex ipsa magni eligendi fugiat assumenda suscipit, accusantium, necessitatibus reiciendis odit sed, vero amet blanditiis?</p>
<div class="location">
<span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
</div>
</div>
</div>
</div> -->
<!-- <div class="card">
<div id="headingTwo3">
<div class="schedule-slot-time">
<span> 11.30 - 12.30 AM</span>
Workshop
</div>
<div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
<div class="images-box">
<img class="img-fluid" src="<?php echo DIR_APP ?>default\view\assets\img\speaker\speakers-2.jpg" alt="">
</div>
<h4>Web Design Principles and Best Practices</h4>
<h5 class="name">David Warner</h5>
</div>
</div>
<div id="collapseTwo3" class="collapse" aria-labelledby="headingTwo3" data-parent="#accordion3">
<div class="card-body">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam earum nihil ex ipsa magni eligendi fugiat assumenda suscipit, accusantium, necessitatibus reiciendis odit sed, vero amet blanditiis?</p>
<div class="location">
<span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
</div>
</div>
</div>
</div> -->
<!-- <div class="card">
<div id="headingThree3">
<div class="schedule-slot-time">
<span> 1.30 - 2.30 AM</span>
Workshop
</div>
<div class="collapsed card-header" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
<div class="images-box">
<img class="img-fluid" src="<?php echo DIR_APP ?>default\view\assets\img\speaker\speakers-3.jpg" alt="">
</div>
<h4>Web Design Principles and Best Practices</h4>
<h5 class="name">David Warner</h5>
</div>
</div>
<div id="collapseThree3" class="collapse" aria-labelledby="headingThree3" data-parent="#accordion3">
<div class="card-body">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minima dolores rerum maiores qui at commodi quas, reprehenderit eius consectetur quae magni molestias veniam, provident illum facere iure libero asperiores! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam earum nihil ex ipsa magni eligendi fugiat assumenda suscipit, accusantium, necessitatibus reiciendis odit sed, vero amet blanditiis?</p>
<div class="location">
<span>Location:</span> Hall 1 , Building A, Golden Street, Southafrica
</div>
</div>
</div>
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
</section>

<?php include 'components/footer.php' ?>


</body>
</html>