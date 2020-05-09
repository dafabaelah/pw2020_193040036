<?php
    $alatmusik = [
        [
            "no" => "1",
            "gambar" => '<img src="src/img/bohlam.jpg" width="300px">',
            "nama_barang" => "Bohlam",
            "penemu" =>"Humphry Davy",
            "thn_ditemukan" =>"1802",
            "asal" =>"Inggris",
        ],
        [
            "no" => "2",
            "gambar" => '<img src="src/img/telepon.jpg" width="300px">',
            "nama_barang" => "Telepon",
            "penemu" =>"Antonio Santi Giuseppe Meucci",
            "thn_ditemukan" =>"1871",
            "asal" =>"Staten Island, New York, Amerika",
        ],
        [
            "no" => "3",
            "gambar" => '<img src="src/img/radio.jpg" width="300px">',
            "nama_barang" => "Radio",
            "penemu" =>"Guglielmo Marconi",
            "thn_ditemukan" =>"1895-1909",
            "asal" =>"Bologna, Itali",
        ],
        [
            "no" => "4",
            "gambar" => '<img src="src/img/tv.jpg" width="300px">',
            "nama_barang" => "Televisi",
            "penemu" =>"John Logie Baird",
            "thn_ditemukan" =>"1923",
            "asal" =>"Helensburgh, Skotlandia",
        ],
        [
            "no" => "5",
            "gambar" => '<img src="src/img/komp1.jpg" width="300px">',
            "nama_barang" => "Komputer pertama",
            "penemu" =>"Charles Babbage",
            "thn_ditemukan" =>"1791-1871",
            "asal" =>"London",
        ],
        [
            "no" => "6",
            "gambar" => '<img src="src/img/kulkas.jpg" width="300px">',
            "nama_barang" => "Kulkas",
            "penemu" =>"Jacob Perkins dan Karl Von Linden",
            "thn_ditemukan" =>"1784",
            "asal" =>"Skotlandia",
        ],
        [
            "no" => "7",
            "gambar" => '<img src="src/img/hp.jpg" width="300px">',
            "nama_barang" => "Smartphone",
            "penemu" =>"IBM dan BellSouth",
            "thn_ditemukan" =>"1990",
            "asal" =>"Las Vegas, Amerika Serikat",
        ],
        [
            "no" => "8",
            "gambar" => '<img src="src/img/kipas.jpeg" width="300px">',
            "nama_barang" => "Kipas angin",
            "penemu" =>"Schuyler Skaats Wheeler",
            "thn_ditemukan" =>"1882",
            "asal" =>"Amerika",
        ],
        [
            "no" => "9",
            "gambar" => '<img src="src/img/mesincuci.jpg" width="300px">',
            "nama_barang" => "Mesin Cuci",
            "penemu" =>"Jacob Christian Schäffer",
            "thn_ditemukan" =>"1797",
            "asal" =>"Jerman",
        ],
        [
            "no" => "10",
            "gambar" => '<img src="src/img/vacuum.jpg" width="300px">',
            "nama_barang" => "vacuum cleaner",
            "penemu" =>"James Murray Spangler",
            "thn_ditemukan" =>"1907",
            "asal" =>"Amerika",
        ],
        [
            "no" => "11",
            "gambar" => '<img src="src/img/laptop.jpg" width="300px">',
            "nama_barang" => "Laptop",
            "penemu" =>"Adam Osborne",
            "thn_ditemukan" =>"1961",
            "asal" =>"Inggris",
        ]
    ]
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
</head>
<body>
    <h1><style>h1 { color: salmon; text-align: center;}</style>Daftar Barang Elektronik</h1>
    <table border = 1; cellpadding = 10; cellspacing=0; align=center> 
         <tr bgcolor=grey>
            <th>Nomer</th>
            <th>Gambar</th>
            <th>Nama Barang Elektronik</th>
            <th>Nama Penemu</th>
            <th>Tahun Ditemukan</th>
            <th>Asal</th>
        </tr>
            
        <?php
            foreach ($alatmusik as $a){
            
                echo"
                <tr>
                    <td align=center> $a[no]. </td>
                    <td> $a[gambar] </td>
                    <td align=center> $a[nama_barang] </td>
                    <td align=center> $a[penemu] </td>
                    <td align=center> $a[thn_ditemukan] </td>
                    <td align=center> $a[asal] </td>
                </tr>";
                }
        ?>
     </table>

<br>
<a href="index.php">
<button type="sumbit">Beranda</button>
</a>
</body>
</html> 