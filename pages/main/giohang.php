<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
button.btn-add {
    outline: none;
    border: none;
    float:right;
}
.pay-footer{
    display: flex;
    justify-content: flex-end;
    gap:15px;
}
.btn-close{
    padding: 5px 10px;
    color: white;
    font-size: 16px;
}
.btn-pay{
    background-color: #ff7175;
    padding: 5px 10px;
    color: white;
    font-size: 16px;
    border:none;
}
.btn-pay:hover, .btn-close:hover{
    text-decoration: none;
    color: white;
    opacity: 0.8;
}

/* css modal */
.modal-header{
    background:#ff7175;
}
.modal-title{
    color:white;
    font-weight:600;
}
</style>
</head>
<body>
    <center>
        <h3 style="font-size: 22px; margin-top: 10px;color: #ff7175;">DANH SÁCH GIỎ HÀNG</h3>
    </center>
    <?php 
         if(isset($_SESSION['cart'])){
            $i=0;
            $tongtien =0;
    ?>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Số lượng</th>
            <th>Giá sản phẩm</th>
            <th>Thành tiền</th>
            <th></th>
        </tr>
        <?php 
            foreach($_SESSION['cart'] as $cart_item){
                $thanhtien =$cart_item['soluong'] * $cart_item['giasp'];
                $tongtien +=$thanhtien;
                $i++;
        ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $cart_item['tensanpham'] ?></td>
            <td><img style="width:100px;" src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh'] ?>"/></td>
            <td><?php echo $cart_item['soluong'] ?></td>
            <td><?php echo number_format($cart_item['giasp'],0,',','.').'đ'?></td>
            <td><?php echo number_format($thanhtien,0,',','.').'đ'?></td>
            <td><a href="pages/main/themgiohang.php?id_sanphamxoa=<?php echo $cart_item['id']?>">Xóa</a></td>
        </tr>
       <?php 
            }
        ?>
        <tr>
            <td style="border:none;" colspan="3">
                <span style="color: #ff7175; font-weight:600;">Tổng tiền:</span> <?php echo number_format($tongtien,0,',','.').'đ'?>
            </td>
            <td style="border:none;" colspan="4">
                <button type="button" class="btn-add" data-toggle="modal" data-target="#exampleModalCenter">
                    Thanh toán
                </button>
                <!-- <a href="pages/main/thanhtoan.php?tongtien=<?php echo $tongtien ?>" class="btn-add" style="border:none;float: right;">THANH TOÁN</a> -->
            </td>
       </tr>
       </table>
        <?php
            }else{
        ?>
        <p>Hiện tại không có sản phẩm nào trong giỏ hàng</p>
       <?php 
        }
       ?>

       <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Thông tin thanh toán</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span style="color:white;" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="pages/main/thanhtoan.php?tongtien=<?php echo $tongtien ?>">
                        <div class="form-group">
                            <label>Tên người nhận</label>
                            <input type="text" class="form-control" name="name" placeholder="Nhập thông tin người nhận" required />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Nhập email" required />
                        </div>
                        <div class="form-group">
                            <label>Nhập địa chỉ</label>
                            <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ" required />
                        </div>
                        <div class="form-group">
                            <label>Nhập số điện thoại</label>
                            <input type="number" class="form-control"name="phonenumber" placeholder="Nhập số điện thoại" required />
                        </div>
                        <div class="form-group">
                            <label>Tổng tiền</label>
                            <input type="text" class="form-control" name="total" value="<?php echo number_format($tongtien,0,',','.').'đ' ?>"  disabled>
                        </div>
                        <div class="pay-footer">
                            <a type="button" class="btn-close btn-secondary" data-dismiss="modal">Đóng</a>
                            <input type="submit" name="pay" class="btn-pay" value="Thanh toán" />
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

