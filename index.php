<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <label for="">Isi tanggal lahir kalian</label>
            <input type="text" name="tanggal" id="tanggal" placeholder="date/month/year" required>
            <button type="submit">submit</button>
        </form>
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $tanggal = $_POST["tanggal"];
                if(!empty ($tanggal)){
                    $namaHari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
                    $hari = date("w",strtotime($tanggal));
                    $hariIni = $namaHari[$hari];
                    echo "<br>anda lahir pada hari $hariIni";
                }else{
                    echo "<br>tanggal harus di isi";
                }
            }
        ?>
    </div>
</body>
</html>
