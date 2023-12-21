<?php 
    include("admincp/config/config.php");
    if(isset($_POST['dangky'])){
        $hoten=trim($_POST['hoten']);
        $ten=trim($_POST['ten']);
        $diachi=trim($_POST['diachi']);
        $sodt=trim($_POST['sodt']);
        $tendangnhap=$_POST['tendangnhap'];
        $email=$_POST['email'];
        $matkhau= md5($_POST['matkhau']);
        $matkhau= md5($_POST['nhaplaimatkhau']);
        if($hoten===""  || $diachi ==="" || $sodt==="" ||$tendangnhap==="" ){
            echo "<script>alert('Vui lòng nhập đầy đủ thông tin trước khi thêm!'); window.location='dangky.php';</script>";
        }
        else{
            $sql_them= "INSERT INTO tbl_dangky(hoten,tendangnhap,email,sodt,diachi,matkhau) 
                    VALUES('".$hoten."','".$tendangnhap."','".$email."','".$sodt."','".$diachi."','".$matkhau."')";
        $query_them=mysqli_query($mysqli,$sql_them);
        echo "<script>alert('Đăng ký tài khoản thành công'); window.location='Login.php' </script>";
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- link css -->
    <link rel="stylesheet" href="./public/css/formlogin.css">
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
                <h3>Đăng ký</h3>
                <form method="POST" id="form_input">
                    <div class="type">
                        <input type="text" placeholder="Họ tên" name="hoten" required />
                    </div>
                    <div class="type">
                        <input type="text" placeholder="Địa chỉ" name="diachi" required/>
                    </div>
                    <div class="type">
                        <input type="number" placeholder="Số điện thoại" name="sodt" required />
                    </div>
                    <div class="type">
                        <input type="email" placeholder="Email" name="email" required />
                    </div>
                    <div class="type">
                        <input type="text" placeholder="Tên đăng nhập" name="tendangnhap" required />
                    </div>
                    <div class="type">
                        <input type="password" placeholder="Mật khẩu" name="matkhau" required />
                    </div>
                    <div class="type">
                        <input type="password" placeholder="Nhập lại mật khẩu" name="nhaplaimatkhau" required />
                    </div>
                    <input type="submit" class="btn bkg" name="dangky" value="Đăng ký" />
                </form>
            </div>      
        </div>
        <div class="overlay">
            <div class="page page_signIn">
                <h3>Welcome back!</h3>
               <a href="/Web_BanDoAnNhanh/Login.php" style="text-decoration: none;" class="btn btnSign-in">Sign in<i class="bi bi-arrow-right"></i></a>
            </div>
    
        </div>
    </div>
    </center>
</body>
</html>