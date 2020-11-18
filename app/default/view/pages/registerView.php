<?php


class registerView
{
 	function dangky(){

 		// $dulieu = $this->data['kiemtra'];
 		// foreach ($dulieu as $key => $value) {
 			# code...
 			if($this->data['kiemtra']){
 				echo "<script type=\"text/javascript\">

    		Notiflix.Report.Info( 'Bạn đã đăng ký vé rồi', 'Bạn chỉ đăng ký được một lần', 'Xác nhận', function(){
				window.location='index.html';
    	});
    </script> ";
 			}else{
 				echo '<div class="col-md-12 form-line">
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
							<button type="submit" class="btn btn-common" id="nutdk" name="register"><i class="fa fa-paper-plane" aria-hidden="true"></i> Đăng ký</button>';
 			}
 		}
 	}


?>