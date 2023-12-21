<?php 
  if(isset($_POST['gui_ttlienhe'])){
      $id_khachhang= $_SESSION['id_khachhang'];
        $hoten=$_POST['hoten_nguoigui'];
        $email=$_POST['email_nguoigui'];
        $sodt =$_POST['sodt_nguoigui'];
        $noidung =$_POST['noidung'];
        if(trim($noidung) === ''){
          echo "<script>alert('Phần nội dung không được để trống. Vui lòng nhập lại');</script>";
        }else{
          $sql_lienhe="INSERT INTO tbl_lienhe(id_khachhang,ten_khachhang,email,sodt,noidung) VALUES('".$id_khachhang."','".$hoten."','".$email."','".$sodt."','".$noidung."')";
          $query_lienhe=mysqli_query($mysqli,$sql_lienhe);
          if($query_lienhe){
            echo "<script>alert('Cảm ơn bạn đã gửi góp ý cho chúng tôi.Chúng tôi sẽ gửi phản hồi cho bạn trong thời gian sớm nhất');</script>";
          }
        }
       
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form liên hệ</title>
    <style>
      .btnSend{
          width: 100px !important; 
          height: 40px !important;
          text-align: center !important;
          display: flex !important;
          justify-content: center !important;
          align-items: center !important;
          padding: 0 !important;
          background: #ff7175;
          outline: none;
          border: none;
          color:white;
          font-size:16px;
      }
      .btnSend:hover{
          color: white;
          opacity: 0.8;
      }
    </style>
  </head>
  <link rel="stylesheet" href="./css/lienhe.css" />

  <body>
    <?php 
         if(isset($_SESSION['id_khachhang'])){
            $id_khachhang= $_SESSION['id_khachhang'];
            $sql = "SELECT * FROM tbl_dangky WHERE id_khachhang ='".$id_khachhang."'";
            $query = mysqli_query($mysqli, $sql);
            $row= mysqli_fetch_array($query);
            if(isset($row)){
    ?>
    <center>
        <h3><b style="color:#ff7175;">THÔNG TIN LIÊN HỆ</b></h3>
        <p style="font-size:16px;">Nếu bạn cần giúp, hãy liên hệ với chúng tôi.</p>
    </center>
    <form class="form_lienhe" method="POST">
      <div class="khung50">
        <input type="text" name="hoten_nguoigui" value="<?php echo $row['hoten'] ?>" readonly />
        <input type="text" name="email_nguoigui" value="<?php echo $row['email'] ?>" readonly />
        <input type="text" name="sodt_nguoigui" value="<?php echo $row['sodt'] ?>" readonly />
      </div>
      <div class="khung50">
        <textarea
          name="noidung"
          cols="30"
          rows="10"
          placeholder="Nhập nội dung góp ý"
        ></textarea>
      </div>
      <div>
        <input class="btnSend" type="submit" name="gui_ttlienhe" value="Gửi" />
      </div>
    </form>
  </body>
  <?php 
            }
         }
  ?>
</html>
