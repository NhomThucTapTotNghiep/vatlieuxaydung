<style>
    .single_product_item .single_product_text span {
        color: #ff3368;
        text-transform: uppercase;
        font-size: 18px;
        font-weight: 500;
        display: block;
        margin-top: 10px;
        opacity: 0;
        visibility: hidden;
        -webkit-transition: 0.5s;
        transition: 0.5s;
    }
    .single_product_item:hover span {
        opacity: 1;
        visibility: visible;
        
    }
    .single_product_item .single_product_text i {
        color: #ff3368;
        text-transform: uppercase;
        font-size: 18px;
        font-weight: 500;
        display: block;
        margin-top: 10px;
        opacity: 0;
        visibility: hidden;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        float: right;
    }
    .single_product_item:hover i {
        opacity: 1;
        visibility: visible;
        
    }
</style>
<div class="col-lg-4 col-sm-6">
    <div class="single_product_item">
        <a href="index.php?controller=vattu&action=chitiet&id=<?php echo $item['MaVT']?>">
            <img style="height: 300px;" src="<?php echo IMG_SANPHAM.$item['img']; ?>" alt="">
        </a>
        <div class="single_product_text">
            <h4><?php echo $item['TenVT']; ?></h4>
            <h3><?php echo $item['DonGia']; ?> VND / <?php echo $item['DVTinh']; ?></h3>
            <span href="#" class="add_cart addToCart" onclick="addCart('<?php echo $item['MaVT']; ?>')">+ add to cart <i class="ti-heart"></i></span>
        </div>
    </div>
</div>