<?php
function loadall_danhmuc(){
    $sql = "select * from danhmuc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
// function loadall_binhluan($idsp) {
//     $sql = "SELECT binhluan.*, tai_khoan.tendangnhap 
//             FROM binhluan
//             JOIN tai_khoan ON binhluan.idtaikhoan = tai_khoan.id
//             WHERE binhluan.idsanpham = $idsp";
//     $result = pdo_query($sql);
//     return $result;
// }