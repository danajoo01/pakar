<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<?php
$aksi="modul/mod_kelebihan/aksi_kelebihan.php";
switch($_GET[act]){
  // Tampil Komentar
  default:
    $sql  = mysql_query("SELECT * FROM rb_halaman WHERE halaman='kelebihan'");
    $r    = mysql_fetch_array($sql);

    echo "
          <form method=POST name='form1' action=$aksi?module=kelebihan&act=update>
          <input type=hidden name=id value=$r[halaman]>
          <table width='100%'>
		  <tr><td><input type=text name='judul' value='$r[judul]' style='width: 99%;'>
         <tr><td><textarea name='isi' class=input style='width: 99%; height: 240px;'>$r[detail]</textarea></td></tr></td></tr>
         <tr><td><input type=submit value=Update class='btn btn-primary'></td></tr>
         </form></table>";
    break;  
}

?>

