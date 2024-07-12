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
function thongtin(){
    if(isset($_SESSION['idtendangnhap'])){
        $id = $_SESSION['idtendangnhap'];
    $sql ="SELECT * FROM tai_khoan WHERE id = $id";
    $result = pdo_query($sql);
    return $result;
} 
}
function update_thongtin($id, $tendangnhap, $matkhau, $email, $sodienthoai, $diachi){
    $sql = "update tai_khoan set tendangnhap = '$tendangnhap', matkhau = '$matkhau', email = '$email', sodienthoai = '$sodienthoai', diachi = '$diachi' where id = $id";
    pdo_execute($sql);
}
function quenmatkhau($email,$tendangnhap){
    $sql = "SELECT matkhau FROM tai_khoan WHERE email = '$email' and tendangnhap = '$tendangnhap'";
    $result = pdo_query_one($sql);
    return $result;
    
}
function laymatkhau($email){
    $sql = "SELECT matkhau FROM tai_khoan WHERE email = '$email'";
    $result = pdo_query_one($sql);
    return $result;
}