<div class="main">
    <div class="main-sanpham">
        <div class="product-container">
            <?php 
              if(isset($_GET['quanly'])){
                $tam =$_GET['quanly'];
              }else{
                $tam ='';
              }
              
              if($tam == 'sanpham'){
                include("main/sanpham.php");  
              }
              else if($tam == 'giohang'){
                include("main/giohang.php");  
              }
              else if($tam == 'lienhe'){
                include("main/lienhe.php");  
              }
              elseif($tam == 'timkiem'){
                include("main/timkiem.php");  
              }        
            ?>         
        </div>    
    </div>   
</div>