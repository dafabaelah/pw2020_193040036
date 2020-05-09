<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2c</title>
    <style>
    .bulat {
        width: 40px;
        height: 40px;
        background-color : salmon;
        text-align: center;
        line-height: 40px;
        border-radius: 50%; 
        border: 2px solid black; 
        float: left;
        margin: 1px;
    }
    .clear {
        clear: both;
    }
    </style>
</head>
<body>
    <?php
        for ($i = 1; $i <= 3; $i++){
            for($j = 1; $j <=$i; $j++){
            echo "<div class='bulat'>$i</div>";
        }
        echo "<div class='clear'></div>";
        }
    ?>
<br>
<a href="index.php">
<button type="sumbit">Beranda</button>
</a>
</body>
</html>