<?php 
include("../service/database.php");
if(isset($_GET['id'])){
    $id = $_GET['id']; 
    $query = "DELETE FROM pesanan WHERE id_pesanan=$id";
    $result = mysqli_query($db, $query);
    if($result){
        echo "<script>alert('Berhasil menghapus!')</script>";
        header('location: halaman_admin.php');
    }
}
$db->close();
?>
