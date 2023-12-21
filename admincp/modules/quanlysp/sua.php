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
  font-size:15px;
}

td{
   padding: 15px 8px !important;
}

td input{
    width:100%;
    border:none;
    outline:none;
}

.input_submit{
    border:none;
    outline:none;
    padding:10px;
    font-size:15px;
    margin-top:10px;
    margin-left:10px;
    background-color:blue;
    color:white;
    cursor: pointer;
}
</style>
</head>
<body>
    <?php 
        $sql_sua_sp ="SELECT * FROM tbl_sanpham WHERE id_sanpham = '".$_GET['idsanpham']."'";
        $query_sua_sp =mysqli_query($mysqli,$sql_sua_sp);
    ?>
    <h3 style="text-align:center;color: #3F51B5;font-weight: 700;">Sửa sản phẩm</h3>
    <!--  enctype ="multipart/form-data": dùng khi muốn truyền đi 1 file -->
    <form method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $_GET['idsanpham']?>" enctype ="multipart/form-data">
        <table>  
            <?php 
                while($row = mysqli_fetch_array($query_sua_sp)){
            ?> 
            <tr>
                    <td>Tên sản phẩm</td>
                    <td><input type="text" value="<?php echo $row['tensanpham'] ?>" name="tensp"></td>
            </tr>
            <tr>
                    <td>Mã sản phẩm</td>
                    <td><input type="text" value="<?php echo $row['masp'] ?>" name="masp"></td>
            </tr>
            <tr>
                    <td>Giá sản phẩm</td>
                    <td><input type="text" value="<?php echo $row['gia'] ?>" name="giasp"></td>
            </tr>
            <tr>
                    <td>Số lượng</td>
                    <td><input type="text" value="<?php echo $row['soluong'] ?>" name="soluong"></td>
            </tr>
            <tr>
                    <td>Hình ảnh</td>
                    <td>
                        <input type="file" name="hinhanh">
                        <img style="width:80px; height:80px; margin-top:7px;" src="modules/quanlysp/uploads/<?php echo $row["hinhanh"] ?>" alt="" />
                    </td>
            </tr>
            <tr>
                    <td>Danh mục sản phẩm</td>
                    <td>
                        <select name="danhmuc">
                            <?php 
                                $sql_danhmuc= "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC";
                                $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                                    if($row_danhmuc['id_danhmuc'] == $row['id_danhmuc']){
                             ?>           
                                    <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>    
                              <?php 
                                }else{
                              ?> 
                                    <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option> 
                               <?php 
                                        }
                                    }
                               ?>                             
                        </select>
                    </td>
            </tr>
            <?php 
                }
            ?>
        </table>
        <input class="input_submit" type="submit" name="suasanpham" value="Sửa sản phẩm">
    </form>
</body>
</html>