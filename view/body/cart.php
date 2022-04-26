<!--================Home Banner Area =================-->
<style>
.btn_1 {
    display: inline-block;
    padding: 9px 9px;
    border-radius: 50px;
    background-color: #ecfdff;
    font-size: 20px;
    font-weight: 700;
    color: #333;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    margin-left: 10px;
}

/* line 33, ../../01 cl html template/03_jun 2019/188_Aranoz shop_html/sass/_button.scss */

.btn_1:hover {
    background-color: #ff3368;
    color: #fff;
}
</style>
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Cart Products</h2>
                        <p>Home <span>-</span>Cart Products</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--================Cart Area =================-->
<section class="cart_area padding_top">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col-4">Vật tư</th>
                            <th class="col-2">Giá</th>
                            <th class="col-2">Số lượng</th>
                            <th class="col-2">Tổng tiền</th>
                            <th class="col-2">Chức năng</th>
                        </tr>
                    </thead>
                    <?php if(empty($_SESSION['cart_item'])){ ?>
                    <tbody>
                        <tr style="width: 100%;">
                          <td style="text-align: center;">
                          Chưa có sản phẩm trong giỏ hàng.
                          </td>
                        </tr>
                    </tbody>
                    <?php  } ?>
                    <?php if(!empty($_SESSION['cart_item'])){ ?>
                    <tbody>
                        <?php $dem = 1; foreach($_SESSION['cart_item'] as $item){ ?>
                        <tr id="<?php echo $item['MaVT']; ?>">
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img style="height: 80px;" src="<?php echo IMG_SANPHAM.$item['img']; ?>"
                                            alt="" />
                                    </div>
                                    <div class="media-body">
                                        <p><?php echo $item['TenVT']; ?></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5><?php echo $item['DonGia'].'/'.$item['DVTinh']; ?></h5>
                            </td>
                            <td>
                                <div class="product_count">
                                    <span class="input-number-decrement"> <i class="ti-angle-down"></i></span>
                                    <input class="input-number" id="cart<?php echo $dem; ?>" type="text"
                                        value="<?php echo $item['quantity']; ?>" min="0"
                                        max="<?php echo $item['SoLuong']; ?>">
                                    <span class="input-number-increment"> <i class="ti-angle-up"></i></span>
                                </div>
                            </td>
                            <td>
                                <h5><?php echo $item['quantity']*$item['DonGia']; ?></h5>
                            </td>
                            <td>
                                <a class="btn_1" href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                <span class="btn_1"><i class="fa fa-trash" aria-hidden="true" onclick="deleteVatTU('<?php echo $item['MaVT']; ?>')"></i></span>
                            </td>
                        </tr>
                        <?php $dem++;} ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <h5>Subtotal</h5>
                            </td>
                            <td>
                                <h5>$2160.00</h5>
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
                <div class="checkout_btn_inner float-right">
                    <a class="btn_1" href="index.php?controller=products">Continue Shopping</a>
                    <a class="btn_1 checkout_btn_1" href="index.php?controller=checkout&action=checkout">Proceed to
                        checkout</a>
                </div>
            </div>
        </div>

</section>
<!--================End Cart Area =================-->