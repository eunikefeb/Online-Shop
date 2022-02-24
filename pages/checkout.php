<?php
 session_start();
 include "koneksi.php";
 $cart=@$_SESSION['cart'];

 if(count($cart)>0){
    $tanggal_beli=date('Y-m-d',mktime(0,0,0,date('m'),(date('d')),date('Y')));
    mysqli_query($koneksi,"insert into pembelian_produk (id_pelanggan,tanggal_beli) value('".$_SESSION['id_pelanggan']."','".date('Y-m-d')."','".$tanggal_beli."')");

    $id=mysqli_insert_id($koneksi);
    foreach ($cart as $key_produk => $val_produk) {
        mysqli_query($koneksi,"insert into detail_pembelian_produk (id_pembelian_produk,id_produk,qty) value('".$id."','".$val_produk['id_produk']."','".$val_produk['qty']."')");
    }
    unset($_SESSION['cart']);
    echo '<script>alert("Anda berhasil membeli produk");location.href="histori_pembelian.php"</script>';
 }
 ?>
 