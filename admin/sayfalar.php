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
                <h1 class="page-head-line">SAYFALAR</h1>

                <h1 class="page-subhead-line">SİTEDEKİ SAYFALARI BU SAYFADAN YÖNETEBİLİRSİNİZ... </h1>

            </div>
            <a href="sayfa-ekle.php"><button style="margin-left: 90%" class="btn btn-success">Sayfa Ekle</button></a>
            <hr>

        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                Ekli Sayfalar

            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th >Eklendiği Tarih</th>
                                <th>Sayfa Adı</th>
                                <th>Anasayfada Göster</th>
                                <th></th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                            
                            $sayfasor = mysql_query("select * from sayfalar");
                            

                            while( $sayfacek = mysql_fetch_assoc($sayfasor)){ ?>


                            <tr>
                                <td><?php echo $sayfacek['sayfa_id'];?></td>
                                <td><?php echo $sayfacek['sayfa_tarih'];?></td>
                                <td><?php echo $sayfacek['sayfa_ad'];?></td>
                                <td><?php 

                                    if($sayfacek['sayfa_anasayfa']== 0){

                                        echo "HAYIR";
                                    }elseif($sayfacek['sayfa_anasayfa']== 1)
                                    {
                                        echo "EVET";
                                    }


                                    

                                    ?> </td>
                                    
                                    <td style="10px"><a href="sayfa-duzenle.php?sayfa_id=<?php echo $sayfacek['sayfa_id']; ?>"><button class="btn btn-primary">Düzenle</button></a></td>

                                    <td style="10px"><a href="veritabani/islem.php?sayfa_id=<?php echo $sayfacek['sayfa_id'];?>&sayfasil=ok"><button class="btn btn-danger">Sil</button></a></td>
                                    
                                    

                                    
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