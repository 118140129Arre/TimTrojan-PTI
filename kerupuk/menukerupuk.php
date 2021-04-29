<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
        <title> Menu Kerupuk</title>
        <link rel="stylesheet" type="text/css" href="../css/menu.css">
    </head>


    <body data-rsssl=1>
    <?php session_start();?>
    <h2>Pilih Tugas</h2><br><br><br>

        <center>
        <table>
            <tr>
                <th>
                    <h3>Tambah Kerupuk</h3>
                    <a href="pilih+kerupuk.php"><img src="../gambar/plus.png" class="img-fluid"></a> 
                </th>
                    
                <th>
                &nbsp;
                </th>

                <th>
                    <h3>Kurang Kerupuk</h3>
                    <a href="pilih-kerupuk.php"><img src="../gambar/min.png" class="img-fluid"></a> 
                </th>
            </tr>

            <tr>
                <th>
                    <br>
                </th>
            </tr>

            <tr>
                </th>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <th>

                <th>
                    <h3>Lihat Riwayat</h3>
                    <a href="../kerupuk/riwayatkerupuk.php"><img src="../gambar/riwayat.png" class="img-fluid" ></a>
                </th>
            </tr>
        </table>
        </center>
        <br><br><br> 
        

        
        
        

        <form action="../awal/halaman_admin.php" method="post">
    	<input type="submit" class="btn btn-primary rounded mx-auto d-block btn-lg" value="Kembali">
	    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    </body>

</html>