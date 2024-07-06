<?php
function dangnhap($tendangnhap, $matkhau){
    $sql = "select * from tai_khoan where tendangnhap = '$tendangnhap' and matkhau = '$matkhau'";
    $dn = pdo_query_one($sql);
    return $dn;
}
function dangky($tendangnhap, $matkhau, $email, $sodienthoai, $diachi){
    $sql = "insert into tai_khoan(tendangnhap, matkhau, email, sodienthoai, diachi) values('$tendangnhap', '$matkhau', '$email', '$sodienthoai', '$diachi')";
    pdo_execute($sql);
}