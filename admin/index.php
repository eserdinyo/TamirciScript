<?php 

include 'header.php';

include 'sidebar.php'; 


if(!isset($_SESSION['admin_kadi']))
{
    header('Location: http://www.eserm.com/admin/login.php');
}


?>


<!-- Göbek -->



<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">TAMİRCİ ADMİN PANELİNE HOŞGELDİNİZ</h1>
                <h1 class="page-subhead-line">SİTENİZİ YÖNETMEK İÇİN SOLDAKİ MENÜYÜ KULLANIN... </h1>

            </div>
        </div>
        <!-- /. ROW  -->
        

    </div>
    <!-- /. PAGE INNER  -->
</div>




<?php include 'footer.php'; ?>