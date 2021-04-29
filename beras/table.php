<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta http-equiv=refresh content=10;url=tambah1.php> -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<!-- favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
<link rel="manifest" href="../favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" type="text/css" href="../css/algoritma.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script  src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <title>Penambahan|Beras</title>
        
    </head>
    <body>
<?php
include "../koneksi/koneksi.php";
$query = mysqli_query($koneksi,"SELECT * FROM masukberas ORDER BY id_beras ASC");
?>
<form action="" method="POST">
    <table border="4" id="example" class="table table-bordered border-primary table-responsive-sm table-sm">
    <thead>
        <tr >
            <th >No</th>
            <th >Inp</th>
            <th >Jenis</th>
            <th >Merek</th>
            <th >Warna</th>
            <th >Tanggal</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
        
            $no = 0 ;
            
            while($data = mysqli_fetch_array($query)){
            $no++;
        ?>
        
        <tr >
            <td ><?php echo $no ?></td>
            <td ><?php echo $data["beras_masuk"];?></td>
            <td ><?php echo $data["jenis_beras"];?></td>
            <td ><?php echo $data["merek"];?></td>
            <td ><?php echo $data["warna"];?></td>
            <td ><?php echo $data["tanggal_beras_masuk"];?></td>
            <td ><a href="bhapus.php?no= <?php echo $data["no"];?>">Hapus</a></td>
        </tr>
        <?php  } ?>
        <?php } ?>
        </tbody>
    </table>
</form>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );</script>

</body>
</html>