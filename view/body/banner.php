<!-- banner part start-->
<section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        <?php  $dem = 1; foreach($dataVatTu1 as $item) {?>
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div style="padding-left: 50px;" class="banner_text_iner">
                                            <h2 ><?php echo $item['TenVT']; ?></h1>
                                            <a href="index.php?controller=vattu&action=chitiet&id=<?php echo $item['MaVT']?>" class="btn_2">buy now</a>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding-right: 100px; padding-bottom: 30px;" class="banner_img d-none d-lg-block">
                                    <img style="height: 350px; width: 350px;" src="<?php echo IMG_SANPHAM.$item['img']; ?>"  alt="">
                                </div>
                            </div>
                        </div>
                        <?php if($dem ==4){ break; } $dem++; }?>
                    </div>
                    <div class="slider-counter"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->