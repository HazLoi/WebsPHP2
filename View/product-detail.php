<div>

    <body id="product-detail">
        <?php
        if (isset($_GET["id"])) {
            $id = $_GET['id'];
            //
            $sp = new cua_hang();
            $result = $sp->getProductId($id);
            $anhsp = $result['anhsp'];
            $tensp = $result['tensp'];
            $dongia = $result['dongia'];
            $giamgia = $result['giamgia'];
            $motasp = $result['motasp'];
            $masp = $result['masp'];
            $loaisp = $result['loaisp'];
            $trangthai = $result['trangthai'];
            $mausac = $result['mausac'];
            $size = $result['size'];
        }
        ?>
        <!-- main content -->
        <div class="main-content">
            <div id="wrapper-site">
                <div id="content-wrapper">
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
                                                <a href="#">
                                                    <span>Living Room</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span>Sofa</span>
                                                </a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </nav>
                            <div class="container">
                                <div class="content">
                                    <div class="row">
                                        <div class="sidebar-3 sidebar-collection col-lg-3 col-md-3 col-sm-4">

                                            <!-- category -->
                                            <div class="sidebar-block">
                                                <div class="title-block">Categories</div>
                                                <div class="block-content">
                                                    <div class="cateTitle hasSubCategory open level1">
                                                        <span class="arrow collapse-icons collapsed" data-toggle="collapse" data-target="#livingroom">
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
                                                        <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#bathroom">
                                                            <i class="zmdi zmdi-minus"></i>
                                                            <i class="zmdi zmdi-plus"></i>
                                                        </span>
                                                        <a class="cateItem" href="#">Bathroom</a>
                                                        <div class="subCategory collapse" id="bathroom">
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
                                                        <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#diningroom">
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
                                                        <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#bedroom">
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
                                                        <span class="arrow collapsed collapse-icons" data-toggle="collapse" data-target="#kitchen">
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

                                            <!-- best seller -->
                                            <div class="sidebar-block">
                                                <div class="title-block">
                                                    Best seller
                                                </div>
                                                <div class="product-content tab-content">
                                                    <div class="row">
                                                        <?php
                                                        $sp = new cua_hang();
                                                        $a = $sp->getProduct($trangthai, $loaisp);
                                                        while ($b = $a->fetch()) :
                                                        ?>
                                                            <div class="item col-md-12">
                                                                <div class="product-miniature item-one first-item d-flex">
                                                                    <div class="thumbnail-container border">
                                                                        <a href="index.php?action=product-detail&id=<?php echo $b['id'] ?>">
                                                                            <img class="img-fluid image-cover" src="General/img/product/<?php echo $b['anhsp'] ?>" alt="img">
                                                                            <img class="img-fluid image-secondary" src="General/img/product/<?php echo $b['anhphu'] ?>" alt="img">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="index.php?action=product-detail"><?php echo $b['tensp'] ?></a>
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
                                                                                    <?php if ($b['giamgia'] > 0) { ?>
                                                                                        <div class="product-price-and-shipping">
                                                                                            <span class="price">£<?php echo $b['giamgia'] ?></span>
                                                                                            <del class="regular-price">£<?php echo $b['dongia'] ?></del>
                                                                                        </div>
                                                                                    <?php } else { ?>
                                                                                        <div class="product-price-and-shipping">
                                                                                            <span class="price">£<?php echo $b['dongia'] ?></span>
                                                                                        </div>
                                                                                    <?php } ?>
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

                                        </div>




                                        <div class="col-sm-8 col-lg-9 col-md-9">
                                            <div class="main-product-detail">

                                                <h2><?php echo $tensp ?></h2>
                                                <div class="product-single row">
                                                    <div class="product-detail col-xs-12 col-md-5 col-sm-5">
                                                        <div class="page-content" id="content">
                                                            <div class="images-container">
                                                                <div class="js-qv-mask mask tab-content border">
                                                                    <div id="<?php echo $id ?>" class="tab-pane fade active in show">
                                                                        <img src="General/img/product/<?php echo $anhsp ?>" alt="img">
                                                                    </div>
                                                                    <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                                                                        <i class="fa fa-expand"></i>
                                                                    </div>
                                                                </div>

                                                                <ul class="product-tab nav nav-tabs d-flex">

                                                                    <?php
                                                                    $c = $sp->getProduct($trangthai, $loaisp);
                                                                    while ($d = $c->fetch()) :
                                                                    ?>
                                                                        <li class="active col">
                                                                            <a href="#<?php echo $d['id'] ?>" data-toggle="tab" aria-expanded="true" class="active show">
                                                                                <img src="General/img/product/<?php echo $d['anhsp'] ?>" alt="img">
                                                                            </a>
                                                                        </li>
                                                                    <?php endwhile; ?>
                                                                </ul>

                                                                <div class="modal fade" id="product-modal" role="dialog">
                                                                    <div class="modal-dialog">

                                                                        <!-- Modal content-->
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <div class="modal-body">
                                                                                    <div class="product-detail">
                                                                                        <div>
                                                                                            <div class="images-container">
                                                                                                <div class="js-qv-mask mask tab-content">
                                                                                                    <div id="modal-<?php echo $id ?>" class="tab-pane fade active in show">
                                                                                                        <img src="General/img/product/<?php echo $anhsp ?>" alt="img">
                                                                                                    </div>

                                                                                                </div>
                                                                                                <ul class="product-tab nav nav-tabs">

                                                                                                    <?php
                                                                                                    $c = $sp->getProduct($trangthai, $loaisp);
                                                                                                    while ($d = $c->fetch()) :
                                                                                                    ?>
                                                                                                        <li class="active">
                                                                                                            <a href="#modal-<?php echo $id ?>" data-toggle="tab" class=" active show">
                                                                                                                <img src="General/img/product/<?php echo $d['anhsp'] ?>" alt="img">
                                                                                                            </a>
                                                                                                        </li>
                                                                                                    <?php endwhile; ?>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-info col-xs-12 col-md-7 col-sm-7">
                                                        <div class="detail-description">
                                                            <div class="price-del">

                                                                <?php if ($giamgia > 0) { ?>
                                                                    <div class="product-price-and-shipping">
                                                                        <span class="price">£<?php echo $giamgia ?></span>
                                                                        <del class="regular-price">£<?php echo $dongia ?></del>
                                                                    </div>
                                                                <?php } else { ?>
                                                                    <div class="product-price-and-shipping">
                                                                        <span class="price">£<?php echo $dongia ?></span>
                                                                    </div>
                                                                <?php } ?>

                                                                <span class="float-right">
                                                                    <span class="availb">Availability: </span>
                                                                    <span class="check">
                                                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>IN STOCK</span>
                                                                </span>
                                                            </div>
                                                            <p class="description">Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum
                                                                auctor, nisi elit consequat etiam non auctor.</p>

                                                            <form action="index.php?action=product-cart" method="post">

                                                                <div class="option has-border d-lg-flex size-color">
                                                                    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" />

                                                                    <div class="size">
                                                                        <span class="size">Size :</span>
                                                                        <select name="size">
                                                                            <?php
                                                                            $result = $sp->getProductSize($trangthai, $loaisp);
                                                                            while ($set = $result->fetch()) {
                                                                            ?>
                                                                                <option value="<?php echo $set['size'] ?>"><?php echo $set['size'] ?></option>
                                                                            <?php } ?>
                                                                        </select>

                                                                    </div>

                                                                    <select name="mausac">
                                                                        <?php
                                                                        $result = $sp->getProduct($trangthai, $loaisp);
                                                                        while ($set = $result->fetch()) {
                                                                        ?>
                                                                            <option value="<?php echo $set['mausac'] ?>"><?php echo $set['mausac'] ?></option>
                                                                        <?php } ?>
                                                                    </select>

                                                                </div>

                                                                <div class="has-border cart-area">
                                                                    <div class="product-quantity">
                                                                        <div class="qty">
                                                                            <div class="input-group">
                                                                                <div class="quantity">
                                                                                    <span class="control-label">QTY : </span>
                                                                                    <input type="text" name="quantity" id="quantity_wanted" value="1" class="input-group form-control" min="1" max="100">

                                                                                </div>

                                                                                <span class="add mt-1">
                                                                                    <button class="btn btn-primary add-to-cart add-item" data-button-action="add-to-cart" type="submit">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                        <span>Add to cart</span>
                                                                                    </button>
                                                                                    <a class="addToWishlist" href="index.php?action=user-wishlist">
                                                                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </span>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <p class="product-minimal-quantity">
                                                                    </p>
                                                                </div>

                                                            </form>

                                                            <div class="d-flex2 has-border">
                                                                <div class="btn-group">
                                                                    <a href="#">
                                                                        <i class="zmdi zmdi-share"></i>
                                                                        <span>Share</span>
                                                                    </a>
                                                                    <a href="#" class="email">
                                                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                                                        <span>SEN TO A FRIEND</span>
                                                                    </a>
                                                                    <a href="#" class="print">
                                                                        <i class="zmdi zmdi-print"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="rating-comment has-border d-flex">
                                                                <div class="review-description d-flex">
                                                                    <span>REVIEW :</span>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="read after-has-border">
                                                                    <a href="#review">
                                                                        <i class="fa fa-commenting-o color" aria-hidden="true"></i>
                                                                        <span>READ REVIEWS (3)</span>
                                                                    </a>
                                                                </div>
                                                                <div class="apen after-has-border">
                                                                    <a href="#review">
                                                                        <i class="fa fa-pencil color" aria-hidden="true"></i>
                                                                        <span>WRITE A REVIEW</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="content">
                                                                <p>SKU :
                                                                    <span class="content2">
                                                                        <a href="#"><?php echo $masp ?></a>
                                                                    </span>
                                                                </p>
                                                                <p>Categories :
                                                                    <span class="content2">
                                                                        <a href="#"><?php echo $loaisp ?></a>
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="review">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active">
                                                            <a data-toggle="tab" href="#description" class="active show">Description</a>
                                                        </li>
                                                        <li>
                                                            <a data-toggle="tab" href="#tag">Product Tags</a>
                                                        </li>
                                                        <li>
                                                            <a data-toggle="tab" href="#review">Reviews <?php $cmt = new binhluan();
                                                                                                        $result = $cmt->getProductComments($_GET['id']);
                                                                                                        $dem = 0;
                                                                                                        while ($set = $result->fetch()) :
                                                                                                            $dem++;
                                                                                                        endwhile;
                                                                                                        if ($dem > 0) {
                                                                                                            echo "(" . $dem . ")";
                                                                                                        } ?></a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content">
                                                        <div id="description" class="tab-pane fade in active show">
                                                            <?php echo $motasp ?>
                                                        </div>

                                                        <div id="review" class="tab-pane fade">


                                                            <?php

                                                            $cmt = new binhluan();

                                                            $result = $cmt->getProductComments($_GET['id']);
                                                            if ($result) {
                                                                while ($set = $result->fetch()) :
                                                            ?>
                                                                    <div class="spr-form">
                                                                        <div class="user-comment">

                                                                            <div class="spr-review">
                                                                                <div class="spr-review-header">
                                                                                    <span class="spr-review-header-byline">
                                                                                        <strong><?php echo $set['author'] ?></strong> -
                                                                                        <span><?php echo $set['date'] ?></span>
                                                                                    </span>
                                                                                    <!-- <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div> -->
                                                                                </div>
                                                                                <div class="spr-review-content">
                                                                                    <p class="spr-review-content-body"><?php echo $set['comment'] ?></p>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                            <?php endwhile;
                                                            } ?>

                                                            <form method="post" action="index.php?action=comments">

                                                                <!-- <input type="hidden" name="review[rating]" value="3"> -->

                                                                <input type="hidden" name="product_id" id="product_id" value="<?php echo $_GET['id'] ?>">

                                                                <h3 class="spr-form-title">Write a review</h3>

                                                                <!-- <fieldset>
                                                                    <div class="spr-form-review-rating">
                                                                        <label class="spr-form-label">Your Rating</label>
                                                                        <fieldset class="ratings">
                                                                            <input type="radio" id="star5" name="rating" value="5" />
                                                                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                                                            <input type="radio" id="star4" name="rating" value="4" />
                                                                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                                                            <input type="radio" id="star3" name="rating" value="3" />
                                                                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                                                                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                                                            <input type="radio" id="star2" name="rating" value="2" />
                                                                            <label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                                                            <input type="radio" id="star1" name="rating" value="1" />
                                                                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                                            <input type="radio" id="starhalf" name="rating" value="half" />
                                                                        </fieldset>
                                                                    </div>
                                                                </fieldset> -->

                                                                <?php if (isset($_SESSION['makh'])) { ?>

                                                                    <fieldset class="spr-form-contact">
                                                                        <div class="spr-form-contact-name">
                                                                            <input class="spr-form-input spr-form-input-text form-control" name="name" id="name" value="<?php echo $_SESSION['name'] ?>" placeholder="Enter your name" disabled>
                                                                        </div>
                                                                        <div class="spr-form-contact-email">
                                                                            <input class="spr-form-input spr-form-input-email form-control" name="email" id="email" value="<?php echo $_SESSION['email'] ?>" placeholder="Enter your email" disabled>
                                                                        </div>
                                                                    </fieldset>

                                                                <?php } else { ?>

                                                                    <fieldset class="spr-form-contact">
                                                                        <div class="spr-form-contact-name">
                                                                            <input class="spr-form-input spr-form-input-text form-control" name="name" id="name" placeholder="Enter your name">
                                                                        </div>
                                                                        <div class="spr-form-contact-email">
                                                                            <input class="spr-form-input spr-form-input-email form-control" name="email" id="email" placeholder="Enter your email">
                                                                        </div>
                                                                    </fieldset>

                                                                <?php } ?>


                                                                <fieldset>
                                                                    <div class="spr-form-review-body">
                                                                        <div class="spr-form-input">
                                                                            <textarea class="spr-form-input-textarea" style="resize: none;" maxlength="1000" name="comments" id="comments" rows="10" placeholder="Write your comments here"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </fieldset>

                                                                <div class="submit">
                                                                    <input type="submit" name="addComment" id="addComment" class="btn btn-default" value="Submit Review">
                                                                </div>

                                                            </form>
                                                        </div>
                                                        <div id="tag" class="tab-pane fade in">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                                                                ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua.
                                                            </p>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                                eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem
                                                                ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="related">
                                                    <div class="title-tab-content  text-center">
                                                        <div class="title-product justify-content-start">
                                                            <h2>Related Products</h2>
                                                        </div>
                                                    </div>
                                                    <div class="tab-content">
                                                        <div class="row">
                                                            <?php
                                                            $e = $sp->getProduct($trangthai, $loaisp);
                                                            while ($f = $e->fetch()) :
                                                            ?>
                                                                <div class="item text-center col-md-4">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container border border">
                                                                            <a href="index.php?action=product-detail&id=<?php echo $f['id'] ?>">
                                                                                <img class="img-fluid image-cover" src="General/img/product/<?php echo $f['anhsp'] ?>" alt="img">
                                                                                <img class="img-fluid image-secondary" src="General/img/product/<?php echo $f['anhphu'] ?>" alt="img">
                                                                            </a>
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
                                                                                    <a href="index.php?action=product-detail"><?php echo $f['tensp'] ?></a>
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

                                                                                        <?php if ($giamgia > 0) { ?>
                                                                                            <div class="product-price-and-shipping">
                                                                                                <span class="price">£<?php echo $giamgia ?></span>
                                                                                                <del class="regular-price">£<?php echo $dongia ?></del>
                                                                                            </div>
                                                                                        <?php } else { ?>
                                                                                            <div class="product-price-and-shipping">
                                                                                                <span class="price">£<?php echo $dongia ?></span>
                                                                                            </div>
                                                                                        <?php } ?>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="index.php?action=user-wishlist" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endwhile; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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