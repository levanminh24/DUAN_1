<?php
function loadall_thongke3()
{
    $sql = "select count(sanpham.id) as tsp  ";
    $sql .= " from sanpham ";
    $listtk = pdo_query($sql);
    return $listtk;
}
function loadall_thongkebl()
{
    $sql = "select count(binhluan.id) as tbl  ";
    $sql .= " from binhluan ";
    $bl = pdo_query($sql);
    return $bl;
}
function loadall_thongkedm()
{
    $sql = "select count(danhmuc.id) as tdm  ";
    $sql .= " from danhmuc ";
    $dm = pdo_query($sql);
    return $dm;
}

