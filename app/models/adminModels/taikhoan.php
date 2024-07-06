<?php
function loadall_taikhoan(){
    $sql = "select * from tai_khoan where role = 0";
    $lis = pdo_query($sql);
    return $lis;
}
function update_vaitro($id,$role){
    $sql = "update tai_khoan set role = $role where id = $id";
    pdo_execute($sql);
}
