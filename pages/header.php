<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
    <body>
        <div class="header">
            <div class="top-header">
                <div class="contact">
                    <i class="fa-solid fa-phone"></i> <b>Hotline: </b>1900636099 <i style="margin-left: 10px;" class="fa-solid fa-envelope"></i>
                </div>
                <div class="login">
                    <?php 
                        if(isset($_SESSION['dangnhap_tc'])){
                    ?>
                        <p>
                            Xin chào: <span style=" color:#ff7175;font-family:cursive;"><?php echo $_SESSION['dangnhap_tc'] ?></span><a href="index.php?dangxuat=1"><i style="margin-left:5px;" class="fa-solid fa-right-from-bracket"></i></a>
                        </p>
                    <?php 
                        }else{
                    ?>
                    <a href="/Web_BanDoAnNhanh/Login.php"><b style="margin-right:5px;">Đăng nhập </b></a> hoặc <a href="/Web_BanDoAnNhanh/dangky.php"><b style="margin-left:5px;"> Đăng kí</b></a>
                    <?php 
                        }
                    ?>
                </div>
            </div>
            <div class="bottom-header">
                <div class="search">
                    <form action="index.php?main=mainphu&quanly=timkiem" method="POST">
                        <input type="text" placeholder="Tìm kiếm ..." name="tukhoa">
                        <input type="submit" name="search" value="Search" />
                    </form>
                </div>
                <div class="logo">
                    <div class="image-header">
                        
                    </div>
                </div>
                <?php 
                    //nếu tồn tại giỏ hàng
                    if(isset($_SESSION['cart'])){
                        $tongtien =0;
                        $tong_sp=0;
                        foreach($_SESSION['cart'] as $cart_item){
                            $thanhtien =$cart_item['soluong'] * $cart_item['giasp'];
                            $tongtien +=$thanhtien;
                            $tong_sp+=$cart_item['soluong'];
                        }
                    ?>
                <div class="cart">
                    <a href="index.php?main=mainphu&quanly=giohang" class="cart-img"><i class="fa-solid fa-cart-shopping"></i></a>
                    <span class="cart-sl-sp"><?php echo $tong_sp?> sản phẩm</span>  
                    <span class="cart-gia"><?php echo number_format($tongtien,0,',','.').'đ'?></span>
                </div>
                <?php 
                    //nếu không tồn tại giỏ hàng
                    }else{
                ?>
                 <div class="cart">
                    <a href="index.php?main=mainphu&quanly=giohang" class="cart-img"><i class="fa-solid fa-cart-shopping"></i></a>
                    <span class="cart-sl-sp">0 sản phẩm</span>  
                    <span style="min-width:20%;" class="cart-gia">0đ</span>
                </div>
                <?php 
                    }
                ?>
            </div>
        </div>
    </body>
</html>
