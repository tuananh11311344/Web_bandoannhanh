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
    <h3 style="text-align:center;color: #3F51B5;font-weight: 700;">Thêm danh mục sản phẩm</h3>
    <form method="POST" action="modules/quanlydanhmucsp/xuly.php">
        <table>   
            <tr>
                    <td>Tên danh mục</td>
                    <td><input type="text" name="tendanhmuc"></td>
            </tr>
            <tr>
                    <td>Thứ tự</td>
                    <td><input type="text" name="thutu"></td>
            </tr>
        </table>
        <input class="input_submit" type="submit" name="themdanhmuc" value="Thêm danh mục sản phẩm">
    </form>

</body>
</html>