<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>cupcup-market</title>
    

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>CUPCUP</h3>
            </div>

            <ul class="list-unstyled components">
                <p>MARKET</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Master</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="input_barang.php">Barang</a>
                        </li>
                        <li>
                            <a href="input_satuan.php">Satuan</a>
                        </li>
                        <li>
                            <a href="input_kategori.php">Kategori</a>
                        </li>
                        <li>
                            <a href="input_pelanggan.php">Pelanggan</a>
                        </li>
                        <li>
                            <a href="input_transaksi.php">Transaksi</a>
                        </li>
                    </ul>
                </li>
               
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Tampil</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="tampil_barang.php">Barang</a>
                        </li>
                        <li>
                            <a href="tampil_satuan.php">Satuan</a>
                        </li>
                        <li>
                            <a href="tampil_kategori.php">Kategori</a>
                        </li>
                        <li>
                            <a href="tampil_pelanggan.php">Pelanggan</a>
                        </li>
                        <li>
                            <a href="tampil_transaksi.php">Transaksi</a>
                        </li>
                    </ul>
                    <li>
                    <a href="laporan_transaksi.php">Laporan Transaksi</a>
                </li>
        </nav>