<?php
    include('koneksi.php');

    $id = $_GET['id'];

    $query = $kon->exec("DELETE FROM `data_produk` WHERE `data_produk`.`kode_produk` = '$id'");

echo $query;
if ($query==TRUE){
    echo "Data Produk berhasil dihapus";
} else { echo "Data Produk gagal dihapus"; }
?>