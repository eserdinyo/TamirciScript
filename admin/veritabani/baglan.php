<?php 

ob_start();
session_start();
?>

<?php 

$username="nophone";
$password = "Shananelan29";
$sunucu="localhost";
$database="tamirci";


$baglan = mysql_connect($sunucu,$username,$password);
mysql_query("SET NAMES UTF8");
if(!$baglan)
{
	mysql_close($baglan);
	exit();
}

$db = mysql_select_db($database);
if(!db){echo "Veritabanı hatası : ".mysql_error(); echo "<br>";
exit();

}





?>

