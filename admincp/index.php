<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admincp</title>

    <link rel="stylesheet" href="css/style_admincp.css">
    <link rel="stylesheet" href="./public/fonts/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <?php 
        include("config/config.php");
        session_start();
                if(!isset($_SESSION['dangnhap'])){
                    header('Location:login.php');
                }
                elseif(isset($_GET['dangxuat'])==1){
                    unset($_SESSION['dangnhap']);
                    header('Location:login.php');
                }
                
    ?>
        <div class="row">
            <nav>
                <div class="position-sticky">
                    <div class="menu-container">
                        <?php include("modules/menu.php"); ?>
                    </div>
                </div>
            </nav>
            <main>
            <div>
                <!-- Phần header -->
                <?php include("modules/header.php"); ?>
            </div>
                <!-- Phần nội dung chính -->
                <?php include("modules/main.php"); ?>
            </main>
        </div>
    </div>
</body>
</html>