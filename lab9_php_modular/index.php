<?php
include("koneksi.php");

// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);

?>

<?php require("header_database.php"); ?>

    <div class="content">
        <h2>Data Barang</h2>
            <table>
            <tr>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Harga Jual</th>
                <th>Harga Beli</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            <?php if ($result): ?>
            <?php while ($row= mysqli_fetch_array($result)) : ?>
            <tr>
                <td><img src="gambar/<?=$row['gambar'];?>" alt="<?=$row['nama'];?>"></td>
                <td><?=$row['nama'];?></td>
                <td><?=$row['kategori'];?></td>
                <td><?=$row['harga_beli'];?></td>
                <td><?=$row['harga_jual'];?></td>
                <td><?=$row['stok'];?></td>
                <td><?=$row['id_barang'];?></td>
            </tr>
            <?php endwhile; else: ?>
            <tr>
                <td colspan="7">Belum Ada Data</td>
            </tr>
            <?php endif; ?>
            </table>
        </div>
    </div>

<?php require("footer_database.php"); ?>