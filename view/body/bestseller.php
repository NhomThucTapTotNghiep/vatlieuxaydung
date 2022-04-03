<!-- product_list part start-->
<section class="product_list best_seller">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Best Sellers <span>shop</span></h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="best_product_slider owl-carousel">
                        <?php
                        for($i =0; $i<5 ;$i++)
                        { 
                            include 'view/items/itemBestSell.php'; 
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part end-->