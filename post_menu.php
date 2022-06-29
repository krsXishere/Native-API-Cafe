<?php
include("connection.php");

$nama_menu = isset($_POST["nama_menu"]) ? $_POST["nama_menu"] : "";
$kategori_menu = isset($_POST["kategori_menu"]) ? $_POST["kategori_menu"] : "";
$deskripsi_menu = isset($_POST["deskripsi_menu"]) ? $_POST["deskripsi_menu"] : "";


$sql = "INSERT into `menu` (`nama_menu`, `kategori_menu`, `deskripsi_menu`) values('" . $nama_menu . "', '" . $kategori_menu . "', '" . $deskripsi_menu . "');";
$query = mysqli_query($conn, $sql);

if ($query) {
    $msg = "Berhasil menambahkan menu.";
    $response = array(
        'status' => 'Berhasil',
        'data' => $msg,
    );
} else {
    $msg = "Gagal menambahkan menu.";
    $response = array(
        'status' => 'Gagal',
        'data' => $msg,
    );
}

echo json_encode($response);