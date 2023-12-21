<?php 
    include("../../config/config.php");
    $tensanpham = $_POST["tensp"];
    $masp =$_POST["masp"];
    $giasp =$_POST["giasp"];
    $soluong =$_POST["soluong"];
     // Xử lý hình ảnh
     $hinhanh =$_FILES["hinhanh"]["name"];
     $hinhanh_tmp =$_FILES["hinhanh"]["tmp_name"];
     //tránh gửi ảnh bị trùng
     $hinhanh = time().'_'.$hinhanh;

    $noidung =$_POST["noidung"];
    $tomtat =$_POST["tomtat"];
    $tinhtrang =$_POST["tinhtrang"];
    $danhmuc =$_POST["danhmuc"];

    if(isset($_POST["themsanpham"])){
        $sql_them ="INSERT INTO tbl_sanpham(tensanpham,masp,gia,soluong,hinhanh,tomtat,noidung,tinhtrang,id_danhmuc) 
            VALUES('".$tensanpham."','".$masp."','".$giasp."','".$soluong."','".$hinhanh."','".$tomtat."','".$noidung."','".$tinhtrang."','".$danhmuc."')";
        mysqli_query($mysqli,$sql_them);
        //sau khi thêm dữ liệu thì di chuyển hình ảnh
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        //chuyển hướng người dùng tới trang khác sau khi thêm thành công
        header("Location:../../index.php?action=quanlysanpham&query=lietke");
    } 
    elseif(isset($_POST["suasanpham"])){
        if($hinhanh !=''){
            //di chuyển hình ảnh vào folder uploads
            move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
            $sql_update ="UPDATE tbl_sanpham 
                SET tensanpham = '".$tensanpham."', masp ='".$masp."', masp ='".$masp."', gia ='".$giasp."', soluong ='".$soluong."', hinhanh ='".$hinhanh."', tomtat ='".$tomtat."', tinhtrang ='".$tinhtrang."', id_danhmuc ='".$danhmuc."'
                WHERE id_sanpham = '".$_GET['idsanpham']."'";
             //thực hiện xóa ảnh cũ
             $sql ="SELECT * FROM tbl_sanpham WHERE id_sanpham = '".$_GET['idsanpham']."'";
             $query = mysqli_query($mysqli,$sql);
             while($row = mysqli_fetch_array($query)){
                 //xóa link ảnh trong uploads
                 unlink('uploads/'.$row['hinhanh']);
             }    
        }else{
            $sql_update ="UPDATE tbl_sanpham 
                SET tensanpham = '".$tensanpham."', masp ='".$masp."', masp ='".$masp."', gia ='".$giasp."', soluong ='".$soluong."', tomtat ='".$tomtat."', tinhtrang ='".$tinhtrang."'
                WHERE id_sanpham = '".$_GET['idsanpham']."'";
        }
        mysqli_query($mysqli,$sql_update);
        header("Location:../../index.php?action=quanlysanpham&query=lietke");
    }
    elseif(isset($_GET['query']) =='xoa'){
        $id =$_GET['idsanpham'];
        $sql ="SELECT * FROM tbl_sanpham WHERE id_sanpham = '".$id."'";
        $query = mysqli_query($mysqli,$sql);
        while($row = mysqli_fetch_array($query)){
            //xóa link ảnh trong uploads
            unlink('uploads/'.$row['hinhanh']);
        }    
        $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham = '".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header("Location:../../index.php?action=quanlysanpham&query=lietke");
    }
?>