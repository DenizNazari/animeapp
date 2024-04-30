<!DOCTYPE html>
<?php
session_start();

include('baglan.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANIBASE</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style>
    .scale-image {
    width: 420px;
    height: 580px;
    object-fit: cover;
}

</style>

</head>

<body>
<script>
$(document).ready(function() {
    $('#submit-form').submit(function(e) {
        e.preventDefault(); 

        var formData = $(this).serialize();

        $.ajax({
            type: 'GET',
            url: 'serch_place.php', 
            data: formData,
            success: function(response) {
                $('.tm-gallery').html(response);

                $(this)[0].reset();
            },
            error: function() {
                console.log('Error in Ajax request');
            }
        });
        $(this)[0].reset();
    });
});
</script>
<?php
include("nav_bar.php");

?>


    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img\indir.gif">
    <form class="d-flex tm-search-form" method="GET" action="index.php"  id='submit-form'>
    <input class="form-control tm-search-input" type="search" name="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success tm-search-btn" type="submit">
    <img src="anime\pngegg.png" style="width: 20px;" alt="Search Icon">
    </button>
</form>


    </div>


    <?php
if (isset($_GET['query'])) {
    $search_query = mysqli_real_escape_string($conn, $_GET['search']);
    $result = mysqli_query($conn, "SELECT * FROM animes WHERE anime_name LIKE '%$search_query%'");
} else {
    
}
?>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
        <h2  class="col-6 tm-text-primary">
        Animes:</h2>





  <script>

    $("#chkbx").click(function(){
      if($("input:checked")){
        $('body').toggleClass('bk')
      } 
    })
  </script>


        </div>
        <div class="row tm-mb-90 tm-gallery">
        
<?php
include('serch_place.php');

?>
</div>
<div class="row tm-mb-90">
<?php
include('footer.php');

?>
</div>
    
    <script src="js/plugins.js"></script>
    <script>




        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
</body>
</html>