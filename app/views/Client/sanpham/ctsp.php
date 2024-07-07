
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
         
            <input type="text" title="Quantity" value="1">
           
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
                  <a id="reviews-tab" data-bs-toggle="pill" href="" role="tab" aria-controls="reviews" aria-selected="false"> Reviews <span>(05)</span></a>
               
                </li>
              </ul>
              <div class="tab-content product-tab-content" id="ReviewTabContent">
              <?php foreach($binhluan as $bl){
                        extract($bl);
                       ?>
                  <div class="review-item">
        
                        <h3 class="title"> <?= $tendangnhap ?></h3>
                        <h5 class="sub-title"><span>Ngày bình luận</span> <span><?= $ngaybinhluan?></span></h5>
                        <p><?=$noidung?></p>
                        
                       
                      </div>
                      <?php
                       }
                       ?>
                <?php
                  include "app/views/Client/binhluan/binhluan.php";
                  ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    