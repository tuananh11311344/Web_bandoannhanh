
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
  padding: 5px;
}

</style>
</head>
<body>
  <?php 
    $sql_lietke_sp ="SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc ORDER BY id_sanpham ASC";
    $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
  ?>
    <h3 style="text-align:center;color: #3F51B5;font-weight: 700;">Danh sách sản phẩm</h3>
    <table>
      <tr>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Giá sản phẩm</th>
        <th>Mã sản phẩm</th>
        <th>Danh mục</th>
        <th>Action</th>
      </tr>
      <?php 
           while($row = mysqli_fetch_array($query_lietke_sp)){
      ?>
        <tr>
          <td><?php echo $row["id_sanpham"] ?></td> 
          <td><?php echo $row["tensanpham"] ?></td> 
          <td><img style="width:80px; height:80px;" src="modules/quanlysp/uploads/<?php echo $row["hinhanh"] ?>" alt=""></td> 
          <td><?php echo $row["gia"] ?></td> 
          <td><?php echo $row["masp"] ?></td> 
          <td><?php echo $row["tendanhmuc"] ?></td> 
          <td>
            <a href="modules/quanlysp/xuly.php?query=xoa&idsanpham=<?php echo $row["id_sanpham"] ?>">Xóa</a>|<a href="index.php?action=quanlysanpham&query=sua&idsanpham=<?php echo $row["id_sanpham"] ?>">Sửa</a>
          </td>
        </tr>
      <?php 
           }
      ?>
    </table>

</body>
</html>

