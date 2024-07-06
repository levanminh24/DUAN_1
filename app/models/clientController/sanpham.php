<?php
function loadall_spHome(){
    $sql = "select * from sanpham where trangthai = 0 order by id desc limit 0,8";
    $listsp = pdo_query($sql);
    return $listsp;
}
function chiTietSanPham($idsp){
   $sql = "select * from sanpham where id = $idsp";
   $ctsp = pdo_query_one($sql);
   return $ctsp;
}

