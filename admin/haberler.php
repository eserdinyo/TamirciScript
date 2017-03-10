<?php 

include 'header.php';

include 'sidebar.php'; 



?>


<!-- Göbek -->



<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">HABERLER</h1>

                <h1 class="page-subhead-line">SİTEDEKİ HABERLERİ BU SAYFADAN YÖNETEBİLİRSİNİZ... </h1>

                <?php 

                if($_GET['durum'] == "ok"){ ?>

                
                <div class="alert alert-success">
                    Haber silindi.
                </div>


                

                <?php  }elseif($_GET['durum'] == "no"){ ?>

                
                <div class="alert alert-danger">
                   Haber silinemedi.
               </div>


               

               <?php  }

               ?>
               <?php 

                if($_GET['durum'] == "oko"){ ?>

                
                <div class="alert alert-success">
                    Haber başarı ile eklendi.
                </div>


                

                <?php  }elseif($_GET['durum'] == "noo"){ ?>

                
                <div class="alert alert-danger">
                   Haber eklenemedi.
               </div>


               

               <?php  }

               ?>

            </div>
            <a href="haber-ekle.php"><button style="margin-left: 90%" class="btn btn-success">Haber Ekle</button></a>
            <hr>

        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                Ekli Haberler

            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th >Eklendiği Tarih</th>
                                <th>Haber Adı</th>
                                <th>Haber Hiti</th>

                                <th></th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                            
                            $habersor = mysql_query("select * from haberler");
                            

                            while( $habercek = mysql_fetch_assoc($habersor)){ ?>


                            <tr>
                                <td><?php echo $habercek['haber_id'];?></td>
                                <td><?php echo $habercek['haber_zaman'];?></td>
                                <td><?php echo $habercek['haber_ad'];?></td>
                                <td><?php echo $habercek['haber_hit'];?></td>



                                <td style="10px"><a href="haber-duzenle.php?sayfa_id=<?php echo $sayfacek['sayfa_id']; ?>"><button class="btn btn-primary">Düzenle</button></a></td>

                                <td style="10px"><a href="veritabani/islem.php?haber_id=<?php echo $habercek['haber_id'];?>&habersil=ok"><button class="btn btn-danger">Sil</button></a></td>




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