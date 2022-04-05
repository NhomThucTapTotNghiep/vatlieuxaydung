<a href="index.php?controller=vattu&action=chitiet&id=<?php echo $item['MaVT']?>">
    <div class="single_product_item">
        <img style="height: 300px;" src="<?php echo IMG_SANPHAM.$item['img']; ?>" alt="">
        <div class="single_product_text">
            <h4><?php echo $item['TenVT']; ?></h4>
            <h3><?php echo $item['DonGia']; ?> VND / <?php echo $item['DVTinh']; ?></h3>
        </div>
    </div>
</a>