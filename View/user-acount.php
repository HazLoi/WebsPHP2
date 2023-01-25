<div>

    <body class="user-acount">
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
                                    <a href="index.php?action=user-acount">
                                        <span>My Account</span>
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </nav>

                <div class="acount head-acount">
                    <div class="container">
                        <div id="main">
                            <h1 class="title-page">My Account</h1>
                            <div class="content" id="block-history">
                                <table class="std table">
                                    <tbody>
                                        <?php if (isset($_SESSION['makh'])) { ?>

                                            <tr>
                                                <th class="first_item">My Name :</th>
                                                <td><?php echo $_SESSION['name'] ?></td>
                                            </tr>

                                            <tr>
                                                <th class="first_item">Phone :</th>
                                                <td><?php echo $_SESSION['phone'] ?></td>
                                            </tr>

                                            <tr>
                                                <th class="first_item">Email:</th>
                                                <td><?php echo $_SESSION['email'] ?></td>
                                            </tr>
                                            <tr>
                                                <th><a href="index.php?action=user-reset-password" class="btn bg-danger text-white">Reset Password</a></th>
                                                <td></td>
                                            </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                            <!-- <button class="btn btn-primary" data-link-action="sign-in" type="submit">
                                view Address
                            </button> -->
                            <div class="order">
                                <h4>Order
                                    <span class="detail">History</span>
                                </h4>
                                <?php
                                $sp = new user();
                                if (isset($_GET['page'])) {
                                    $result = $sp->getCheckout($_SESSION['makh'], $_GET['page']);
                                } else {
                                    $result = $sp->getCheckout($_SESSION['makh'], 1);
                                }
                                ?>
                                <div>
                                    <table class="table ">
                                        <tr>
                                            <th>Mã hóa đơn</th>
                                            <th>Mã hàng hóa</th>
                                            <th>Số lượng mua</th>
                                            <th>Màu sắc</th>
                                            <th>Size</th>
                                            <th>Thành tiền</th>
                                            <th>Ngày mua</th>
                                        </tr>
                                        <?php if ($result) {
                                            $check = new user();

                                            $x = $check->getNumCheckout($_SESSION['makh']);

                                            $numCheckout = ceil($x / 5);
                                            while ($set = $result->fetch()) : ?>
                                                <tr>

                                                    <td><?php echo $set['mahd'] ?></td>
                                                    <td><?php echo $set['mahh'] ?></td>
                                                    <td><?php echo $set['soluongmua'] ?></td>
                                                    <td><?php echo $set['mausac'] ?></td>
                                                    <td><?php echo $set['size'] ?></td>
                                                    <td><?php echo $set['thanhtien'] ?></td>
                                                    <td><?php echo $set['ngay'] ?></td>
                                                </tr>
                                            <?php endwhile;
                                        } else { ?>
                                            <p>You haven't placed any orders yet.</p>
                                        <?php } ?>
                                    </table>
                                </div>
                                <div class="" style="float: right">
                                    <div>
                                        <ul class="d-flex">
                                            <button class="border-0 btn" style="background: aqua;">
                                                <li>
                                                    <a rel="prev" href="index.php?action=user-acount&page=<?php if ($_SESSION['pageAccount'] > 1) {
                                                                                                                echo $_SESSION['pageAccount'] - 1;
                                                                                                            } else {
                                                                                                                echo $_SESSION['pageAccount'] = 1;
                                                                                                            } ?>" class="previous disabled js-search-link">
                                                        Previous
                                                    </a>
                                                </li>
                                            </button>
                                            <button class="border-0 btn" style="background: aqua; margin-left: 10px">
                                                <li>
                                                    <a rel="next" href="index.php?action=user-acount&page=<?php if ($_SESSION['pageAccount'] >= $numCheckout) {
                                                                                                                echo $_SESSION['pageAccount'] = $numCheckout;
                                                                                                            } else {
                                                                                                                echo $_SESSION['pageAccount'] + 1;
                                                                                                            } ?>" class="next disabled js-search-link">
                                                        Next
                                                    </a>
                                                </li>
                                            </button>
                                        </ul>
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