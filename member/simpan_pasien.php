<?php
session_start();
include "../config/koneksi.php";
include "../config/library.php";
$tanggall=date('d-m-Y');
$penyakit=trim($_POST[penyakit]);
$id_user=trim($_POST[id_user]);
$pakar=trim($_POST[pakar]);

           mysql_query("INSERT INTO rb_analisa_hasil (kd_penyakit,
													 id_user,
													 jam,
													 hari,
													 tanggal) 
											 VALUES('$penyakit',
												    '$id_user',
													'$jam_sekarang',
													'$hari_ini',
													'$tanggall')");

			echo "<script>window.alert('Sukses Menyimpan data Konsultasi Anda.');
				window.location=('analisa-hasil.html')</script>";
?>