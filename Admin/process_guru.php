<?php
include('../koneksi.php');
$kelas = $_POST['Kelas'];
$jurusan = $_POST['Jurusan'];
$nama_mpl = $_POST['Nama_Mata_Pelajaran'];

$tampil_murid = "SELECT * FROM murid WHERE jurusan = '$_POST[Jurusan]' and kelas = '$_POST[Kelas]'";
$hasil_murid = mysqli_query($koneksi, $tampil_murid);
$N = 1;
$T = 10000;
$A = 20000;

while ($data_murid = mysqli_fetch_array($hasil_murid)) {
	$nama_murid = $_POST[$N];
	$nilai_uts = $_POST[$T];
	$nilai_uas = $_POST[$A];

	$tampil_nilai = mysqli_query($koneksi, "SELECT * FROM `nilai` WHERE nama_murid = '$nama_murid' and jurusan = '$jurusan' and kelas = '$kelas' and nama_matapelajaran = '$nama_mpl'");

	if (mysqli_num_rows($tampil_nilai) == 0) {
		$sqlstr = ("INSERT INTO `nilai` (`nama_murid`, `kelas`, `jurusan`, `nama_matapelajaran`, `nilai_UTS`, `nilai_UAS`) VALUES ('$nama_murid', '$kelas', '$jurusan', '$nama_mpl', '$nilai_uts', '$nilai_uas');");
		(mysqli_query($koneksi, $sqlstr));
	} else {
		$sqlstr = ("UPDATE `nilai` SET `nilai_UTS`= $nilai_uts,`nilai_UAS`= $nilai_uas WHERE nama_murid = '$nama_murid' and kelas = '$kelas' and jurusan = '$jurusan' and nama_matapelajaran = '$nama_mpl' ");
		(mysqli_query($koneksi, $sqlstr));
	}

	$N++;
	$T++;
	$A++;
}



// apakah query simpan berhasil?
if ($sqlstr) {
	// kalau berhasil alihkan ke halaman index.php dengan status=sukses
	echo '<script language="javascript">
				alert("Input Nilai Berhasil");
				document.location="Nilai.php";
			  </script>';
} else {
	// kalau gagal alihkan ke halaman indek.php dengan status=gagal
	echo '<script language="javascript">
				alert("Input Nilai Gagal");
				document.location="Nilai.php";
			  </script>';
}
