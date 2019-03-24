<?php
include "../config/session_member.php";

if ($_GET[module]=='home'){
  $sql=mysql_query("SELECT * FROM rb_halaman WHERE halaman='home'");
  $r=mysql_fetch_array($sql);
    echo "<span class='title'>Selamat Datang $_SESSION[namalengkap] (Members)</span><hr>
          <p>$r[detail]</p>";      
}

elseif ($_GET[module]=='profilkami'){
   $sql=mysql_query("SELECT * FROM rb_halaman WHERE halaman='about'");
  $r=mysql_fetch_array($sql);
    echo "<span class='title'>$r[judul]</span><hr>
				<p>$r[detail]</p>";
}

elseif ($_GET[module]=='donation'){
   $sql=mysql_query("SELECT * FROM rb_halaman WHERE halaman='donation'");
  $r=mysql_fetch_array($sql);
    echo "<span class='title'>$r[judul]</span><hr>
				<p>$r[detail]</p>";
}

elseif ($_GET[module]=='help'){
   $sql=mysql_query("SELECT * FROM rb_halaman WHERE halaman='help'");
  $r=mysql_fetch_array($sql);
    echo "<span class='title'>$r[judul]</span><hr>
				<p>$r[detail]</p>";
}

elseif ($_GET[module]=='kelebihan'){
   $sql=mysql_query("SELECT * FROM rb_halaman WHERE halaman='kelebihan'");
  $r=mysql_fetch_array($sql);
    echo "<span class='title'>$r[judul]</span><hr>
				<p>$r[detail]</p>";
}

elseif ($_GET[module]=='kekurangan'){
   $sql=mysql_query("SELECT * FROM rb_halaman WHERE halaman='kelemahan'");
  $r=mysql_fetch_array($sql);
    echo "<span class='title'>$r[judul]</span><hr>
				<p>$r[detail]</p>";
}

elseif ($_GET[module]=='account'){
  $sql=mysql_query("SELECT * FROM rb_users WHERE id_user='$_SESSION[id_user]'");
  $r=mysql_fetch_array($sql);
	echo "<span class='title'>Manage/Edit Data Members ($_SESSION[namalengkap])</span><hr>
		  <div class='h_line'></div>
		  
		  <form method=POST onSubmit='return valid()' action='aksi-account.html' id='registerHere'>
		  <table width=100%><br/>
		  <div class='alert alert-success'>
		  <button type='button' class='close' data-dismiss='alert'>&times;</button>
		  Jika Password tidak diganti, Form Password Di kosongkan saja,.. okeeeeee!
		  </div>
		  <input type=hidden name='id' value='$r[id_user]'>
          <tr><td width='120px;'>Alamat Email</td><td> : &nbsp;<input type=text name='email' value='$r[email]' style='width:53%;' id='email'></td></tr>
		  <tr><td>Password</td>    	<td> : &nbsp;<input type=text name='password' style='width:53%;'></td></tr>
		  <tr><td>Nama Lengkap</td>    	<td> : &nbsp;<input type=text name='nama_lengkap' value='$r[nama_lengkap]' style='width:53%;' id='nama_lengkap'></td></tr>
		  <tr><td>No Telepon</td>		<td> : &nbsp;<input type=text name='no_telp' value='$r[no_telp]' style='width:53%;' id='no_telp'></td></tr>
		  <tr><td>Umur</td>		<td> : &nbsp;<input type=text name='umur' value='$r[umur]' style='width:23%;' maxlength='2' class='required'> Tahun</td></tr>
		  <tr><td>Alamat lengkap</td>	<td> : &nbsp;<textarea name='alamat_lengkap' style='width: 93%; height: 100px; color:#696969;' class='required'>$r[alamat_lengkap]</textarea></td></tr>
	
	<tr><td></td><td style='float:right;'><br/><input type=submit value='Update Profile' class='btn btn-primary'></td></tr>
  </table></form>   ";
}

elseif ($_GET[module]=='aksiaccount'){
$nama_lengkap = trim(htmlentities($_POST[nama_lengkap]));
$email = trim(htmlentities($_POST[email]));
$no_telp = trim(htmlentities($_POST[no_telp]));
$alamat_lengkap = trim(htmlentities($_POST[alamat_lengkap]));
$umur = trim(htmlentities($_POST[umur]));

  if (empty($_POST[password])) {
    mysql_query("UPDATE rb_users SET nama_lengkap = '$nama_lengkap',
                                  email           = '$email',
                                  no_telp         = '$no_telp', 
								  alamat_lengkap  = '$alamat_lengkap',
								  umur      	  = '$umur'
                             WHERE id_user  	  = '$_POST[id]'");
  }
  else{
    $pass=md5($_POST[password]);
    mysql_query("UPDATE rb_users SET password        = '$pass',
                                 nama_lengkap    = '$nama_lengkap',
                                 email           = '$email',  
                                 no_telp         = '$no_telp',  
								 alamat_lengkap  = '$alamat_lengkap',
								 umur      	 	 = '$umur'
                             WHERE id_user  	 = '$_POST[id]'");
 }							 
		echo "<script>window.alert('Sukses Update Profile.');
				window.location='account.html'</script>";					 
  }  


elseif ($_GET[module]=='analisahasil'){
    echo "<span class='title'>Hasil Konsultasi Members : $_SESSION[namalengkap]</span><hr><br/>
          <table class='table table-hover' width=100%>
          <tr style='background:#e3e3e3; border:1px solid #cecece;'><th>No</th><th>Nama Lengkap</th><th>Waktu Konsultasi</th><th>Penyakit</th><th style='text-align:center;'>View</th></tr>";
    $p      = new Paging;
    $batas  = 5;
    $posisi = $p->cariPosisi($batas);
      $tampil = mysql_query("SELECT * FROM rb_analisa_hasil 
								left join rb_penyakit on rb_analisa_hasil.kd_penyakit=rb_penyakit.id_penyakit	
									left join rb_users on rb_analisa_hasil.id_user=rb_users.id_user where rb_analisa_hasil.id_user='$_SESSION[id_user]' ORDER by id_hasil DESC");
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){

      echo "<tr bgcolor=$warna><td>$no</td>
				<td>$r[nama_lengkap]</td>
				<td>$r[tanggal], $r[jam] WIB</td>
				<td><a href='#' title='$r[penyakit]'>$r[kd_penyakit]</a></td>
				<td><center><input class='btn btn-info' type=button value='Detail' onclick=\"window.location.href='detail-analisa-$r[id_hasil].html';\"></center></td>
		        </tr>";
      $no++;
    }

    $jmldata = mysql_num_rows(mysql_query("SELECT * FROM rb_analisa_hasil where rb_analisa_hasil.id_user='$_SESSION[id_user]'"));
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

   		echo "</table><br/><hr>";
		echo "</li></ul>
			  <div style='float:left; margin-top:-20px;' class='pagination'>
			  <ul>
				$linkHalaman
			</ul>
		</div>";
}

elseif ($_GET[module]=='hubungikami'){	
  echo "<span class='title'>Hubungi pakar kami secara online (Private)</span><hr><br/></br/>
		<form action=hubungi-aksi.html name='formku' onSubmit='return valid()' method=POST id='registerHere'>
			<fieldset>
				<div class='control-group'>
				<label>Nama Lengkap</label>
					<input id='nama_lengkap' name='nama_lengkap' type='text' style='width:45%;' value='$_SESSION[namalengkap]'/> 
				</div>
				<div class='control-group'>
						<label>Alamat E-mail</label>
					<input name='email' type='text' style='width:45%;' id='email' value='$_SESSION[email]'/> 
				</div>
				<div class='control-group'>
					<input name='subjek' type='hidden' value='From_Guest'/> 
						<label>Message</label>
					<textarea style='width:93%; height:120px;' name='pesan' class='required'></textarea>
				</div>										
					<span class='help-block'></span> 
					<button type='submit' class='btn btn-primary'>Submit</button>
			</fieldset>
		</form>";
}

elseif ($_GET[module]=='hubungiaksi'){
	$nama_lengkap = trim(htmlentities($_POST[nama_lengkap]));
	$email = trim(htmlentities($_POST[email]));
	$subjek = trim(htmlentities($_POST[subjek]));
	$pesan = trim(htmlentities($_POST[pesan]));
  mysql_query("INSERT INTO rb_hubungi(nama,
                                   email,
                                   subjek,
                                   pesan,
                                   tanggal) 
                        VALUES('$nama_lengkap',
                               '$email',
                               '$subjek',
                               '$pesan',
                               '$tgl_sekarang')");
							   
  echo "<div style='margin-top:5%; text-align:center;' class='alert alert-success'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			Sukses Mengirim Pesan ke Pakar! <br>Terimakasih telah menghubungi kami. Kami akan segera meresponnya
		</div>";
}

elseif ($_GET[module]=='semuaberita'){
	  $p      = new Paging2;
	  $batas  = 3;
	  $posisi = $p->cariPosisi($batas);
	  $sql=mysql_query("select * from rb_berita order by id_berita DESC LIMIT $posisi,$batas");
	  while($r=mysql_fetch_array($sql)){
		  $tgl = tgl_indo($r[tanggal]);
		  $isi_berita = nl2br($r[isi_berita]);
		  $isi = substr($isi_berita,0, 350);
		  $isi = substr($isi_berita,0,strrpos($isi," "));
		  
		  $jmldata     = mysql_num_rows(mysql_query("SELECT * FROM rb_berita"));
		  $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
		  $linkHalaman = $p->navHalaman($_GET[halberita], $jmlhalaman);
			echo "<table><tr>
						<span class='sidebar-title'><a href=news-$r[id_berita].html>$r[judul]</a></span>
						 <div class='date'>Diposting pada : $r[hari], $tgl - $r[jam] WIB  </div><hr>";	 
			echo "<p>$isi [...]</p>";
		 }
			echo "</table><br/><hr>";
			echo "</li></ul>
			  <div style='float:left; margin-top:-20px;' class='pagination'>
			  <ul>
				$linkHalaman
			</ul>
		</div>";
}

elseif ($_GET[module]=='detailberita'){
	  $sql=mysql_query("select * from rb_berita where id_berita=$_GET[id]");
	  while($r=mysql_fetch_array($sql)){
		  $tgl = tgl_indo($r[tanggal]);
		  $isi_berita = nl2br($r[isi_berita]);
	
			echo "<table><tr>
						<span class='sidebar-title'><a href=news-$r[id_berita].html>$r[judul]</a></span>
						 <div class='date'>Diposting pada : $r[hari], $tgl - $r[jam] WIB  </div><hr>";	 
			echo "<p>$isi_berita</p>";
		 }
			echo "</table><br/>";
}

elseif ($_GET[module]=='konsultasi'){
	$answer		= $_GET['answer'];
	$sql2=mysql_query("SELECT * FROM rb_penyakit where id_penyakit='{$answer}'");
    $s = mysql_fetch_array($sql2);
	$solusii   = nl2br($s['solusi']);
	$penyakit = nl2br($s['penyakit']);
	$keterangan = nl2br($s['keterangan']);
	
	$result = mysql_query("SELECT * FROM rb_gejala where id='{$answer}'");
	if(mysql_num_rows($result)){
		$row 		= mysql_fetch_array($result);
		$pertanyaan = nl2br($row['pertanyaan']);
		
		echo "<span class='title'>Konsultasi Pakar - $_SESSION[namalengkap]</span><hr>";
		echo("<br/><br/><div class='alert alert-info'>".$pertanyaan."</div><br/>");
		if(is_numeric($row['id'])){
			echo("<center><a style='width:100px;' class='btn btn-success' href=\"konsultasi-{$row['ifyes']}.html\">Ya</a>&nbsp;
			<a style='width:100px;' class='btn btn-primary' href=\"konsultasi-{$row['ifno']}.html\">Tidak</a></center>");
		}else{
			echo "";
		}
	}

	if (is_string($s['id_penyakit'])){
				echo "<table width='100%' style='border:none;' cellpadding='2' cellspacing='1'>
				<div class='alert alert-success'>
				<button type='button' class='close' data-dismiss='alert'>&times;</button>
					Sukses Konsultasi Pakar! Berikut data hasil konsultasi anda ($_SESSION[namalengkap]).
				</div>
					<tr><td colspan='2'><span class='title'>Data Member Yang Konsultasi :</span><hr></td></tr>";
					   $sql=mysql_query("SELECT * FROM rb_users WHERE id_user='$_SESSION[id_user]'");
						$r=mysql_fetch_array($sql);
					echo "	
					<tr><td width='142' style='color:#000; font-weight:bold; font-size:12px'>Nama Lengkap</td>
						<td width='689' style='font-size:12px'><input type='hidden' name='nama' value='$r[nama_lengkap]'>: $r[nama_lengkap]</td></tr>
					<tr><td style='color:#000; font-weight:bold; font-size:12px'>Alamat Email</td>
						<td style='font-size:12px'><input type='hidden' name='email' value='$r[email]'>: $r[email]</td></tr>
					<tr><td style='color:#000; font-weight:bold; font-size:12px'>No Telepone</td>
						<td style='font-size:12px'><input type='hidden' name='telp' value='$r[no_telp]'>: $r[no_telp]</td></tr>
					<tr><td style='color:#000; font-weight:bold; font-size:12px'>Alamat Lengkap</td>
						<td style='font-size:12px'><input type='hidden' name='alamat' value='$r[alamat_lengkap]'>: $r[alamat_lengkap]</td></tr>
					<tr><td style='color:#000; font-weight:bold; font-size:12px'></td>
						<td style='font-size:12px'><input type='hidden' name='penyakit' value='$answer'></td></tr>
				</table><br/>";
				
				echo("<span class='title'>Penyakit yang di Derita : </span><hr>
				
				<span style='color:#000; font-weight:bold;'>".$penyakit."</span>
				<p>".$keterangan."</p><br/>	
				<span class='title'>Solusi dari Penyakit :</span><hr> <p>".$solusii."</p>");
				
				echo "<form method=POST name='formku' onSubmit='return valid()' action='simpan_pasien.php'>
							<table width='100%' style='border:none;' cellpadding='2' cellspacing='1'>
								<input type='hidden' name='id_user' value='$_SESSION[id_user]'>
								<input type='hidden' name='penyakit' value='$answer'>
								<hr>
								<tr ><td>&nbsp;<td><tr><td colspan=2><center>
								<div class='alert'>
								  <button type='button' class='close' data-dismiss='alert'>&times;</button>
								  <strong>Caution!</strong> Silahkan Menyimpan atau Cetak Data Hasil Konsultasi anda setelah Berkonsultasi dengan memilih Button di bawah ini.
								</div>
									<input type=submit value='Simpan Hasil Konsultasi' class='btn btn-primary'>
									<a class='btn btn-success' target='_BLANK' href='print.php?id=$answer'>Print Hasil Konsultasi</a>
									<input class='btn btn-danger' type=button value='Coba Konsultasi Lagi!' onclick=\"window.location.href='konsultasi-4.html';\">
								</center></td></tr>
							</table></form>";
				echo("");
	}else{
		echo "";
	}
}


elseif ($_GET[module]=='detailanalisa'){
	$detail=mysql_query("SELECT * FROM rb_analisa_hasil
							LEFT OUTER JOIN rb_penyakit ON
									rb_analisa_hasil.kd_penyakit=rb_penyakit.id_penyakit
							LEFT OUTER JOIN rb_users ON
									rb_analisa_hasil.id_user=rb_users.id_user where id_hasil='$_GET[id]'");
	
	$d   = mysql_fetch_array($detail);
	$penyakit = nl2br($d['penyakit']);
	$solusi = nl2br($d['solusi']);
	$keterangan = nl2br($d['keterangan']);
	echo "<tr><td colspan='2'><span class='title'>Detail Hasil Konsultasi pakar : </span><hr>";
	
					echo "<table width='100%' style='border:none;' cellpadding='2' cellspacing='1'>
					<tr><td width='136' style='color:#000; font-weight:bold; font-size:12px'>Nama Lengkap</td>
						<td width='689' style='font-size:12px'>: $d[nama_lengkap]</td></tr>
					<tr><td style='color:#000; font-weight:bold; font-size:12px'>Email</td>
						<td style='font-size:12px'>: $d[email]</td></tr>
					<tr><td style='color:#000; font-weight:bold; font-size:12px'>No Telp</td>
						<td style='font-size:12px'>: $d[no_telp]</td></tr>
					<tr><td style='color:#000; font-weight:bold; font-size:12px'>Alamat</td>
						<td style='font-size:12px'>: $d[alamat_lengkap]<br/></td></tr>
					<tr><td style='color:#000; font-weight:bold; font-size:12px'>Waktu Analisa</td>
						<td style='font-size:12px'>: $d[hari], $d[tanggal] - $d[jam] WIB<br/></td></tr>
					<tr><td style='color:#000; font-weight:bold; font-size:12px'>Umur</td>
						<td style='font-size:12px'>: $d[umur] Tahun<br/></td></tr>
				</table><br/>";
				
echo "<span class='title'>Penyakit yang di Derita : </span><hr>
				
				<span style='color:red; font-weight:bold;'>".$penyakit."</span>
				<p>".$keterangan."</p><br/>	
				<span class='title'>Solusi dari Penyakit :</span><hr> <p>".$solusi."</p>
				
				<center><br/><a class='btn btn-success' target='_BLANK' href='print.php?id=$d[id_penyakit]'>Print Hasil Konsultasi</a></center>";
}

elseif ($_GET[module]=='peringatan'){
echo "<script>window.alert('Untuk Konsultasi, Lengkapi profile anda terlebih dahulu.');
				window.location='account.html'</script>";
}
?>

