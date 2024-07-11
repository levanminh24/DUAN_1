
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
      foreach($listsp as $sp) {
        extract($sp);
        $link_san_pham_theo_danhmuc = "index.php?act=sptheodanhmuc&idloai=".$id;
      ?>
        <div class="col-lg-4 col-md-6">
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
        </div>
      <?php } ?>
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
          <div class="product-item">
            <div class="inner-content">
              <div class="product-thumb">
                <a href="<?= $linksp ?>">
                  <img src="public/images/<?= $img ?>" width="270" height="274" alt="Image-HasTech">
                </a>
               
                <a class="banner-link-overlay" href="<?= $linksp ?>"></a>
              </div>
              <div class="product-info">
                <h4 class="title"><a href="<?= $linksp ?>"><?= $tensp ?></a></h4>
                <div class="prices">
                  <span class="price-old">$100</span>
                  <span class="sep">-</span>
                  <span class="price">$<?= $giasp ?></span>
                </div>
               
                <a href="<?= $linksp ?>">  <input type="submit" name="addtocart" value="Xem chi tiết" class="product__cart"></a>
                
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
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
<style>
  .product__cart {
    display: block;
    width: 100%;
    padding: 10px 20px;
    background-color: #ff6f61; /* Adjust to match your theme color */
    color: #fff;
    text-align: center;
    border: none;
    border-radius: 5px;
    margin-top: 10px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.product__cart:hover {
    background-color: #ff3d2e; /* Adjust for a hover effect */
    color: #fff;
}

.product-info {
    text-align: center;
}

.product-item {
    margin-bottom: 30px;
}

</style>
<aside class="product-quick-view-modal">
    <div class="product-quick-view-inner">
      <div class="product-quick-view-content">
        <button type="button" class="btn-close">
          <span class="close-icon"><i class="fa fa-close"></i></span>
        </button>
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="thumb">
              <img src="assets/img/shop/product-single/1.webp" width="570" height="541" alt="Alan-Shop">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12">
            <div class="content">
              <h4 class="title">Space X Bag For Office</h4>
              <div class="prices">
                <del class="price-old">$85.00</del>
                <span class="price">$7.00</span>
              </div>
              <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,</p>
              <div class="quick-view-select">
                <div class="quick-view-select-item">
                  <label for="forSize" class="form-label">Size:</label>
                  <select class="form-select" id="forSize" required>
                    <option selected value="">s</option>
                    <option>m</option>
                    <option>l</option>
                    <option>xl</option>
                  </select>
                </div>
                <div class="quick-view-select-item">
                  <label for="forColor" class="form-label">Color:</label>
                  <select class="form-select" id="forColor" required>
                    <option selected value="">red</option>
                    <option>green</option>
                    <option>blue</option>
                    <option>yellow</option>
                    <option>white</option>
                  </select>
                </div>
              </div>
              <div class="action-top">
                <div class="pro-qty">
                  <input type="text" id="quantity20" title="Quantity" value="1" />
                </div>
                <button class="btn btn-black">Add to cart</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="canvas-overlay"></div>
  </aside>