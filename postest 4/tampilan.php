<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <div class="down">
        <table border="1">
            <h3> DAFTAR BOKINGAN </h3>
            <tr>
                <td text-align = "center">Nama Lengkap</td>
                <td text-align = "center">umur</td>
                <td text-align = "center">tanggal boking</td>
                <td text-align = "center">jenis kelamin</td>
                <td text-align = "center">metode Pembayaran</td>
                
            </tr>
            <tr>
                <td><?php echo $_POST["nama"] ?></td>
                <td><?php echo $_POST["umur"] ?></td>
                <td><?php echo $_POST["tglboking"] ?></td>
                <td><?php echo $_POST["jk"] ?></td>
                <td><?php echo $_POST["metode"] ?></td>
            </tr>
        </table>
        <br>
    </div>
    
</body>
</html>