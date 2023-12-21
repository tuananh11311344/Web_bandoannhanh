<?php 
    if(isset($_POST['search'])){
        $tukhoa = $_POST['tukhoa'];
        $sql_search = "SELECT * FROM tbl_sanpham WHERE tensanpham LIKE '%".$tukhoa."%'";
        $query_search = mysqli_query($mysqli,$sql_search);
?>
<div class="product-item">
    <h3 style="text-transform: uppercase; color:#ff7175;">Kết quả tìm kiếm</h3>
      <div class="list-product">
          <?php 
             while($row_search = mysqli_fetch_array( $query_search)){
          ?>
            <div class="card" style="width: 18rem;">
              <div style="background:url(admincp/modules/quanlysp/uploads/<?php echo $row_search['hinhanh']?>) center center no-repeat; background-size: 100% 100%;" class="img-product">
              </div>
              <div class="card-body">
                <p class="card-text"><?php echo $row_search['tensanpham'] ?></p>
                <h5 class="card-price"><?php echo number_format($row_search['gia'],0,',','.').'đ'?></h5>
                <a href="index.php?main=mainphu&quanly=sanpham&idsanpham=<?php echo $row_search['id_sanpham'] ?>" class=" btn-add">CHI TIẾT SẢN PHẨM</a>
              </div>
            </div>
          <?php 
            }
          }
          ?>
      </div>
  </div>
  
