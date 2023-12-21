<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style_admincp.css">
</head>
<body>
<div class="clear"></div>
<div class="main">
    <?php 
        if(isset($_GET['action']) && isset($_GET['query'])){
            $tam = $_GET['action'];
            $query = $_GET['query'];
        }else {
            $tam ='';
            $query ='';
        }

        if($tam == 'quanlydanhmucsanpham' && $query == 'them'){
            include('modules/quanlydanhmucsp/them.php');
        }
        else if($tam == 'quanlydanhmucsanpham' && $query == 'lietke'){
            include('modules/quanlydanhmucsp/lietke.php');
        }
        else if($tam == 'quanlydanhmucsanpham' && $query == 'sua'){
            include('modules/quanlydanhmucsp/sua.php');
        }
        else if($tam == 'quanlysanpham' && $query == 'them'){
            include('modules/quanlysp/them.php');
        }
        else if($tam == 'quanlysanpham' && $query == 'lietke'){
            include('modules/quanlysp/lietke.php');
        }
        else if($tam == 'quanlysanpham' && $query == 'sua'){
            include('modules/quanlysp/sua.php');
        }
        else if($tam == 'quanlydonhang' && $query == 'lietke'){
            include('modules/quanlydonhang/lietke.php');
        }
        else if($tam == 'donhang' && $query == 'xemdonhang'){
            include('modules/quanlydonhang/xemdonhang.php');
        }
        else if($tam == 'quanlylienhe' && $query == 'lietke'){
            include('modules/quanlylienhe/lietke.php');
        }
    ?>
</div>
</body>
</html>
