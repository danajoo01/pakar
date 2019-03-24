<?php
include "../../../config/koneksi.php";

$module=$_GET[module];
$act=$_GET[act];

if ($module=='contact' AND $act=='hapus'){
  mysql_query("DELETE FROM rb_hubungi WHERE id_hubungi='$_GET[id]'");
  header('location:../../media.php?module='.$module);
}
?>
