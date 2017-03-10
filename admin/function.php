<?php 

ob_start();
session_start();

function giriskontrol()
{
	$admin_kadi = $_SESSION['admin_kadi'];

	$adminsor = mysql_query("select * from admin where admin_kadi='$admin_kadi'");
	$adminsay = mysql_num_rows($adminsor);

	if($adminsay == 0)
	{
		header('Location:http://www.eserm.com/admin/login.php');
	}
}


function yetkikontrol()
{
	$admin_kadi = $_SESSION['admin_kadi'];

	$adminsor = mysql_query("select * from admin where admin_kadi='$admin_kadi' and admin_yetki = '0' ");
	$adminsay = mysql_num_rows($adminsor);

	if($adminsay == 0)
	{
		header('Location:yetkiyok.php');
	}
}

function seo($s) {
	$tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',');
	$eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','');
	$s = str_replace($tr,$eng,$s);
	$s = strtolower($s);
	$s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
	$s = preg_replace('/\s+/', '-', $s);
	$s = preg_replace('|-+|', '-', $s);
	$s = preg_replace('/#/', '', $s);
	$s = str_replace('.', '', $s);
	$s = trim($s, '-');
	return $s;
}

?>