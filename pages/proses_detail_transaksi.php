<?php
if($_POST){
    $id_detail_transaksi=$_POST['id_detail_transaksi'];
    $id_transaksi=$_POST['id_transaksi'];
    $id_produk=$_POST['id_produk'];
    $qty=$_POST['qty'];
    $subtotal=$_POST['subtotal'];
    if(empty($id_detail_transaksi)){
        echo "<script>alert('id detail transaksi tidak boleh kosong');location.href='transaksi.php';</script>";

    } elseif(empty($id_transaksi)){
        echo "<script>alert('id transaksi tidak boleh kosong');location.href='transaksi.php';</script>";

    } elseif(empty($id_produk)){
        echo "<script>alert('id petugas tidak boleh kosong');location.href='transaksi.php';</script>";

    } elseif(empty($qty)){
        echo "<script>alert('qty tidak boleh kosong');location.href='transaksi.php';</script>";

    } elseif(empty($subtotal)){
        echo "<script>alert('subtotal tidak boleh kosong');location.href='transaksi.php';</script>";

    } else {
        include "koneksi.php";
        $insert=mysqli_query($koneksi,"insert into transaksi (id_transaksi,id_pelanggan,id_petugas,tgl_transaksi) value ('".$id_transaksi."','".$id_pelanggan."','".$id_petugas."','".$tgl_transaksi."')") or die(mysqli_error($koneksi));
    if($insert){
        echo "<script>alert('Sukses melakukan transaksi');location.href='transaksi.php';</script>";
        } else {
            echo "<script>alert('Gagal melakukan transaksi');location.href='transaksi.php';</script>";
        }
    }
}
?>
