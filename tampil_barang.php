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
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="input_barang.php">Tambah</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tampil_barang.php">Data</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
           <h4>Barang</h4>
            <?php include "koneksi.php"; ?>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Satuan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no=1;
                        $query = "SELECT * FROM barang INNER JOIN kategori ON barang.kategori_id = kategori.nama_kategori
                        INNER JOIN satuan ON barang.satuan_id = satuan.nama_satuan
		                ";
		                $sql_brg = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
		                while ($data = mysqli_fetch_array($sql_brg)) {                
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?=$data['nama_barang'];?></td>
                        <td><?=$data['nama_kategori'];?></td>
                        <td><?=$data['nama_satuan'];?></td>
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