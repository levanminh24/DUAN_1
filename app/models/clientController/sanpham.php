<?php
function loadall_spHome(){
    $sql = "select * from sanpham ";
    $listsp = pdo_query($sql);
    return $listsp;
}
function chiTietSanPham($id){
   $sql = "select * from sanpham where id = $id";
   $ctsp = pdo_query_one($sql);
   return $ctsp;
}
function update_luotxem_sp($id) {
    $query = "UPDATE sanpham SET luotxem = luotxem + 1 WHERE id = ?";
    pdo_execute($query, $id);
}
function load_all_spdm($iddm, $kyw, $giadau, $giacuoi, $page) {
    $query = "SELECT * FROM sanpham WHERE 1";
    if ($iddm > 0) {
        $query .= " AND iddm = $iddm";
    }
    if ($kyw != '') {
        $query .= " AND tensp LIKE '%$kyw%'";
    }
    if ($giadau > 0 && $giacuoi > 0) {
        $query .= " AND giasp BETWEEN $giadau AND $giacuoi";
    }
    $batdau = intval($page * 9 - 9);
    $query .= " ORDER BY id DESC LIMIT $batdau, 9";
    return pdo_query($query);
}



function load_one_spdm($iddm){
    $query="SELECT * FROM sanpham WHERE iddm=".$iddm;
    return pdo_query($query);
}
function dem_sp_dm($iddm) {
    $query = "SELECT COUNT(*) as countsp FROM sanpham WHERE iddm = '$iddm'";
    return pdo_query_one($query);
}
function dem_size_sp($idsize) {
    $query = "SELECT COUNT(*) as countsize FROM sanpham WHERE idsize = '$idsize'";
    return pdo_query_one($query);
}




