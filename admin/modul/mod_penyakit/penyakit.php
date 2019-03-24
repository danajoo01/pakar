<?php
include "kodeauto.php";
$aksi="modul/mod_penyakit/aksi_penyakit.php";
switch($_GET[act]){

  default:
    echo "
          <input class='btn btn-primary' type=button value='Tambah Penyakit' onclick=\"window.location.href='?module=penyakit&act=tambahpenyakit';\"><hr>
          <table class='table table-hover' width=100%>
          <tr style='background:#e3e3e3; border:1px solid #cecece;'><th>No</th><th>Id</th><th>Penyakit</th><th>Solusi</th><th style='width:90px; text-align:center;'>Action</th></tr>";
    $p      = new Paging;
    $batas  = 5;
    $posisi = $p->cariPosisi($batas);
      $tampil = mysql_query("SELECT * FROM rb_penyakit ORDER BY id_penyakit ASC LIMIT $posisi,$batas");
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
				
				$solusi = htmlentities(strip_tags($r[solusi]));
				$solusii = substr($solusi,0,45); 
				$solusii = substr($solusi,0,strrpos($solusii," ")); 
				
      echo "<tr bgcolor=$warna><td>$no</td>
	  			<td width='35'>$r[id_penyakit]</td>
				<td>$r[penyakit]</td>
				<td>$solusii [...]</td>
		        <td><center>
					<a class='btn btn-info' title='View Penyakit' href=?module=penyakit&act=editpenyakit&id=$r[id_penyakit]><i class='icon-search icon-white'></i></a>
					<a class='btn btn-danger' title='Delete Penyakit' href=$aksi?module=penyakit&act=hapus&id=$r[id_penyakit]><i class='icon-trash icon-white'></i></a></center>
				</td></tr>";
      $no++;
    }
	
    $jmldata = mysql_num_rows(mysql_query("SELECT * FROM rb_penyakit"));
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
  
  case "tambahpenyakit":
     echo "<span class='title'>Tambah Daftar Penyakit</span><hr><br/>
	<form class='form-horizontal' id='registerHere' method='post' action='$aksi?module=penyakit&act=input'>
	  <fieldset>
			<div class='control-group'>
				<label class='control-label' for='input01'>Id Penyakit</label>
				  <div class='controls'>"; ?>
					<input type='text' class='input-xlarge' name='kode' value="<?php echo kdauto("rb_penyakit","PK"); ?>">       
				<?php
				echo "</div>
			</div>
			
			<div class='control-group'>
				<label class='control-label' for='input01'>Penyakit</label>
				  <div class='controls'>
					<textarea style='width:96%; height:80px;' name='penyakit'></textarea>  
				  </div>
			</div>
			
			<div class='control-group'>
				<label class='control-label' for='input01'>Keterangan</label>
				  <div class='controls'>
					<textarea style='width:96%; height:80px;' name='keterangan'></textarea>  
				  </div>
			</div>
			
			<div class='control-group'>
				<label class='control-label' for='input01'>Solusi</label>
				  <div class='controls'>
					<textarea style='width:96%; height:80px;' name='solusi'></textarea>  
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
	 
    
  case "editpenyakit":
    $edit = mysql_query("SELECT * FROM rb_penyakit WHERE id_penyakit='$_GET[id]'");
    $r    = mysql_fetch_array($edit);
     echo "<span class='title'>Edit Detail penyakit.</span><hr><br/>
	<form class='form-horizontal' id='registerHere' method='post' action='$aksi?module=penyakit&act=update'>
	  <fieldset>
			<div class='control-group'>
				<label class='control-label' for='input01'>Id Penyakit</label>
				  <div class='controls'>
					<input type=hidden name='kodee' value='$r[id_penyakit]' style='width:99%'>
					<input type='text' class='input-xlarge' name='kode' value='$r[id_penyakit]'>       
				  </div>
			</div>
			
			<div class='control-group'>
				<label class='control-label' for='input01'>Penyakit</label>
				  <div class='controls'>
					<textarea style='width:96%; height:80px;' name='penyakit'>$r[penyakit]</textarea>  
				  </div>
			</div>
			
			<div class='control-group'>
				<label class='control-label' for='input01'>Keterangan</label>
				  <div class='controls'>
					<textarea style='width:96%; height:80px;' name='keterangan'>$r[keterangan]</textarea>  
				  </div>
			</div>
			
			<div class='control-group'>
				<label class='control-label' for='input01'>Solusi</label>
				  <div class='controls'>
					<textarea style='width:96%; height:80px;' name='solusi'>$r[solusi]</textarea>  
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
