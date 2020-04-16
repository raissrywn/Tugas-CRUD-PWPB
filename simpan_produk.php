<?php include('koneksi.php');

$kodeproduk = $_POST['kode_produk'];
$namaproduk = $_POST['nama_produk'];
$hargaproduk = $_POST['harga_produk'];
$satuan = $_POST['satuan'];
$kategori = $_POST['kategori'];
$gambar = $_POST['gambar'];
$stokproduk = $_POST['stok_produk'];

$result = $kon->exec("INSERT INTO `data_produk` (`kode_produk`, `nama_produk`, `harga_produk`, `satuan`, `kategori`, `gambar`, `stok_produk`) VALUES ('$kodeproduk', '$namaproduk', '$hargaproduk', '$satuan', '$kategori', '$gambar', '$stokproduk')");

echo $result;
if ($result==TRUE){
    echo "Data Produk berhasil disimpan";
} else { echo "Data Produk gagal disimpan"; }
?>