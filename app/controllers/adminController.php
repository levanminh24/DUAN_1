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
                case 'listsize':
                    $listsize = loadall_size();
                    include 'size/list.php';
                    break;
                case 'listsp':
                    $listsanpham = loadall_sanpham();
                    include 'sanpham/list.php';
                    break;
                    case 'addsp':
                        if (isset($_POST['themmoi'])) {
                            $tensp = $_POST['tensp'];
                            $iddm = $_POST['iddm'];
                            $hinh = "";  // Mặc định là không có tệp
                            if (isset($_FILES['hinh']) && $_FILES['hinh']['error'] == UPLOAD_ERR_OK) {
                                $hinh = basename($_FILES["hinh"]["name"]);
                                $target_dir = "../../images/";
                                $target_file = $target_dir . $hinh;
                                move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                            }
                            $mota = $_POST['mota'];
                            $giasp = $_POST['giasp'];
                            $soluong = $_POST['soluong'];
                            $idsize = isset($_POST['idsize']) && $_POST['idsize'] !== '' ? $_POST['idsize'] : NULL;
                            $trangthai = $_POST['trangthai'];
                            insert_sanpham($tensp, $iddm, $hinh, $mota, $giasp, $idsize, $soluong, $trangthai);
                            $thongbao = "Thêm thành công";
                        }
                        $listsize = loadall_size();
                        $listdanhmuc = loadall_danhmuc();
                        include "sanpham/add.php";
                        break;
                    
                        case 'suasp':
                            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                                $sanpham = getdetail_sanpham($_GET['id']);
                            }
                            $listsize = loadall_size();
                            $listdanhmuc = loadall_danhmuc();
                            include "sanpham/update.php";
                            break;
                        case 'updatesp':
                            if (isset($_POST['capnhat'])) {
                                $id = $_POST['id'];
                                $tensp = $_POST['tensp'];
                                $iddm = $_POST['iddm'];
                                $hinh = $_POST['hinhcu'];   // Giữ hình ảnh cũ nếu không có hình mới được tải lên
                                if (isset($_FILES['hinh']) && $_FILES['hinh']['error'] == UPLOAD_ERR_OK) {
                                    $hinh = basename($_FILES["hinh"]["name"]);
                                    $target_dir = "../../images/";
                                    $target_file = $target_dir . $hinh;
                                    move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                                }
                                $mota = $_POST['mota'];
                                $giasp = $_POST['giasp'];
                                $soluong = $_POST['soluong'];
                                $idsize = isset($_POST['idsize']) && $_POST['idsize'] !== '' ? $_POST['idsize'] : NULL;
                                $trangthai = $_POST['trangthai'];
                                update_sanpham($id, $tensp, $iddm, $hinh, $mota, $giasp, $soluong, $idsize, $trangthai);
                                $thongbao = "Cập nhật thành công";
                            }
                            $listsanpham = loadall_sanpham();
                            $listsize = loadall_size();
                            $listdanhmuc = loadall_danhmuc();
                            include "sanpham/list.php";
                            break;
                            case 'listtkadmin':
                                $listtaikhoan = loadall_taikhoan();
                                include "taikhoan/list.php";
                                break;
                        
        
    }
} else {
    echo 'home';
}
