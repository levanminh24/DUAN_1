<?php
if (isset($_GET['redirect'])) {
    $redirect = $_GET['redirect'];
    switch ($redirect) {
        case 'listspHome':
           
            if (isset($_GET['idsp'])) {
                $id = $_GET['idsp'];
                update_luotxem_sp($id);
               echo "<script>window.location.href='index.php?redirect=sanphamct&idsp=$id';</script>";
                exit;
            } else {
                $listsp = loadall_spHome();
                include "app/views/Client/home.php";
            }
            break;
        

        case 'sanphamct':
         
            $danhmuc = loadall_danhmuc();
            $size = loadall_size();

            include "app/views/Client/sanpham/ctsp.php";
            break;
            case 'sanphamtheodm':
                if (isset($_GET['id']) && ($_GET['id'] != "")) {
                    if (isset($_POST['submittimkiem'])) {
                        $kyw = $_POST['timkiem'];
                    } else {
                        $kyw = "";
                    }
                    if (isset($_POST['submitlocgia'])) {
                        $giadau = $_POST['giaspdau'];
                        $giacuoi = $_POST['giaspcuoi'];
                    } else {
                        $giadau = 0;
                        $giacuoi = 0;
                    }
                    $list_sp_dm = load_all_spdm($_GET['id'], $kyw, $giadau, $giacuoi, 1);
                    $sp = load_one_spdm($_GET['id']);
                } else {
                    $list_sp_dm = []; // Khởi tạo biến $list_sp_dm rỗng nếu không có id
                }
                include "app/views/Client/sanpham/sptheodm.php";
                break;
            
            
        case 'dangnhap':
            $errors = ['tendangnhap' => '', 'matkhau' => ''];
            $tendangnhap = $matkhau = '';

            if (isset($_POST['dangnhap'])) {
                $tendangnhap = $_POST['tendangnhap'];
                $matkhau = $_POST['matkhau'];

                if (empty($tendangnhap)) {
                    $errors['tendangnhap'] = "Tên đăng nhập không được để trống.";
                }

                if (empty($matkhau)) {
                    $errors['matkhau'] = "Mật khẩu không được để trống.";
                }

                if (empty($errors['tendangnhap']) && empty($errors['matkhau'])) {
                    $taikhoan = dangnhap($tendangnhap, $matkhau);
                    if ($taikhoan && $taikhoan['tendangnhap'] == $tendangnhap && $taikhoan['matkhau'] == $matkhau) {
                        $_SESSION['tendangnhap'] = $tendangnhap;
                        $_SESSION['role'] = $taikhoan['role'];
                        $_SESSION['idtendangnhap'] = $taikhoan['id'];
                        echo '<script>alert("Đăng nhập thành công")</script>';
                        echo '<script>window.location.href = "index.php"</script>';
                    } else {
                        $errors['tendangnhap'] = "Sai tài khoản hoặc mật khẩu.";
                    }
                }
            }
            include "app/views/Client/taikhoan/dangnhap.php";

            break;
        case 'dangky':
            $errors = ['tendangnhap' => '', 'matkhau' => '', 'email' => '', 'sodienthoai' => '', 'diachi' => ''];
            $tendangnhap = $matkhau = $email = $sodienthoai = $diachi = '';

            if (isset($_POST['dangky'])) {
                $tendangnhap = $_POST['tendangnhap'];
                $matkhau = $_POST['matkhau'];
                $email = $_POST['email'];
                $sodienthoai = $_POST['sodienthoai'];
                $diachi = $_POST['diachi'];

                // Kiểm tra tên đăng nhập
                if (empty($tendangnhap)) {
                    $errors['tendangnhap'] = "Tên đăng nhập không được để trống.";
                } elseif (!preg_match("/^[a-zA-Z0-9_]{3,20}$/", $tendangnhap)) {
                    $errors['tendangnhap'] = "Tên đăng nhập phải viết liền ko dấu từ 3 đến 20 ký tự";
                }

                // Kiểm tra mật khẩu
                if (empty($matkhau)) {
                    $errors['matkhau'] = "Mật khẩu không được để trống.";
                } elseif (strlen($matkhau) < 6 || strlen($matkhau) > 20) {
                    $errors['matkhau'] = "Mật khẩu phải từ 8 ký tự trở lên.";
                }

                // Kiểm tra email
                if (empty($email)) {
                    $errors['email'] = "Email không được để trống.";
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors['email'] = "Email không hợp lệ.";
                }

                // Kiểm tra số điện thoại
                if (empty($sodienthoai)) {
                    $errors['sodienthoai'] = "Số điện thoại không được để trống.";
                } elseif (!preg_match("/^[0-9]{10,11}$/", $sodienthoai)) {
                    $errors['sodienthoai'] = "Số điện thoại phải chứa 10-11 chữ số.";
                }

                // Kiểm tra địa chỉ
                if (empty($diachi)) {
                    $errors['diachi'] = "Địa chỉ không được để trống.";
                }

                // Nếu không có lỗi, tiến hành đăng ký
                if (empty($errors['tendangnhap']) && empty($errors['matkhau']) && empty($errors['email']) && empty($errors['sodienthoai']) && empty($errors['diachi'])) {
                    $dangky = dangky($tendangnhap, $matkhau, $email, $sodienthoai, $diachi);
                    echo '<script>alert("Đăng ký thành công")</script>';
                    echo '<script>window.location.href = "index.php?redirect=dangnhap"</script>';
                }
            }
            include "app/views/Client/taikhoan/dangky.php";
            break;
        case 'dangxuat':
            unset($_SESSION['tendangnhap']);
            unset($_SESSION['role']);

            echo '<script>window.location.href = "index.php"</script>';
            break;
          
       
                // Xử lý khi người dùng gửi form 'quenmk'
                case 'quenmk':
                    if(isset($_POST['quenmk'])){
                        $email = $_POST['email'];
                        $check = laymatkhau($email);
                        if(!empty($check)){
                            $matkhau = $check['matkhau'];
                            $errors = "Mật khẩu của bạn là: $matkhau";
                        } else {
                            $errors = "Không tìm thấy tài khoản có email này.";
                        }
                    }
                    // Bao gồm trang quenmk.php và truyền biến $errors vào
                    include "app/views/Client/taikhoan/quenmk.php";
                    break;
         
                
        case 'addbl':

            if (isset($_POST['guibinhluan'])) {
                if (isset($_SESSION['tendangnhap'])) {
                    $idtaikhoan = $_POST['idtaikhoan'];
                    $idsanpham = $_POST['idsanpham'];
                    $noidung = $_POST['noidung'];
                    $ngaybinhluan = $_POST['ngaybinhluan'];
                    insert_bl($idtaikhoan, $idsanpham, $noidung, $ngaybinhluan);
                    echo "<script>window.location.href='index.php?redirect=sanphamct&idsp=$idsanpham';</script>";
                } else {
                    echo '<script>alert("chưa đăng nhập")</script>';
                    echo '<script>window.location.href = "index.php?redirect=dangnhap"</script>';
                }
            }
            include "app/views/Client/binhluan/binhluan.php";
            break;
        case 'giohang':
            if (!isset($_SESSION['tendangnhap'])) {
                echo '<script>alert("chưa đăng nhập")</script>';
                echo '<script>window.location.href = "index.php?redirect=dangnhap"</script>';
            } else {
                include "app/views/Client/cart/giohang.php";
            }
            break;
            case 'addtocart':
                // Kiểm tra xem người dùng đã đăng nhập chưa
                if (!isset($_SESSION['tendangnhap'])) {
                    // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
                    echo '<script>window.location.href="index.php?redirect=dangnhap"</script>';
                    exit();
                }
            
                // Thêm thông tin sản phẩm từ form "add to cart" vào session
                if (isset($_POST['addtocart']) && $_POST['addtocart']) {
                    $id = $_POST['id'];
                    $tensp = $_POST['tensp'];
                    $img = $_POST['img'];
                    $giasp = $_POST['giasp'];
                    $soluong = isset($_POST['quantity']) ? (int)$_POST['quantity'] : 1;
                    $size = $_POST['size'];
                    $ttien = $soluong * $giasp;
            
                    // Kiểm tra xem giỏ hàng đã được khởi tạo chưa
                    if (!isset($_SESSION['mycart']) || !is_array($_SESSION['mycart'])) {
                        $_SESSION['mycart'] = [];
                    }
            
                    // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
                    $kiemtra = false;
                    foreach ($_SESSION['mycart'] as &$cartItem) {
                        if ($cartItem[0] == $id && $cartItem[6] == $size) {
                            // Cập nhật số lượng và tổng tiền
                            $cartItem[4] += $soluong;
                            $cartItem[5] = $cartItem[4] * $giasp;
                            $kiemtra = true;
                            break;
                        }
                    }
            
                    // Nếu sản phẩm chưa có trong giỏ hàng, thêm nó như một mục mới
                    if (!$kiemtra) {
                        $spadd = [$id, $tensp, $img, $giasp, $soluong, $ttien, $size];
                        $_SESSION['mycart'][] = $spadd;
                    }
                }
            
                include "app/views/Client/cart/giohang.php";
                break;
        
        case 'delcart':
            if (isset($_GET['idcart'])) {
                $idcart = $_GET['idcart'];
                if (isset($_SESSION['mycart'][$idcart])) {
                    unset($_SESSION['mycart'][$idcart]);
                    // Đảm bảo lại chỉ mục của mảng $_SESSION['mycart']
                    $_SESSION['mycart'] = array_values($_SESSION['mycart']);
                }
                include "app/views/Client/cart/giohang.php";
            } else {
                $_SESSION['mycart'] = [];
            }

            break;


        case 'thongtintaikhoan':
            include "app/views/Client/taikhoan/thongtintk.php";
            break;
            case 'updatethongtintaikhoan':
                $errors = ['tendangnhap' => '', 'matkhau' => '', 'email' => '', 'sodienthoai' => '', 'diachi' => ''];
                $tendangnhap = $matkhau = $email = $sodienthoai = $diachi = '';
            
                if (isset($_POST['capnhat'])) {
                    $id = $_POST['id'];
                    $tendangnhap = $_POST['tendangnhap'];
                    $matkhau = $_POST['matkhau'];
                    $email = $_POST['email'];
                    $sodienthoai = $_POST['sodienthoai'];
                    $diachi = $_POST['diachi'];
            
                    // Kiểm tra tên đăng nhập
                    if (empty($tendangnhap)) {
                        $errors['tendangnhap'] = "Tên đăng nhập không được để trống.";
                    } elseif (!preg_match("/^[a-zA-Z0-9_]{3,20}$/", $tendangnhap)) {
                        $errors['tendangnhap'] = "Tên đăng nhập phải viết liền ko dấu từ 3 đến 20 ký tự";
                    }
            
                    // Kiểm tra mật khẩu
                    if (empty($matkhau)) {
                        $errors['matkhau'] = "Mật khẩu không được để trống.";
                    } elseif (strlen($matkhau) < 6 || strlen($matkhau) > 20) {
                        $errors['matkhau'] = "Mật khẩu phải từ 6 đến 20 ký tự.";
                    }
            
                    // Kiểm tra email
                    if (empty($email)) {
                        $errors['email'] = "Email không được để trống.";
                    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $errors['email'] = "Email không hợp lệ.";
                    }
            
                    // Kiểm tra số điện thoại
                    if (empty($sodienthoai)) {
                        $errors['sodienthoai'] = "Số điện thoại không được để trống.";
                    } elseif (!preg_match("/^[0-9]{10,11}$/", $sodienthoai)) {
                        $errors['sodienthoai'] = "Số điện thoại phải chứa 10-11 chữ số.";
                    }
            
                    // Kiểm tra địa chỉ
                    if (empty($diachi)) {
                        $errors['diachi'] = "Địa chỉ không được để trống.";
                    }
            
                    // Nếu không có lỗi, tiến hành cập nhật
                    if (empty($errors['tendangnhap']) && empty($errors['matkhau']) && empty($errors['email']) && empty($errors['sodienthoai']) && empty($errors['diachi'])) {
                        update_thongtin($id, $tendangnhap, $matkhau, $email, $sodienthoai, $diachi);
                        echo '<script>alert("Cập nhật thành công")</script>';
                        echo '<script>window.location.href = "index.php?redirect=thongtintaikhoan"</script>';
                    }
                }
                include "app/views/Client/taikhoan/thongtintk.php";
                break;
                case 'tintucchitiet':
                    $id = $_GET['id'];
                    $tintucchitiet = tintuc_chitiet($id);
                    include "app/views/Client/tintuc/tintucchitiet.php";
                    break;
                    case 'tatcatintuc':
                        include "app/views/Client/tintuc/tatcatintuc.php";
                        break;
                
            
    }
} else {
    include  "app/views/Client/home.php";
}
