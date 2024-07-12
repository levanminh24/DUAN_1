
<section class="account-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="section-title text-center">
                    <h2 class="title">Forgot Password</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="login-form-content">
                <form action="" method="post">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="email">Nhập email <span>*</span></label>
                <input id="email" class="form-control" type="email" name="email">
                <?php if(isset($errors)): ?>
                    <h5 style="color:red"><?php echo $errors; ?></h5>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <button type="submit" class="btn-login" name="quenmk">Gửi</button>
            </div>
        </div>
        <div class="form-check">
                       
                       <a class="lost-password" href="index.php?redirect=dangnhap">Quay lại đăng nhập</a>
                       </div>
    </div>
</form>

                </div>
            </div>
        </div>
    </div>
</section>
