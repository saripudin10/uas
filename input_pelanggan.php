<?php include "header.php";
      include "koneksi.php";
if(isset($_POST['save'])){
    $query_input=mysqli_query($koneksi,"insert into pelanggan(nama_pelanggan,no_tlp,status)
    values(
    '".$_POST['nama']."',
    '".$_POST['no_tlp']."',
    '".$_POST['status']."')");
    
    if($query_input){
    header('location:tampil_pelanggan.php');
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
                                <a class="nav-link" href="input_pelanggan.php">Tambah</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tampil_pelanggan.php">Data</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h4>Input Pelanggan</h4>
            <form method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama" placeholder="nama">
                </div>
                <div class="form-group">
                    <label for="no_tlp">No Telepon</label>
                    <input type="varchar" class="form-control" id="no_tlp" name="no_tlp" aria-describedby="no_tlp" placeholder="no telepon">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status" aria-describedby="status">
                        <option value="">--pilih--</option>
                        <option value="member">Member</option>
                        <option value="non">Non Member</option>
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