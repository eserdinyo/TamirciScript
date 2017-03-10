<?php include 'header.php'; 
include 'sidebar.php'; 

$menu_id = $_GET['menu_id'];

$menusor = mysql_query("select * from menuler where menu_id = '$menu_id'");
$menucek = mysql_fetch_assoc($menusor)
?>



<!-- Göbek -->



<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">MENU DÜZENLEME</h1>

                <h1 class="page-subhead-line">BU SAYFADAN MENÜ DÜZENLEYEBİLİRSİNİZ...</h1>

                <?php 

                if($_GET['durum'] == "ok"){ ?>

                
                <div class="alert alert-success">
                    Menü başarı ile düzenlendi.
                </div>


                

                <?php  }elseif($_GET['durum'] == "no"){ ?>

                
                <div class="alert alert-danger">
                   Menü düzenlenemedi.
               </div>


               

               <?php  }

               ?>

               
               

           </div>
       </div>
       <!-- /. ROW  -->
       
       <form action="veritabani/islem.php" method="POST" >

        
        <div class="col-md-12">
            <div class="form-group col-md-3">
                <input style="width: 50%" class="btn btn-success" type="submit" name="menuduzenle" value="Kaydet">
            </div>

        </div>
        
        
        <input type="hidden" name="menu_id" value="<?php echo $menucek['menu_id']; ?>">


        <div class="col-md-12">
          <div class="form-group col-md-6">
            <label>Menü Adı:</label>
            <input  class="form-control" type="text" name="menu_ad" value="<?php echo $menucek['menu_ad']; ?>" ?>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group col-md-6">
            <label>Menü Link:</label>
            <input  class="form-control" type="text" name="menu_url" value="<?php echo $menucek['menu_url']; ?>" ?>
        </div>
    </div>

    
    


    

</form>


</div>
<!-- /. PAGE INNER  -->
</div>



<?php include 'footer.php'; ?>