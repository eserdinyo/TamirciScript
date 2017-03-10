
<?php include 'header.php' ?>

<section id="content">
  <div class="wrapper">
    <article class="col-1">
      <div class="indent-left">
        <h3 class="p1">İletişim Formu</h3>




        <form id="contact-form" action="http://www.eserm.com/phpmail/index.php" method="post" enctype="multipart/form-data">
          <fieldset>
            <label><span class="text-form">Adınız:</span>
              <input type="text">
            </label>
            <label><span class="text-form">E-mail:</span>
              <input type="text">
            </label>
            <label><span class="text-form">Telefon:</span>
              <input type="text">
            </label>
            <div class="wrapper">
              <div class="text-form">Mesaj:</div>
              <div class="extra-wrap">
                <textarea></textarea>
              </div>
            </div>
            <button type="submit" class="button-2" name="iletisimform">Gönder</button> 
          </fieldset>
        </form>
      </div>
    </article>
    <article class="col-2">
      <h3 class="p1">Bizim Adreslerimiz</h3>
      <h6>Türkiye</h6>
      <dl class="img-indent-bot">
        <dt>Moda Cd. Kadıköy/İST</dt>
        <dd><span>Telefon:</span><strong>+90 507 8871368</strong></dd>
        <dd><span>Fax:</span><strong>+1 504 889 9898</strong></dd>
        <dd><span>Email:</span><strong><a href="#">mail@thomsander.com</a></strong></dd>
      </dl>
      <h6>Canada</h6>
      <dl class="img-indent-bot">
        <dt>8901 Marmora Road, Glasgow, D04</dt>
        <dd><span>Telephone:</span><strong>+1 959 603 6035</strong></dd>
        <dd><span>Fax:</span><strong>+1 504 889 9898</strong></dd>
        <dd><span>Email:</span><strong><a href="#">mail@thomsander.com</a></strong></dd>
      </dl>
      <h6>Great Britain</h6>
      <dl>
        <dt>8901 Marmora Road, Glasgow, D04</dt>
        <dd><span>Telephone:</span><strong>+1 959 603 6035</strong></dd>
        <dd><span>Fax:</span><strong>+1 504 889 9898</strong></dd>
        <dd><span>Email:</span><strong><a href="#">mail@thomsander.com</a></strong></dd>
      </dl>
    </article>
  </div>
  <div class="block"></div>
</section>
</div>
</div>


<?php include 'footer.php' ?>