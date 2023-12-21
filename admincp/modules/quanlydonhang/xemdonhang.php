<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

th{
  background-color:#313348;
  color:#D1D5DB;
}


td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

.tongtien{
    background-color: #20625c;
    color: #D1D5DB;
    font-weight:600;
}

</style>
</head>
<body>
  <?php    
    $sql_chitiet_dh ="SELECT * FROM tbl_chitiet_giohang, tbl_sanpham WHERE tbl_chitiet_giohang.id_sanpham = tbl_sanpham.id_sanpham
     AND tbl_chitiet_giohang.ma_thanhtoan= '".$_GET['code']."' ORDER BY tbl_chitiet_giohang.id_chitiet_giohang ASC";
    $query_chitiet_dh =mysqli_query($mysqli,$sql_chitiet_dh);
  ?>
    <h3 style="text-align:center;color: #3F51B5;font-weight: 700;">Chi tiết đơn hàng</h3>
    <table>
      <tr>
        <th>ID</th>
        <th>Mã đơn hàng</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
      </tr>
      <?php 
            $tongtien =0;
           while($row = mysqli_fetch_array($query_chitiet_dh)){
            $thanhtien= $row["gia"] * $row['soluongmua'];
            $tongtien += $thanhtien;
      ?>
        <tr>
          <td><?php echo $row["id_chitiet_giohang"] ?></td> 
          <td><?php echo $row["ma_thanhtoan"] ?></td> 
          <td><?php echo $row["tensanpham"] ?></td> 
          <td><?php echo $row["soluongmua"] ?></td> 
          <td><?php echo number_format($row["gia"],0,',','.').'đ' ?></td> 
          <td><?php echo number_format($thanhtien,0,',','.').'đ' ?></td> 
        </tr>  
      <?php 
           }
      ?>
      <tr>
            <td colspan="6" class="tongtien">
                Tổng tiền: <?php echo number_format($tongtien,0,',','.').'đ' ?>
            </td>
        </tr>
    </table>
</body>
</html>

