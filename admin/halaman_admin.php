<?php include ("../layout/navbar-admin.php"); ?>
<?php include("session.php")?>
<h2>Daftar Pesanan</h2>
<form action="" method="POST">
    <button class="btn btn-tertiary" type="submit" name="logout">Logout</button>
</form>
<?php
if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
}


?>
<div class="container-fluid">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No. </th>
                <th>Nama Pemesan</th>
                <th>No. Telp</th>
                <th>Jumlah Peserta</th>
                <th>Jumlah Hari</th>
                <th>Penginapan</th>
                <th>Transportasi</th>
                <th>Service/makanan</th>
                <th>ID Wisata</th>
                <th>Harga Paket</th>
                <th>Total Tagihan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <p id="demo"></p>
        <tbody>
                <?php
                $pesanan  = mysqli_query($db, "SELECT * FROM pesanan");
                $no = 1;
                foreach($pesanan as $baris){
                    echo "<tr>
                    <td>$no</td>
                    <td>".$baris['nama_pemesan']."</td>
                    <td>".$baris['nomor_hp']."</td>
                    <td>".$baris['jumlah_peserta']."</td>
                    <td>".$baris['durasi_wisata']."</td>
                    <td>".$baris['layanan_penginapan']."</td>
                    <td>".$baris['layanan_transportasi']."</td>
                    <td>".$baris['layanan_makanan']."</td>
                    <td>".$baris['id_paket_wisata']."</td>
                    <td>".$baris['harga_paket']."</td>
                    <td>".$baris['jumlah_tagihan']."</td>
                    <td>
                    <a class='btn btn-warning' href='edit.php?id=".$baris['id_pesanan']."'>Edit</a>
                    <a class='btn btn-danger' href='hapus.php?id=".$baris['id_pesanan']."'>Hapus</a>
                    </td>
                    </tr>";
                    $no++;
                }
                ?>
        </tbody>
    </table>
    <p>Total Perjalanan: <?php echo mysqli_num_rows($pesanan)?></p>
</div>
<script>
    function clear(){
        return confirm("Apakah anda yakin ingin menghapus data ini?");
    }
</script>
<?php include("../layout/footer.php"); ?>

