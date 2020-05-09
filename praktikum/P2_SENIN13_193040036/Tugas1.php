<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
</head>
<body>

<?php
function tugas1($baris, $kolom) {
    $x=1;
    echo "<table align=center border=0 cellspacing=1 cellpadding=0>";
    while ($x <= $baris) {
        echo "<tr>";
        $y=1;

        while ($y <= $kolom) {
            if (($x+$y) %2 > 0)
            echo "<td width=50 height=50 bgcolor=#fa8072>
                </td>";
            else
            echo "<td width=50 height=50 bgcolor=#add8e6>
                </td>";
            $y++;
        }
        echo "</tr>";
        $x++;
    }
    echo "</table><br><br>";
}
tugas1(6,6);
?>

<br>
<a href="index.php">
<button type="sumbit">Beranda</button>
</a>
</body>
</html>