<?php 
    $a = [
        [
            "no" => "1",
            "nama" =>"Cristiano Ronaldo",
            "club" =>"Juventus",
            "main" => "100",
            "gol" => "76",
            "assist" => "30"
        ],
        [
            "no" => "2",
            "nama" =>"Lionel Messi",
            "club" =>"Barcalona",
            "main" => "120",
            "gol" => "80",
            "assist" => "12"
        ],
        [
            "no" => "3",
            "nama" =>"Luca Modric",
            "club" =>"Real Madrid",
            "main" => "87",
            "gol" => "12",
            "assist" => "48"
        ],
        [
            "no" => "4",
            "nama" =>"Mohammad Salah",
            "club" =>"Liverpool",
            "main" => "90",
            "gol" => "103",
            "assist" => "8"
        ],
        [
            "no" => "5",
            "nama" =>"Neymar Jr ",
            "club" =>"Paris Saint Germain",
            "main" => "109",
            "gol" => "56",
            "assist" => "15"
        ],
        [
            "no" => "6",
            "nama" => "Stadio Mane",
            "club" =>"Liverpool",
            "main" => "63",
            "gol" => "30",
            "assist" => "70"
        ],
        [
            "no" => "7",
            "nama" =>"Zlatan Ibrahimovic",
            "club" =>"AC Milan",
            "main" => "100",
            "gol" => "10",
            "assist" => "12"
        ]
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4d</title>
</head>
<body>
    <table border = "1"; cellpadding = "8"; cellspacing= "0"> 
         <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>CLUB</th>
            <th>MAIN</th>
            <th>GOL</th>
            <th>ASSIST</th>
        </tr>
            
        <?php
            foreach ($a as $nama){
            
                echo"
                <tr>
                    <td> $nama[no] </td>
                    <td> $nama[nama] </td>
                    <td> $nama[club] </td>
                    <td> $nama[main] </td>
                    <td> $nama[gol] </td>
                    <td> $nama[assist] </td>
                </tr>"; 
                } 
        ?>
        <?php
            $main = 0;
            $gol = 0;
            $assist = 0;
            foreach ($a as $total) {
                $main += $total['main'];
                $gol += $total['gol'];
                $assist += $total['assist'];

            };
            echo "<tr>
            <td>#</td>
            <th colspan = '2';> Jumlah </th>
            <td> $main </td>
            <td> $gol </td>
            <td> $assist </td>
            </tr>";
        ?>
     </table>

<br>
<a href="index.php">
<button type="sumbit">Beranda</button>
</a>
</body>
</html> 