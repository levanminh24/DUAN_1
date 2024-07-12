<main class="main-content">

    <section class="product-area product-default-area">
        <div class="container">
            <div class="row flex-xl-row-reverse justify-content-between">
                <div class="col-xl-9">
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
                                    <div class="row">
                                        <?php if (!empty($list_sp_dm)) : ?>
                                            <?php foreach ($list_sp_dm as $dm) :
                                                extract($dm); ?>
                                                <div class="col-sm-6 col-lg-4">
                                                    <div class="product-item">
                                                        <div class="inner-content">
                                                            <div class="product-thumb">
                                                                <a href="index.php?redirect=sanphamct&idsp=<?= $id ?>">
                                                                    <img src="public/images/<?= $img ?>" width="270" height="274" alt="Image-HasTech">
                                                                </a>
                                                                <a class="banner-link-overlay" href="index.php?redirect=sanphamct&idsp=<?= $id ?>"></a>
                                                            </div>
                                                            <div class="product-info">
                                                                <h4 class="title">
                                                                    <a href="index.php?redirect=sanphamct&idsp=<?= $id ?>"><?= $tensp ?></a>
                                                                </h4>
                                                                <div class="prices">
                                                                    <span class="price">$<?= $giasp ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            <p>Không có sản phẩm nào trong danh mục này.</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
                                    <!-- Nội dung cho tab list -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="shop-sidebar">
                        <div class="shop-sidebar-category">
                            <h4 class="sidebar-title">Top Categories</h4>
                            <div class="sidebar-category">
                                <ul class="category-list mb--0">
                                    <?php
                                    $listdm = loadall_danhmuc();
                                    foreach ($listdm as $dm) {
                                        extract($dm);
                                        $sp = dem_sp_dm($id);
                                        $countsp = $sp['countsp'];
                                        echo '<li><a href="index.php?redirect=sanphamtheodm&id=' . $id . '">' . $name . ' <span>(' . $countsp . ')</span></a></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>

                        <div class="shop-sidebar-price-range">
    <h4 class="sidebar-title">Price Filter</h4>
    <div class="sidebar-price-range">
        <form method="POST">
            <input type="text" name="timkiem" placeholder="Từ khóa tìm kiếm">
            <input type="text" name="giaspdau" placeholder="Giá từ">
            <input type="text" name="giaspcuoi" placeholder="Giá đến">
            <button type="submit" name="submittimkiem">Tìm kiếm</button>
            <button type="submit" name="submitlocgia">Lọc theo giá</button>
        </form>
    </div>
</div>

                        <div class="shop-sidebar-size">
                            <h4 class="sidebar-title">Size</h4>
                            <div class="sidebar-size">
                                <ul class="size-list">
                                    <?php
                                    $listsize = loadall_size();

                                    $sp = dem_size_sp($idsize);
                                    $countsize = $sp['countsize'];
                                    foreach ($listsize as $li) {
                                        extract($li);
                                    ?>

                                        <li><a href="index.php?redirect=sanphamtheodm&id=<?= $id ?>"><?= $name ?> <span>(<?= $countsize ?>)</span></a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--== End Product Area Wrapper ==-->
</main>