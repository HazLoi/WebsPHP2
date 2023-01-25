<?php
$action = "dhView";
if (isset($_GET["action"])) {
    $action = $_GET["action"];
}

switch ($action) {
    case 'dhView':
        include_once "./View/home.php";
        break;

    case 'home':
        include_once "./View/home.php";
        break;

    case 'contact':
        include_once "./View/contact.php";
        break;

    case 'about-us':
        include_once "./View/about-us.php";
        break;

    case 'product-detail':
        include_once "./View/product-detail.php";
        break;

    case 'product-checkout':
        include_once "./View/product-checkout.php";
        break;

    case 'user-acount':
        if (isset($_SESSION['makh'])) {
            if (empty($_GET['page'])) {
                $_SESSION['pageAccount'] = 1;
            } elseif (isset($_GET['page'])) {
                $check = new user();

                $x = $check->getNumCheckout($_SESSION['makh']);

                $numCheckout = ceil($x / 5);

                $_SESSION['pageAccount'] = $_GET['page'];

                $_SESSION['pageAccount'] < 1 ? $_SESSION['pageAccount'] = 1 : $_SESSION['pageAccount']--;

                $_SESSION['pageAccount'] > $numCheckout ? $_SESSION['pageAccount'] = $numCheckout : $_SESSION['pageAccount']++;
            }
            include_once "./View/user-acount.php";
        } else {
            include_once "./View/404.php";
        }
        break;

    case 'user-reset-password':
        include_once "./View/user-reset-password.php";
        break;

    case 'user-wishlist':
        if (isset($_SESSION['makh'])) {
            include_once "./View/user-wishlist.php";
        } else {
            include_once "./View/404.php";
        }
        break;

    case '404':
        include_once "./View/404.php";
        break;

    case 'resetPassword':

        if (empty($_POST['password']) || empty($_POST['newpassword']) || empty($_POST['renewpassword'])) {
            echo "<script> alert('Vui lòng nhập đầy đủ thông tin để thay đổi mật khẩu') </script>";
            echo '<meta http-equiv="refresh" content="0; url=./index.php?action=user-reset-password"/>';
        } elseif (isset($_POST['password'])) {
            if ($_POST['newpassword'] != $_POST['renewpassword']) {
                echo "<script> alert('Mật khẩu nhập lại không đúng') </script>";
                echo '<meta http-equiv="refresh" content="0; url=./index.php?action=user-reset-password"/>';
            } else {
                $makh = $_SESSION['makh'];
                $mkcu = $_POST['password'];
                $mkmoi = $_POST['newpassword'];

                $mahoa1 = "!%HazKing@";
                $mahoa2 = "!^HazHonTu*";
                $matkhaumoi = md5($mahoa1 . $mkmoi . $mahoa2);
                $matkhaucu = md5($mahoa1 . $mkcu . $mahoa2);

                $us = new user();

                $result = $us->checkPassword($makh, $matkhaucu);

                if ($result) {
                    $us->resetPassword($makh, $matkhaumoi);
                    echo "<script> alert('Đổi mật khẩu thành công. Vui lòng đăng nhập lại!!') </script>";
                    $user = new user();
                    $user->logout();
                    echo '<meta http-equiv="refresh" content="0; url=./index.php?action=user-login"/>';
                } else {

                    echo "<script> alert('Mật khẩu không đúng') </script>";
                    echo '<meta http-equiv="refresh" content="0; url=./index.php?action=user-reset-password"/>';
                }
            }
        }
        break;

    case 'deleteFavoriteProduct':
        $deleteFavoriteProduct = new yeuthich();
        $mahh = $_POST['mahh'];
        $makh = $_SESSION['makh'];
        $result = $deleteFavoriteProduct->deleteFavoriteProduct($makh, $mahh);
        include_once "./View/user-wishlist.php";
        // echo '<meta http-equiv="refresh" content="0; url=./index.php?action=user-wishlist"/>';
        break;

    case 'yeuthich':
        if (isset($_SESSION['makh'])) {
            $mahh = $_POST['mahh'];
            $makh = $_SESSION['makh'];
            $name = $_POST['name'];
            $color = $_POST['mausac'];
            $size = $_POST['size'];
            $money = $_POST['dongia'];

            $favorite = new yeuthich();
            $result = $favorite->checkFavoriteProduct($mahh, $makh);
            if ($result) {
                echo "<script> alert('Sản phẩm này đã có trong mục yêu thích của bạn') </script>";
                if ($_GET['page'] == "shop") {
                    echo '<meta http-equiv="refresh" content="0; url=./index.php?action=shop"/>';
                }
                if ($_GET['page'] == "home") {
                    echo '<meta http-equiv="refresh" content="0; url=./index.php?action=home"/>';
                }
            } else {
                $result = $favorite->addFavoriteProducts($mahh, $makh, $name, $color, $size, $money);
                echo '<meta http-equiv="refresh" content="0; url=./index.php?action=user-wishlist"/>';
            }
        } else {
            if (isset($_GET['page']) == "shop") {
                echo "<script> alert('Cần đăng nhập để thêm sản phẩm vào mục yêu thích') </script>";
                echo '<meta http-equiv="refresh" content="0; url=./index.php?action=user-login"/>';
            }
            if (isset($_GET['page']) == "home") {
                echo "<script> alert('Cần đăng nhập để thêm sản phẩm vào mục yêu thích') </script>";
                echo '<meta http-equiv="refresh" content="0; url=./index.php?action=user-login"/>';
            }
        }

        break;

    case 'comments':

        if (isset($_SESSION['makh']) && isset($_POST['comments'])) {
            $mahh = $_POST['product_id'];
            $author = $_SESSION['name'];
            $email = $_SESSION['email'];
            $comment = $_POST['comments'];

            $cmts = new binhluan();
            $result = $cmts->insertComments($mahh, $author, $email, $comment);
        } elseif (empty($_SESSION['makh'])) {
            $mahh = $_POST['product_id'];
            $author = $_POST['name'];
            $email = $_POST['email'];
            $comment = $_POST['comments'];

            $cmts = new binhluan();
            $result = $cmts->insertComments($mahh, $author, $email, $comment);
        }
        if (isset($_GET['action']) == "comments" && isset($_GET['id'])) {
            $mahh = $_GET['id'];
            include_once "./View/product-detail.php";
        }
        break;

    case 'shop':
        if (empty($_GET['page'])) {
            $_SESSION['pageShop'] = 1;
        } elseif (isset($_GET['page'])) {
            $num = new cua_hang();

            $x = $num->getNumProducts();

            $sumNumProducts = ceil($x / 9);

            $_SESSION['pageShop'] = $_GET['page'];

            $_SESSION['pageShop'] < 1 ? $_SESSION['pageShop'] = 1 : $_SESSION['pageShop']--;

            $_SESSION['pageShop'] > $sumNumProducts ? $_SESSION['pageShop'] = $sumNumProducts : $_SESSION['pageShop']++;
        }

        $sp = new cua_hang();
        $result = $sp->getProductForPage($_SESSION['pageShop']);


        include_once "./View/shop.php";
        break;

    case 'searchProduct':
        if (isset($_POST['s'])) {
            $_SESSION['searchProduct'] = $_POST['s'];
        }
        include_once "./View/shop.php";
        break;

    case 'product-cart':
        if (!isset($_SESSION['cartProduct'])) {
            $_SESSION['cartProduct'] = array();
        }

        if (isset($_POST["id"])) {
            $id = $_POST["id"];
            $quantity = $_POST['quantity'];
            $mausac = $_POST['mausac'];
            $size = $_POST['size'];
            $sp = new gioHang();
            $result = $sp->addProducts($id, $quantity, $mausac, $size);
        }

        include_once "./View/product-cart.php";
        break;

    case 'editProduct':
        if (isset($_POST['quantityNew'])) {

            $quantityEdit = $_POST['quantityNew'];
            foreach ($quantityEdit as $vitri => $qty) {
                if ($_SESSION['cartProduct'][$vitri]['quantity'] != $qty) {
                    $sp = new gioHang();
                    $sp->editProduct($qty, $vitri);
                }
            }
        }

        include_once "./View/product-cart.php";
        break;

    case 'deleteProduct':
        if (isset($_GET['index'])) {

            $sp = new gioHang();
            $sp->deleteProduct($_GET['index']);
        }

        echo '<meta http-equiv="refresh" content="0; url=./index.php?action=product-cart"/>';
        break;

    case 'deleteAllCartProduct':

        $sp = new gioHang();
        $sp->deleteAllCartProduct();

        include_once "./View/product-cart.php";
        break;

    case 'user-login':
        if (isset($_GET['act'])) {
            $action = $_GET['act'];
        }

        switch ($action) {
            case 'user-login':
                include_once "./View/user-login.php";
                break;

            case 'login':
                if (isset($_POST['email']) && isset($_POST['password'])) {
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $mahoa1 = "!%HazKing@";
                    $mahoa2 = "!^HazHonTu*";
                    $mk = md5($mahoa1 . $password . $mahoa2);

                    $us = new user();
                    $result = $us->login($email, $mk);

                    if ($result) {

                        $_SESSION['makh'] =  $result['id'];
                        $_SESSION['email'] =  $result['email'];
                        $_SESSION['name'] =  $result['fullname'];
                        $_SESSION['phone'] =  $result['phone'];

                        // echo "<script> alert('Đăng nhập thành công') </script>";
                        echo '<meta http-equiv="refresh" content="0; url=./index.php?action=home"/>';
                    } else {
                        echo "<script> alert('Tài khoản hoặc mật khẩu không đúng!!') </script>";
                        include_once "./View/user-login.php";
                    }
                }
                break;
        }
        break;

    case 'user-register':
        if (isset($_GET['act'])) {
            $action = $_GET['act'];
        }

        switch ($action) {
            case 'user-register':
                include_once "./View/user-register.php";
                break;

            case 'register':
                if (isset($_POST['btn-reg'])) {
                    $fullname = $_POST['fullname'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $mahoa1 = "!%HazKing@";
                    $mahoa2 = "!^HazHonTu*";
                    $mk = md5($mahoa1 . $password . $mahoa2);

                    $us = new user();
                    $result = $us->checkEmail($email);
                    if ($result) {
                        echo "<script> alert('Email đã tồn tại!!') </script>";
                    } else {
                        $us->register($fullname, $phone, $email, $mk);
                        echo "<script> alert('Đăng ký thành công') </script>";
                    }
                }
                include_once "./View/user-login.php";
                break;
        }
        break;

    case 'user-logout':
        $sp = new user();
        $result = $sp->logout();
        echo '<meta http-equiv="refresh" content="0; url=./index.php?action=user-login"/>';
        break;
    case 'order-cart':

        if (empty($_POST['address1']) && empty($_POST['address2']) || empty($_POST['city']) || empty($_POST['state']) || empty($_POST['zip'])) {
            echo "<script> alert('Vui lòng nhập đầy đủ thông tin để tiến hành thanh toán') </script>";
            echo '<meta http-equiv="refresh" content="0; url=./index.php?action=product-checkout"/>';
        } else {
            if (isset($_SESSION['makh'])) {
                $makh = $_SESSION['makh'];
                $fullname = $_SESSION['name'];
                $phone = $_SESSION['phone'];
                $email = $_SESSION['email'];
                $address1 = $_POST['address1'];
                $address2 = $_POST['address2'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $zip = $_POST['zip'];

                $hoadon = new hoadon();

                $hoadon->insertUser($makh, $fullname, $phone, $email, $address1, $address2, $city, $state, $zip);
                $mahd = $hoadon->insertOrder($makh);
                $total = 0;

                foreach ($_SESSION['cartProduct'] as $key => $item) {
                    $hoadon->insertOrderDetail($mahd, $item['id'], $item['quantity'], $item['mausac'], $item['size'], $item['total']);
                    $total += $item['total'];
                }
                $hoadon->updateOrderTotal($mahd, $total);
            }
            echo '<meta http-equiv="refresh" content="0; url=./index.php?action=home"/>';
            // $msg = "Cảm ơn quý khách đã mua hàng (>.<)";
            // $msg = wordwrap($msg, 70);

            // mail($email, "Hello", $msg, "From: admin@gmail.com");
        }
        break;
}
