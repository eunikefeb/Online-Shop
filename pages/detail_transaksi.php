<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <title></title>
    </head>
    <body>
        <br> <h3 align="center">Detail Transaksi</h3> <br>
        <form action="proses_detail_transaksi.php" method="post">
            Id Detail Transaksi :
            <input type="text" name="id_detail_transaksi" value="" class="form-control">
            Id Transaksi :
            <input type="text" name="id_transaksi" value="" class="form-control">
            Id Produk :
            <input type="text" name="id_produk" value="" class="form-control">
            Qty :
            <input type="text" name="qty" value="" class="form-control">
            Subtotal :
            <input type="text" name="subtotal" value="" class="form-control">
            <br>
            <input type="submit" name="simpan" value="Simpan Detail Transaksi"class="btn btn-primary">
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </body>
</html>