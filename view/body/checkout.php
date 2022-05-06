  <!--================Checkout Area =================-->
  <section class="checkout_area padding_top">
      <div class="container">
          <div class="billing_details">
              <div class="row">
                  <div class="col-lg-8">
                      <h3>Billing Details</h3>
                      <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                          <div class="col-md-6 form-group p_star">
                              <input type="text" class="form-control" id="first" name="name" />
                              <span class="placeholder" data-placeholder="First name"></span>
                          </div>
                          <div class="col-md-6 form-group p_star">
                              <input type="text" class="form-control" id="last" name="name" />
                              <span class="placeholder" data-placeholder="Last name"></span>
                          </div>
                          <div class="col-md-12 form-group">
                              <input type="text" class="form-control" id="company" name="company"
                                  placeholder="Company name" />
                          </div>
                          <div class="col-md-6 form-group p_star">
                              <input type="text" class="form-control" id="number" name="number" />
                              <span class="placeholder" data-placeholder="Phone number"></span>
                          </div>
                          <div class="col-md-6 form-group p_star">
                              <input type="text" class="form-control" id="ghichu" name="ghichu" />
                              <span class="placeholder" data-placeholder="ghichu"></span>
                          </div>

                          <div class="col-md-12 form-group p_star">
                              <input type="text" class="form-control" id="add" name="add" />
                              <span class="placeholder" data-placeholder="Address line"></span>
                          </div>
                          
                          
                          
                      </form>
                  </div>
                  <div class="col-lg-4">
                      <div class="order_box">
                          <?php $tongtien = 0; 
                          if(!empty($_SESSION['cart_item'])){ ?>
                          <h2>Your Order</h2>
                          <ul class="list">
                              <li>
                                  <a href="#">Product
                                      <span>Total</span>
                                  </a>
                              </li>
                              <?php $dem = 1; foreach($_SESSION['cart_item'] as $item){ ?>
                              <li>
                                  <a href="#"><?php echo $item['TenVT']; ?>
                                      <span class="middle">x <?php echo $item['quantity']; ?></span>
                                      <span class="last"><?php echo $item['quantity']*$item['DonGia']; ?></span>
                                  </a>
                              </li>
                              <?php $dem++; $tongtien +=  $item['quantity']*$item['DonGia'];} ?>
                          </ul>
                          <ul class="list list_2">
                              <li>
                                  <a href="#">Subtotal
                                      <span><?php echo $tongtien; ?></span>
                                  </a>
                              </li>
                          </ul>
                        
                          <div class="creat_account">
                              <input type="checkbox" id="f-option4" name="selector" />
                              <label for="f-option4">I’ve read and accept the </label>
                              <a href="#">terms & conditions*</a>
                          </div>
                          <a class="btn_3" href="#">Proceed to Paypal</a>
                          <?php } else { ?>
                            <div class="creat_account">
                              <label for="f-option4">Đơn hàng đang trống </label>
                          </div>
                          <?php } ?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--================End Checkout Area =================-->