<?php include "header.php";
?>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                
                </div>
            </nav>
            <h4>Laporan Transaksi</h4>
            <?php include "koneksi.php"; ?>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Status</th>
                        <th>Kategori</th>
                        <th>Qty</th>
                        <th>Nama barang</th>
                        <th>Harga</th>
                        <th>Diskon</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no=1;
                        $query = "SELECT * FROM transaksi
                        INNER JOIN barang ON transaksi.id_barang = barang.nama_barang
                        INNER JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.nama_pelanggan
                        INNER Join kategori ON barang.kategori_id = kategori.nama_kategori
                        ";
                        $sql_brg = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
                        while ($data = mysqli_fetch_array($sql_brg)) {               
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?=$data['nama_pelanggan'];?></td>
                        <td><?=$data['status'];?></td>
                        <td><?=$data['nama_kategori'];?></td>
                        <td><?=$data['qty'];?></td>
                        <td><?=$data['nama_barang'];?></td>
                        <td><?=$data['harga'];?></td>
                        <td><?=$data['diskon'];?>%</td>
                        <td><?=$data['harga'] * $data['qty'] - ($data['harga'] * $data['qty'] * $data['diskon']/100);?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include "footer.php";
?>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>