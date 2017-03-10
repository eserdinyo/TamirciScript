<?php include 'header.php'; 

include 'sidebar.php'; 


$sayfa_id = $_GET['sayfa_id'];
$sayfasor = mysql_query("select * from sayfalar where sayfa_id ='$sayfa_id'");
$sayfacek = mysql_fetch_assoc($sayfasor);

?>



<!-- Göbek -->
<head>

   <script src="//cdn.ckeditor.com/4.6.0/standard/ckeditor.js"></script>
</head>


<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">SAYFA DUZUNLE</h1>

                <h1 class="page-subhead-line">BU SAYFADAN DUZENLE SAYFA...</h1>

                <?php 

                if($_GET['durum'] == "ok"){ ?>


                <div class="alert alert-success">
                    Sayfa başarı ile düzenlendi.
                </div>




                <?php  }elseif($_GET['durum'] == "no"){ ?>


                <div class="alert alert-danger">
                   Sayfa düzenlenemdi.
               </div>




               <?php  }

               ?>




           </div>
       </div>
       <!-- /. ROW  -->

       <form action="veritabani/islem.php" method="POST" >



          <input type="hidden" name="sayfa_id" value="<?php echo $sayfacek['sayfa_id']; ?>">

          <div class="col-md-12">
              <div class="form-group col-md-6">
                <label>Sayfa Adı:</label>
                <input  class="form-control" type="text" name="sayfa_ad" value="<?php echo $sayfacek['sayfa_ad'];?>">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group col-md-12">
                <label>Sayfa İçerik:</label>
                <textarea name="sayfa_icerik" class="ckeditor"><?php echo $sayfacek['sayfa_icerik'];?></textarea>
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group col-md-6">
                <label>Sayfa Sıra:</label>
                <input  class="form-control" type="text" name="sayfa_sira" value="<?php echo $sayfacek['sayfa_sira'];?>" ?>
            </div>
        </div>

        <div class="col-md-12">
           <div class="form-group col-md-6">
            <div class="form-group">
                <label>Ana Sayfada Göster</label>
                <select  name="sayfa_anasayfa" class="form-control">


                    <?php if($sayfacek['sayfa_anasayfa'] == 0){ ?>

                    <option value="0">Hayır</option>
                    <option value="1">Evet</option>

              <?php  } elseif($sayfacek['sayfa_anasayfa'] == 1){?>



                <option value="1">Evet</option>
                <option value="0">Hayır</option>



                <?php } ?>



            </select>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group col-md-3">


      <input style="width: 50%" class="btn btn-success" type="submit" name="sayfaduzenle" value="Kaydet">



  </div>
</div>



</form>


</div>
<!-- /. PAGE INNER  -->
</div>



<?php include 'footer.php'; ?>