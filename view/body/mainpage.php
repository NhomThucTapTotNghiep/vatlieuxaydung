<!-- feature_part start-->
    <!-- product_list start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Sản phẩm nổi bật </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product_list_slider owl-carousel">
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">
                                <?php foreach($dataVatTu1 as $item) {  ?>
                               
                                    <div  class="col-lg-3 col-sm-6">
                                        <div class="single_product_item">
                                            <a href="index.php?controller=vattu&action=chitiet&id=<?php echo $item['MaVT']?>">
                                            <img style="height: 300px;" src="<?php echo IMG_SANPHAM.$item['img']; ?>" alt="">
                                            </a>
                                            
                                            <div class="single_product_text">
                                                <h4><?php echo $item['TenVT']; ?></h4>
                                                <h3><?php echo $item['DonGia']; ?> VND / <?php echo $item['DVTinh']; ?></h3>
                                                <a href="index.php?controller=vattu&action=chitiet&id=<?php echo $item['MaVT']?>" class="add_cart">Buy now <i class="ti-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="single_product_list_slider">
                            <div class="row align-items-center justify-content-between">
                            <?php foreach($dataVatTu2 as $item) {  ?>
                                <a href="index.php?controller=vattu&action=chitiet&id=<?php echo $item['MaVT']?>">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="single_product_item">
                                            <img style="height: 300px;" src="<?php echo IMG_SANPHAM.$item['img']; ?>" alt="">
                                            <div class="single_product_text">
                                                <h4><?php echo $item['TenVT']; ?></h4>
                                                <h3><?php echo $item['DonGia']; ?> VND / <?php echo $item['DVTinh']; ?></h3>
                                                <a href="index.php?controller=vattu&action=chitiet&id=<?php echo $item['MaVT']?>" class="add_cart">Buy now <i class="ti-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php } ?>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part start-->
    <!-- awesome_shop start-->
    
    <!-- awesome_shop part start-->
    