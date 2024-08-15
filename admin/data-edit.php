<?php
include ("../service/database.php");
if(isset($_POST['simpan'])){
    $id = $_POST['id_pesanan'];
    $nama = $_POST['nama'];
    $nomor_telp = $_POST['nomor'];
    $tanggal = $_POST['tanggal'];
    $durasi_wisata = $_POST['durasi'];
    $jumlah_pengunjung = $_POST['jumlah_peserta'];
    $penginapan = (isset($_POST['penginapan'])) ? 'Y': 'N';
    $transport = (isset($_POST['transport']))? 'Y': 'N';
    $servis = (isset($_POST['servis']))? 'Y': 'N';
    $sql = "UPDATE pesanan SET nama_pemesan='$nama', nomor_hp ='$nomor_telp', tanggal_mula_wisata='$tanggal', durasi_wisata='$durasi_wisata', jumlah_peserta='$jumlah_pengunjung', layanan_penginapan='$penginapan', layanan_transportasi='$transport', layanan_makanan='$servis' WHERE id_pesanan=$id";

    $query = mysqli_query($db, $sql);
    if($query){
        echo "<script>alert('Berhasil membuat perubahan!')</script>";
        header('location: halaman_admin.php');
    }
}
$db->close();
?>