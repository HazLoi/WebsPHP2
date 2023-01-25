<?php
    include_once "./Controller/dhModel.php"
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Furniture store website template</title>

    <meta name="keywords" content="Furniture, Decor, Interior">
    <meta name="description" content="Furnitica - Minimalist Furniture HTML Template">
    <meta name="author" content="tivatheme">



    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="General/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="General/libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="General/libs/nivo-slider/css/nivo-slider.css">
    <link rel="stylesheet" href="General/libs/nivo-slider/css/animate.css">
    <link rel="stylesheet" href="General/libs/nivo-slider/css/style.css">
    <link rel="stylesheet" href="General/libs/font-material/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="General/libs/slider-range/css/jslider.css">
    <link rel="stylesheet" href="General/libs/owl-carousel/assets/owl.carousel.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" type="text/css" href="General/css/reponsive.css">
    <link rel="stylesheet" type="text/css" href="General/css/style.css">
</head>

<body>
    <!-- header -->
    <?php
    include_once "./View/header.php";
    ?>
    <!-- hiên thi noi dung -->
    <div>

        <!-- hien thi noi dung đây -->
        <?php
        include_once "./Controller/dhView.php";
        ?>

    </div>
    <!-- hiên thị footer -->
    <?php
    include_once "./View/footer.php";
    ?>

    <!-- Vendor JS -->
    <script src="General/libs/jquery/jquery.min.js"></script>
    <script src="General/libs/popper/popper.min.js"></script>
    <script src="General/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="General/libs/nivo-slider/js/jquery.nivo.slider.js"></script>
    <script src="General/libs/owl-carousel/owl.carousel.min.js"></script>
    <script src="General/libs/slider-range/js/tmpl.js"></script>
    <script src="General/libs/slider-range/js/jquery.dependClass-0.1.js"></script>
    <script src="General/libs/slider-range/js/draggable-0.1.js"></script>
    <script src="General/libs/slider-range/js/jquery.slider.js"></script>
    <!-- Template JS -->

    <script src="General/js/theme.js"></script>
</body>

</html>
