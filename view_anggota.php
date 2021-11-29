<h3> DATA ANGGOTA </h3>
<?php
include ("koneksi.php");
$query_view = mysqli_query($koneksi,"select * from anggota");
?>
    </br>
    <a href="input_anggota.php" class="btn btn-danger">Tambah Anggota</a>
    <table class="table table-bordered" border="1">
        <td>no</td>
        <td>nama</td>
        <td>alamat</td>
        <td>no tlp</td>
        <td colspan="4">Aksi</td>
    </tr>
    <?php
$no=1;
while ($tampil = mysqli_fetch_array($query_view)){ ?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $tampil['nama'];?></td>
        <td><?php echo $tampil['alamat'];?></td>
        <td><?php echo $tampil['no_tlp'];?></td>
        <td><a href="edit_anggota.php?id_anggota=<?php echo $tampil['id_anggota'];?>">Edit</a></td>
        <td><a href="hapus_anggota.php?id_anggota=<?php echo $tampil['id_anggota'];?>">Hapus</a></td>
    </tr>
    <?php }?>
</table>
