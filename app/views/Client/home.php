<section class="product-area product-default-area">
  <div class="container pt--0">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h3 class="title">Các mặt hàng nổi bật</h3>
          
        </div>
      </div>
    </div>
    <div class="row">
      <?php
      $listsp = loadall_spHome();
      foreach($listsp as $sp) {
        extract($sp);
        $linksp = "index.php?act=sanphamct&idsp=".$id;
      ?>
        <div class="col-sm-6 col-lg-3">
          <!--== Start Product Item ==-->
          <div class="product-item">
            <div class="inner-content">
              <div class="product-thumb">
                <a href="<?= $linksp ?>">
                  <img src="public/images/<?= $img ?>" width="270" height="274" alt="Image-HasTech">
                </a>
                <div class="product-action">
                  <a class="btn-product-wishlist" href="#"><i class="fa fa-heart"></i></a>
                  <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                  <button type="button" class="btn-product-quick-view-open">
                    <i class="fa fa-arrows"></i>
                  </button>
                  <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                </div>
                <a class="banner-link-overlay" href="<?= $linksp ?>"></a>
              </div>
              <div class="product-info">
                <h4 class="title"><a href="<?= $linksp ?>"><?= $tensp ?></a></h4>
                <div class="prices">
                  <span class="price-old">$100</span>
                  <span class="sep">-</span>
                  <span class="price">$<?= $giasp ?></span>
                </div>
              </div>
            </div>
          </div>
          <!--== End Product Item ==-->
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</section>
