<?php
    include "koneksi.php";
    if($_POST['simpan']){
    $nama_produk=$_POST['nama_produk'];
    $deskripsi=$_POST['deskripsi'];
    $harga=$_POST['harga'];

    //upload foto
    $ekstensi = array("png","jpg","jpeg");
    $namafile = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];
    // $tipe_file = pathinfo($namafile, PATHINFO_EXSTENSION);
    $ukuran = $_FILES['file']['size'];

    if(empty($nama_produk)){ 
        echo "<script>alert('nama produk tidak boleh kosong');location.href='tambah_produk.php';</script>";
    } 
        else{
            // if(!in_array($tipe_file, $ekstensi)){
            //     header("location:tambah_produk.php?alert=gagal_ekstensi");
            // }else{
                if($ukuran <1044070){
                    move_uploaded_file($tmp, 'assets/foto_produk/'.$namafile);
                    $query = mysqli_query($koneksi, "INSERT INTO produk (nama_produk,deskripsi,harga,foto_produk) VALUE ('".$nama_produk."', '".$deskripsi."', '".$harga."','".$namafile."')");
                    if($query){
                        echo "<script>alert('Sukses menambahkan produk');location.href='tampil_produk.php';</script>";  
                    }
                    else{
                        echo "<script>alert('Gagal upload gambar');location.href='tambah_produk.php';</script>";
                    }
                }else{
                    echo "<script>alert('Ukuran file terlalu besar');location.href='tambah_produk.php';</script>";
                }
            // }    
        }
    }
?>