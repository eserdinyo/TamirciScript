<?php include 'header.php'; ?>

<?php include 'sidebar.php'; ?>



<!-- Göbek -->
<head>

 <script src="//cdn.ckeditor.com/4.6.0/standard/ckeditor.js"></script>
</head>


<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-head-line">HABER EKLEME</h1>

        <h1 class="page-subhead-line">BU SAYFADAN HABER EKLEYEBİLİRSİNİZ...</h1>

        <?php 



        if($_GET['durum'] == "ok"){ ?>


        <div class="alert alert-success">
          Haber başarı ile eklendi.
        </div>




        <?php  }elseif($_GET['durum'] == "no"){ ?>


        <div class="alert alert-danger">
         Haber eklenemedi.
       </div>




       <?php  }

       ?>




     </div>
   </div>
   <!-- /. ROW  -->

   <form action="veritabani/islem.php" method="POST" enctype="multipart/form-data" >


     <div class="form-group">
       <label class="control-label col-lg-4">Haber Resmi:</label>
       <div class="">
        <div class="fileupload fileupload-new" data-provides="fileupload">
          <span class="btn btn-file btn-default">
            <span class="fileupload-new">Resim Seç</span>
            <span class="fileupload-exists">Değiştir</span>
            <input type="file" name="habergorsel">
          </span>
          <span class="fileupload-preview"></span>
          <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group col-md-6">
        <label>Haber Başlığı:</label>
        <input  class="form-control" type="text" name="haber_ad" required="" placeholder="Haber başlığı giriniz" ?>
      </div>
    </div>

    <div class="col-md-12">
      <div class="form-group col-md-12">
        <label>Haber İçerik:</label>
        <textarea name="haber_detay" class="ckeditor"></textarea>
      </div>
    </div>




    <div class="col-md-12">
     <div class="form-group col-md-6">
      <div class="form-group">
        <label>Ana Sayfada Göster</label>
        <select  name="sayfa_anasayfa" class="form-control">
          <option value="0">Hayır</option>
          <option value="1">Evet</option>

        </select>
      </div>
    </div>
  </div>

  <div class="col-md-12">
    <div class="form-group col-md-3">


      <input style="width: 50%" class="btn btn-success" type="submit" name="haberkaydet" value="Kaydet">



    </div>
  </div>

  

</form>


</div>
<!-- /. PAGE INNER  -->
</div>



<?php include 'footer.php'; ?>