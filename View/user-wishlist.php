<div>

    <body class="user-wishlist blog">

        <!-- main content -->
        <div class="main-content">
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
                                    <a href="#">
                                        <span>Wishlists</span>
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </nav>

            </div>

            <!-- main -->
            <div id="wrapper-site">
                <div class="container">
                    <div class="row">
                        <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onecol">
                            <div id="main">
                                <div id="content" class="page-content">
                                    <div id="mywishlist">
                                        <h1 class="title-page">My Wishlists</h1>
                                        <!-- <form method="post" class="std" id="customer-form">
                                            <fieldset>
                                                <h3>New wishlist</h3>
                                                <div class="input-group">
                                                    <input type="text" id="name" name="name" placeholder="Name" class="form-control" value="">
                                                    <button class="btn" type="submit" data-action="show-password" data-text-show="Show" data-text-hide="Hide">
                                                        Save
                                                    </button>
                                                </div>
                                            </fieldset>
                                        </form> -->
                                        <div id="block-history" class="block-center">
                                            <table class="std table">
                                                <thead>
                                                    <tr>
                                                        <th class="first_item">Mã sản phẩm</th>
                                                        <th class="item mywishlist_first">Tên sản phẩm</th>
                                                        <th class="item mywishlist_first">Màu sắc</th>
                                                        <th class="item mywishlist_second">Kích thước</th>
                                                        <th class="item mywishlist_second">Đơn giá</th>
                                                        <th class="item mywishlist_second">Ngày</th>
                                                        <th class="last_item mywishlist_first">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $myFavoriteList = new yeuthich();

                                                    $result = $myFavoriteList->getMyFavoriteProducts($_SESSION['makh']);
                                                    if ($result) {
                                                        while ($set = $result->fetch()) :
                                                    ?>

                                                            <tr>
                                                                <td>
                                                                    <a href="index.php?action=product-detail&id=<?php echo $set['mahh'] ?>;"><?php echo $set['mahh'] ?></a>
                                                                </td>
                                                                <td class="bold align_center">
                                                                    <?php echo $set['name'] ?>
                                                                </td>
                                                                <td><?php echo $set['color'] ?></td>
                                                                <td><?php echo $set['size'] ?></td>
                                                                <td><?php echo $set['money'] ?></td>
                                                                <td><?php echo $set['date'] ?></td>
                                                                <td>
                                                                    <form action="index.php?action=deleteFavoriteProduct" method="post">
                                                                        <input type="hidden" name="mahh" value="<?php echo $set['mahh'] ?>">
                                                                        <button class="border-0" style="background: none">Delete</button>
                                                                    </form>
                                                                </td>
                                                            </tr>

                                                    <?php endwhile;
                                                    } ?>


                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="page-home">
                                            <a class="btn btn-default" href="index.php?action=home">
                                                <i class="fa fa-home" aria-hidden="true"></i>
                                                <span>Homepage</span>
                                            </a>
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