<?php
function loadall_danhmuc(){
    $sql = "select * from danhmuc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}