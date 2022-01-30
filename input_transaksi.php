<?php include "header.php";
      include "koneksi.php";
if(isset($_POST['save'])){
    $query_input=mysqli_query($koneksi,"insert into transaksi(nama_transaksi,tgl_transaksi,harga,qty,id_barang,diskon,id_pelanggan)
    values(
    '".$_POST['nama']."',
    '".$_POST['tgl']."',
    '".$_POST['harga']."',
    '".$_POST['qty']."',
    '".$_POST['id_barang']."',
    '".$_POST['diskon']."',
    '".$_POST['id_pelanggan']."')");
    
    if($query_input){
    header('location:tampil_transaksi.php');
    }else{
        echo mysqli_error();
    }
    }
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
                                <a class="nav-link" href="input_transaksi.php">Tambah</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tampil_transaksi.php">Data</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h4>Input Transaksi</h4>
            <form method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama" placeholder="nama">
                </div>
                <div class="form-group">
                    <label for="tgl">Tanggal</label>
                    <input type="date" class="form-control" id="tgl" name="tgl" aria-describedby="tgl" placeholder="tanggal">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" aria-describedby="harga" placeholder="harga">
                </div>
                <div class="form-group">
                    <label for="qty">Qty</label>
                    <input type="number" class="form-control" id="qty" name="qty" aria-describedby="qty" placeholder="qty">
                </div>
                <div class="form-group">
                    <label for="id_barang">Barang</label>
                    <select class="form-control" id="id_barang" name="id_barang" aria-describedby="id_barang">
                    <option value="">--pilih--</option>
                        <?php
                            $sql=mysqli_query($koneksi,"select * from barang") or die
                            (mysql_error($koneksi));
                            while($barang=mysqli_fetch_array($sql)){
                                echo '<option value="'.$barang['nama_barang'].'">'.$barang['nama_barang'].'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="diskon">Diskon</label>
                    <input type="text" class="form-control" id="diskon" name="diskon" aria-describedby="diskon" placeholder="diskon">
                </div>
                <div class="form-group">
                    <label for="id_pelanggan">Pelanggan</label>
                    <select class="form-control" id="id_pelanggan" name="id_pelanggan" aria-describedby="id_pelanggan">
                    <option value="">--pilih--</option>
                        <?php
                            $sql=mysqli_query($koneksi,"select * from pelanggan") or die
                            (mysql_error($koneksi));
                            while($pelanggan=mysqli_fetch_array($sql)){
                                echo '<option value="'.$pelanggan['nama_pelanggan'].'">'.$pelanggan['nama_pelanggan'].'</option>';
                            }
                        ?>
                    </select>

                </div>
               
                <button type="submit"  name="save" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <?php include "footer.php";
?>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>