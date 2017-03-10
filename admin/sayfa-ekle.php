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
                <h1 class="page-head-line">SAYFA EKLEME</h1>

                <h1 class="page-subhead-line">BU SAYFADAN MENÜ SAYFA...</h1>

                <?php 

                if($_GET['durum'] == "ok"){ ?>

                
                <div class="alert alert-success">
                    Sayfa başarı ile eklendi.
                </div>


                

                <?php  }elseif($_GET['durum'] == "no"){ ?>

                
                <div class="alert alert-danger">
                   Sayfa eklenemedi.
               </div>


               

               <?php  }

               ?>

               
               

           </div>
       </div>
       <!-- /. ROW  -->
       
       <form action="veritabani/islem.php" method="POST" >

        
        
        
           <div class="col-md-12">
              <div class="form-group col-md-6">
                <label>Sayfa Adı:</label>
                <input  class="form-control" type="text" name="sayfa_ad" placeholder="Sayfa adı giriniz" ?>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group col-md-12">
                <label>Sayfa İçerik:</label>
                <textarea name="sayfa_icerik" class="ckeditor"></textarea>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group col-md-6">
                <label>Sayfa Sıra:</label>
                <input  class="form-control" type="text" name="sayfa_sira" placeholder="Sayfa sırasını giriniz" ?>
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
            
            
          <input style="width: 50%" class="btn btn-success" type="submit" name="sayfakaydet" value="Kaydet">


          
      </div>
  </div>

  

</form>


</div>
<!-- /. PAGE INNER  -->
</div>



<?php include 'footer.php'; ?>