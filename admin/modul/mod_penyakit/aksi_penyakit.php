<?php
session_start();
include "../../../config/koneksi.php";
include "../../../config/library.php";

$module=$_GET[module];
$act=$_GET[act];

// Hapus penyakit
if ($module=='penyakit' AND $act=='hapus'){
  mysql_query("DELETE FROM rb_penyakit WHERE id_penyakit='$_GET[id]'");
  header('location:../../media.php?module='.$module);
}

// Input penyakit
elseif ($module=='penyakit' AND $act=='input'){
    mysql_query("INSERT INTO rb_penyakit (id_penyakit,
									penyakit,
									keterangan,
									solusi) 
							VALUES('$_POST[kode]',
								   '$_POST[penyakit]',
								   '$_POST[keterangan]',
								   '$_POST[solusi]')");

  header('location:../../media.php?module='.$module);
}

// Update penyakit
elseif ($module=='penyakit' AND $act=='update'){
    mysql_query("UPDATE rb_penyakit SET id_penyakit = '$_POST[kode]',
									penyakit  = '$_POST[penyakit]',
									keterangan = '$_POST[keterangan]',
									solusi = '$_POST[solusi]'
									WHERE id_penyakit = '$_POST[kodee]'");
							 
  header('location:../../media.php?module='.$module);
}
?>
