<?php
include("connection.php");

$id = $_GET["id"];
$nama_menu = isset($_POST["nama_menu"]) ? $_POST["nama_menu"] : "";
$kategori_menu = isset($_POST["kategori_menu"]) ? $_POST["kategori_menu"] : "";
$deskripsi_menu = isset($_POST["deskripsi_menu"]) ? $_POST["deskripsi_menu"] : "";

$sql = "UPDATE `menu` SET `nama_menu` = '" . $nama_menu . "', `kategori_menu` = '" . $kategori_menu . "', `deskripsi_menu` = '" . $deskripsi_menu . "' WHERE `menu`.`id_menu` = " . $id . ";";
$query = mysqli_query($conn, $sql);

if ($query) {
    $msg = "Berhasil mengubah menu.";
    $response = array(
        'status' => 'Berhasil',
        'data' => $msg,
    );
} else {
    $msg = "Gagal mengubah menu.";
    $response = array(
        'status' => 'Gagal',
        'data' => $msg,
    );
}

echo json_encode($response);