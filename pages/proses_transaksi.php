<?php
if($_POST){
    $id_transaksi=$_POST['id_transaksi'];
    $id_pelanggan=$_POST['id_pelanggan'];
    $id_petugas=$_POST['id_petugas'];
    $tgl_transaksi=$_POST['tgl_transaksi'];
    if(empty($id_transaksi)){
        echo "<script>alert('id transaksi tidak boleh kosong');location.href='transaksi.php';</script>";

    } elseif(empty($id_pelanggan)){
        echo "<script>alert('id pelanggan tidak boleh kosong');location.href='transaksi.php';</script>";

    } elseif(empty($id_petugas)){
        echo "<script>alert('id petugas tidak boleh kosong');location.href='transaksi.php';</script>";

    } elseif(empty($tgl_transaksi)){
        echo "<script>alert('tgl transaksi tidak boleh kosong');location.href='transaksi.php';</script>";

    } else {
        include "to_koneksi.php";
        $insert=mysqli_query($koneksi,"insert into transaksi (id_transaksi,id_pelanggan,id_petugas,tgl_transaksi) value ('".$id_transaksi."','".$id_pelanggan."','".$id_petugas."','".$tgl_transaksi."')") or die(mysqli_error($koneksi));
    if($insert){
        echo "<script>alert('Sukses melakukan transaksi');location.href='transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal melakukan transaksi');location.href='transaksi.php';</script>";
        }
    }
}
?>