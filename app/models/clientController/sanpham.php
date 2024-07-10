<?php
function loadall_spHome(){
    $sql = "select * from sanpham ";
    $listsp = pdo_query($sql);
    return $listsp;
}
function chiTietSanPham($id){
   $sql = "select * from sanpham where id = $id";
   $ctsp = pdo_query_one($sql);
   return $ctsp;
}

