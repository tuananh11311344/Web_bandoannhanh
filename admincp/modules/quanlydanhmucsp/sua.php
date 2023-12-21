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

td input{
    width:100%;
    border:none;
    outline:none;
}

.input_submit{
    border:none;
    outline:none;
    padding:10px;
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
        $sql_sua_danhmucsp ="SELECT * FROM tbl_danhmuc WHERE id_danhmuc = '".$_GET['iddanhmuc']."'";
        $query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
    ?>
    <h3 style="text-align:center;color: #3F51B5;font-weight: 700;">Sửa danh mục</h3>
    <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>">
        <table> 
            <?php 
                while($row = mysqli_fetch_array( $query_sua_danhmucsp)){
            ?>  
            <tr>
                    <td>Tên danh mục</td>
                    <td><input type="text" value="<?php echo $row['tendanhmuc'] ?>" name="tendanhmuc"></td>
            </tr>
            <tr>
                    <td>Thứ tự</td>
                    <td><input type="text" value="<?php echo $row['thutu'] ?>" name="thutu"></td>
            </tr>
            <?php 
                }
            ?>
        </table>
        <input class="input_submit" type="submit" name="suadanhmuc" value="Sửa danh mục sản phẩm">
    </form>

</body>
</html>