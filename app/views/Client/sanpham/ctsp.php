<?php
$id = isset($_GET['idsp']) ? $_GET['idsp'] : null;

if ($id) {
  $product = chiTietSanPham($id);
  if ($product) {
    extract($product);
  } else {
    echo "Không tìm thấy sản phẩm.";
    exit;
  }
} else {

  exit;
}
?>

<section class="product-area product-single-area">
  <div class="page-header-area" data-bg-img="assets/img/danhmuc/bn1.png">
    <div class="container pt--0 pb--0">
      <div class="row">
        <div class="col-12">
          <div class="page-header-content">
            <h2 class="title" data-aos="fade-down" data-aos-duration="1000">Product Details</h2>
            <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1200">
              <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="breadcrumb-sep">//</li>
                <li>Product Details</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="product-single-item">
          <div class="row">
            <div class="col-xl-6">
              <!--== Start Product Thumbnail Area ==-->
              <div class="product-single-thumb">
                <div class="swiper-container single-product-thumb single-product-thumb-slider">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <a class="lightbox-image" data-fancybox="gallery" href=" ">
                        <img src="public/images/<?= $img ?>" width="570" height="541" alt="Image-HasTech">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!--== End Product Thumbnail Area ==-->
            </div>
            <div class="col-xl-6">
              <!--== Start Product Info Area ==-->
              <div class="product-single-info">
                <h3 class="main-title"><?= $tensp ?></h3>
                <div class="prices">
                  <span class="price">$<?= $giasp ?></span>
                </div>
                <p>Mô tả: <?= $mota ?></p>
                <!-- <p> Trạng thái :<?= $trangthai == 0 ? 'Còn hàng' : 'Hết hàng' ?></p> -->
                <p>
                  <?php if ($soluong < 1) { ?>
                <p class="hethang">*Tạm thời hết hàng</p>
              <?php } else { ?>
                <p><span><?= $soluong ?></span> sản phẩm có sẵn</p>
              <?php } ?>
              </p>
              <div class="product-size">
                <h6 class="title">size</h6>
                <?php
                if (!empty($size)) {
                  foreach ($size as $sizeItem) {
                    extract($sizeItem);
                ?>
                    <ul class="size-list">
                      <li><a href=""><?= $name ?></a></li>
                    </ul>
                <?php
                  }
                } else {
                  echo '<p>Không có kích thước</p>';
                }
                ?>
              </div>
              <div class="product-quick-action">
                <div class="qty-wrap">
                  <div class="pro-qty">
                    <input type="text" title="Quantity" value="1">
                  </div>
                </div>
                <a type="submit" class="btn-theme" href="shop-cart.html">Add to Cart</a>
              </div>
              </div>
              <!--== End Product Info Area ==-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
        <div class="col-12">
            
            <div class="product-review-tabs-content">
              <div class="tab-content product-tab-content" id="ReviewTabContent">
              <ul class="nav product-tab-nav" id="ReviewTab" role="tablist">
                
                <li role="presentation">
                  <a id="reviews-tab" data-bs-toggle="pill" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews <span>(05)</span></a>
                </li>
              </ul>
              <div class="reviews-form-area">

    <div class="reviews-form-content">
        <form action="index.php?redirect=addbl" method="POST">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        
                        <input id="iduser" class="form-control" type="hidden" name="idtaikhoan" value="<?php echo isset($_SESSION['idtendangnhap']) ? $_SESSION['idtendangnhap'] : ''; ?>">
                        <input id="tendangnhap" class="form-control" type="hidden" value="<?php echo isset($_SESSION['tendangnhap']) ? $_SESSION['tendangnhap'] : ''; ?>" readonly>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input id="idpro" class="form-control" type="hidden" name="idsanpham" value="<?php echo $_GET['idsp']; ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input id="ngaybinhluan" class="form-control" type="hidden" name="ngaybinhluan" value="<?php echo date('Y-m-d'); ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="for_comment">Nội dung bình luận (1500 ký tự)</label>
                        <textarea id="for_comment" class="form-control" placeholder="Viết bình luận của bạn ở đây" name="noidung"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-submit-btn">
                        <button type="submit" name="guibinhluan" class="btn-submit mb-4 mt-2">Gửi bình luận</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

                      <!--== Start Reviews Content Item ==-->
                    
                  <div class="product-review-content">
                  <?php
        $idsp = $_GET['idsp'];
        $ctm = loadall_binhluan($idsp);
        foreach($ctm as $row):
            extract($row);
        ?>
                    <div class="reviews-content-body">
                      <!--== Start Reviews Content Item ==-->
                      <div class="review-item">
                        <h3 class="title"><?=$tendangnhap?> </h3>
                        <h5 class="sub-title"><span>Nantu Nayal</span> no <span><?=$ngaybinhluan?></span></h5>
                        <p><?=$noidung?></p>
                      </div>
                    </div>
                    <?php
                      endforeach
                       ?>
                  
              </div>
                  </div>
                </div>
             
              </div>
            </div>

   
          </div>
      </div>
    </section>
    <style>
      /* CSS for hover effect */
.btn-submit {
    background-color: black; /* Màu nền mặc định */
    color: #fff; /* Màu chữ mặc định */
    transition: all 0.3s ease; /* Hiệu ứng chuyển đổi trong 0.3 giây */
   border: none;
}

.btn-submit:hover {
    background-color: orangered; /* Màu nền khi hover */
    color: #fff; /* Màu chữ khi hover */

}

    </style>