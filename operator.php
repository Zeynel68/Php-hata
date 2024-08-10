<?php
$vize = 80;
$final = 60;


$ortalama = ($vize * 0.6) + ($final * 0.4);

if ($ortalama > 50 and $final <= 70 and $final > 50) {
    echo "Tebrikler Geçtiniz Ortalamanız : " . $ortalama;
} elseif ($ortalama > 50 and $final > 70) {
    echo "Tebrikler Geçtiniz ";
} elseif ($ortalama < 50 or $final < 50) {
    echo "Maalesef  Kaldınız Ortalamanız : " . $ortalama;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>