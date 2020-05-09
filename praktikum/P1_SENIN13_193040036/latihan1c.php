<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .bulat{
        width: 50px;
        height: 50px;
        background-color : salmon;
        text-align: center;
        float: left;
        margin: 1px;
        line-height: 40px;
        border-radius: 50%; 
        border: 2px solid black; 
    }
    .clear{
        clear: both;
    }
    </style>
</head>
<body>
<?php
$a = "A"; 
$b = "B"; 
$c = "C";

    echo '<div class="bulat">'.$a.'</div>';
    echo '<div class="clear"></div>';
    echo '<div class="bulat">'.$b.'</div>';
    echo '<div class="bulat">'.$b.'</div>';
    echo '<div class="clear"></div>';
    echo '<div class="bulat">'.$c.'</div>';
    echo '<div class="bulat">'.$c.'</div>';
    echo '<div class="bulat">'.$c.'</div>';
    echo '<div class="clear"></div>';
?>
</body>
</html>