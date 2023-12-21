
<?php 
    $sql_danhmuc ='SELECT * FROM tbl_danhmuc ORDER BY thutu ASC';
    $query_danhmuc =mysqli_query($mysqli,$sql_danhmuc);
?>

<nav class="menu">
            <nav class="navbar navbar-expand-lg navbar-light px-5 py-1">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a style="margin-left: -20px;" class="nav-link" href="/Web_BanDoAnNhanh">TRANG CHỦ<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          SẢN PHẨM
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <?php 
                                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                          ?>
                          <a class="dropdown-item" style="z-index=10;" href="/Web_BanDoAnNhanh#<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></a>
                          <?php 
                                }
                          ?>
                        </div>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?main=mainphu&quanly=giohang">GIỎ HÀNG</a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php?main=mainphu&quanly=lienhe">LIÊN HỆ </a>
                      </li>
                  </ul>
                </div>
              </nav>
        </nav>

        <script>
          $(document).ready(function() {
              var navbar = $('nav');
              var navTop = navbar.offset().top;

              console.log('check navbar:',navbar);

              $(window).scroll(function() {
                  if ($(window).scrollTop() > navTop) {
                      navbar.addClass('nav-fixed');
                  } else {
                      navbar.removeClass('nav-fixed');
                  }
              });
          });
        </script>