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
                <h1 class="page-head-line">MENULER</h1>

                <h1 class="page-subhead-line">SİTEDEKİ MENULERİ BU SAYFADAN YÖNETEBİLİRSİNİZ... </h1>

            </div>
            <a href="menu-ekle.php"><button style="margin-left: 90%" class="btn btn-success">Menü Ekle</button></a>
            <hr>

        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <p>Aktif Menüler

                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="width: 400px">Menü Adı</th>
                                    <th style="width: 400px">Menü Link</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php 
                                
                                $menusor = mysql_query("select * from menuler");
                                

                                while( $menucek = mysql_fetch_assoc($menusor)){ ?>


                                <tr>
                                    <td><?php echo $menucek['menu_id'];?></td>
                                    <td><?php echo $menucek['menu_ad'];?></td>
                                    <td><?php echo $menucek['menu_url'];?></td>
                                    
                                    <td style="10px"><a href="menuduzenle.php?menu_id=<?php echo $menucek['menu_id']; ?>"><button class="btn btn-primary">Düzenle</button></a></td>

                                    <td style="10px"><a href="veritabani/islem.php?menu_id=<?php echo $menucek['menu_id'];?>&menusil=ok"><button class="btn btn-danger">Sil</button></a></td>
                                    
                                    

                                    
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