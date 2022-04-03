<!--::header part start::-->
<header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php"> <img src="img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?controller=home">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="login.html"> login</a>
                                        <a class="dropdown-item" href="tracking.html">tracking</a>
                                        <a class="dropdown-item" href="checkout.html">product checkout</a>
                                        <a class="dropdown-item" href="cart.html">shopping cart</a>
                                        <a class="dropdown-item" href="confirmation.html">confirmation</a>
                                        <a class="dropdown-item" href="elements.html">elements</a>
                                    </div>
                                </li>
								<li class="nav-item">
                                    <a class="nav-link" href="index.php?controller=products">Products</a>
                                </li>
								<li class="nav-item">
                                    <a class="nav-link" href="#">Nhà sản xuất</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <a href="index.php"><i class="ti-heart"></i></a>
                            <!-- cart -->
                            <a  href="index.php?controller=cart">
                                <i class="fas fa-cart-plus"></i>
                            </a>
                                <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="single_product">
                                    </div>
                                </div> -->
                        </div>
						<ul>
							<div style="padding-left:20px" class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
						
								
								<li class ="nav-item dropdown">
									
									<?php
                                        if(isset($_SESSION['username']) == "")
                                        {?>
                                        <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown_2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                            <i class="fa-solid fa-user"></i> <span style="padding-left: 5px;"> Tài khoản <span>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                            <a class="dropdown-item" href="index.php?controller=login"> Đăng nhập</a>
                                            <a class="dropdown-item" href="index.php?controller=register&action=dangky">Đăng kí</a>
                                        </div>
                                    <?php    
                                        }
                                        else
                                        { ?>
                                            <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown_2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                             Tên tài khoản <span>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                                <a class="dropdown-item" href="index.php?controller=profile"> Hồ sơ</a>
                                                <a class="dropdown-item" href="index.php?controller="> Giỏ hàng </a>
                                                <a class="dropdown-item" href="index.php?controller=cart"> Hóa đơn </a>
                                                <a class="dropdown-item" href="index.php?controller="> Đăng xuất </a>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    
                                </li>
								
							</div>
						</ul>
                    </nav>
                </div>
            </div>
        </div>

		<!-- funtion sreaching -->
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
				
            </div>
        </div>
		
		

    </header>
    <!-- Header part end-->