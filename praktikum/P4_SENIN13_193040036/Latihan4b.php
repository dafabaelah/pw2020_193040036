<?php
$pemain = ["Mohammad salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic", "Neymar Jr"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4b</title>
</head>
<body>
    <h2>Daftar pemain bola terkenal</h2>
    <ol>
        <?php foreach ($pemain as $p) : ?>
            <li><?= $p; ?></li>
        <?php endforeach; ?>
    </ol>
    <br>

    <?php
    $pemain [] = "Luca Modric";
    $pemain [] = "Sadio Mane";
    sort($pemain);
    ?>

    <h2>Daftar pemain bola terkenal baru</h2>
    <ol>
        <?php foreach ($pemain as $p) : ?>
            <li><?= $p; ?></li>
        <?php endforeach; ?>
    </ol>

<br>
<a href="index.php">
<button type="sumbit">Beranda</button>
</a>
</body>
</html>