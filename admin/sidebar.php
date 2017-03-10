<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <div class="user-img-div">
                    <img src="assets/img/eser.png" class="img-thumbnail" />

                    <div class="inner-text">
                        hoşgeldin  <?php echo $_SESSION['admin_kadi']  ?>
                        <br />
                        <small>Son Giriş : 2 Hafta Önce </small>
                    </div>
                </div>

            </li>


            <li>
                <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Anasayfa</a>
            </li>

            <?php 

            $admin = $_SESSION['admin_kadi']; 

            $adminsor = mysql_query("select * from admin where admin_kadi = '$admin'");
            $admincek = mysql_fetch_assoc($adminsor);

            if ($admincek['admin_yetki'] == "0") { ?>

                <li>
                    <a  href="ayarlar.php"><i class="fa fa-dashboard "></i>Ayarlar</a>
                </li>

        <?php  }

            ?>

            



            <li>
                <a  href="menuler.php"><i class="fa fa-dashboard "></i>Menuler</a>
            </li>

            <li>
                <a  href="slider.php"><i class="fa fa-dashboard "></i>Slider</a>
            </li>

            <li>
                <a  href="sayfalar.php"><i class="fa fa-dashboard "></i>Sayfalar</a>
            </li>

            <li>
                <a  href="haberler.php"><i class="fa fa-dashboard "></i>Haberler</a>
            </li>
            

        </div>

    </nav>