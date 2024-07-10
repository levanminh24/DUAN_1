
<section class="home-slider-area">
      <div class="swiper-container home-slider-container default-slider-container">
        <div class="swiper-wrapper home-slider-wrapper slider-default">
          <div class="swiper-slide">
            <div class="slider-content-area" data-bg-img="assets/img/shape/1.webp">
              <div class="container">
                <div class="slider-container">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-sm-6 col-md-5">
                      <div class="slider-content">
                        <div class="content">
                          <div class="title-box">
                            <h2 class="title">Exclusive New Shoes</h2>
                          </div>
                          <div class="desc-box">
                            <p class="desc">Up To 30% Off All Shoes & Products</p>
                          </div>
                          <div class="btn-box">
                            <a class="btn-slider" href="shop.html">Shop Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                      <div class="slider-thumb">
                        <div class="thumb scene">
                          <span class="scene-layer" data-depth=".3"><img src="assets/img/slider/slider-01.webp" width="461" height="489" alt="Image-HasTech"></span>
                        </div>
                        <div class="shape-group mousemove">
                          <div class="shape-group-one mousemove-layer" data-speed=".8" data-bg-img="assets/img/shape/2.webp"></div>
                          <div class="shape-group-two scene"><span class="scene-layer" data-depth=".6"><img src="assets/img/shape/3.jpg" width="471" height="462" alt="Image-HasTech"></span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h2 class="slider-text-shape">NEW 2024</h2>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slider-content-area" data-bg-img="assets/img/shape/1.webp">
              <div class="container">
                <div class="slider-container">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-sm-6 col-md-5">
                      <div class="slider-content">
                        <div class="content">
                          <div class="title-box">
                            <h2 class="title">Exclusive New Shoes</h2>
                          </div>
                          <div class="desc-box">
                            <p class="desc">Up To 30% Off All Shoes & Products</p>
                          </div>
                          <div class="btn-box">
                            <a class="btn-slider" href="shop.html">Shop Now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                      <div class="slider-thumb">
                        <div class="thumb scene">
                          <span class="scene-layer" data-depth=".3"><img src="assets/img/slider/slider-03.webp" width="548" height="649" alt="Image-HasTech"></span>
                        </div>
                        <div class="shape-group mousemove">
                          <div class="shape-group-one mousemove-layer" data-speed=".8" data-bg-img="assets/img/shape/2.webp"></div>
                          <div class="shape-group-two scene"><span class="scene-layer" data-depth=".6"><img src="assets/img/shape/3.jpg" width="471" height="462" alt="Image-HasTech"></span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h2 class="slider-text-shape">NEW 2022</h2>
            </div>
          </div>
        </div>

        <!--== Add Swiper Arrows ==-->
       
      </div>
    </section>
<section class="product-area product-collection-area">
  <div class="container">
    <div class="row">
      <?php
      $listsp = loadall_danhmuc();
    //  echo "<pre>"; print_r($listsp); echo "</pre>"; // Thêm dòng này để kiểm tra dữ liệu
      foreach($listsp as $sp) {
        extract($sp);
        $link_san_pham_theo_danhmuc = "index.php?act=sptheodanhmuc&idloai=".$id;
      ?>
        <div class="col-lg-4 col-md-6">
          <!--== Start Product Collection Item ==-->
          <div class="product-collection">
            <div class="inner-content">
              <div class="product-collection-content">
                <div class="content">
                  <h3 class="title"><a href="<?= $link_san_pham_theo_danhmuc ?>"><?= $name ?></a></h3>
                </div>
              </div>
              <div class="product-collection-thumb" data-bg-img="public/images/<?= $img ?>"></div>
              <a class="banner-link-overlay" href="<?= $link_san_pham_theo_danhmuc ?>"></a>
            </div>
          </div>
          <!--== End Product Collection Item ==-->
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</section>
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
        $linksp = "index.php?redirect=sanphamct&idsp=".$id;
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
                  <a class="btn-product-compare" href="index.php?redirect=sanphamct&idsp=<?= $id ?>"><i class="fa fa-random"></i></a>
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
<section class="blog-area blog-default-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center">
              <h3 class="title">Latest Blog</h3>
              <div class="desc">
                <p>There are many variations of passages of Lorem Ipsum available</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <!--== Start Blog Item ==-->
            <div class="post-item">
              <div class="inner-content">
                <div class="thumb">
                  <a href="blog-details.html"><img src="assets/img/blog/1.webp" width="370" height="260" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <div class="meta-post">
                    <ul>
                      <li class="post-date"><i class="fa fa-calendar"></i><a href="blog.html">27,Jun 2030</a></li>
                      <li class="author-info"><i class="fa fa-user"></i><a href="blog.html">Oaklee Odom</a></li>
                    </ul>
                  </div>
                  <h4 class="title"><a href="blog-details.html">Lorem ipsum dolor ametcons adipisicing elit sed</a></h4>
                  <a class="post-btn" href="blog.html">Read More</a>
                </div>
              </div>
            </div>
            <!--== End Blog Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Blog Item ==-->
            <div class="post-item">
              <div class="inner-content">
                <div class="thumb">
                  <a href="blog-details.html"><img src="assets/img/blog/2.webp" width="370" height="260" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <div class="meta-post">
                    <ul>
                      <li class="post-date"><i class="fa fa-calendar"></i><a href="blog.html">27,Jun 2030</a></li>
                      <li class="author-info"><i class="fa fa-user"></i><a href="blog.html">Oaklee Odom</a></li>
                    </ul>
                  </div>
                  <h4 class="title"><a href="blog-details.html">Celebrity Daughter Opens About Upto Having Her Eye</a></h4>
                  <a class="post-btn" href="blog.html">Read More</a>
                </div>
              </div>
            </div>
            <!--== End Blog Item ==-->
          </div>
          <div class="col-md-6 col-lg-4">
            <!--== Start Blog Item ==-->
            <div class="post-item">
              <div class="inner-content">
                <div class="thumb">
                  <a href="blog-details.html"><img src="assets/img/blog/3.webp" width="370" height="260" alt="Image-HasTech"></a>
                </div>
                <div class="content">
                  <div class="meta-post">
                    <ul>
                      <li class="post-date"><i class="fa fa-calendar"></i><a href="blog.html">27,Jun 2030</a></li>
                      <li class="author-info"><i class="fa fa-user"></i><a href="blog.html">Oaklee Odom</a></li>
                    </ul>
                  </div>
                  <h4 class="title"><a href="blog-details.html">Romantic Love Stories Of Hollywood Popular Celebrities</a></h4>
                  <a class="post-btn" href="blog.html">Read More</a>
                </div>
              </div>
            </div>
            <!--== End Blog Item ==-->
          </div>
        </div>
      </div>
    </section>
    <!--== End Blog Area Wrapper ==-->
  </main>
