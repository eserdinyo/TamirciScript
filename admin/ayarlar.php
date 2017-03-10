<?php 
include 'header.php';
include 'sidebar.php'; 

yetkikontrol();
?>



<!-- Göbek -->



<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-head-line">GENEL AYARLAR</h1>

        <h1 class="page-subhead-line">SİTENİN GENEL AYARLARINI BURADAN YAPABİLİRSİNİZ... </h1>

        <?php 

        if($_GET['durum'] == "ok"){ ?>


        <div class="alert alert-success">
          Kayıtlar başarı ile güncellendi.
        </div>




        <?php  }elseif($_GET['durum'] == "no"){ ?>


        <div class="alert alert-danger">
         Kayıtlar güncellenmedi. Bir değişiklik yapmadınız. 
       </div>




       <?php  }

       ?>




     </div>
   </div>
   <!-- /. ROW  -->

   <form action="veritabani/islem.php" method="POST" >

     <div class="col-md-12">
      <div class="form-group col-md-6">
        <label>Site Başlığı:</label>
        <input  class="form-control" type="text" name="ayar_title" value="<?php echo $ayarcek['ayar_title']; ?>">
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group col-md-6">
        <label>Site Anahtar Kelimeler:</label>
        <input  class="form-control" type="text" name="ayar_keywords" value="<?php echo $ayarcek['ayar_keywords']; ?>">
      </div>
    </div>
    

    <div class="col-md-12">
      <div class="form-group col-md-3">
        <label>Telefon Numaraniz:</label>
        <input  class="form-control" type="text" name="ayar_telefon" value="<?php echo $ayarcek['ayar_telefon']; ?>">
        
      </div>
      <div class="form-group col-md-3">
        <label>Facebook Adresiniz:</label>
        <input  class="form-control" type="text" name="ayar_facebook" value="<?php echo $ayarcek['ayar_facebook']; ?>">
        
      </div>
      <div class="form-group col-md-3">
        <label>Twitter Adresiniz:</label>
        <input  class="form-control" type="text" name="ayar_twitter" value="<?php echo $ayarcek['ayar_twitter']; ?>">
        
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group col-md-12">
        <label>Site Açıklaması:</label>
        <input  class="form-control" type="text" name="ayar_description" value="<?php echo $ayarcek['ayar_description']; ?>">
        
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group col-md-12">
        <label>Footer Açıklaması:</label>
        <input  class="form-control" type="text" name="ayar_footer" value="<?php echo $ayarcek['ayar_footer']; ?>">
        
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group col-md-12">
        <label>Adres:</label>
        <input  class="form-control" type="text" name="ayar_adres" value="<?php echo $ayarcek['ayar_adres']; ?>">
        
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group col-md-6">
        <label>Mail:</label>
        <input  class="form-control" type="text" name="ayar_mail" value="<?php echo $ayarcek['ayar_mail']; ?>">
        
      </div>


      <div class="form-group col-md-6">
        <label>Fax:</label>
        <input  class="form-control" type="text" name="ayar_fax" value="<?php echo $ayarcek['ayar_fax']; ?>">
        
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group col-md-12">


        <input style="width: 50%" class="btn btn-success" type="submit" name="ayar_kaydet" value="Kaydet">



      </div>
    </div>


  </form>


</div>
<!-- /. PAGE INNER  -->
</div>



<?php include 'footer.php'; ?>