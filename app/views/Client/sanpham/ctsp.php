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
            <div class="col-12">
              <div class="product-single-item">
                <div class="row">
                  <div class="col-xl-6">
                    <!-- Start Product Thumbnail Area -->
                    <div class="product-single-thumb">
                      <div class="swiper-container single-product-thumb single-product-thumb-slider">
                        <div class="swiper-wrapper">
                          <div class="">
                            <a class="lightbox-image" data-fancybox="gallery" href=" ">
                              <img src="public/images/<?= $img ?>" width="570" height="541" alt="Image-HasTech">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Product Thumbnail Area -->
                  </div>
                  <div class="col-xl-6">
                    <!-- Start Product Info Area -->
                    <div class="product-single-info">
                      <h3 class="main-title"><?= $tensp ?></h3>
                      <div class="prices">
                        <span class="price">$<?= $giasp ?></span>
                      </div>
                      <p>Mô tả: <?= $mota ?></p>
                      <p>
                        <?php if ($soluong < 1) { ?>
                          <span class="hethang">*Tạm thời hết hàng</span>
                        <?php } else { ?>
                          <span><?= $soluong ?></span> sản phẩm có sẵn
                        <?php } ?>
                      </p>

                      <div class="product-quick-action">
                        <form action="index.php?redirect=addtocart" method="post" id="add-to-cart-form">
                          <input type="hidden" name="id" value="<?= $id ?>">
                          <input type="hidden" name="tensp" value="<?= $tensp ?>">
                          <input type="hidden" name="img" value="<?= $img ?>">
                          <input type="hidden" name="giasp" value="<?= $giasp ?>">
                          <input type="hidden" name="quantity" id="hidden-quantity" value="1">

                          <div class="row align-items-center">
                            <div class="col-md-6">
                              <div class="qty-wrap">
                                <div class="pro-qty">

                                  <input type="text" value="1" form="add-to-cart-form" id="quantity-input">
                                  <button type="button" class="dec qtybtn">-</button>
                                  <button type="button" class="inc qtybtn">+</button>
                                </div>


                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="product-size">
                                <h6 class="title">Size</h6>
                                <?php if (!empty($size)) { ?>
                                  <ul class="size-list">
                                    <?php foreach ($size as $sizeItem) { ?>
                                      <li>
                                        <input type="radio" name="size" value="<?= $sizeItem['name'] ?>" id="size-<?= $sizeItem['name'] ?>" required>
                                        <label for="size-<?= $sizeItem['name'] ?>"><?= $sizeItem['name'] ?></label>
                                      </li>
                                    <?php } ?>
                                  </ul>
                                <?php } else { ?>
                                  <p>Không có kích thước</p>
                                <?php } ?>
                              </div>
                            </div>
                          </div>

                          <input type="submit" name="addtocart" value="Thêm vào giỏ hàng" class="product__cart mt-3">
                        </form>
                      </div>
                    </div>
                    <!-- End Product Info Area -->
                  </div>
                </div>
              </div>
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
          <?php
          $idsanpham = $_GET['idsp'];
          $dembl = demBinhluan($idsanpham);
          if ($dembl) {
            extract($dembl); // Điều này sẽ tạo biến $countbl từ mảng trả về
          } else {
            $countbl = 0; // Nếu không có kết quả, thiết lập giá trị mặc định
          }
          ?>
          <li role="presentation">
            <a id="reviews-tab" data-bs-toggle="pill" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews <span>(<?= $countbl ?>)</span></a>
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
          foreach ($ctm as $row) :
            extract($row);
          ?>
            <div class="reviews-content-body">
              <!--== Start Reviews Content Item ==-->
              <div class="review-item">
                <h3 class="title"><?= $tendangnhap ?> </h3>
                <h5 class="sub-title"><span>Nantu Nayal</span> no <span><?= $ngaybinhluan ?></span></h5>
                <p><?= $noidung ?></p>
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
    background-color: black;
    /* Màu nền mặc định */
    color: #fff;
    /* Màu chữ mặc định */
    transition: all 0.3s ease;
    /* Hiệu ứng chuyển đổi trong 0.3 giây */
    border: none;
  }

  .btn-submit:hover {
    background-color: orangered;
    /* Màu nền khi hover */
    color: #fff;
    /* Màu chữ khi hover */

  }

  .product__cart {
    display: block;
    width: 100%;
    padding: 10px;
    background: #000;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background 0.3s;
  }

  .product__cart:hover {
    background: orangered;
  }







  .tt {
    width: 100%;
  }
</style>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const qtyInput = document.getElementById('quantity-input');
    const hiddenQtyInput = document.getElementById('hidden-quantity');
    const decBtn = document.querySelector('.dec.qtybtn');
    const incBtn = document.querySelector('.inc.qtybtn');

    decBtn.addEventListener('click', function() {
      let currentQty = parseInt(qtyInput.value);
      if (currentQty > 1) {
        qtyInput.value = currentQty - 1;
        hiddenQtyInput.value = qtyInput.value;
      }
    });

    incBtn.addEventListener('click', function() {
      let currentQty = parseInt(qtyInput.value);
      qtyInput.value = currentQty + 1;
      hiddenQtyInput.value = qtyInput.value;
    });

    qtyInput.addEventListener('input', function() {
      hiddenQtyInput.value = qtyInput.value;
    });
  });
</script>