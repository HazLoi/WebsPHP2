<div>

    <body class="product-checkout checkout-cart">

        <!-- main content -->
        <div id="checkout" class="main-content">
            <div class="wrap-banner">
                <!-- breadcrumb -->
                <nav class="breadcrumb-bg">
                    <div class="container no-index">
                        <div class="breadcrumb">
                            <ol>
                                <li>
                                    <a href="index.php?action=home">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php?action=product-checkout">
                                        <span>Checkout</span>
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </nav>

                <!-- main -->
                <div id="wrapper-site">
                    <div class="container">
                        <div class="row">
                            <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onecol">
                                <div id="main">
                                    <div class="cart-grid row">
                                        <div class="col-md-7 col-lg-8 check-info">
                                            <div class="row">
                                                <?php if (empty($_SESSION['makh'])) {
                                                    echo "<script> alert('Bạn cần đăng nhập để tiến hành thanh toán!!') </script>";
                                                    echo '<meta http-equiv="refresh" content="0; url=./index.php?action=user-login"/>';
                                                } else { ?>
                                                    <form action="index.php?action=order-cart" method="post">
                                                        <h4 class="mb-3">Billing Information</h4>

                                                        <div class="form-row">
                                                            <div class="form-group col-lg-12">
                                                                <label for="fullname">Full Name</label>
                                                                <input type="text" name="fullname" id="fullname" class="form-control" disabled value="<?php echo $_SESSION['name'] ?>" autocomplete="off">
                                                            </div>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col-lg-6">
                                                                <label for="phone">Number Phone</label>
                                                                <input type="tel" name="phone" id="phone" class="form-control" disabled value="<?php echo $_SESSION['phone'] ?>" autocomplete="off">
                                                            </div>
                                                            <div class="form-group col-lg-6">
                                                                <label for="email">Email</label>
                                                                <input type="email" name="email" id="email" class="form-control" disabled value="<?php echo $_SESSION['email'] ?>" autocomplete="off">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="address1">Address</label>
                                                            <input type="text" name="address1" class="form-control" id="address1" placeholder="1234 Main St" autocomplete="off">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="address2">Address 2</label>
                                                            <input type="text" name="address2" class="form-control" id="address2" placeholder="Apartment, studio, or floor" autocomplete="off">
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="city">City</label>
                                                                <input type="text" name="city" class="form-control" id="city" placeholder="City" autocomplete="off">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="state">State</label>
                                                                <input id="state" name="state" class="form-control" id="state" placeholder="State" autocomplete="off">
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <label for="zip">Zip</label>
                                                                <input type="text" class="form-control" name="zip" id="zip" maxlength="6" placeholder="Zip" autocomplete="off">
                                                            </div>
                                                        </div>

                                                        <a href="index.php?action=product-cart" class="btn btn-primary">Back Cart</a>
                                                        <button class="btn btn-primary">Confirm</button>
                                                    </form>
                                                    <!-- </div> -->
                                                <?php } ?>
                                            </div>
                                        </div>


                                        <div class="cart-grid-right col-md-5 col-xs-12 col-lg-4">
                                            <div class="cart-summary">
                                                <div class="cart-detailed-totals">
                                                    <div class="cart-summary-products">
                                                        <div class="summary-label">There are <?php if (isset($_SESSION['cartProduct']) && count($_SESSION['cartProduct']) > 0) echo count($_SESSION['cartProduct']) ?> item in your cart</div>
                                                    </div>
                                                    <div class="cart-summary-line" id="cart-subtotal-products">
                                                        <span class="label js-subtotal">
                                                            Total Products:
                                                        </span>
                                                        <span class="value">£<?php
                                                                                $sp = new gioHang();
                                                                                $get = $sp->totalPrice();
                                                                                echo number_format($get)
                                                                                ?></span>
                                                    </div>
                                                    <div class="cart-summary-line" id="cart-subtotal-shipping">
                                                        <span class="label">
                                                            Total Shipping:
                                                        </span>
                                                        <span class="value">Free</span>
                                                        <div>
                                                            <small class="value"></small>
                                                        </div>
                                                    </div>
                                                    <div class="cart-summary-line cart-total">
                                                        <span class="label">Total Price:</span>
                                                        <span class="value">£<?php
                                                                                $sp = new gioHang();
                                                                                $get = $sp->totalPrice();
                                                                                echo number_format($get)
                                                                                ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if (empty($_SESSION['cartProduct'])) { ?>
                                                <div id="block-reassurance">
                                                    <ul>
                                                        <li>
                                                            <div class="block-reassurance-item">
                                                                <img src="General/img/product/check1.png" alt="Security policy (edit with Customer reassurance module)">
                                                                <span>Security policy (edit with Customer reassurance module)</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="block-reassurance-item">
                                                                <img src="General/img/product/check2.png" alt="Delivery policy (edit with Customer reassurance module)">
                                                                <span>Delivery policy (edit with Customer reassurance module)</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="block-reassurance-item">
                                                                <img src="General/img/product/check3.png" alt="Return policy (edit with Customer reassurance module)">
                                                                <span>Return policy (edit with Customer reassurance module)</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            <?php }
                                            if (isset($_SESSION['cartProduct'])) { ?>
                                                <div class="" style="overflow-y: auto; height: 250px">
                                                    <table class="table bg-gradient-info">
                                                        <?php for ($i = 0; $i < count($_SESSION['cartProduct']); $i++) { ?>
                                                            <tr>
                                                                <td class="product-image">
                                                                    <a href="index.php?action=product-detail&id=<?php echo $_SESSION['cartProduct'][$i]['id'] ?>">
                                                                        <img style="width: 100px" src="General/img/product/<?php echo $_SESSION['cartProduct'][$i]['anhsp'] ?>" alt="Product">
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <div class="product-name">
                                                                        <a href="index.php?action=product-detail&id=<?php echo $_SESSION['cartProduct'][$i]['id'] ?>"><?php echo $_SESSION['cartProduct'][$i]['tensp'] ?></a>
                                                                    </div>
                                                                    <div class="my-3">
                                                                        <?php echo $_SESSION['cartProduct'][$i]['quantity'] ?> x
                                                                        <span class="product-price">£<?php echo $_SESSION['cartProduct'][$i]['giasp'] ?></span>
                                                                    </div>
                                                                    <div>
                                                                        <?php echo number_format($_SESSION['cartProduct'][$i]['total'], 2, ',', '.') ?>
                                                                    </div>
                                                                </td>
                                                                <td class="action">
                                                                    <a class="remove" href="index.php?action=deleteProduct&index=<?php echo $i ?>">
                                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </table>
                                                </div>
                                                <div id="block-reassurance">
                                                    <ul>
                                                        <li>
                                                            <div class="block-reassurance-item">
                                                                <img src="General/img/product/check1.png" alt="Security policy (edit with Customer reassurance module)">
                                                                <span>Security policy (edit with Customer reassurance module)</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="block-reassurance-item">
                                                                <img src="General/img/product/check2.png" alt="Delivery policy (edit with Customer reassurance module)">
                                                                <span>Delivery policy (edit with Customer reassurance module)</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="block-reassurance-item">
                                                                <img src="General/img/product/check3.png" alt="Return policy (edit with Customer reassurance module)">
                                                                <span>Return policy (edit with Customer reassurance module)</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            <?php
                                            } ?>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</div>