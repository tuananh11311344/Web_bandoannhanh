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
    <h3 style="text-align:center;color: #3F51B5;font-weight: 700;">Thêm sản phẩm</h3>
    <!--  enctype ="multipart/form-data": dùng khi muốn truyền đi 1 file -->
    <form method="POST" action="modules/quanlysp/xuly.php" enctype ="multipart/form-data">
        <table>   
            <tr>
                    <td>Tên sản phẩm</td>
                    <td><input type="text" name="tensp"></td>
            </tr>
            <tr>
                    <td>Mã sản phẩm</td>
                    <td><input type="text" name="masp"></td>
            </tr>
            <tr>
                    <td>Giá sản phẩm</td>
                    <td><input type="text" name="giasp"></td>
            </tr>
            <tr>
                    <td>Số lượng</td>
                    <td><input type="text" name="soluong"></td>
            </tr>
            <tr>
                    <td>Hình ảnh</td>
                    <td><input type="file" name="hinhanh"></td>
            </tr>
            <tr>
                    <td>Nội dung</td>
                    <td><textarea row="20" cols="70" name="noidung" style="resize:none;padding: 10px 5px;"></textarea></td>
            </tr>
            <tr>
                    <td>Thành phần</td>
                    <td><textarea row="20" cols="70" name="tomtat" style="resize:none;padding: 10px 5px;"></textarea></td>
            </tr>
            <tr>
                    <td>Danh mục sản phẩm</td>
                    <td>
                        <select name="danhmuc">
                            <?php 
                                $sql_danhmuc= "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC";
                                $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                             ?>           
                                    <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>    
                              <?php 
                                }
                              ?>  
                        </select>
                    </td>
            </tr>
            <tr>
                <td>Tình trạng</td>
                <td>
                        <select name="tinhtrang">
                             <option value="1">Kích hoạt</option>   
                             <option value="2">Ẩn</option>   
                        </select>
                </td>
            </tr>
        </table>
        <input class="input_submit" type="submit" name="themsanpham" value="Thêm sản phẩm">
    </form>

</body>
</html>