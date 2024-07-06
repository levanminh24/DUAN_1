
<section class="account-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="section-title text-center">
                    <h2 class="title">Login</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="login-form-content">
                    <form action="index.php?redirect=dangnhap" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="username">Tên đăng nhập <span>*</span></label>
                                    <input id="username" class="form-control" type="text" name="tendangnhap" value="<?= htmlspecialchars($tendangnhap) ?>">
                                    <div class="error-message" style="color: red;"><?= $errors['tendangnhap'] ?></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="password">Mật khẩu <span>*</span></label>
                                    <input id="password" class="form-control" type="password" name="matkhau">
                                    <div class="error-message" style="color: red;"><?= $errors['matkhau'] ?></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" class="btn-login" name="dangnhap">Login</button>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group account-info-group mb--0">
                                <div class="rememberme-account">
                        <div class="form-check">
                       
                        <a class="lost-password" href="index.php?redirect=dangky">Bạn chưa có tài khoản?</a>
                        </div>
                      </div>
                                    <a class="lost-password" href="#/">Lost your password?</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
