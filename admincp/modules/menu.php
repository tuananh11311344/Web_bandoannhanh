<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Admin</title>
    <link rel="stylesheet" href="./public/fonts/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<body>
<div class="container menu-container">
    <div class="row">
        <div class="col-md-12">
            <ul class="admincp_list list-group">
                <li class="list-group-item-image">
                    <div class="image-menu">                 
                    </div>
                    <p>Adminstrator</p>
                </li>
                <?php
                    if(isset($_SESSION['dangnhap'])){
                ?>  
                <li class="list-group-item">
                    <a href="index.php?action=quanlydanhmucsanpham&query=them">Thêm danh mục sản phẩm</a>
                </li>
                <li class="list-group-item">
                    <a href="index.php?action=quanlydanhmucsanpham&query=lietke">Danh sách danh mục sản phẩm</a>
                </li>
                <li class="list-group-item">
                    <a href="index.php?action=quanlysanpham&query=them">Thêm sản phẩm</a>
                </li>
                <li class="list-group-item">
                    <a href="index.php?action=quanlysanpham&query=lietke">Danh sách sản phẩm</a>
                </li>
                <li class="list-group-item">
                    <a href="index.php?action=quanlydonhang&query=lietke">Quản lý đơn hàng</a>
                </li>
                <li class="list-group-item">
                    <a href="index.php?action=quanlylienhe&query=lietke">Quản lý liên hệ</a>
                </li>
                <?php 
                    }
                ?>
                <li class="list-group-item-logout">
                    <div class="logout">
                    <p><a href="index.php?dangxuat=1">Đăng xuất</a></p>
                    <i class="fa-solid fa-right-from-bracket"></i>
                    </div>              
                </li>

            </ul>
        </div>
    </div>
</div> 
</body>
</html>
