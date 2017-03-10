﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Responsive Bootstrap Advance Admin Template</title>

  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

  <style>

    body{

      background-image: url("assets/img/login_background.jpg");

      background-attachment: fixed;
      -moz-background-size: 100% 100%;  /* firefox 3.6 */
      -o-background-size: 100% 100%; /* Opera 9.5 */
      -webkit-background-size: 100% 100%; /* Safari 3.0, Chrome */
      background-size: 100% 100% ; /* w3c, Firefox 4.0, ie9*/
    }

  </style>
</head>
<body >
  <div class="container">
    <div class="row text-center " style="padding-top:15%;">
      

    </div>
    <div class="row ">

      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

        <div style="background-color: white; opacity: 0.7; border: 1px solid; border-radius: 15px;" class="panel-body">
          <form action="veritabani/islem.php" method="POST">
            <center><h2>Admin Giriş</h2></center>
            <hr />
            <?php if($_GET['login'] == "no") 

            echo "Hatalı Giriş!";
            ?>
            
            <br />
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
              <input type="text" class="form-control" name="admin_kadi" placeholder="Kullanıcı adınız " />
            </div>
            <div class="form-group input-group">
              <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
              <input type="password" class="form-control" name="admin_sifre" placeholder="Şifreniz" />
            </div>
            
            
            <button style="width: 100%" type="submit" name="loggin" class="btn btn-primary">Giriş Yap</button>

            <hr />
            
          </form>
        </div>

      </div>


    </div>
  </div>

</body>
</html>
