
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
    $sql_lietke_danhmucsp ="SELECT * FROM tbl_danhmuc ORDER BY thutu ASC";
    $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
  ?>
    <h3 style="text-align:center;color: #3F51B5;font-weight: 700;">Danh sách danh mục sản phẩm</h3>
    <table>
      <tr>
        <th>ID danh mục</th>
        <th>Tên danh mục</th>
        <th>Thứ tự</th>
        <th>Action</th>
      </tr>
      <?php 
           while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
      ?>
        <tr>
          <td><?php echo $row["id_danhmuc"] ?></td> 
          <td><?php echo $row["tendanhmuc"] ?></td> 
          <td><?php echo $row["thutu"] ?></td> 
          <td>
            <a href="modules/quanlydanhmucsp/xuly.php?query=xoa&iddanhmuc=<?php echo $row["id_danhmuc"]?>">Xóa</a> | <a href="index.php?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row["id_danhmuc"]?>">Sửa</a>
          </td>
        </tr>
      <?php 
           }
      ?>
    </table>

</body>
</html>

