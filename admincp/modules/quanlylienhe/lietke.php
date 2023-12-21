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
    $sql_lietke_lh = "SELECT * FROM tbl_lienhe ORDER BY id_lienhe ASC";
    $query_lietke_lh =mysqli_query($mysqli,$sql_lietke_lh);
  ?>
    <h3 style="text-align:center;color: #3F51B5;font-weight: 700;">Danh sách liên hệ</h3>
    <table>
      <tr>
        <th>ID</th>
        <th>Tên khách hàng</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Nội dung</th>
      </tr>
      <?php 
           while($row = mysqli_fetch_array($query_lietke_lh)){
      ?>
        <tr>
          <td><?php echo $row["id_lienhe"] ?></td> 
          <td><?php echo $row["ten_khachhang"] ?></td> 
          <td><?php echo $row["email"] ?></td> 
          <td><?php echo $row["sodt"] ?></td> 
          <td><?php echo $row["noidung"] ?></td> 
        </tr>
      <?php 
           }
      ?>
    </table>

</body>
</html>

