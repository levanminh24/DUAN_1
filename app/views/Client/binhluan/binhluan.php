

<div class="reviews-form-area">
    <h4 class="title"> Thêm bình luận</h4>
    <div class="reviews-form-content">
    <form action="index.php?redirect=addbl" method="POST">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <?php if (isset($_SESSION['idtaikhoan'])): ?>
                    <input id="iduser" class="form-control" type="text" name="iduser" value="<?php echo $_SESSION['idtaikhoan']; ?>">
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
            <input id="idpro" class="form-control" type="hidden" name="idpro" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">

            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input id="ngaybinhluan" class="form-control" type="hidden" name="ngaybinhluan" value="<?php echo date('Y-m-d'); ?>">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="for_comment">Nội dung bình luận (1500 ký tự)</label>
                <textarea id="for_comment" class="form-control" placeholder="Viết bình luận của bạn ở đây" name="noidung"></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-submit-btn">
                <button type="submit" name="guibinhluan" class="btn-submit">Gửi bình luận</button>
            </div>
        </div>
    </div>
</form>

    </div>
</div>
