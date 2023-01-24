<div>
    <?php
    if ($_GET['action'] == 'shop' || $_GET['action'] == 'comments') {
        $ac = 0;
    } elseif ($_GET['action'] == 'searchProduct') {
        $ac = 1;
    }
    ?>

    <body id="product-sidebar-left" class="product-grid-sidebar-left">
        <!-- main content -->
        <div class="main-content">
            <div id="wrapper-site">
                <div id="content-wrapper" class="full-width">
                    <div id="main">
                        <div class="page-home">
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
                                                <a href="index.php?action=shop">
                                                    <span>Shop</span>
                                                </a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </nav>

                            <div class="container">
                                <div class="content">
                                    <div class="row">
                                        <!-- <div class="sidebar-3 sidebar-collection col-lg-3 col-md-4 col-sm-4">

                                           
                                            <div class="sidebar-block">
                                                <div class="title-block">Categories</div>
                                                <div class="block-content">
                                                    <div class="cateTitle hasSubCategory open level1">
                                                        <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#livingroom" aria-expanded="false" role="status">
                                                            <i class="zmdi zmdi-minus"></i>
                                                            <i class="zmdi zmdi-plus"></i>
                                                        </span>
                                                        <a class="cateItem" href="#">Living Room</a>
                                                        <div class="subCategory collapse" id="livingroom" aria-expanded="true" role="status">
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">Side Table</a>
                                                                <div class="subCategory collapse" id="subCategory-fruits" aria-expanded="true" role="status">
                                                                    <div class="cateTitle">
                                                                        <a href="#" class="cateItem">Side Table</a>
                                                                    </div>
                                                                    <div class="cateTitle">
                                                                        <a href="#" class="cateItem">FIREPLACE</a>
                                                                    </div>
                                                                    <div class="cateTitle">
                                                                        <a href="#" class="cateItem">FIREPLACE</a>
                                                                    </div>
                                                                    <div class="cateTitle">
                                                                        <a href="#" class="cateItem">floor lamp</a>
                                                                    </div>
                                                                    <div class="cateTitle">
                                                                        <a href="#" class="cateItem">ottoman</a>
                                                                    </div>
                                                                    <div class="cateTitle">
                                                                        <a href="#" class="cateItem">armchair</a>
                                                                    </div>
                                                                    <div class="cateTitle">
                                                                        <a href="#" class="cateItem">cushion</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">FIREPLACE</a>
                                                            </div>
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">FIREPLACE</a>
                                                            </div>
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">floor lamp</a>
                                                            </div>
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">ottoman</a>
                                                            </div>
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">armchair</a>
                                                            </div>
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">cushion</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cateTitle hasSubCategory open level1">
                                                        <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#bathroom" aria-expanded="false" role="status">
                                                            <i class="zmdi zmdi-minus"></i>
                                                            <i class="zmdi zmdi-plus"></i>
                                                        </span>
                                                        <a class="cateItem" href="#">Bathroom</a>
                                                        <div class="subCategory collapse" id="bathroom" aria-expanded="false" role="status">
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">TOMATO</a>
                                                            </div>
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">BROCCOLI</a>
                                                            </div>
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">CABBAGE</a>
                                                            </div>
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">CUCUMBER</a>
                                                            </div>
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">EGGPLANT</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cateTitle hasSubCategory open level1">
                                                        <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#diningroom" aria-expanded="false" role="status">
                                                            <i class="zmdi zmdi-minus"></i>
                                                            <i class="zmdi zmdi-plus"></i>
                                                        </span>
                                                        <a class="cateItem" href="#">Dining Rooom</a>
                                                        <div class="subCategory collapse" id="diningroom" aria-expanded="true" role="status">
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">DRY BREAD</a>
                                                            </div>
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">BREAD SLICES</a>
                                                            </div>
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">FRENCH BREAD</a>
                                                            </div>
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">BLACK BREAD</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cateTitle hasSubCategory open level1">
                                                        <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#bedroom" aria-expanded="false" role="status">
                                                            <i class="zmdi zmdi-minus"></i>
                                                            <i class="zmdi zmdi-plus"></i>
                                                        </span>
                                                        <a class="cateItem" href="#">BedRoom</a>
                                                        <div class="subCategory collapse" id="bedroom" aria-expanded="true" role="status">
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">ORANGE JUICES</a>
                                                            </div>
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">TOMATO JUICES</a>
                                                            </div>
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">APPLE JUICES</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="cateTitle hasSubCategory open level1">
                                                        <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#kitchen" aria-expanded="false" role="status">
                                                            <i class="zmdi zmdi-minus"></i>
                                                            <i class="zmdi zmdi-plus"></i>
                                                        </span>
                                                        <a class="cateItem" href="#">Kitchen</a>
                                                        <div class="subCategory collapse" id="kitchen" aria-expanded="true" role="status">
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">ORANGE JUICES</a>
                                                            </div>
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">TOMATO JUICES</a>
                                                            </div>
                                                            <div class="cateTitle">
                                                                <a href="#" class="cateItem">APPLE JUICES</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div> -->
                                        <div class="col-sm-12 col-lg-12 col-md-12 product-container">
                                            <h1>Shop</h1>
                                            <div class="js-product-list-top firt nav-top">
                                                <div class="d-flex justify-content-around row">
                                                    <div class="col col-xs-12">
                                                        <ul class="nav nav-tabs">
                                                            <li>
                                                                <a href="#grid" data-toggle="tab" class="active show fa fa-th-large"></a>
                                                            </li>
                                                            <li>
                                                                <a href="#list" data-toggle="tab" class="fa fa-list-ul"></a>
                                                            </li>
                                                        </ul>
                                                        <div class="hidden-sm-down total-products">
                                                            <p>There are 12 products.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col col-xs-12">
                                                        <div class="d-flex sort-by-row justify-content-lg-end justify-content-md-end">

                                                            <div class="products-sort-order dropdown">
                                                                <select class="select-title">
                                                                    <option value="">Sort by</option>
                                                                    <option value="">Name, A to Z</option>
                                                                    <option value="">Name, Z to A</option>
                                                                    <option value="">Price, low to high</option>
                                                                    <option value="">Price, high to low</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-content product-items">
                                                <div id="grid" class="related tab-pane fade in active show">
                                                    <div class="row">
                                                        <?php
                                                        $sp = new cua_hang();
                                                        if ($ac == 0) {
                                                            if (isset($_GET['page'])) {
                                                                $result = $sp->getProductForPage($_GET['page']);
                                                            } else {
                                                                $result = $sp->getProductForPage(1);
                                                            }
                                                        } elseif ($ac == 1) {
                                                            $result = $sp->getSearchProduct($_SESSION['searchProduct']);
                                                        }
                                                        while ($set = $result->fetch()) :
                                                        ?>
                                                            <div class="item text-center col-md-4">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container border">
                                                                        <a href="index.php?action=product-detail&id=<?php echo $set['id'] ?>">
                                                                            <img class="img-fluid image-cover" src="General/img/product/<?php echo $set['anhsp'] ?>" alt="img">
                                                                            <img class="img-fluid image-secondary" src="General/img/product/<?php echo $set['anhphu'] ?>" alt="img">
                                                                        </a>
                                                                        <?php if ($set['giamgia'] > 0) { ?>
                                                                            <div class="product-flags discount">-30%</div>
                                                                        <?php } ?>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
                                                                                <a href="#" class="color orange" title="Orange"></a>
                                                                                <a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="index.php?action=product-detail"><?php echo $set['tensp'] ?></a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">

                                                                                    <?php if ($set['giamgia'] > 0) { ?>
                                                                                        <div class="product-price-and-shipping">
                                                                                            <span class="price">£<?php echo $set['giamgia'] ?></span>
                                                                                            <del class="regular-price">£<?php echo $set['dongia'] ?></del>
                                                                                        </div>
                                                                                    <?php } else { ?>
                                                                                        <div class="product-price-and-shipping">
                                                                                            <span class="price">£<?php echo $set['dongia'] ?></span>
                                                                                        </div>
                                                                                    <?php } ?>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <input type="hidden" name="id_product" value="1">
                                                                                <a class="add-to-cart" href="index.php?action=product-detail&id=<?php echo $set['id'] ?>" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <form action="index.php?action=yeuthich&page=shop" method="post">

                                                                                <input type="hidden" name="mahh" value="<?php echo $set['id']; ?>">
                                                                                <input type="hidden" name="name" value="<?php echo $set['tensp']; ?>">
                                                                                <input type="hidden" name="mausac" value="<?php echo $set['mausac']; ?>">
                                                                                <input type="hidden" name="size" value="<?php echo $set['size']; ?>">
                                                                                <input type="hidden" name="dongia" value="<?php if ($set['giamgia'] > 0) {
                                                                                                                                echo $set['giamgia'];
                                                                                                                            } else {
                                                                                                                                echo $set['dongia'];
                                                                                                                            } ?>">

                                                                                <button class="addToWishlist" data-rel="1">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </button>
                                                                            </form>
                                                                            <a href="index.php?action=product-detail&id=<?php echo $set['id'] ?>" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endwhile; ?>
                                                    </div>
                                                </div>
                                                <div id="list" class="related tab-pane fade">
                                                    <div class="row">
                                                        <?php
                                                        $sp = new cua_hang();
                                                        if ($ac == 0) {
                                                            if (isset($_GET['page'])) {
                                                                $result = $sp->getProductForPage($_GET['page']);
                                                            } else {
                                                                $result = $sp->getProductForPage(1);
                                                            }
                                                        } elseif ($ac == 1) {
                                                            $result = $sp->getSearchProduct($_SESSION['searchProduct']);
                                                        }
                                                        while ($set = $result->fetch()) :
                                                        ?>
                                                            <div class="item col-md-12">
                                                                <div class="product-miniature item-one first-item">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="thumbnail-container border">
                                                                                <a href="index.php?action=product-detail">
                                                                                    <img class="img-fluid image-cover" src="General/img/product/<?php echo $set['anhsp'] ?>" alt="img">
                                                                                    <img class="img-fluid image-secondary" src="General/img/product/<?php echo $set['anhphu'] ?>" alt="img">
                                                                                </a>
                                                                                <?php if ($set['giamgia'] > 0) { ?>
                                                                                    <div class="product-flags discount">-30%</div>
                                                                                <?php } ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <div class="product-description">
                                                                                <div class="product-groups">
                                                                                    <div class="product-title">
                                                                                        <a href="index.php?action=product-detail&id=<?php echo $set['id'] ?>"><?php echo $set['tensp'] ?></a>
                                                                                        <span class="info-stock">
                                                                                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                                                            In Stock
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="rating">
                                                                                        <div class="star-content">
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                            <div class="star"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="product-group-price">
                                                                                        <div class="product-price-and-shipping">
                                                                                            <?php if ($set['giamgia'] > 0) { ?>
                                                                                                <div class="product-price-and-shipping">
                                                                                                    <span class="price">£<?php echo $set['giamgia'] ?></span>
                                                                                                    <del class="regular-price">£<?php echo $set['dongia'] ?></del>
                                                                                                </div>
                                                                                            <?php } else { ?>
                                                                                                <div class="product-price-and-shipping">
                                                                                                    <span class="price">£<?php echo $set['dongia'] ?></span>
                                                                                                </div>
                                                                                            <?php } ?>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="discription">
                                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ultricies eget velit vitae bibendum. Cras condimentum libero
                                                                                        a lectus ultricies...
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-buttons d-flex">
                                                                                    <form action="index.php?action=product-detail&id=<?php echo $set['id'] ?>" method="post" class="formAddToCart">
                                                                                        <a class="add-to-cart" href="index.php?action=product-detail&id=<?php echo $set['id'] ?>" data-button-action="add-to-cart">
                                                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>Add to cart
                                                                                        </a>
                                                                                    </form>
                                                                                    <a class="addToWishlist" href="index.php?action=user-wishlist" data-rel="1" onclick="">
                                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                    <a href="index.php?action=product-detail&id=<?php echo $set['id'] ?>" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endwhile; ?>

                                                    </div>
                                                </div>
                                            </div>

                                            <!-- pagination -->
                                            <div class="pagination">
                                                <div class="js-product-list-top ">
                                                    <div class="d-flex justify-content-around row">
                                                        <div class="showing col col-xs-12">
                                                            <?php if (isset($_GET['page'])) { ?>
                                                                <span>Page <?php echo $_GET['page'] ?></span>
                                                            <?php } else { ?>
                                                                <span></span>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="page-list col col-xs-12">
                                                            <ul>
                                                                <li>
                                                                    <a rel="prev" href="index.php?action=shop&page=<?php if ($_SESSION['page'] > 1) {
                                                                                                                        echo $_SESSION['page'] - 1;
                                                                                                                    } else {
                                                                                                                        echo $_SESSION['page'] = 1;
                                                                                                                    } ?>" class="previous disabled js-search-link">
                                                                        Previous
                                                                    </a>
                                                                </li>
                                                                <li class="">
                                                                    <a rel="nofollow" href="index.php?action=shop&page=1" class="disabled js-search-link">
                                                                        1
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a rel="nofollow" href="index.php?action=shop&page=2" class="disabled js-search-link">
                                                                        2
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a rel="nofollow" href="index.php?action=shop&page=3" class="disabled js-search-link">
                                                                        3
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a rel="next" href="index.php?action=shop&page=<?php if ($_SESSION['page'] >= 5) {
                                                                                                                        echo $_SESSION['page'] = 5;
                                                                                                                    } else {
                                                                                                                        echo $_SESSION['page'] + 1;
                                                                                                                    } ?>" class="next disabled js-search-link">
                                                                        Next
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- end col-md-9-1 -->
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