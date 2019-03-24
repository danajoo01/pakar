<?php
session_start();
include "../../../config/koneksi.php";
include "../../../config/library.php";

$module=$_GET[module];
$act=$_GET[act];

if ($module=='news' AND $act=='hapus'){
  mysql_query("DELETE FROM rb_berita WHERE id_berita='$_GET[id]'");
  header('location:../../media.php?module='.$module);
}

elseif ($module=='news' AND $act=='input'){
    mysql_query("INSERT INTO rb_berita(judul,
                                    isi_berita,
                                    jam,
                                    tanggal,
                                    hari) 
                            VALUES('$_POST[judul]',
                                   '$_POST[isi_berita]',
                                   '$jam_sekarang',
                                   '$tgl_sekarang',
                                   '$hari_ini')");
  header('location:../../media.php?module='.$module);
}

elseif ($module=='news' AND $act=='update'){
    mysql_query("UPDATE rb_berita SET judul       = '$_POST[judul]',
                                   isi_berita  = '$_POST[isi_berita]'  
                             WHERE id_berita   = '$_POST[id]'");
  header('location:../../media.php?module='.$module);
}
?>
