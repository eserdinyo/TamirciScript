<?php include 'header.php'; ?>

<?php include 'sidebar.php'; ?>



<!-- Göbek -->



<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-head-line">SLIDER EKLEME</h1>

        <h1 class="page-subhead-line">BU SAYFADAN SLIDER EKLEYEBİLİRSİNİZ...</h1>

        <?php 

        if($_GET['durum'] == "ok"){ ?>

        
        <div class="alert alert-success">
          Slider başarı ile eklendi.
        </div>


        

        <?php  }elseif($_GET['durum'] == "no"){ ?>

        
        <div class="alert alert-danger">
         Slider eklenemedi.
       </div>


       

       <?php  }

       ?>

       
       

     </div>
   </div>
   <!-- /. ROW  -->
   
   <form action="veritabani/islem.php" method="POST" enctype="multipart/form-data" >

    
    <div class="form-group">
      <label class="control-label col-lg-4">Slider Resmi:</label>
      <div class="">
        <div class="fileupload fileupload-new" data-provides="fileupload">
          <span class="btn btn-file btn-default">
            <span class="fileupload-new">Resim Seç</span>
            <span class="fileupload-exists">Değiştir</span>
            <input type="file" name="slidegorsel">
          </span>
          <span class="fileupload-preview"></span>
          <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
        </div>
      </div>
    </div>



    <div class="col-md-12">
      <div class="form-group col-md-6">
        <label>Slider Adı:</label>
        <input  class="form-control" type="text" name="slider_ad" placeholder="Slider adı giriniz" ?>
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group col-md-6">
        <label>Slider Url:</label>
        <input  class="form-control" type="text" name="slider_url" placeholder="Slider yönlendirmek için url giriniz" ?>
      </div>
    </div>


    <div class="col-md-12">
      <div class="form-group col-md-6">
        <label>Slider Sıra:</label>
        <input  class="form-control" type="number" name="slider_sira" placeholder="Slider sırasını giriniz" ?>
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group col-md-3">
        
        
        <input style="width: 50%" class="btn btn-success" type="submit" name="sliderekle" value="Kaydet">


        
      </div>
    </div>



    

  </form>


</div>
<!-- /. PAGE INNER  -->
</div>



<?php include 'footer.php'; ?>