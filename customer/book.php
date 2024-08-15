<?php include("../layout/navbar.php");?>
<!-- Form start -->
<?php
 $success = "";
 $failed = "";
 $harga_paket = $jumlah_tagihan = 0;
 function layanan($data){
    if(!is_array($data)){
        $data = [$data];
    }
    $total = 0;
    foreach($data as $index){
        $total += (int)$index;
    }
    return $total;
 }
 function hitungBiaya($layanan, $durasi_wisata, $jumlah_pengunjung){
    $harga_paket = layanan($layanan) + 50000;
    if(is_numeric($harga_paket) && is_numeric($jumlah_pengunjung) && is_numeric($durasi_wisata) && $jumlah_pengunjung > 0 && $durasi_wisata > 0){
        $jumlah_tagihan = $harga_paket * $jumlah_pengunjung * $durasi_wisata;
        return ['harga_paket' => $harga_paket, 'jumlah_tagihan' => $jumlah_tagihan];
    }
    return['harga_paket' => '', 'jumlah_tagihan' => ''];
 }
 if(isset($_POST['hitung'])){
    $durasi_wisata = $_POST['durasi'];
    $jumlah_pengunjung = $_POST['jumlah_peserta'];
    $layanan = isset($_POST['layanan'])?$_POST['layanan']:[];
    $biaya = hitungBiaya($layanan, $durasi_wisata, $jumlah_pengunjung);
    $harga_paket = $biaya['harga_paket'];
    $jumlah_tagihan = $biaya['jumlah_tagihan'];
 }
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['book'])){
    $nama = $_POST['nama'];
    $nomor_telp = $_POST['nomor'];
    $tanggal = $_POST['tanggal'];
    $durasi_wisata = $_POST['durasi'];
    $jumlah_pengunjung = $_POST['jumlah_peserta'];
    $id_wisata = $_POST['id_wisata'];
    $layanan = isset($_POST['layanan'])? implode(", ", $_POST['layanan']): '';
    $biaya = hitungBiaya($_POST['layanan'], $durasi_wisata, $jumlah_pengunjung);
    $harga_paket = $biaya['harga_paket'];
    $jumlah_tagihan = $biaya['jumlah_tagihan'];
    $sql = "INSERT INTO pesanan(nama_pemesan, nomor_hp, tanggal_mula_wisata, id_paket_wisata ,durasi_wisata, layanan_penginapan, layanan_transportasi, layanan_makanan, jumlah_peserta, harga_paket, jumlah_tagihan) VALUES ('$nama', '$nomor_telp', '$tanggal','$id_wisata' ,'$durasi_wisata', '','','$layanan', '$jumlah_pengunjung', '$harga_paket', '$jumlah_tagihan')";
    $query = mysqli_query($db, $sql);

    if($query){
        echo "<script>alert('Pesanan Berhasil!')</script>";
        header("location: history.php");
        exit();
    } else {
        echo "<script>alert('Pesanan Gagal!')</script>";
    }
}
$db->close();
 ?>
<h2>Halaman Pemesanan Wisata</h2>
<?php
$currentDate = date('Y-m-d');
echo "<p>Tanggal Pemesanan Wisata: $currentDate (Otomatis oleh sistem)</p>";
?>
<form action="" method="POST">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Pemesan: </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nomor HP/Telp: </label>
        <input type="text" inputMode="numeric" class="form-control" id="exampleFormControlInput1" name="nomor" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tanggal Mulai Wisata: </label>
        <input type="date" class="form-control" id="exampleFormControlInput1" name="tanggal" required>
    </div>
    <label class="form-check-label" for="flexCheckDefault">
        Paket Wisata:
    </label>
    <select class="form-select" aria-label="Default select example" name="id_wisata">
        <option selected>Silahkan untuk memilih</option>
        <option value="1">Kawah Putih</option>
        <option value="2">Kawah Rengganis</option>
        <option value="3">Situ Patenggang</option>
        <option value="4">Perkebunan Teh Rancabali</option>
        <option value="5">Ranca Upas</option>
        <option value="6">Bukit Jamur</option>
    </select>
    <br>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Durasi Wisata: </label>
        <input type="text" input="numeric" class="form-control" id="exampleFormControlInput1" name="durasi" required>
    </div>
    <label class="form-check-label" for="flexCheckDefault">
        Tambahan:
    </label>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="300000" name="layanan[]">
        <label class="form-check-label" for="flexCheckDefault">
            Penginapan: Rp300.000
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="120000" name="layanan[]">
        <label class="form-check-label" for="flexCheckDefault">
            Transportasi: Rp120.000
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="flexCheckDefault" value="100000" name="layanan[]">
        <label class="form-check-label" for="flexCheckDefault">
            Servis/Makan: Rp100.000
        </label>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jumlah Pengunjung: </label>
        <input type="text" inputMode="numeric" class="form-control" id="exampleFormControlInput1" name="jumlah_peserta"
            required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Harga Paket Wisata: </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="harga_paket" value="<?php echo number_format($harga_paket, 0, ',', '.'); ?>" readonly>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jumlah Tagihan: </label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="jumlah_tagihan" value="<?php echo number_format($jumlah_tagihan, 0, ',', '.'); ?>" readonly>
    </div>
    <i>*Diharapkan setelah menekan tombol hitung untuk mengisi kembali data kemudian pesan</i><br>
    <button type="submit" class="btn btn-primary" name="hitung" >Hitung</button>
    <button type="submit" class="btn btn-success" name="book">Pesan</button>
    <button type="submit" class="btn btn-danger" name="clear" id="clear" onClick="clear()">Reset</button>

</form>
<!-- Form end -->
<script>
// function hitungTagihan() {
//     let durasi = parseInt(document.getElementByName('durasi')[0].value);
//     let jumlahPeserta = parseInt(document.getElementByName('jumlah_peserta')[0].value);
//     let layananCheck = document.getElementByName('layanan[]');
//     let totalLayanan = 0;
//     layananCheck.foreach(function(checkbox) {
//         if (checkbox.checked) {
//             totalLayanan += parseInt(checkbox.value);
//         }
//     });
//     let hargaPaket = durasi * totalLayanan;
//     let totalTagihan = hargaPaket * jumlahPeserta;
//     document.getElementByName('harga_paket').value = hargaPaket;
//     document.getElementByName('total_tagihan').value = totalTagihan;
// }
function clear(){
    let clear = document.getElementById('exampleFormControlInput1').value = "";
    let check = document.getElementById('flexCheckDefault').value = "";
}
</script>

<?php include("../layout/footer.php");?>