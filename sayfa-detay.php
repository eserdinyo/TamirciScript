<?php include 'header.php' ?>


<?php 

$sayfa_id = $_GET['sayfa_id'];
$sayfasor = mysql_query("select * from sayfalar where sayfa_id = '$sayfa_id'");
$sayfacek = mysql_fetch_assoc($sayfasor);

?>





<div style="padding-bottom: : 10px" >
  <div class="box">
  <div style="padding-left: 82%; padding-top: 5px ;color: black">Tarih: <?php echo $sayfacek['sayfa_tarih']; ?></div>
    <div class="aligncenter">
      <h4><?php echo $sayfacek['sayfa_ad']; ?></h4>
    </div>
    

    <div class="box-bg maxheight">
      <div class="padding">
        <p><?php echo $sayfacek['sayfa_icerik']; ?></p>

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
