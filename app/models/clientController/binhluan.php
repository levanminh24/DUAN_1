<?php

function loadall_binhluan($idsp) {
    $query = "SELECT b.*, t.tendangnhap 
    FROM binhluan b
    INNER JOIN tai_khoan t ON b.idtaikhoan = t.id 
    WHERE b.idsanpham = $idsp order by id desc";
    $li = pdo_query($query);
    return $li;
   
}

function insert_bl($idtaikhoan,$idsanpham,$noidung,$ngaybinhluan){
    $query="INSERT INTO `binhluan`(`idtaikhoan`, `idsanpham`, `noidung`, `ngaybinhluan`) VALUES ('$idtaikhoan','$idsanpham','$noidung','$ngaybinhluan')";
    pdo_execute($query);
}
