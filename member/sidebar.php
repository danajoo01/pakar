<?php
			$sql=mysql_query("SELECT * FROM rb_users WHERE id_user='$_SESSION[id_user]'");
			$r=mysql_fetch_array($sql);
				if (empty($r[alamat_lengkap]) OR empty($r[umur])){
					echo "  <input class='btn btn-primary btn-block' type=button value='Konsultasi Pakar' onclick=\"window.location.href='warning.html';\">
							<input class='btn btn-success btn-block' type=button value='Hasil Konsultasi' onclick=\"window.location.href='warning.html';\"><br/>";
				}else{
					echo "  <input class='btn btn-primary btn-block' type=button value='Konsultasi Pakar' onclick=\"window.location.href='konsultasi-4.html';\">
							<input class='btn btn-success btn-block' type=button value='Hasil Konsultasi' onclick=\"window.location.href='analisa-hasil.html';\"><br/>";
				}
$q=mysql_query("SELECT * FROM rb_halaman WHERE halaman='kelebihan'");
	$r=mysql_fetch_array($q);
		$isi_berita = htmlentities(strip_tags($r[detail]));
		$isi = substr($isi_berita,0,200); 
		$isi = substr($isi_berita,0,strrpos($isi," "));
    echo "<span class='sidebar-title'><a href='kelebihan.html'>$r[judul]</a></span><hr>
		 <p>$isi [...]</p><hr><br/>";
			
$qu=mysql_query("SELECT * FROM rb_halaman WHERE halaman='kelemahan'");
	$r=mysql_fetch_array($qu);
		$isi_berita = htmlentities(strip_tags($r[detail]));
		$isi = substr($isi_berita,0,200); 
		$isi = substr($isi_berita,0,strrpos($isi," "));
    echo "<span class='sidebar-title'><a href='kelemahan.html'>$r[judul]</a></a></span><hr>
		 <p>$isi [...]</p>";
?>

