<?php
  class loginView  {
    public function login($message = ''){

      if($this->data == 'changed' || $this->data == '') {
        echo '
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
            '.$message.'
          </div>
        </div>
        ';
      }
      else {
      echo '
      <div class="col-md-12 form-line">
        <div class="form-group">
        <input type="text" class="form-control" id="name" name="oldPass" placeholder="Nhập mật khẩu hiện tại" required="" data-error="Vui lòng điền mật khẩu hiện tại">
        <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="col-md-12 form-line">
        <div class="form-group">
        <input type="password" class="form-control" id="msg_subject" name="newPass" placeholder="Mật khẩu mới" required="" data-error="Vui lòng điền mật khẩu mới">
        <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="col-md-12 form-line">
        <div class="form-group">
        <input type="password" class="form-control" id="msg_subject" name="oldPass" placeholder="Nhập lại mật khẩu" required="" data-error="Vui lòng lại mật khẩu mới">
        <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-submit">
          <button type="submit" class="btn btn-common" name="changePass" id="form-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Xác nhận</button>'.
          $message.'
        </div>
      </div>
      ';
      }
    }
  }

?>