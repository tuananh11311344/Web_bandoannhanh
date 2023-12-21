<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web bán đồ ăn nhanh</title>
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/fonts/fontawesome-free-6.2.1-web/css/all.min.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="wrapper">
        <?php 
            session_start();
            if(isset($_GET['dangxuat'])==1){
                unset($_SESSION['dangnhap_tc']);
                header("Location:index.php");
            }
            include("admincp/config/config.php");
            include("pages/header.php");
            include("pages/menu.php");
            if(isset($_GET['main'])=='mainphu'){
                include("pages/mainphu.php");
            }
            else{
                include("pages/main.php");
            }
            include("pages/footer.php");
        ?>
    </div>
</body>
</html>