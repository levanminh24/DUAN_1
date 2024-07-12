<section class="blog-details-area">
    <div class="container pb-lg-85">
        <div class="row justify-content-center">
            <div class="col-lg-11" data-aos="fade-up">
                <div class="blog-details-content-wrap">
                    <?php
                    if ($tintucchitiet) {
                        extract($tintucchitiet);
                        ?>
                        <div class="blog-details-item">
                            <div class="blog-details-thumb">
                                <img src="public/images/<?= $img ?>" width="750" height="459" alt="Image-HasTech">
                            </div>
                            <div class="blog-meta-post">
                                <ul>
                                    <li class="post-date"><i class="fa fa-calendar"></i><a href="blog.html"><?= $ngaydang ?></a></li>
                                    <li class="author-info"><i class="fa fa-user"></i><a href="blog.html"><?= $tacgia ?></a></li>
                                </ul>
                            </div>
                            <h3 class="main-title"><?= $tieude ?></h3>
                            <div class="details-wrapper details-wrapper-style1" data-margin-bottom="38">
                                <p><?= $noidung ?></p>
                                <p><?= $noidunghai ?></p>
                            </div>
                        </div>
                        <?php
                    } else {
                        echo "<p>Không tìm thấy chi tiết bài viết.</p>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
