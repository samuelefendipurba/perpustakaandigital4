<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container" style="margin-top: 5rem;">
    <div class="card">
        <div class="row m-4">
            <?php
            include '../../koneksi/koneksi.php';
            if (isset($_GET['idbuku'])) {
                $idbuku = $_GET['idbuku'];
            } else {
                die("Error, Data Tidak Ditemukan");
            }
            $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE idbuku='$idbuku' ");
            $result = mysqli_fetch_array($query);
            ?>
            <div class="col text-center">
                <img src="../../asset/img/<?php echo $result['foto']; ?>" height="500" alt="">
            </div>
            <div class="col" style="margin-top:5rem;">
                <h2>Edit Buku</h2>
                <form action="proses_edit.php" method="post">                    
                    <label for="penulis">Penulis:</label>
                    <input type="text" name="penulis" id="penulis" value="<?php echo $result['penulis']; ?>" required><br>
                    
                    <label for="penerbit">Penerbit:</label>
                    <input type="text" name="penerbit" id="penerbit" value="<?php echo $result['penerbit']; ?>" required><br>
                    
                    <label for="tahunterbit">Tahun Terbit:</label>
                    <input type="text" name="tahunterbit" id="tahunterbit" value="<?php echo $result['tahunterbit']; ?>" required><br>
                    
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
                <a href="../buku.php" class="btn btn-danger mt-2">Kembali</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
