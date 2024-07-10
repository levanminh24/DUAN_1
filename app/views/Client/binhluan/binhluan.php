<div class="reviews-form-area">
    <h4></h4>
    <div class="reviews-form-content">
        <form action="index.php?redirect=addbl" method="POST">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        
                        <input id="iduser" class="form-control" type="hidden" name="idtaikhoan" value="<?php echo isset($_SESSION['idtendangnhap']) ? $_SESSION['idtendangnhap'] : ''; ?>">
                        <input id="tendangnhap" class="form-control" type="hidden" value="<?php echo isset($_SESSION['tendangnhap']) ? $_SESSION['tendangnhap'] : ''; ?>" readonly>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input id="idpro" class="form-control" type="hidden" name="idsanpham" value="<?php echo $_GET['idsp']; ?>">
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

                      <!--== Start Reviews Content Item ==-->
                    