<?php include "header.php";
      include "koneksi.php";
if(isset($_POST['save'])){
    $query_input=mysqli_query($koneksi,"insert into barang(nama_barang,kategori_id,satuan_id)
    values(
    '".$_POST['nama']."',
    '".$_POST['ktr']."',
    '".$_POST['satuan']."')");
    
    if($query_input){
    header('location:tampil_barang.php');
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
                                <a class="nav-link" href="input_barang.php">Tambah</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tampil_barang.php">Data</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h4>Input Barang</h4>
            <form method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama" placeholder="nama">
                </div>
                <div class="form-group">
                    <label for="ktr">Kategori</label>
                    <select class="form-control" id="ktr" name="ktr" aria-describedby="ktr">
                        <option value="">--pilih--</option>
                        <?php
                            $sql=mysqli_query($koneksi,"select * from kategori") or die
                            (mysql_error($koneksi));
                            while($kategori=mysqli_fetch_array($sql)){
                                echo '<option value="'.$kategori['nama_kategori'].'">'.$kategori['nama_kategori'].'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="satuan">Satuan</label>
                    <select class="form-control" id="satuan" name="satuan" aria-describedby="satuan">
                    <option value="">--pilih--</option>
                        <?php
                            $sql=mysqli_query($koneksi,"select * from satuan") or die
                            (mysql_error($koneksi));
                            while($satuan=mysqli_fetch_array($sql)){
                                echo '<option value="'.$satuan['nama_satuan'].'">'.$satuan['nama_satuan'].'</option>';
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