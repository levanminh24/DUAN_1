<?php
function loadall_taikhoan(){
    $sql = "select * from tai_khoan order by id desc";
    $lis = pdo_query($sql);
    return $lis;
}

function getdetail($id){
    $sql = "select * from tai_khoan where id = $id";
    $list = pdo_query_one($sql);
    return $list;
}
function update_vaitro($id,$role){
    $sql = "update tai_khoan set role = $role where id = $id";
    pdo_execute($sql);
}

