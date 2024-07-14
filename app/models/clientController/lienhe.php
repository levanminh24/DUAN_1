<?php
function insert_lienhe($hovaten, $email, $sodienthoai, $noidung, $ngaygui){
    $query="INSERT INTO `lienhe`( `hovaten`, `email`, `sodienthoai`, `noidung`, `ngaygui`) VALUES ('$hovaten','$email','$sodienthoai','$noidung','$ngaygui')";
    pdo_execute($query);
}
?>