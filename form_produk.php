<?php include('koneksi.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Produk</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
        }

        .container {
            /* Buat ketengahin. */
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .detail {
            margin-top: 60px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
<h1 style="text-align: center">Form Input Barang dan Stock Barang</h1>
<form action="simpan_produk.php" method="POST">
<div class="container">
    <table border="1" cellspacing=0 cellpadding=10>
        <!-- input kode produk -->
        <tr>
            <td width="100">
                <p>Kode Produk</p>
            </td>
            <td><input type="text" name="kode_produk"></td>
        </tr>

        <!-- input nama produk -->
        <tr>
            <td width="100">
                <p>Nama Produk</p>
            </td>
            <td><input type="text" name="nama_produk"></td>
        </tr>

        <!-- input harga produk -->
        <tr>
            <td width="100">
                <p>Harga</p>
            </td>
            <td><input type="text" name="harga_produk"></td>
        </tr>

        <!-- input satuan produk -->
        <tr>
            <td>
                <p>Satuan</p>
            </td>
            <td><select name="satuan">
                    <option value="Satuan">Pilih satuan</option>
                    <option value="Gelas">Gelas</option>
                    <option value="Piring">Piring</option>
                    <option value="Mangkok">Mangkok</option>
                </select></td>
        </tr>

        <!-- input kategori produk -->
        <tr>
            <td>
                <p>Kategori</p>
            </td>
            <td><select name="kategori">
                    <option value="Kategori">Pilih kategori</option>
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                    <option value="Snack">Snack</option>
                </select></td>
        </tr>

        <!-- input gambar -->
        <tr>
            <td>
                <p>Gambar</p>
            </td>
            <td><input type="text" name="gambar"></td>
        </tr>

        <!-- input stok barang -->
        <tr>
            <td width="100">
                <p>Stok Barang</p>
            </td>
            <td><input type="text" name="stok_produk"></td>
        </tr>

        <!-- button tambah data -->
        <tr>
            <td colspan = 2><input type="submit" value="Simpan">
            </td>
        </tr>
        </table>
        </div>
    
</form>

<br>

<?php $query = $kon->query('SELECT * FROM `data_produk`'); ?>
<div class="detail">
        <table class="myTable" border="1" cellspacing=0 cellpadding=10>
            <thead>
                <tr>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Harga Produk</th>
                    <th>Satuan</th>
                    <th>Kategori</th>
                    <th>Gambar</th>
                    <th>Stok Produk</th>
                    <th>Aksi</th>
                </tr>
            </thead>
    </div>
            <?php foreach($query as $data) : ?>
                <tr>
                    <td><?= $data['kode_produk']; ?></td>
                    <td><?= $data['nama_produk']; ?></td>
                    <td><?= $data['harga_produk']; ?></td>
                    <td><?= $data['satuan']; ?></td>
                    <td><?= $data['kategori']; ?></td>
                    <td><img src="<?= $data['gambar'] ?>" width=100></td>
                    <?php $stok_produk = $data['stok_produk']; echo ($data['stok_produk'] < 5) ? "<td style='background:red; color:#fff'>$stok_produk</td>" : "<td>$stok_produk</td>"; ?>
                    <td><a href="hapus_produk.php?id=<?=$data['kode_produk'];?>" onclick="return confirm('Ingin menghapus?')">Hapus</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>