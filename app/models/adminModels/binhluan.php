<?php
function quanly_binhluan(){
    $sql = "select * from binhluan order by id desc";
    $bl = pdo_query($sql);
    return $bl;
}
function delete_binhluan($id){
    $sql = " select * from binhluan where id = $id";
    $bl = pdo_query_one($sql);
    return $bl;
}
function loadall_binhluan2()
{
    $sql = "SELECT *, binhluan.id AS idbl, tai_khoan.tendangnhap AS tendangnhap 
            FROM binhluan 
            LEFT JOIN sanpham ON binhluan.idsanpham = sanpham.id
            LEFT JOIN tai_khoan ON binhluan.idtaikhoan = tai_khoan.id
            ORDER BY binhluan.id DESC";
    $listbl = pdo_query($sql);
    return $listbl;
}
