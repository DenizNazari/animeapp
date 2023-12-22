<!DOCTYPE html>
<?php
include('baglan.php');

$sorgu_anime = mysqli_query($conn, "SELECT * FROM animes WHERE animecode='".$_GET['animeid']."'");

if (!$sorgu_anime) {
    die('Query failed: ' . mysqli_error($conn));
}

$satir_anime = mysqli_fetch_array($sorgu_anime);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANIBASE <?php echo $satir_anime['name']?> </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


<style>
.tm-text-primary { color: <?php echo $satir_anime['text_color']?>; }
.navbar-brand {
    color:<?php echo $satir_anime['text_color']?>;
    font-size: 1.9rem;
}
.tm-text-gray-dark{
     color: <?php echo $satir_anime['text_color_2']?>; 
}
p, .tm-text-gray{
    color:<?php echo $satir_anime['text_color']?>;

}
.addtxt {
    background-color:<?php echo $satir_anime['page_color_1']?>;

}
.form-control {
    color:<?php echo $satir_anime['text_color']?> ;
}
</style>
</head>
<body style="background-color:<?php echo $satir_anime['page_color_1']?>;">
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>
    <?php

include('nav_bar.php');
?>
    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="sitepng\banner_<?php echo $satir_anime['imgnames']?>.jpg">



        <form class="d-flex tm-search-form">
            <input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
            <button style="background-color:<?php echo $satir_anime['page_color_2']?>;" class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary"><?php echo $satir_anime['name']?></h2>
        </div>
        <div   class="row tm-mb-90">            
            <div  class="col-xl-4 col-lg-7 col-md-6 col-sm-12 ">
                <div style="background-color:<?php echo $satir_anime['page_color_2']?>;" class="tm-bg-gray tm-video-details">
                    <img src="sitepng\site_<?php echo $satir_anime['imgnames']?>.jpg" alt="Image" class="img-fluid">
                    <div style="margin-top: 50px;">
                        <h3 class="tm-text-gray-dark mb-3">Themes</h3>





                        <?php
                            $sorgu_anime = mysqli_query($conn,"select * from themes where animeid='".$_GET['animeid']."'");
                            $say_anime = mysqli_num_rows($sorgu_anime);
                            if ( $say_anime > 0 ) {
                                    while ( $while_anime = mysqli_fetch_array($sorgu_anime) ) {
                            ?>
                                <a href="index.php?theme=<?php echo  $while_anime['theme']?>" class="tm-text-primary mr-4 mb-2 d-inline-block"><?php echo  $while_anime['theme']?></a>
                                
                        <?php }}?>

                    </div>
                    <div style="margin-top: 50px;">
                        <h3 class="tm-text-gray-dark mb-3">Genre</h3>
                        <?php
                            $sorgu_anime = mysqli_query($conn,"select * from genres where animeid='".$_GET['animeid']."'");
                            $say_anime = mysqli_num_rows($sorgu_anime);
                            if ( $say_anime > 0 ) {
                                    while ( $while_anime = mysqli_fetch_array($sorgu_anime) ) {
                            ?>
                                <a href="index.php?theme=<?php echo  $while_anime['gener']?>" class="tm-text-primary mr-4 mb-2 d-inline-block"><?php echo  $while_anime['gener']?></a>                    
                        <?php }}?>
                    </div>
                    
                </div>
            </div>
        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div style="background-color:<?php echo $satir_anime['page_color_2']?>;" class="tm-bg-gray tm-video-details">
                    <h3 class="tm-text-gray-dark mb-3">Synopsis</h3>
                    <p class="mb-4">
                        
                    
                    <?php echo  $satir_anime['Synopsis']?>


                    </p>
                    <div class="mb-4">
                        <h3 class="tm-text-gray-dark mb-3">Background</h3>
                        <p>
                            
                        
    
                        
                        <?php echo  $satir_anime['Background']?>
                    
                    
                    
                    </p>
                    </div>
                    <div>
                        <h3 class="tm-text-gray-dark mb-3">details</h3>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Synonyms:</span><span class="tm-text-primary"><?php echo $satir_anime['Synonyms']?></span>
                        </div>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Japanese:</span><span class="tm-text-primary"><?php echo $satir_anime['Japanese']?> </span>
                        </div>                        
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Type:</span><span class="tm-text-primary"><?php echo $satir_anime['Type']?></span>
                        </div>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Episodes:</span><span class="tm-text-primary"><?php echo $satir_anime['Episodes']?> </span>
                        </div>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Status:</span><span class="tm-text-primary"><?php echo $satir_anime['Status']?></span>
                        </div>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Aired:</span><span class="tm-text-primary"><?php echo $satir_anime['Aired']?></span>
                        </div>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Premiered:</span><span class="tm-text-primary"><?php echo $satir_anime['Premiered']?></span>
                        </div>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Broadcast:</span><span class="tm-text-primary"><?php echo $satir_anime['Broadcast']?> </span>
                        </div>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Producers:</span><span class="tm-text-primary"><?php echo $satir_anime['Producers']?></span>
                        </div>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Licensors:</span><span class="tm-text-primary"><?php echo $satir_anime['Licensors']?></span>
                        </div>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Studios:</span><span class="tm-text-primary"><?php echo $satir_anime['Studios']?></span>
                        </div>
                        <!-- <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Duration:</span><span class="tm-text-primary"><?php echo $satir_anime['text_color']?></span>
                        </div> -->
                        <!-- <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Rating:</span><span class="tm-text-primary"><?php echo $satir_anime['text_color']?></span>
                        </div> -->

                    </div>
             
                </div>
       </div>
        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div style="background-color:<?php echo $satir_anime['page_color_2']?>;" class="tm-bg-gray tm-video-details">
                    <iframe width="100%" height="345" src="https://www.youtube.com/embed/<?php echo  $satir_anime['youtubelink']?>">
                    </iframe>
                    <!-- <iframe width="100%" height="345" src="https://www.youtube.com/embed/rZ95aZmQu_8?si=58PezuK53960h8MV">
                    </iframe> -->
                    <div class="mb-4">
                        <h3 class="tm-text-gray-dark mb-3">License</h3>
                        <p>Free for both personal and commercial use. No need to pay anything. No need to make any attribution.</p>
                    </div>


















                    <div class="container justify-content-center mt-9 border-left border-right">
                        <div class="d-flex justify-content-center pt-3 pb-2"> <input type="text" name="text" placeholder="+ Add a note" class="form-control addtxt"> </div>
                        <div class="d-flex justify-content-center py-2">
                            <div class="second py-2 px-2"> <span class="text1">Type your note, and hit enter to add it</span>
                                <div class="d-flex justify-content-between py-1 pt-2">
                                    <div><img src="https://i.imgur.com/AgAC1Is.jpg" width="18"><span class="text2">Martha</span></div>
                                    <div><span class="text3">Upvote?</span><span class="thumbup"><i class="fa fa-thumbs-o-up"></i></span><span class="text4">3</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center py-2">
                            <div class="second py-2 px-2"> <span class="text1">Type your note, and hit enter to add it</span>
                                <div class="d-flex justify-content-between py-1 pt-2">
                                    <div><img src="https://i.imgur.com/tPvlEdq.jpg" width="18"><span class="text2">Curtis</span></div>
                                    <div><span class="text3">Upvote?</span><span class="thumbup"><i class="fa fa-thumbs-o-up"></i></span><span class="text4">3</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center py-2">
                            <div class="second py-2 px-2"> <span class="text1">Type your note, and hit enter to add it</span>
                                <div class="d-flex justify-content-between py-1 pt-2">
                                    <div><img src="https://i.imgur.com/gishFbz.png" width="18" height="18"><span class="text2">Beth</span></div>
                                    <div><span class="text3 text3o">Upvoted</span><span class="thumbup"><i class="fa fa-thumbs-up thumbupo"></i></span><span class="text4 text4i">1</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center py-2">
                            <div class="second py-2 px-2"> <span class="text1">Type your note, and hit enter to add it</span>
                                <div class="d-flex justify-content-between py-1 pt-2">
                                    <div><img src="https://i.imgur.com/gishFbz.png" width="18" height="18"><span class="text2">Beth</span></div>
                                    <div><span class="text3 text3o">Upvoted</span><span class="thumbup"><i class="fa fa-thumbs-up thumbupo"></i></span><span class="text4 text4i">1</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center py-2">
                            <div class="second py-2 px-2"> <span class="text1">Type your note, and hit enter to add it</span>
                                <div class="d-flex justify-content-between py-1 pt-2">
                                    <div><img src="https://i.imgur.com/gishFbz.png" width="18" height="18"><span class="text2">Beth</span></div>
                                    <div><span class="text3 text3o">Upvoted</span><span class="thumbup"><i class="fa fa-thumbs-up thumbupo"></i></span><span class="text4 text4i">1</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center py-2 pb-3">
                            <div class="second py-2 px-2"> <span class="text1">Type your note, and hit enter to add it</span>
                                <div class="d-flex justify-content-between py-1 pt-2">
                                    <div><img src="https://i.imgur.com/tPvlEdq.jpg" width="18"><span class="text2">Curtis</span></div>
                                    <div><span class="text3">Upvote?</span><span class="thumbup"><i class="fa fa-thumbs-o-up"></i></span><span class="text4 text4o">1</span></div>
                                </div>
                            </div>
                        </div>
                    </div>












                </div>
            </div>
        </div>





        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">
                Related Photos
            </h2>
        </div>
        <div class="row mb-3 tm-gallery">
 
            




              
              <?php
                            $sorgu_anime = mysqli_query($conn,"select * from `character` where animecode='".$_GET['animeid']."'");
                            $say_anime = mysqli_num_rows($sorgu_anime);
                            if ( $say_anime > 0 ) {
                                    while ( $while_aime = mysqli_fetch_array($sorgu_anime) ) {
                            ?>
                                                          
            <div class="card">
                <div class="additional">
                  <div class="user-card">
                    <div class="level center"></div>
                    <div class="points center">
                        <?php echo  $while_aime['character japon name']?>
                    </div>
                
                    <img style="border-bottom: 1rem solid white;" src="<?php echo  $while_aime['imgsource']?>" class="image--cover">

                  </div>

                  <div class="more-info">
                        <h1><?php echo  $while_aime['charactername']?></h1>
                        <!-- <div class="coords">
                            <span>Voice Actor:</span>
                            <span>Koga, Aoi</span>
                            </div>
                        <div class="coords">
                        <span>Birthday:</span>
                        <span>January 1</span>
                        </div>
                        <div class="coords">
                        <span>Blood Type:</span>
                        <span> AB</span>
                        </div> 
                        <div class="coords">
                            <span>Height:</span>
                            <span>158 cm</span>
                            </div>  -->
                            <p><?php echo  $while_aime['details']?></p>

                    </div>
                </div>
                <div  class="general">
                  <h1><?php echo  $while_aime['charactername']?></h1>
                  <p><?php echo  $while_aime['about']?> </p>
                  <span class="more"><?php echo  $while_aime['position']?> </span>
                </div>
              </div>
            
        
                                
                        <?php }}?>



              </div>

            
        </div> <!-- row -->
    </div> <!-- container-fluid, tm-container-content -->

    <footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
        <div class="container-fluid tm-container-small">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">About Catalog-Z</h3>
                    <p>Integer ipsum odio, pharetra ac massa ac, pretium facilisis nibh. Donec lobortis consectetur molestie. Nullam nec diam dolor. Fusce quis viverra nunc, sit amet varius sapien.</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">Our Links</h3>
                    <ul class="tm-footer-links pl-0">
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Our Company</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                    <ul class="tm-social-links d-flex justify-content-end pl-0 mb-5">
                        <li class="mb-2"><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
                        <li class="mb-2"><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li class="mb-2"><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
                        <li class="mb-2"><a href="https://pinterest.com"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                    <a href="#" class="tm-text-gray text-right d-block mb-2">Terms of Use</a>
                    <a href="#" class="tm-text-gray text-right d-block">Privacy Policy</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
                    Copyright 2020 Catalog-Z Company. All rights reserved.
                </div>
                <div class="col-lg-4 col-md-5 col-12 px-5 text-right">
                    Designed by <a href="https://templatemo.com" class="tm-text-gray" rel="sponsored" target="_parent">TemplateMo</a>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>