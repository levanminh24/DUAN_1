<div class="container">
    <div class="myaccount-content border:1px solid black">
        <h3>Account Details</h3>
        <div class="account-details-form">
            <form action="index.php?redirect=updatethongtintaikhoan" method="post">
                <?php
                $thongtin = thongtin();
                foreach ($thongtin as $tt) {
                    extract($tt);
                ?>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="first-name" class="required">Tên đăng nhập</label>
                            <input type="text" id="first-name" name="tendangnhap" value="<?php echo $tendangnhap; ?>" />
                            <div class="error-message" style="color: red;"><?= $errors['tendangnhap'] ?></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-input-item">
                            <label for="last-name" class="required">Email</label>
                            <input type="text" id="last-name" name="email" value="<?php echo $email; ?>" />
                            <div class="error-message" style="color: red;"><?= $errors['email'] ?></div>
                        </div>
                    </div>
                </div>
                <div class="single-input-item">
                    <label for="display-name" class="required">Số điện thoại</label>
                    <input type="text" id="display-name" name="sodienthoai" value="<?php echo $sodienthoai; ?>" />
                    <div class="error-message" style="color: red;"><?= $errors['sodienthoai'] ?></div>
                </div>
                <div class="single-input-item">
                    <label for="address" class="required">Địa chỉ</label>
                    <input type="text" id="address" name="diachi" value="<?php echo $diachi; ?>" />
                    <div class="error-message" style="color: red;"><?= $errors['diachi'] ?></div>
                </div>
                <fieldset>
                    <legend>Password change</legend>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="single-input-item">
                                <label for="new-pwd" class="required">Mật khẩu</label>
                                <input type="password" id="new-pwd" name="matkhau" value="<?php echo $matkhau; ?>" />
                                <input type="checkbox" onclick="togglePassword()"> Hiển thị mật khẩu
                                <div class="error-message" style="color: red;"><?= $errors['matkhau'] ?></div>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id ?? ''; ?>">
                    </div>
                </fieldset>
                <div class="single-input-item">
                    <button class="check-btn sqr-btn" type="submit" name="capnhat">Save Changes</button>
                </div>
                <?php
                }
                ?>
            </form>
        </div>
    </div>
</div>
<script>
function togglePassword() {
    var passwordField = document.getElementById("new-pwd");
    if (passwordField.type === "password") {
        passwordField.type = "text";
    } else {
        passwordField.type = "password";
    }
}
</script>
