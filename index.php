<?php
session_start();
require_once "app/models/clientController/danhmuc.php";
require_once "app/models/clientController/sanpham.php";
require_once "app/models/clientController/bienthe.php";
require_once "app/models/clientController/taikhoan.php";
require_once "app/models/clientController/binhluan.php";
require_once "app/models/clientController/tintuc.php";
require_once "app/models/clientController/lienhe.php";
require_once "app/views/Client/pdo.php";
require_once "app/views/Client/gobal.php";
require_once "app/views/Client/header.php";

if(!isset($_SESSION['mycart']))
$_SESSION['mycart']=[];
require_once "app/controllers/clientController.php";
require_once "app/views/Client/footer.php";