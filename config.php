<?php 

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "lgn");

// ambil data
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}   

// tambah data
function tambah($data) {
    global $conn;

    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $dosen = $_POST["dosen"];
    $status = $_POST["status"];
    $ket = $_POST["ket"];

    $query = "INSERT INTO isi VALUES ('', '$nim', '$nama', '$dosen', '$status', '$ket')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// hapus data
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM isi WHERE id = $id");
    return mysqli_affected_rows($conn);
}

// ubah data
function ubah($data){
    global $conn;

    $id = $_POST["id"];
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $dosen = $_POST["dosen"];
    $status = $_POST["status"];
    $ket = $_POST["ket"];

    $query = "UPDATE isi SET nim = '$nim', nama = '$nama', dosen = '$dosen', status = '$status', ket = '$ket' WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>