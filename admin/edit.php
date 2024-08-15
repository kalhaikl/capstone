<?php include("../layout/navbar.php");?>
<?php
if(isset($_GET['id_pesanan'])){
    header('location: history.php');
}
$id = $_GET['id'];
$sql = "SELECT * FROM pesanan WHERE id_pesanan=$id";
$query = mysqli_query($db, $sql);
$pesanan = mysqli_fetch_assoc($query);
if(mysqli_num_rows($query) < 1){
    die("Data tidak ditemukan!");
}
$db->close();
?>
<h2>Halaman Edit</h2>
<form action="data-edit.php" method="POST">
    <input type="hidden" name="id_pesanan" value="<?php echo $pesanan['id_pesanan']?>">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Pemesan: </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" value="<?php echo $pesanan['nama_pemesan']?>">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nomor HP/Telp: </label>
        <input type="text" inputMode="numeric" class="form-control" id="exampleFormControlInput1" name="nomor" value="<?php echo $pesanan['nomor_hp']?>">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tanggal Mulai Wisata: </label>
        <input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal" value="<?php echo $pesanan['tanggal_mula_wisata']?>">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Durasi Wisata: </label>
        <input type="text" input="numeric" class="form-control" id="exampleFormControlInput1" name="durasi" value="<?php echo $pesanan['durasi_wisata']?>">
    </div>
    <label class="form-check-label" for="flexCheckDefault">
        Tambahan:
    </label>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Y" id="flexCheckDefault" name="penginapan" value="<?php echo $pesanan['layanan_penginapan']?>">
        <label class="form-check-label" for="flexCheckDefault">
            Penginapan: Rp300.000
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Y" id="flexCheckDefault" name="transport" value="<?php echo $pesanan['layanan_transportasi']?>">
        <label class="form-check-label" for="flexCheckDefault">
            Transportasi: Rp100.000
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Y" id="flexCheckDefault" name="servis" value="<?php echo $pesanan['layanan_makanan']?>">
        <label class="form-check-label" for="flexCheckDefault">
            Servis/Makan: Rp100.000
        </label>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jumlah Pengunjung: </label>
        <input type="text" inputMode="numeric" class="form-control" id="exampleFormControlInput1" name="jumlah_peserta" value="<?php echo $pesanan['jumlah_peserta']?>">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Harga Paket Wisata: (Harga ini sudah
            ditentukan)</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="harga_paket" disabled>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jumlah Tagihan: </label>
        <input type="text" class="form-control" disabled>
    </div>
    <button type="submit" class="btn btn-primary" name="hitung" id="hitung">Hitung</button>
    <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
    <button type="submit" class="btn btn-danger">Reset</button>

</form>
<?php include("../layout/footer.php");?>