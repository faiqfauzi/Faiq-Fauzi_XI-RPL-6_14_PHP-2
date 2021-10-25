<?php
    include './koneksi.php';

    $id_siswa = $_POST['id_siswa'];
    $nis = $_POST['nis'];
    $nama_siswa = $_POST['nama_siswa'];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $id_jurusan = $_POST['id_jurusan'];
    $nama_jurusan = $_POST['nama_jurusan'];

    $sql = "INSERT INTO BUKU (id_siswa, nis, nama_siswa, alamat, jenis_kelamin, id_jurusan, nama_jurusan) VALUES ('$id_siswa','$nis','$nama_siswa','$alamat','$jenis_kelamin','$id_jurusan','$nama_jurusan')";
    if($conn->query($sql) === TRUE){
        echo "simpan berhasil <br>";
        echo "<a href='formulir.php'>Kembali</a><br>";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>