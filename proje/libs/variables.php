<?php
$title = "Popüler Kurslar";

$kategoriler = array(
    array("kategori_adi" => "Programlama", "aktif" => true),
    array("kategori_adi" => "Web Geliştirme", "aktif" => false),
    array("kategori_adi" => "Veri Analizi", "aktif" => false),
    array("kategori_adi" => "Ofis Uygulamları", "aktif" => false),
    array("kategori_adi" => "Mobil Uygulamalar", "aktif" => false),
);

$kurslar = array(
    "1" => array(
        "baslik" => "Php Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Php ile web geliştirme",
        "resim" => "img/php.jpg",
        "yayinTarihi" => "01.01.2023",
        "yorumSayisi" => 0,
        "begeniSayisi" => 200,
        "onay" => true,
    ),
    "2" => array(
        "baslik" => "Python Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Python ile Programlama",
        "resim" => "img/python.jpg",
        "yayinTarihi" => "06.07.2023",
        "yorumSayisi" => 200,
        "begeniSayisi" => 300,
        "onay" => true,
    ),

    "3" => array(
        "baslik" => "Node.js Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Node.js ile web geliştirme",
        "resim" => "img/node.jpg",
        "yayinTarihi" => "09.08.2023",
        "yorumSayisi" => 300,
        "begeniSayisi" => 0,
        "onay" => true,
    ),

    "4" => array(
        "baslik" => "Javascript Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Javascript ile web geliştirme",
        "resim" => "img/javascript.png",
        "yayinTarihi" => "09.08.2023",
        "yorumSayisi" => 100,
        "begeniSayisi" => 5,
        "onay" => false,
    ),

);
