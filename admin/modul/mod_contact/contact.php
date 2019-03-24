<?php
$aksi="modul/mod_contact/aksi_contact.php";
switch($_GET[act]){
  default:
    echo "<table class='table table-hover' width=100%>
          <tr style='background:#e3e3e3; border:1px solid #cecece;'><th>No</th><th>Nama Lengkap</th><th>Alamat Email</th><th>Tanggal</th><th style='width:45px; text-align:center;'>Action</th></tr>";

    $p      = new Paging;
    $batas  = 5;
    $posisi = $p->cariPosisi($batas);

    $tampil=mysql_query("SELECT * FROM rb_hubungi ORDER BY id_hubungi DESC LIMIT $posisi, $batas");

    $no = $posisi+1;
    while ($r=mysql_fetch_array($tampil)){
      $tgl=tgl_indo($r[tanggal]);

      echo "<tr bgcolor=$warna><td>$no</td>
                <td>$r[nama]</td>
                <td>$r[email]</td>
                <td>$tgl</a></td>
                <td><a class='btn btn-info' title='View Message' href='?module=contact&act=viewmessage&id=$r[id_hubungi]'><i class='icon-search icon-white'></i></a>
                </td></tr>";
    $no++;
    }
	$jmldata=mysql_num_rows(mysql_query("SELECT * FROM rb_hubungi"));
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);
	
   		echo "</table><br/><hr>";
		echo "</li></ul>
			  <div style='float:left; margin-top:-20px;' class='pagination'>
			  <ul>
				$linkHalaman
			</ul>
		</div>";
   

    break;
	
    case "viewmessage":
    $edit=mysql_query("SELECT * FROM rb_hubungi WHERE id_hubungi='$_GET[id]'");
    $r=mysql_fetch_array($edit);
echo "	<form class='form-horizontal' id='registerHere' method='post' action=''>
	  <fieldset>
	    <span class='title'>Form View Message From $r[nama].</span><hr><br />

	<div class='control-group'>
		<label class='control-label' for='input01'>Nama Pengirim</label>
	      <div class='controls'>
	        <input type='text' class='input-xlarge' value='$r[nama]'>       
	      </div>
	</div>
	
	<div class='control-group'>
		<label class='control-label' for='input01'>E-Mail</label>
	      <div class='controls'>
	        <input type='text' class='input-xlarge' value='$r[email]'>      
	      </div>
	</div>
	
	<div class='control-group'>
		<label class='control-label' for='input01'>Message/Pesan</label>
	      <div class='controls'>
	        <textarea style='width:96%; height:130px;' name='alamat_lengkap'>$r[pesan]</textarea>  
	      </div>
	</div>
</fieldset>
	</form>
	
	 <center><a class='btn btn-danger' title='Delete Message' href=$aksi?module=contact&act=hapus&id=$r[id_hubungi]>Hapus Pesan Ini</a></center>";      
    break;  
}
?>
