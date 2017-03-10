<?php include 'header.php' ?>


<?php 

$haber_id = $_GET['haber_id'];
$habersor = mysql_query("select * from haberler where haber_id = '$haber_id'");
$habercek = mysql_fetch_assoc($habersor);

$haber_hit = $habercek['haber_hit'];
$haber_hit ++;

$haberhit=mysql_query("update  haberler set haber_hit = '".$haber_hit."' where haber_id='$haber_id'");

?>





<div style="padding-bottom: : 10px" >
  <div class="box">
    <div style="padding-left: 82%; padding-top: 5px ;color: black">Tarih: <?php echo $habercek['haber_zaman']; ?></div>
    <div class="aligncenter">
      <h4><?php echo $habercek['haber_ad']; ?></h4>
    </div>
    

    <div class="box-bg maxheight">
      <div class="padding">
        <p><?php echo $habercek['haber_detay']; ?></p>

      </div>


    </div>

  </div>
  <div>

  </div>
</div>
<hr>

<div style="padding-bottom: 100px">
 <?php include 'footer.php' ?>

</div>
