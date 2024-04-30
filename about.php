<!DOCTYPE html>
<?php
include('baglan.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog-Z About page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
<!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
</head>
<body>
    <!-- Page Loader -->
    <!-- <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div> -->
    <?php

include('nav_bar.php');
?>

    <div class="tm-hero d-flex justify-content-center align-items-center"  data-parallax="scroll" data-image-src="anime\AAA.jpg">
    <h2 style="color:azure;text-align: center; margin: 0 auto;" class="col-12 tm-text-primary">
            MATEMATİK VE BİLGİSAYAR BİLİMLERİ BÖLÜMÜ
            WEB PROGRAMLAMA DERSİ
            PROJE RAPORU
            </h2>
    </div>

    <div class="container-fluid tm-mt-60">
        <div class="row mb-4">

        </div>
        <div class="row tm-mb-74 tm-row-1640">            
            <div class="col-lg-5 col-md-6 col-12 mb-3">
                <img src="anime\image.png" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-7 col-md-6 col-12">
                <div class="tm-about-img-text">
                <h2 class="tm-text-primary mb-4">Anime Veritabanı Sitesi
</h2>
                    <p> 
                    Bu proje, anime severler için bir veritabanı sitesi oluşturmayı amaçlamaktadır. Kullanıcılar, site üzerinden anime bilgilerini arayabilir, filtreleyebilir ve detaylı bilgileri görebilirler. 
                    </p> 
                    <p>

                    </p>

                    <div class="col-md-6 col-12">
                <div class="tm-about-2-col">
                    <h2 class="tm-text-primary mb-4">
                    MySQL Veritabanı Planı
                    </h2>
                    <p class="mb-4">

                    MySQL veritabanı, anime bilgilerini ve kullanıcı bilgilerini saklamak için kullanılacaktır. Resimdeki, mevcut SQL dump dosyanızdaki tabloların genel planını verilmiştir </p>

                </div>  
                </div>                
            </div>
        </div>
        <div class="row tm-mb-50">
            <div class="col-md-6 col-12">
                <div class="tm-about-2-col">
                    <h2 class="tm-text-primary mb-4">
2. dönem hedefim
                    </h2>
                    <p class="mb-4">

                    sitede kullanıcı hesabı oluşturarak favori animelerini kaydedebilirler. kendileride anime ekleye bilicek
                    </p>
                  
                </div>                
            </div> 
            <div class="col-md-6 col-12">
                <div class="tm-about-2-col">
                    <h2 class="tm-text-primary mb-4">
                    Proje Tasarımı

                    </h2>
                    <p class="mb-4">
                    Proje tasarımı, kullanıcı dostu bir arayüz ve modern tasarım prensipleri gözetilerek geliştirilecektir. </p>
                    <p>
                    Ana sayfa, anime listesi, detaylı anime sayfaları, arama ve filtreleme seçenekleri,
                    </p>
                    <p>
                    kullanıcı profili gibi bölümler tasarlanacaktır. Site responsive olacak şekilde dizayn edilecektir. 
                    <p><a href="https://templatemo.com/live/templatemo_556_catalog_z" class="">site referensim</a>.</p>
                    </p>
                </div>                
            </div>     
        </div> <!-- row -->
        </div>
    </div> 
    <?php

include('footer.php');
?>
    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>