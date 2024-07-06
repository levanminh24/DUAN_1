
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
                            <img src="public/images/<?= $sanpham['img'] ?>" width="570" height="541" alt="Image-HasTech">
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
                    <h3 class="main-title"><?= $sanpham ['tensp'] ?></h3>
                    <div class="prices">
                      <span class="price">$<?= $sanpham ['giasp'] ?></span>
                    </div>
                   <p> Mô tả: <?= $sanpham ['mota'] ?></p>    
                  <!-- <p> Trạng thái :<?= $sanpham['trangthai'] == 0 ? 'Còn hàng' : 'Hết hàng'?></p> -->
                    
                <p> <?php if($sanpham['soluong']<1) {?>
                                    <p class="hethang">*Tạm thời hết hàng</p>
                                <?php }else{ ?>
                                    <p><span><?= $sanpham ['soluong'];?></span> sản phẩm có sẵn</p>
                                <?php } ?></p>
                    
                    <div class="product-size">
                    <h6 class="title">size</h6>
                    <?php
                     foreach ($size as $size){
                         extract($size);
                     ?>
                      <ul class="size-list" >
                        <li><a href=""><?= $name ?></a></li> 
                      </ul>
                      <?php
                    }
                    ?>
                    </div> 
                
                    <div class="product-quick-action">
    <div class="qty-wrap">
        <div class="pro-qty">
            <span class="qty-minus">-</span>
            <input type="text" title="Quantity" value="1">
            <span class="qty-plus">+</span>
        </div>
    </div>
    <a type="submit" class="btn-theme" href="shop-cart.html">Add to Cart</a>
</div>

                  <!--== End Product Info Area ==-->
                </div>
              </div>
             
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="product-review-tabs-content">
              <ul class="nav product-tab-nav" id="ReviewTab" role="tablist">
                
                <li role="presentation">
                  <a id="reviews-tab" data-bs-toggle="pill" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews <span>(05)</span></a>
                </li>
              </ul>
              <div class="tab-content product-tab-content" id="ReviewTabContent">
               
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                  <div class="product-review-content">
                    <div class="review-content-header">
                      <h3>Customer Reviews</h3>
                      <div class="review-info">
                        <ul class="review-rating">
                          <li class="fa fa-star"></li>
                          <li class="fa fa-star"></li>
                          <li class="fa fa-star"></li>
                          <li class="fa fa-star"></li>
                          <li class="fa fa-star-o"></li>
                        </ul>
                        <span class="review-caption">Based on 5 reviews</span>
                        <span class="review-write-btn">Write a review</span>
                      </div>
                    </div>

                    <!--== Start Reviews Form Item ==-->
                    <div class="reviews-form-area">
                      <h4 class="title">Write a review</h4>
                      <div class="reviews-form-content">
                        <form action="#">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="for_name">Name</label>
                                <input id="for_name" class="form-control" type="text" placeholder="Enter your name">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="for_email">Email</label>
                                <input id="for_email" class="form-control" type="email" placeholder="john.smith@example.com">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="for_comment">Body of Review (1500)</label>
                                <textarea id="for_comment" class="form-control" placeholder="Write your comments here"></textarea>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-submit-btn">
                                <button type="submit" class="btn-submit">Post comment</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <!--== End Reviews Form Item ==-->

                    

                    <!--== Start Reviews Pagination Item ==-->
                    <div class="review-pagination">
                      <span class="pagination-pag">1</span>
                      <span class="pagination-pag">2</span>
                      <span class="pagination-next">Next »</span>
                    </div>
                    <!--== End Reviews Pagination Item ==-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    <style>
      .qty-wrap .pro-qty {
    position: relative;
}

.qty-wrap .pro-qty input[type="text"] {
    width: 50px;
    text-align: center;
    border: 1px solid #ccc;
    padding: 5px;
}

.qty-wrap .pro-qty span {
    display: inline-block;
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    cursor: pointer;
    background-color: #f2f2f2;
    border: 1px solid #ccc;
    transition: background-color 0.3s ease;
}

.qty-wrap .pro-qty span:hover {
    background-color: #e0e0e0;
}

    </style>