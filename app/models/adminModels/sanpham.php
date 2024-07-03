<?php
function loadall_sanpham(){
    $sql = "SELECT * FROM sanpham order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}