<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
    <link rel="stylesheet" href="upload.css">
</head>
<body>
    <div class="down">
        <div class="tambah">
            <h3>CATALOG</h3>
        </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <p>Tanggal upload : <?=date("d-m-Y")?></p>

                <label for="">Nama Catalog :</label>
                <input type="text" name="nama"> <br><br>

                <label for="">Upload Gambar : </label>
                <input type="file" name="foto"> <br><br>
                <div class="submit">
                    <input type="hidden" name="upload" value=<?=date("d-m-Y")?>>
                    <input type="submit" name="submit">
                </div>
            </form>
    </div>
</body>
</html>

<?php
    require 'config2.php';

    if(isset($_POST['submit'])){
        $upload= $_POST['upload'];
        $nama = $_POST['nama'];

        $foto = $_FILES['foto']['name'];

        // Memisahkan nama file dengan tipe file
        $x = explode('.',$foto);
        $ekstensi = strtolower(end($x));
        $foto_baru = "$nama.$ekstensi";

        // $ukuran = $_FILES['gambar']['size'];

        $tmp = $_FILES['foto']['tmp_name'];

        if(move_uploaded_file($tmp, "foto/$foto_baru")){

            $query = "INSERT INTO contoh (upload, foto) VALUES ('$upload', '$foto_baru')";
            $result = $db->query($query);
    
            if($result){
                header("Location:catalog.php");
            }else{
                echo "gagal kirim";
            }
        }
    }

?>