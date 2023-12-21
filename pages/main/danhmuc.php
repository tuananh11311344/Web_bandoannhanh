<?php 
    $sql_dm ="SELECT * FROM tbl_danhmuc ORDER BY thutu ASC";
    $query_dm =mysqli_query($mysqli,$sql_dm);
    while($row_dm = mysqli_fetch_array($query_dm)){
  ?>
<div id="<?php echo $row_dm['id_danhmuc'] ?>" class="product-item">
    <h3 style="text-transform: uppercase; color:#ff7175;"><?php echo $row_dm['tendanhmuc'] ?></h3>
      <div class="list-product">
          <?php 
             $sql_sp ="SELECT * FROM tbl_sanpham ORDER BY id_sanpham ASC";
             $query_sp =mysqli_query($mysqli,$sql_sp);
             while($row_sp = mysqli_fetch_array($query_sp)){
                if($row_sp['id_danhmuc'] == $row_dm['id_danhmuc']){
          ?>
            <div class="card" style="width: 18rem;">
              <div style="background:url(admincp/modules/quanlysp/uploads/<?php echo $row_sp['hinhanh']?>) center center no-repeat; background-size: 100% 100%;" class="img-product">
              </div>
              <div class="card-body">
                <p class="card-text"><?php echo $row_sp['tensanpham'] ?></p>
                <h5 class="card-price"><?php echo number_format($row_sp['gia'],0,',','.').'đ'?></h5>
                <a href="index.php?main=mainphu&quanly=sanpham&idsanpham=<?php echo $row_sp['id_sanpham'] ?>" class=" btn-add">CHI TIẾT SẢN PHẨM</a>
              </div>
            </div>
          <?php 
                }
            }
          ?>
      </div>
  </div>
<?php 
  }
?>