<header>
    <!-- header left mobie -->
    <div class="header-mobile d-md-none">
        <div class="mobile hidden-md-up text-xs-center d-flex align-items-center justify-content-around">

            <!-- menu left -->
            <div id="mobile_mainmenu" class="item-mobile-top">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>

            <!-- logo -->
            <div class="mobile-logo">
                <a href="index.php?action=home">
                    <img class="logo-mobile img-fluid" src="General/img/home/logo-mobie.png" alt="Prestashop_Furnitica">
                </a>
            </div>

            <!-- menu right -->
            <div class="mobile-menutop" data-target="#mobile-pagemenu">
                <i class="zmdi zmdi-more"></i>
            </div>
        </div>

        <!-- search -->
        <div id="mobile_search" class="d-flex">

            <div id="mobile_search_content">
                <form method="post" action="index.php?action=searchProduct&act=search">
                    <input type="text" name="s" value="" placeholder="Search">
                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>

            <div class="desktop_cart">
                <div class="blockcart block-cart cart-preview tiva-toggle">
                    <div class="header-cart tiva-toggle-btn">
                        <?php
                        $count = 0;
                        if ($_SESSION['cartProduct']) {
                            $count = count($_SESSION['cartProduct']);
                        }
                        ?>
                        <span class="cart-products-count"><?php echo $count ?></span>
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                    <div class="dropdown-content">
                        <div class="cart-content">
                            <table>
                                <tbody>
                                    <?php
                                    if (!isset($_SESSION['cartProduct']) || count($_SESSION['cartProduct']) == 0) {
                                        echo "<p class='text-center'>Hiện chưa có bất kỳ sản phẩm nào trong giỏ hàng</p>";
                                    ?>
                                        <?php } else {
                                        for ($i = 0; $i <  count($_SESSION['cartProduct']); $i++) { ?>
                                            <tr>
                                                <td class="product-image">
                                                    <a href="index.php?action=product-detail&id=<?php echo $_SESSION['cartProduct'][$i]['id'] ?>">
                                                        <img src="General/img/product/<?php echo $_SESSION['cartProduct'][$i]['anhsp'] ?>" alt="Product">
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="product-name">
                                                        <a href="index.php?action=product-detail&id=<?php echo $_SESSION['cartProduct'][$i]['id'] ?>"><?php echo $_SESSION['cartProduct'][$i]['name'] ?></a>
                                                    </div>
                                                    <div>
                                                        <?php echo $_SESSION['cartProduct'][$i]['quantity'] ?> x
                                                        <span class="product-price">£<?php echo $_SESSION['cartProduct'][$i]['giasp'] ?></span>
                                                    </div>
                                                </td>
                                                <td class="action">
                                                    <a class="remove" href="index.php?action=deleteProduct&index=<?php echo $i ?>">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        <tr class="total">
                                            <td colspan="2">Total:</td>
                                            <td>£<?php
                                                    $gh = new giohang();
                                                    $gett = $gh->totalPrice();
                                                    echo number_format($gett);
                                                    ?></td>
                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="3" class="d-flex justify-content-center">
                                            <div class="cart-button">
                                                <a href="index.php?action=product-cart" title="View Cart">View Cart</a>
                                                <a href="index.php?action=product-checkout" title="Checkout">Checkout</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- header desktop -->
    <div class="header-top d-xs-none ">
        <div class="container">
            <div class="row">
                <!-- logo -->
                <div class="col-sm-2 col-md-2 d-flex align-items-center">
                    <div id="logo">
                        <a href="index.php?action=home">
                            <img class="img-fluid" src="General/img/home/logo.png" alt="logo">
                        </a>
                    </div>
                </div>

                <!-- menu -->
                <div class="main-menu col-sm-4 col-md-5 align-items-center justify-content-center navbar-expand-md">
                    <div class="menu navbar collapse navbar-collapse">
                        <ul class="menu-top navbar-nav">
                            <li class="nav-link">
                                <a href="index.php?action=home" class="parent">Home</a>
                            </li>
                            <li>
                                <a href="index.php?action=shop" class="parent">Shop</a>
                            </li>
                            <li>
                                <a href="index.php?action=about-us" class="parent">About</a>
                            </li>
                            <li>
                                <a href="index.php?action=contact" class="parent">Contact US</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- search-->
                <div id="search_widget" class="col-sm-6 col-md-5 align-items-center justify-content-end d-flex">
                    <form method="post" action="index.php?action=searchProduct&act=search">
                        <input type="text" name="s" value="" placeholder="Search ..." class="ui-autocomplete-input" autocomplete="off">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>

                    <!-- acount  -->
                    <div id="block_myaccount_infos" class="hidden-sm-down dropdown">

                        <div class="myaccount-title">
                            <a href="#acount" data-toggle="collapse" class="acount">
                                <i class="fa fa-user" aria-hidden="true"></i>

                                <?php if (!isset($_SESSION['makh'])) { ?>

                                    <span>Account</span>

                                <?php } else { ?>

                                    <span> <?php echo $_SESSION['name'] ?></span>

                                <?php } ?>

                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                        </div>

                        <div id="acount" class="collapse">
                            <div class="account-list-content">

                                <?php
                                if (isset($_SESSION['makh'])) { ?>

                                    <div>
                                        <a class="login" href="index.php?action=user-acount" rel="nofollow" title="Login to your customer account">
                                            <i class="fa fa-cog"></i>
                                            <span>My Account</span>
                                        </a>
                                    </div>

                                    <div>
                                        <a class="check-out" href="index.php?action=product-checkout" rel="nofollow" title="Checkout">
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <span>Checkout</span>
                                        </a>
                                    </div>

                                    <div>
                                        <a href="index.php?action=user-wishlist" title="My Wishlists">
                                            <i class="fa fa-heart"></i>
                                            <span>My Wishlists</span>
                                        </a>
                                    </div>

                                    <div>
                                        <a class="login" href="index.php?action=user-logout" rel="nofollow" title="Log out to your customer account">
                                            <i class="fa fa-sign-in"></i>
                                            <span>Log out</span>
                                        </a>
                                    </div>

                                <?php }  ?>

                                <?php if (empty($_SESSION['makh'])) { ?>

                                    <div>
                                        <a class="login" href="index.php?action=user-login" rel="nofollow" title="Log in to your customer account">
                                            <i class="fa fa-sign-in"></i>
                                            <span>Login Account</span>
                                        </a>
                                    </div>

                                    <div>
                                        <a class="register" href="index.php?action=user-register" rel="nofollow" title="Register Account">
                                            <i class="fa fa-user"></i>
                                            <span>Register Account</span>
                                        </a>
                                    </div>

                                <?php } ?>

                                <div id="desktop_currency_selector" class="currency-selector groups-selector hidden-sm-down">
                                    <ul class="list-inline">
                                        <li>
                                            <a title="Euro" rel="nofollow" href="#">EUR</a>
                                        </li>
                                        <li class="current list-inline-item">
                                            <a title="British Pound Sterling" rel="nofollow" href="#">GBP</a>
                                        </li>
                                    </ul>
                                </div>
                                <div id="desktop_language_selector" class="language-selector groups-selector hidden-sm-down">
                                    <ul class="list-inline">
                                        <li class="list-inline-item current">
                                            <a href="#">
                                                <img class="img-fluid" src="General/img/home/home1-flas.jpg" alt="English" width="16" height="11">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <img class="img-fluid" src="General/img/home/home1-flas2.jpg" alt="Italiano" width="16" height="11">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <img class="img-fluid" src="General/img/home/home1-flas3.jpg" alt="Français" width="16" height="11">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <img class="img-fluid" src="General/img/home/home1-flas4.jpg" alt="Español" width="16" height="11">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="desktop_cart">
                        <div class="blockcart block-cart cart-preview tiva-toggle">
                            <?php
                            $count = 0;
                            if (isset($_SESSION['cartProduct'])) {
                                $count = count($_SESSION['cartProduct']);
                            }
                            ?>
                            <div class="header-cart tiva-toggle-btn">
                                <span class="cart-products-count"><?php echo $count ?></span>
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>

                            <div class="dropdown-content">
                                <div class="cart-content" style="overflow-y: auto; height: 500px">
                                    <table>
                                        <tbody>
                                            <?php if (!isset($_SESSION['cartProduct']) || count($_SESSION['cartProduct']) == 0) {
                                                echo "<p class='text-center'>Hiện chưa có bất kỳ sản phẩm nào trong giỏ hàng</p>";
                                            ?>
                                            <?php } else {
                                            ?>

                                                <?php for ($i = 0; $i <  count($_SESSION['cartProduct']); $i++) {
                                                ?>
                                                    <tr>
                                                        <td class="product-image">
                                                            <a href="index.php?action=product-detail&id=<?php echo $_SESSION['cartProduct'][$i]['id'] ?>">
                                                                <img src="General/img/product/<?php echo $_SESSION['cartProduct'][$i]['anhsp'] ?>" alt="Product">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <div class="product-name">
                                                                <a href="index.php?action=product-detail&id=<?php echo $_SESSION['cartProduct'][$i]['id'] ?>"><?php echo $_SESSION['cartProduct'][$i]['tensp'] ?></a>
                                                            </div>
                                                            <div>
                                                                <?php echo $_SESSION['cartProduct'][$i]['quantity'] ?> x
                                                                <span class="product-price">£<?php echo $_SESSION['cartProduct'][$i]['giasp'] ?></span>
                                                            </div>
                                                        </td>
                                                        <td class="action">
                                                            <a class="remove" href="index.php?action=deleteProduct&index=<?php echo $i ?>">
                                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>

                                                <tr class="total">
                                                    <td colspan="2">Total:</td>
                                                    <td>£<?php
                                                            $gh = new giohang();
                                                            $gett = $gh->totalPrice();
                                                            echo number_format($gett);
                                                            ?></span></td>
                                                </tr>

                                            <?php } ?>
                                            <tr>
                                                <td colspan="3" class="d-flex justify-content-center">
                                                    <div class="cart-button">
                                                        <a href="index.php?action=product-cart" title="View Cart">View Cart</a>
                                                        <a href="index.php?action=product-checkout" title="Checkout">Checkout</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>