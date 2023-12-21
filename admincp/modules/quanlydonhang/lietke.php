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

</style>
</head>
<body>
  <?php    
    $sql_lietke_dh ="SELECT * FROM tbl_giohang, tbl_dangky WHERE tbl_giohang.id_khachhang = tbl_dangky.id_khachhang ORDER BY tbl_giohang.id_giohang ASC";
    $query_lietke_dh =mysqli_query($mysqli,$sql_lietke_dh);
  ?>
    <h3 style="text-align:center;color: #3F51B5;font-weight: 700;">Danh sách đơn hàng</h3>
    <table>
      <tr>
        <th>ID</th>
        <th>Mã đơn hàng</th>
        <th>Tên người gửi</th>
        <th>Tên người nhận</th>
        <th>Địa chỉ nhận hàng</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Quản lý</th>
      </tr>
      <?php 
           while($row = mysqli_fetch_array($query_lietke_dh)){
      ?>
        <tr>
          <td><?php echo $row["id_giohang"] ?></td> 
          <td><?php echo $row["ma_thanhtoan"] ?></td> 
          <td><?php echo $row["hoten"] ?></td> 
          <td><?php echo $row["ten_nguoinhan"] ?></td> 
          <td><?php echo $row["diachi_nhan"] ?></td> 
          <td><?php echo $row["email_nguoinhan"] ?></td> 
          <td><?php echo $row["sodienthoai"] ?></td> 
          <td>
            <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['ma_thanhtoan'] ?>">Xem đơn hàng</a>
          </td>
        </tr>
      <?php 
           }
      ?>
    </table>

</body>
</html>

