<?php
echo "<input style='padding-top:10px; padding-bottom:10px;' class='btn btn-primary btn-block' type=button value='SIGN UP' onclick=\"window.location.href='register.html';\"><br/>";
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

