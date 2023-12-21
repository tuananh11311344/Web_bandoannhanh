<?php 
    session_start();
    include('config/config.php'); //lấy kết nối csdl
    if(isset($_POST['dangnhap'])){
        $taikhoa =$_POST['username'];
        $matkhau = md5($_POST['password']);

        $sql="SELECT * FROM tbl_admin WHERE username='".$taikhoa."' AND password='".$matkhau."'";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count > 0){
            $_SESSION['dangnhap'] = $taikhoa;
            header("Location:index.php");
        }else{
            echo "<script>alert('Tài khoản hoặc mật khẩu không đúng. Vui lòng nhập lại!'); window.location='login.php';</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- link css -->
    <link rel="stylesheet" href="./css/formlogin.css">
    <!-- link icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <center>
    <div class="container">
        <div class="box">
            <div class="form sign_in">
                <h3>Đăng nhập Admin</h3>
                <form method="POST" id="form_input">
                    <div class="type">
                        <input type="text" placeholder="Username" name="username" required/>
                    </div>
                    <div class="type">
                        <input type="password" placeholder="Password" name="password" required/>
                    </div>
                    <input type="submit" class="btn bkg" name="dangnhap" value="Đăng nhập" />
                </form>
            </div>      
        </div>
        <div class="overlay">
            <div class="page page_signIn">
                <h3>Welcome to Admin</h3>
               <a href="/Web_BanDoAnNhanh/index.php" style="text-decoration: none;" class="btn btnSign-in">Truy cập web bán hàng<i class="bi bi-arrow-right"></i></a>
            </div>
    
        </div>
    </div>
    </center>
</body>
</html>
