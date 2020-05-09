<?php
    $pemain = [
        "Cristiano Ronaldo" => "Juventus",
        "Lionel Messi" => "Barcelona",
        "Luca Modric"=> "Real Madrid",
        "Mohammad Salah" => "Liverpool",
        "Neymar Jr" => "Paris Saint Germany",
        "Sadio Mane" => "Liverpool",
        "Zlatan Ibrahimovic" => "AC Milan"
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4c</title>
</head>
<body>
    <h2>Daftar pemain bola terkenal dan clubnya</h2>
    <table>
    <?php foreach($pemain as $p => $club) : ?>
        <tr>
            <td><b><?= $p; ?></b></td>
            <td><b>:</b></td>
            <td><?= $club; ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
<br>
<a href="index.php">
<button type="sumbit">Beranda</button>
</a>
</body>
</html>