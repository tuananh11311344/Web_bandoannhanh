<?php 
    //dùng session để lưu trữ dữ liệu
    session_start();
    include('../../admincp/config/config.php'); //lấy kết nối csdl
    //thêm giỏ hàng
    if(isset($_POST['themgiohang'])){
        if(isset($_SESSION['dangnhap_tc'])){
        $id =$_GET['idsanpham'];
        $soluong =$_POST['soluong'];
        $sql ="SELECT * FROM tbl_sanpham WHERE id_sanpham = '".$id."'";
        $query =mysqli_query($mysqli,$sql);
        $row= mysqli_fetch_array($query);
        if($row){
            $new_product = array(
                'tensanpham'=>$row['tensanpham'],
                'id'=>$id,
                'soluong'=>$soluong,
                'giasp'=>$row['gia'],
                'hinhanh'=>$row['hinhanh'],
                'masp'=>$row['masp']
            );
            
            //kiểm tra xem giỏ hàng đã tồn tại chưa
            if(isset($_SESSION['cart'])){
                $product_exists = false;
                foreach($_SESSION['cart'] as $key => $product){
                    if($product['id'] == $id) {
                        //nếu đã tồn tại sản phẩm thì tăng số lượng
                        $_SESSION['cart'][$key]['soluong'] += $soluong;
                        $product_exists = true;
                        break;
                    }
                }
                //nếu sản phẩm chưa tồn tại thì thêm
                if($product_exists==false){
                    $_SESSION['cart'][] = $new_product;
                }
            }
            else{
                $_SESSION['cart'] = array($new_product);
            }
        }
        header('Location:../../index.php');
    }else{
        echo "<script>alert('Vui lòng đăng nhập trước khi thêm sản phẩm vào giỏ hàng'); window.location='../../Login.php'</script>";
    }
}

    //xóa sản phẩm khỏi giỏ hàng
    if(isset($_SESSION['cart']) && isset($_GET['id_sanphamxoa'])){
        $id = $_GET['id_sanphamxoa'];
        $product = array();  //một 1 mảng chứa các phần tử sẽ giữ lại
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id'] != $id){
                $product[] = array(
                    'tensanpham'=>$cart_item['tensanpham'],
                    'id'=>$cart_item['id'],
                    'soluong'=>$cart_item['soluong'],
                    'giasp'=>$cart_item['giasp'],
                    'hinhanh'=>$cart_item['hinhanh'],
                    'masp'=>$cart_item['masp']
                );  
            }
        }
        $_SESSION['cart'] = $product;
        //nếu trong giỏ hàng không còn phần tử thì xóa giỏ hàng
        if(empty($_SESSION['cart'])){
            unset($_SESSION['cart']);
        }
        header('Location:../../index.php?main=mainphu&quanly=giohang');
    }
?>
