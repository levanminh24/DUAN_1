<?php
function loadall_tintuc(){
    $sql = "select * from tintuc order by id desc";
    $tintuc = pdo_query($sql);
    return $tintuc;
}
function insert_tintuc($tacgia,$ngaydang,$hinh,$tieude,$noidung,$noidunghai){
    $sql = "insert into tintuc(tacgia,ngaydang,img,tieude,noidung,noidunghai) values('$tacgia','$ngaydang','$hinh','$tieude','$noidung','$noidunghai')";
    pdo_execute($sql);
}

function delete_tintuc($id){
    $sql = "delete from tintuc where id=".$id;
    pdo_execute($sql);
}

function loadone_tintuc($id){
    $sql = "select * from tintuc where id =".$id;
    $tintuc = pdo_query_one($sql);
    return $tintuc;
}

function update_tintuc($id,$tacgia,$ngaydang,$hinh,$tieude,$noidung,$noidunghai){
    $sql = "update tintuc set tacgia = '$tacgia', ngaydang = '$ngaydang', img = '$hinh', tieude = '$tieude', noidung = '$noidung', noidunghai = '$noidunghai' where id =".$id;
    pdo_execute($sql);
}