<?php

function kursEkle(&$kurslar, string $baslik, string $altbaslik, string $resim, string $yayinTarihi, int $yorumSayisi, int $begeniSayisi, bool $onay,)
{
    $yeniKurs[count($kurslar) + 1] = array(
        "baslik" => $baslik,
        "altBaslik" => $altbaslik,
        "resim" => $resim,
        "yayinTarihi" => $yayinTarihi,
        "yorumSayisi" => $yorumSayisi,
        "begeniSayisi" => $begeniSayisi,
        "onay" => $onay
    );
    $kurslar = array_merge($kurslar, $yeniKurs);
}


kursEkle($kurslar, "Html/Css Kursu", "Sıfırdan ileri seviye Html/Css öğrenme", "img/html.jpg", "14.07.2024", 450, 800, false);
kursEkle($kurslar, "Java Kursu", "Sıfırdan ileri seviye Java ile web geliştirme", "img/java.png", "10.08.2024", 0, 0, false);
