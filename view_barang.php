<h3>DATA BARANG</h3>  
<?php
include ("koneksi.php");
$query_view= mysqli_query($koneksi,"select * from barang");
?>
    </br>
    <a href="input_barang.php" class="btn btn-danger">Tambah Barang</a>
    <table class="table table-bordered" border="1">
    <tr>
        <td>no</td>
        <td>id_kategori</td>
        <td>nama</td>
        <td colspan="4">Aksi</td>
    </tr>
    <?php
    $no=1;
    while ($tampil = mysqli_fetch_array($query_view)){ ?>
    <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $tampil['id_kategori'];?></td>
        <td><?php echo $tampil['nama'];?></td>
        <td><a href="edit_barang.php?id_barang=<?php echo $tampil['id_barang'];?>">Edit</a></td>
        <td><a href="hapus_barang.php?id_barang=<?php echo $tampil['id_barang'];?>">Hapus</a></td>
    </tr>
<?php }?>
</table>
