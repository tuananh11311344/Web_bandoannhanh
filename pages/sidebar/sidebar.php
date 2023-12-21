
<?php 
    $sql_danhmuc ='SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc ASC';
    $query_danhmuc =mysqli_query($mysqli,$sql_danhmuc);
?>

<div class="list">
                <div class="list-group" style="text-transform: uppercase !important;">
                    <a href="" class="list-group-item list-group-item-action active">
                      DANH MỤC SẢN PHẨM
                    </a>
                    <?php 
                        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                    ?>
                      <a href="#<?php echo $row_danhmuc['id_danhmuc'] ?>" class="list-group-item list-group-item-action"><?php echo $row_danhmuc['tendanhmuc'] ?></a>
                    <?php 
                        }
                    ?>
                  </div>
            </div>
      <!-- <div class="img-banner">
      </div> -->

    <div id="carouselExampleControls" style=" width: 904px !important;margin-left: 40px !important;" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class=" w-100 img-banner" src="public/images/img-banner1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class=" w-100 img-banner" src="public/images/img-banner2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class=" w-100 img-banner" src="public/images/img-banner3.jfif" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class=" w-100 img-banner" src="public/images/img-banner4.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>