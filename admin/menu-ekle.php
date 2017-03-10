<?php include 'header.php'; ?>

<?php include 'sidebar.php'; ?>



<!-- Göbek -->



<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">MENU EKLEME</h1>

                <h1 class="page-subhead-line">BU SAYFADAN MENÜ EKLEYEBİLİRSİNİZ...</h1>

                <?php 

                if($_GET['durum'] == "ok"){ ?>

                
                <div class="alert alert-success">
                    Menü başarı ile eklendi.
                </div>


                

                <?php  }elseif($_GET['durum'] == "no"){ ?>

                
                <div class="alert alert-danger">
                   Menü eklenemedi.
               </div>


               

               <?php  }

               ?>

               
               

           </div>
       </div>
       <!-- /. ROW  -->
       
       <form action="veritabani/islem.php" method="POST" >

        
        
        
           <div class="col-md-12">
              <div class="form-group col-md-6">
                <label>Menü Adı:</label>
                <input  class="form-control" type="text" name="menu_ad" placeholder="Menü adı giriniz" ?>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group col-md-6">
                <label>Menü Link:</label>
                <input  class="form-control" type="text" name="menu_url" value="http://" ?>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group col-md-3">
                
                
              <input style="width: 50%" class="btn btn-success" type="submit" name="menu_kaydet" value="Kaydet">


              
          </div>
      </div>

      

  </form>
  

</div>
<!-- /. PAGE INNER  -->
</div>



<?php include 'footer.php'; ?>