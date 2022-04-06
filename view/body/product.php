    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Vật tư</h2>
                            <p>Trang chủ <span>-</span> Vật tư</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Nhà sản xuất</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <?php foreach($dataNXS as $item) {?> 
                                        <li>
                                            <a href="index.php?controller=products&id=<?php echo $item['MaNSX'] ?>"><?php echo $item['TenNSX'] ?></a>
                                        </li>
                                    <?php } ?>  
                                </ul>
                            </div>
                        </aside>
                        <aside>
                            <div class="budget-wrap">
                                <div class="budget">
                                    <div class="header">
                                    <div class="title clearfix">Lọc giá <span class="pull-right"></span></div>
                                    </div>
                                    <div class="content">
                                    <input type="range" min="1" max="100" value="20" data-rangeslider>
                                    </div>
                                    <div class="footer clearfix">
                                    <div class="pull-right">
                                        <a href="javascript:void(0)" class="btn btn-def">Back</a>
                                        <a href="javascript:void(0)" class="btn btn-pri">Next</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product_top_bar d-flex justify-content-between align-items-center">
                                <div class="single_product_menu">
                                    <p><span><?php echo count($dataVT);  ?> </span> Sản phẩm được tìm thấy</p>
                                </div>
                                <div class="single_product_menu d-flex">
                                    <h5>short by : </h5>
                                    <select>
                                        <option data-display="Select">name</option>
                                        <option value="1">price</option>
                                        <option value="2">product</option>
                                    </select>
                                </div>
                                <div class="single_product_menu d-flex">
                                    <h5>show :</h5>
                                    <div class="top_pageniation">
                                        <ul>
                                            <li>1</li>
                                            <li>2</li>
                                            <li>3</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single_product_menu d-flex">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="search"
                                            aria-describedby="inputGroupPrepend">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend"><i
                                                    class="ti-search"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(!empty($dataVT))   {?>
                        <div class="row align-items-center latest_product_inner">
                        <?php foreach($dataVT as $item) {
                            include 'view/items/itemproduct.php';
                        } ?> 
                        <div class="col-lg-12">
                            <div class="pageination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <i class="ti-angle-double-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <i class="ti-angle-double-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <?php } else {?>
                        <div class="row align-items-center latest_product_inner">
                        <blockquote class="blockquote">
                            <h2 class="mb-0">Chưa có sản phẩm của danh nghiệp này.</h2>
                            <footer class="blockquote-footer">Hãy thử tìm sản phẩm khác </footer>
                        </blockquote>
                        </div>
                    <?php } ?>                    
                    
                </div>
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->
