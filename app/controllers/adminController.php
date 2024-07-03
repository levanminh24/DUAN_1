<?php

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include 'danhmuc/list.php';
            break;
            case 'adddm':
                if (isset($_POST['themmoi'])) {
                    $tenloai = $_POST['tenloai'];
                    $hinh = "";  // Mặc định là không có tệp
                    if (isset($_FILES['hinh']) && $_FILES['hinh']['error'] == UPLOAD_ERR_OK) {
                        $hinh = basename($_FILES["hinh"]["name"]);
                        $target_dir = "../../images/";
                        $target_file = $target_dir . $hinh;
                        move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                    }
                    insert_danhmuc($tenloai, $hinh);
                    $thongbao = "Thêm mới thành công";
                }
                include "danhmuc/add.php";
                break;
            case 'suadm':
                if (isset($_GET['id']) && ($_GET['id']) > 0) {
                    $dm = loadone_danhmuc($_GET['id']);
                }
                include 'danhmuc/update.php';
                break;
            case 'updatedm':
                if (isset($_POST['capnhat'])) {
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
    
                    if (isset($_FILES['hinh']) && $_FILES['hinh']['error'] == UPLOAD_ERR_OK) {
                        $hinh = basename($_FILES["hinh"]["name"]);
                        $target_dir = "../../images/";
                        $target_file = $target_dir . $hinh;
                        move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                        update_danhmuc($id, $tenloai, $hinh); // Chỉ cập nhật hình ảnh nếu có tệp mới
                    } else {
                        update_danhmuc($id, $tenloai, $hinh); // Không thay đổi hình ảnh
                    }
                    $thongbao = "Cập nhật thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
       
        
    }
} else {
    include "../views/admin/danhmuc/list.php";
}
