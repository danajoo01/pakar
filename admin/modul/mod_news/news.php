<?php
$aksi="modul/mod_news/aksi_news.php";

switch($_GET[act]){
  default:
    echo "<input class='btn btn-primary' type=button value='Tambah Article/News' onclick=\"window.location.href='?module=news&act=tambahberita';\"><hr>
          <table class='table table-hover' width=100%>
          <tr style='background:#e3e3e3; border:1px solid #cecece;'><th>No</th><th>News Title</th><th>Tanggal Posting</th><th style='width:90px; text-align:center;'>Action</th></tr>";

    $p      = new Paging;
    $batas  = 5;
    $posisi = $p->cariPosisi($batas);
      $tampil = mysql_query("SELECT * FROM rb_berita ORDER BY id_berita DESC LIMIT $posisi,$batas");
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
      $tgl_posting=tgl_indo($r[tanggal]);
      echo "<tr bgcolor=$warna><td>$no</td>
                <td>$r[judul]</td>
                <td>$tgl_posting</td>
		        <td><center>
					<a class='btn btn-info' title='View Penyakit' href=?module=news&act=editberita&id=$r[id_berita]><i class='icon-search icon-white'></i></a>
					<a class='btn btn-danger' title='Delete Penyakit' href=$aksi?module=news&act=hapus&id=$r[id_berita]><i class='icon-trash icon-white'></i></a></center>
				</td></tr>";
      $no++;
    }
	
    $jmldata = mysql_num_rows(mysql_query("SELECT * FROM rb_berita"));
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
  
  case "tambahberita":
      echo "<span class='title'>Tambah Berita</span><hr><br/>
	<form class='form-horizontal' id='registerHere' method='post' action='$aksi?module=news&act=input'>
	  <fieldset>
			<div class='control-group'>
				<label class='control-label' for='input01'>Title</label>
				  <div class='controls'>
					<input type='text' class='input-xlarge' name='judul'>       
				</div>
			</div>
			
			<div class='control-group'>
				<label class='control-label' for='input01'>Article</label>
				  <div class='controls'>
					<textarea style='width:96%; height:210px;' name='isi_berita'></textarea>  
				  </div>
			</div>
	
			<div class='control-group'>
				<label class='control-label' for='input01'></label>
				  <div class='controls'>
				   <button type='submit' class='btn btn-success' rel='tooltip' title='first tooltip'>Tambah</button>
				   <input class='btn' type=button value=Batal onclick=self.history.back()>
				  </div>
			</div> 
	  </fieldset>
	</form>"; 
     break;
    
  case "editberita":
    $edit = mysql_query("SELECT * FROM rb_berita WHERE id_berita='$_GET[id]'");
    $r    = mysql_fetch_array($edit);
      echo "<span class='title'>Edit Berita</span><hr><br/>
	<form class='form-horizontal' id='registerHere' method='post' action='$aksi?module=news&act=update'>
	  <fieldset>
			<div class='control-group'>
				<label class='control-label' for='input01'>Title</label>
				  <div class='controls'>
				  <input type='hidden' name='id' value='$r[id_berita]'> 
					<input type='text' class='input-xlarge' name='judul' value='$r[judul]'>       
				</div>
			</div>
			
			<div class='control-group'>
				<label class='control-label' for='input01'>Article</label>
				  <div class='controls'>
					<textarea style='width:96%; height:210px;' name='isi_berita'>$r[isi_berita]</textarea>  
				  </div>
			</div>
	
			<div class='control-group'>
				<label class='control-label' for='input01'></label>
				  <div class='controls'>
				   <button type='submit' class='btn btn-success' rel='tooltip' title='first tooltip'>Update</button>
				   <input class='btn' type=button value=Batal onclick=self.history.back()>
				  </div>
			</div> 
	  </fieldset>
	</form>"; 
    break;  
}
?>
