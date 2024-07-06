<?php
function loadall_size(){
    $sql = "select * from  size order by id desc";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}