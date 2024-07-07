<?php
function loadall_binhluan($idsanpham) {
    $query="SELECT binhluan.*, tai_khoan.tendangnhap FROM binhluan
    INNER JOIN tai_khoan ON binhluan.idtaikhoan=tai_khoan.id WHERE idsanpham=".$idsanpham;
    return pdo_query($query);
   
}


