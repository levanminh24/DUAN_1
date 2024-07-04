<?php
function loadall_sanpham(){
    $sql = "SELECT * FROM sanpham order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function  insert_sanpham($tensp, $iddm, $hinh, $mota, $giasp,$idsize,$soluong,$trangthai){
    $sql = "INSERT INTO sanpham(tensp, iddm, img, mota, giasp, idsize,soluong,trangthai) VALUES('$tensp', '$iddm', '$hinh', '$mota', '$giasp', '$idsize', '$soluong', '$trangthai')";
    pdo_execute($sql);
}
function getdetail_sanpham($id){
    $sql = "SELECT * FROM sanpham WHERE id = $id";
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_sanpham($id, $tensp, $iddm, $hinh, $mota, $giasp, $soluong, $idsize, $trangthai) {
    $sql = "UPDATE sanpham SET tensp = '$tensp', iddm = '$iddm', img = '$hinh', mota = '$mota', giasp = '$giasp', soluong = '$soluong', idsize = '$idsize', trangthai = '$trangthai' WHERE id = $id";
    pdo_execute($sql);
}
