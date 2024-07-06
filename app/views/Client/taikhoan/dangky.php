<section class="account-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="section-title text-center">
                    <h2 class="title">Đăng ký</h2>
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
                                    <label for="email">Email <span>*</span></label>
                                    <input id="email" class="form-control" type="email" name="email">
                                    <div class="error-message" style="color: red;"><?= $errors['email'] ?></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="phone">Số điện thoại <span>*</span></label>
                                    <input id="phone" class="form-control" type="text" name="sodienthoai">
                                    <div class="error-message" style="color: red;"><?= $errors['sodienthoai'] ?></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="address">Địa chỉ <span>*</span></label>
                                    <input id="address" class="form-control" type="text" name="diachi">
                                    <div class="error-message" style="color: red;"><?= $errors['diachi'] ?></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" class="btn-login" name="dangky">Đăng ký</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
