<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from template.hasthemes.com/shome/shome/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2024 09:40:46 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Shome - Shoes eCommerce Website Template"/>
    <meta name="keywords" content="footwear, shoes, modern, shop, store, ecommerce, responsive, e-commerce"/>
    <meta name="author" content="codecarnival"/>

    <title>Shome - Shoes eCommerce Website Template</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400;1,500&amp;display=swap" rel="stylesheet"> 

    <!--== Bootstrap CSS ==-->
    <link href="assets/css//bootstrap.min.css" rel="stylesheet" />
    <!--== Font Awesome Min Icon CSS ==-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--== Pe7 Stroke Icon CSS ==-->
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="assets/css/swiper.min.css" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="assets/css/fancybox.min.css" rel="stylesheet" />
    <!--== Aos Min CSS ==-->
    <link href="assets/css/aos.min.css" rel="stylesheet" />

    <!--== Main Style CSS ==-->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
  .tai-khoan-dropdown {
    display: none;
    position: absolute;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    z-index: 999;
    border-radius: 5px;
    padding: 10px;
    width: 200px;
    right: 0;
    font-size: 15px;

}

.shopping-wishlist-btn:hover #dropdown-menu {
    display: block;
}

</style>
<body>

<!--wrapper start-->
<div class="wrapper">

  <!--== Start Header Wrapper ==-->
  <header class="main-header-wrapper position-relative">
    <div class="header-middle">
      <div class="container pt--0 pb--0">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="header-middle-align">
              <div class="header-middle-align-start">
                <div class="header-logo-area">
                  <a href="index.html">
                    <img class="logo-main" src="assets/img/logo.webp" width="131" height="34" alt="Logo" />
                    <img class="logo-light" src="assets/img/logo-light.webp" width="131" height="34" alt="Logo" />
                  </a>
                </div>
              </div>
              <div class="header-middle-align-center">
                <div class="header-search-area">
                  <form class="header-searchbox">
                    <input type="search" class="form-control" placeholder="Search">
                    <button class="btn-submit" type="submit"><i class="pe-7s-search"></i></button>
                  </form>
                </div>
              </div>
              <div class="header-middle-align-end">
                <div class="header-action-area">
                  <div class="shopping-search">
                    <button class="shopping-search-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch"><i class="pe-7s-search icon"></i></button>
                  </div>
                  <div class="shopping-wishlist">
    <?php if (empty($_SESSION['tendangnhap'])) { ?>
        <a class="shopping-wishlist-btn" href="index.php?redirect=dangnhap">
            <i class="pe-7s-user icon"></i>
        </a>
    <?php } else { ?>
        <div class="shopping-wishlist-btn" id="dropdown-btn">
            <i class="pe-7s-user icon"></i>
            <ul class="tai-khoan-dropdown" id="dropdown-menu">
                <li><a href="index.php?redirect=dangxuat" id="taikhoan">Đăng xuất</a></li>
                <li><a href="index.php?redirect=doimatkhau" id="taikhoan">Đổi mật khẩu</a></li>
                <li><a href="index.php?redirect=thongtintaikhoan" id="taikhoan">Thông tin tài khoản</a></li>
                <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 1) { ?>
                    <li><a href="app/views/admin/index.php?act=listdm" id="taikhoan">Truy cập Cpanel</a></li>
                <?php } ?>
            </ul>
        </div>
    <?php } ?>
</div>



                  <div class="shopping-cart">
                    <button class="shopping-cart-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasCart" aria-controls="offcanvasRightLabel">
                      <i class="pe-7s-shopbag icon"></i>
                      <sup class="shop-count">02</sup>
                      <a href="?redirect=giohang"></a>
                    </button>
                  </div>
                  <button class="btn-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasMenu" aria-controls="AsideOffcanvasMenu">
                    <i class="pe-7s-menu"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-area header-default">
      <div class="container">
        <div class="row no-gutter align-items-center position-relative">
          <div class="col-12">
            <div class="header-align">
              <div class="header-navigation-area position-relative">
                <ul class="main-menu nav">
                  <li class="has-submenu"><a href="index.php?redirect=listspHome"><span>Home</span></a>
                    
                  </li>
                  <li><a href="about-us.html"><span>About</span></a></li>
                  <li class="has-submenu"><a href="#/"><span>Pages</span></a>
                  
                  </li>
                  
                  <li class="has-submenu"><a href="#/"><span>Blog</span></a>
                  
                  </li>
                  <li><a href="contact.html"><span>Contact</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--== End Header Wrapper ==-->
  
  <main class="main-content">
    <!--== Start Hero Area Wrapper ==-->
   
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Product Collection Area Wrapper ==-->
  
