<div>

    <body class="product-cart checkout-cart blog">

        <!-- main content -->
        <div class="main-content" id="cart">
            <!-- main -->
            <div id="wrapper-site">
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
                                    <a href="index.php?action=product-cart">
                                        <span>Shopping Cart</span>
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </nav>
                <div class="container">
                    <div class="row">
                        <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onecol">
                            <section id="main">
                                <div class="cart-grid row">
                                    <div class="col-md-9 col-xs-12 check-info">
                                        <?php if (!isset($_SESSION['cartProduct']) || count($_SESSION['cartProduct']) == 0) {
                                            echo "<script> alert('Giỏ hàng của bạn chưa có sản phẩm nào. Hãy mua hàng rồi quay lại sau (>.<)') </script>";
                                        ?>
                                        <?php } else {
                                        ?>
                                            <h1 class="title-page">Shopping Cart</h1>
                                            <form action="index.php?action=editProduct" method="post">
                                                <div class="cart-container">
                                                    <div class="cart-overview js-cart">
                                                        <ul class="cart-items">
                                                            <?php
                                                            for ($i = 0; $i < count($_SESSION['cartProduct']); $i++) {
                                                                // print_r($_SESSION['cartProduct']);
                                                            ?>
                                                                <li class="cart-item">
                                                                    <div class="product-line-grid row justify-content-between">
                                                                        <!--  product left content: image-->
                                                                        <div class="product-line-grid-left col-md-2">
                                                                            <span class="product-image media-middle">
                                                                                <a href="index.php?action=product-detail&id=<?php echo $_SESSION['cartProduct'][$i]['id']  ?>">
                                                                                    <img class="img-fluid" src="General/img/product/<?php echo $_SESSION['cartProduct'][$i]['anhsp'] ?>" alt="">
                                                                                </a>
                                                                            </span>
                                                                        </div>
                                                                        <div class="product-line-grid-body col-md-6">
                                                                            <div class="product-line-info">
                                                                                <a class="label" href="index.php?action=product-detail&id=<?php echo $_SESSION['cartProduct'][$i]['id'] ?>" data-id_customization="0">Organic Strawberry Fruits</a>
                                                                            </div>
                                                                            <div class="product-line-info product-price">
                                                                                <span class="value">£<?php echo $_SESSION['cartProduct'][$i]['giasp'] ?></span>
                                                                            </div>
                                                                            <div class="product-line-info">
                                                                                <span class="label-atrr">Size:</span>
                                                                                <span class="value"><?php echo $_SESSION['cartProduct'][$i]['size'] ?></span>
                                                                            </div>
                                                                            <div class="product-line-info">
                                                                                <span class="label-atrr">Color:</span>
                                                                                <span class="value"><?php echo $_SESSION['cartProduct'][$i]['mausac'] ?></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-line-grid-right text-center product-line-actions col-md-4">
                                                                            <div class="row">
                                                                                <div class="col-md-5 col qty">
                                                                                    <div class="label">Quantity:</div>
                                                                                    <div class="quantity">
                                                                                        <input type="text" name="quantityNew[]" value="<?php echo $_SESSION['cartProduct'][$i]['quantity'] ?>" class="input-group form-control border-0 text-center">

                                                                                        <!-- <span class="input-group-btn-vertical">
                                                                                <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-up" type="button">
                                                                                    +
                                                                                </button>
                                                                                <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-down" type="button">
                                                                                    -
                                                                                </button>
                                                                            </span> -->
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-5 col price">
                                                                                    <div class="label">Total:</div>
                                                                                    <div class="product-price total">
                                                                                        £<?php echo number_format($_SESSION['cartProduct'][$i]['total']) ?>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-2 col text-xs-right align-self-end">
                                                                                    <div class="cart-line-product-actions ">
                                                                                        <a class="remove-from-cart" rel="nofollow" href="index.php?action=deleteProduct&index=<?php echo $i ?>" data-link-action="delete-from-cart" data-id-product="1">
                                                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                                                        </a>

                                                                                    </div>

                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            <?php } ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <a href="index.php?action=product-checkout" class="continue btn btn-primary pull-xs-right">
                                                    Continue
                                                </a>
                                                <a href="index.php?action=deleteAllCartProduct" class="btn btn-primary text-white" style="border-radius: 50px; float: right; background: linear-gradient(to top right, #ffcc99 0%, #ff9999 100%);">
                                                    Delete All Products
                                                </a>
                                                <button class="mx-1 btn btn-primary text-danger" type="submit" style="border-radius: 50px; float: right; background: linear-gradient(to top right, #ffcc99 0%, #ff9999 100%);">
                                                    Update 
                                                </button>
                                            </form>




                                        <?php } ?>

                                    </div>
                                    <div class="cart-grid-right col-xs-12 col-lg-3">
                                        <div class="cart-summary">
                                            <div class="cart-detailed-totals">
                                                <div class="cart-summary-products">
                                                    <div class="summary-label">There are <?php echo count($_SESSION['cartProduct']) ?> item in your cart</div>
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
                                                                            $gh = new giohang();
                                                                            $get = $gh->totalPrice();
                                                                            echo number_format($get);
                                                                            ?></span>
                                                </div>
                                            </div>
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
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</div>