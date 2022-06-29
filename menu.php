<?php
include("connection.php");

$sql = "select * from menu";
$query = mysqli_query($conn, $sql);

while ($data = mysqli_fetch_array($query)) {
    $item[] = array(
        'id' => $data["id_menu"],
        'nama' => $data["nama_menu"],
        'kategori' => $data["kategori_menu"],
        'deskripsi' => $data["deskripsi_menu"],
    );
}

$response = array(
    'status' => 'OK',
    'data' => $item,
);

echo json_encode($response);