<?php 

include 'header.php';

include 'sidebar.php'; 


if(!isset($_SESSION['admin_kadi']))
{
  header('Location: login.php');
}


?>


<!-- Göbek -->



<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-head-line">SLIDER</h1>

        <h1 class="page-subhead-line">SİTEDEKİ SLIDERI BU SAYFADAN YÖNETEBİLİRSİNİZ... </h1>

      </div>
      <a href="slider-ekle.php"><button style="margin-left: 90%" class="btn btn-success">Slider Ekle</button></a>
      <hr>

    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <p>Ekli Slider

        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th style="width: 400px">Slider Adı</th>
                  <th style="width: 400px">Slider Link</th>
                  <th style="width: 400px">Slider Resmi</th>
                  <th style="width: 400px">Slider Sıra</th>

                  
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>

                <?php 
                
                $slidersor = mysql_query("select * from slider");
                

                while( $slidercek = mysql_fetch_assoc($slidersor)){ ?>


                <tr>
                  <td><?php echo $slidercek['slider_id'];?></td>
                  <td><?php echo $slidercek['slider_ad'];?></td>
                  <td><?php echo $slidercek['slider_url'];?></td>
                  <td>
                    <img width="200" src="<?php echo $slidercek['slider_resimyol'];?>" alt="<?php echo $slidercek['slider_resimyol'];?> ?>">
                  </td>
                  <td>
                    

                   <?php echo $slidercek['slider_sira'];?>

                   

                   


                 </td>

                 
                 

                 <td style="10px"><a href="veritabani/islem.php?slider_id=<?php echo $slidercek['slider_id'];?>&slidersil=ok&sliderresimsil=<?php echo $slidercek['slider_resimyol'];?>"><button class="btn btn-danger">Sil</button></a></td>
                 
                 

                 
               </tr>
               
               <?php } ?> 
             </tbody>
           </table>
         </div>
       </div>
     </div>
     <!-- /. ROW  -->
     

   </div>
   <!-- /. PAGE INNER  -->
 </div>

 


 <?php include 'footer.php'; ?>