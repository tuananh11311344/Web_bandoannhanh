<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>
    <?php 
        $sql_chitiet_sp ="SELECT * FROM tbl_sanpham";
        $query_chitiet_sp =  mysqli_query($mysqli,$sql_chitiet_sp);
        while($row_chitiet = mysqli_fetch_array($query_chitiet_sp)){
        if($_GET['idsanpham'] == $row_chitiet['id_sanpham']){
    ?>
    <div class="product_container">
        <h3><?php echo $row_chitiet['tensanpham'] ?></h3>  
        <form method="POST" action ="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
            <div class="product_infor">
                <div style="background: url('admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>') center center no-repeat;background-size: 100% 100%;" class="product_img">
                </div>
                <div class="product_notice">
                    <p><b>Thương hiệu: </b><span style="font-family:cursive; color:#ff7175;">WOWFOOD</span></p>
                    <p><b>Giới thiệu: </b>
                        <?php echo $row_chitiet['noidung'] ?>
                    </p>
                    <p><b>Thành phần: </b>
                    <?php echo $row_chitiet['tomtat'] ?>
                    </p>
                    <p><b>Giá: </b><span style="color:#ff7175; font-weight:600;"><?php echo number_format($row_chitiet['gia'],0,',','.').'đ' ?></span></p>
                    <p class="product_slg"><b style="margin-right:30px;">Số lượng:</b>
                        <button id="giam_soluong">-</button>
                        <input id="soluong_hientai" type="text" name="soluong" value="1" />
                        <button id="tang_soluong">+</button>
                    </p>
                    <input type="submit" name="themgiohang" style="padding: 8px 15px; border:none;" class="btn-add" value="THÊM VÀO GIỎ HÀNG"/>
                </div>
            </div>
        </form>
    </div>
    <?php 
        }
    }
    ?>
    <script>
        // Lấy thẻ input và các nút bấm
        const numberInput = document.getElementById('soluong_hientai');
        const btngiam = document.getElementById('giam_soluong');
        const btntang = document.getElementById('tang_soluong');

        // Thêm sự kiện click cho nút giảm
        btngiam.addEventListener('click', function(event) {
            // Lấy giá trị hiện tại từ thẻ input và giảm đi 1 đơn vị
            const currentValue = parseInt(numberInput.value, 10);
            numberInput.value = currentValue - 1;
            if(numberInput.value <1){
                numberInput.value=1;
            }
            event.preventDefault(); // Ngăn chuyển đổi qua tab khác
        });

        // Thêm sự kiện click cho nút thêm
        btntang.addEventListener('click', function(evnet) {
            // Lấy giá trị hiện tại từ thẻ input và tăng thêm 1 đơn vị
            const currentValue = parseInt(numberInput.value, 10);
            numberInput.value = currentValue + 1;
            event.preventDefault(); // Ngăn chuyển đổi qua tab khác
        });
    </script>
</body>
</html>