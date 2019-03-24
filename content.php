<?php
if ($_GET[module]=='home'){
  $sql=mysql_query("SELECT * FROM rb_halaman WHERE halaman='home'");
  $r=mysql_fetch_array($sql);
    echo "<span class='title'>$r[judul]</span><hr>
          <p>$r[detail]</p>";      
}

elseif ($_GET[module]=='about'){
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

elseif ($_GET[module]=='register'){
echo "	<form class='form-horizontal' id='registerHere' method='post' action='aksi-register.html'>
	  <fieldset>
	    <span class='title'>Form Registrasi Members.</span><hr><br />
		<div class='alert alert-info'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			Silahkan Mengisi Data pada Form di bawah ini dengan baik dan benar.
		</div><br/>
	    <div class='control-group'>
	      <label class='control-label' for='input01'>Nama Lengkap</label>
	      <div class='controls'>
	        <input type='text' class='input-xlarge' id='nama_lengkap' name='nama_lengkap'>      
	      </div>
	</div>
	
	 <div class='control-group'>
		<label class='control-label' for='input01'>Alamat Email</label>
	      <div class='controls'>
	        <input type='text' class='input-xlarge' id='email' name='email' rel='popover'> <br /> <span id='error1'></span>            
	      </div>
	</div>
	
	<div class='control-group'>
		<label class='control-label' for='input01'>No Telepon</label>
	      <div class='controls'>
	        <input type='text' class='input-xlarge' id='no_telp' name='no_telp' rel='popover'>    
	      </div>
	</div>
	
	 <div class='control-group'>
		<label class='control-label' for='input01'>Gender</label>
	      <div class='controls'>
	        <select name='gender' id='gender' >
            				<option value=''>Gender</option>
			                <option value='Laki-laki'>Laki-laki</option>
			                <option value='Perempuan'>Perempuan</option>
			<option value='other'>Other</option>
			               
			              </select>     
	      </div>
	</div>
	
	
	<div class='control-group'>
		<label class='control-label' for='input01'></label>
	      <div class='controls'>
	       <button type='submit' class='btn btn-success' rel='tooltip' title='first tooltip'>Create My Account</button>
	       
	      </div>
	
	</div> 
	  </fieldset>
	</form>";
}

elseif ($_GET[module]=='aksiregister'){
	$nama_lengkap=trim(htmlentities($_POST[nama_lengkap]));
	$email=trim(htmlentities($_POST[email]));
	$no_telp=trim(htmlentities($_POST[no_telp]));
	$gender=trim(htmlentities($_POST[gender]));
  $sql=mysql_query("SELECT * FROM rb_users WHERE email='$email'");
  $r=mysql_fetch_array($sql);
  if ($email==$r[email]){
  echo "<script>window.alert('Alamat Email Sudah Terdaftar, Coba Alamat Email lain..');
				window.location='javascript:history.go(-1)'</script>";
  }else{

function acakangkahuruf($panjang) 
	{ 
		$karakter= 'ABCDEFGHIJKLMNOPQRSabcdefghijklmnopqrs123456789!@#$%^&*0^()'; 
		$string = ''; 
		for ($i = 0; $i < $panjang; $i++) { 
		$pos = rand(0, strlen($karakter)-1); 
		$string .= $karakter{$pos}; 
		} 
		return $string; 
	}
	
	$password=acakangkahuruf(10);
	$pass=md5($password);
    $sql = mysql_query("INSERT INTO rb_users(email,
								 password,
								 nama_lengkap,
                                 no_telp,
								 jenis_kelamin) 
	                       VALUES('$email',
								'$pass',
								'$nama_lengkap',
                                '$no_telp',
								'$gender')");
								
$headers = "From: $email\r\n";
$headers .= "Reply-to: $email\r\n";
$mail_sent = mail("$email", "From Sistem pakar", "Untuk Bpk/Ibk : $nama_lengkap \r\n \r\nTerima Kasih Telah Mendaftar di Sistem pakar
Silahkan Login ke http://localhost/pakar Dengan : 

Email : $email 
Password : $password

-----------------------------------------------------------------------------------
Main Website : http://www.sarjanakomedi.com
Demo Pakar : http://www.sarjanakomedi.com
Admin : Rahmat Sabilludin
Developer : Rahmat Sabilludin", $headers);

  echo "<center><div style='margin-top:5%; text-align:center;' class='alert alert-success'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			<b>$nama_lengkap</b>, Success Terdaftar Sebagai Members..
		</div>
		
		<div style='margin-top:5%; text-align:center;' class='alert alert-info'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			Sebuah Email Telah kami kirimkan ke <b>$email</b>, yang berisi Password untuk login ke Sistem pakar, silahkan buka dan cek alamat email anda, jika tidak ada di inbox, coba cek folder SPAM. Terima Kasih...
		</div></center>";
}
}

elseif ($_GET[module]=='form_login'){
	echo "<span class='title'>Silahkan Login.</span><hr><br />
		<div class='alert alert-info'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			<b>Hello Guest!</b> Untuk melakukan konsultasi pakar, Masukkan Email dan password yang telah anda dapatkan pada waktu register. Anda belum punya account, Daftar <a href='register.html'>Disini</a>
		</div>
		<form method=POST name='formku' onSubmit='return valid()' action='cek_login.php' id='registerHere'>
			<div style='position:relative; left:50%; margin-left:-120px; margin-top:10%;' class='container-fluid'>
				<div class='row-fluid'>
					<div class='span12'>
						<form>
							<fieldset>
								<div class='control-group'>
									 <label>Email :</label>
									 <input type=text name='id_user' class='required'>
								</div>
									 <input type=hidden name=level value='Member'>
								<div class='control-group'>
									 <label>Password :</label>
									 <input type=password name='password' class='required'>
								</div>
										 <button type='submit' class='btn btn-primary'>Login</button>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
			<center><br/><a href='#'>Reset Password.</a><br/>
Account tidak bisa diakses? <a href='#'>Reset Password via SMS</a></center>
		</form>";
}

elseif ($_GET[module]=='hubungikami'){	
  echo "<span class='title'>Hubungi pakar kami secara online (Private)</span><hr><br/></br/>
		<form action=hubungi-aksi.html name='formku' onSubmit='return valid()' method=POST id='registerHere'>
			<fieldset>
				<div class='control-group'>
				<label>Nama Lengkap</label>
					<input id='nama_lengkap' name='nama_lengkap' type='text' style='width:45%;'/> 
				</div>
				<div class='control-group'>
						<label>Alamat E-mail</label>
					<input name='email' type='text' style='width:45%;' id='email'/> 
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
		  $isi = substr($isi_berita,0, 260);
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
?>