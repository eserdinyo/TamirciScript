  <?php include 'header.php'; ?>
  <!--==============================content================================-->



  <!--While Başlangıç ========================================-->

  <!-- Sayfalama Başlangıç ================-->

  <?php

  
     $sayfada = 2; //Bir sayfadaki haber sayısı

     $sorgu = mysql_query("select * from haberler");
     $toplam_icerik = mysql_num_rows($sorgu);

     $topla_sayfa = ceil($oplam_icerik / $sayfada);

     //Eğer sayfa girilmemeişse 1 varsayalım
     $toplam_sayfa = isset($_GET['sayfa'])? (int) $_GET['sayfa'] : 1;

     //Eğer 1'den küçük bir sayfa sayısı girilditse 1 yapalım

     if($sayfa < 1) $sayfa = 1;

     //toplam sayfa sayımıdan fazla yazılırsa en son sayfayı varsayalım
     if($sayfa > $toplam_sayfa) $sayfa = $topla_sayfa;
     $limit = ($sayfa -1) * $sayfada;

     //Sayfalama Biriş ==================>>>>>




     $habersor = mysql_query("select * from haberler order by haber_ad DESC LIMIT $limit,$sayfada");
     while( $habercek = mysql_fetch_assoc($habersor)){ ?>


     <div style="margin-bottom: : 10px">
       <article class="col-1">
        <div class="indent-left">
          <h3 class="prev-indent-bot"><?php echo $habercek['haber_ad'];?></h3>
          <div class="wrapper prev-indent-bot">
            <figure class="img-indent"><img src="admin/<?php echo $habercek['haber_resimyol'];?>" alt=""></figure>
            <div class="extra-wrap">

              <p><?php echo substr($habercek['haber_detay'],0,300); ?></p> </div>
            </div>

            <a class="button-2" href="haber-detay/<?=seo($habercek["haber_ad"]).'/'.$habercek["haber_id"]?>">Devamını Oku </a> </div>

            

            <br>
            <hr>
          </article>
        </div>

        <?php } ?>
        <!--While Bitiş ========================================-->

        <!-- Son Haberler Başlangıç ===============================-->


        <article class="col-2">
          <h3 class="p1">Son Haberler</h3>
          <ul class="list-1">

           <?php

           $habersor = mysql_query("select * from haberler order by haber_id DESC");
           while( $habercek = mysql_fetch_assoc($habersor)){ ?>

           <li><a href="#"><?php echo $habercek['haber_ad']?></a></li>
           <?php } ?>

         </ul>
       </article>

       <!-- Son Haberler Bitiş ===============================-->




     </div class = "block">
   </div>
   <div style="margin-top: 10%">
    <?php include 'footer.php' ?>
  </div>
