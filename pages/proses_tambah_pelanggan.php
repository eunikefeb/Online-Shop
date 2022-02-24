<?php
if($_POST){
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telp= $_POST['telp'];
    $id_pelanggan=$_POST['id_pelanggan'];
    $username=$_POST['username'];
    $password= $_POST['password'];
    if(empty($nama)){
        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";

    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";

    } elseif(empty($telp)){
        echo "<script>alert('telp tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";

    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
        
    } else {
        include "koneksi.php";
        $insert=mysqli_query($koneksi,"insert into pelanggan (id_pelanggan,nama,alamat,telp,username,password) value ('".$id_pelanggan."','".$nama."','".$alamat."','".$telp."','".$username."','".md5($password)."')") or die(mysqli_error($koneksi));
    if($insert){
        echo "<script>alert('Sukses menambahkan pelanggan');location.href='tambah_pelanggan.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pelanggan');location.href='tambah_pelanggan.php';</script>";
        }
    }
}
?>