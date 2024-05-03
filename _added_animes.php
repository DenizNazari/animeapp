<!DOCTYPE html>
<?php 
include('baglan.php');
?>

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<html lang="en">
<head>
    <style>
        body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
    </style>



<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 300px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  height: 500px; /* Full height */

}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>



<style>
    .scale-image {
    width: 300px;
    height: 200px;
    object-fit: cover;
}





</style>


















<!-- 
<style>
    input[type='image'] {
    border: 3px dashed #999;
    cursor: move;
    display: block;
    font-size: 0px;
    filter: alpha(opacity=0);
    min-height: 160px;
    min-width: 300px;
    opacity: 1;
    position: absolute;
    right: 0;
    text-align: right;
    top: 0;
    background: transparent;
    z-index:-99999999999999;
} 
img#blah {
    display: block;
}
       

.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
    position: absolute;
    top: 83px;
    left: 50%;
    z-index: 9999;
    width:75px;
    margin-left:-50.5px;
}

#form1 div {
    position: relative;
    width: 300px;
    float: left;
    height: 170px;
}

input[type='image']:before {
    content: "Upload an Image";
    display: block;
    position: absolute;
    text-align: center;
    top: 50%;
    left: 50%;
    width: 200px;
    height: 40px;
    margin: -25px 0 0 -100px;
    font-size: 18px;
    font-weight: bold;
    color: #999;
}
</style> -->




















    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css'>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <script src="DynamicSelect.js"></script>
    <link href="DynamicSelect.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<link rel="stylesheet" href="css/dark-mode.css">
<?php 
include('nav_bar.php');
?>
<div class="container">
    <div class="main-body">
    









    <div   class="row tm-mb-90">            
            <div  class="col-xl-4 col-lg-7 col-md-6 col-sm-12 ">
                <div style="background-color:<?php echo $satir_anime['page_color_2']?>;" class="tm-bg-gray tm-video-details">

                <div class="mr-4 mb-2">
                <h3 class="tm-text-gray-dark mb-3">Choose name anime</h3>    

                            <span class="tm-text-gray-dark"> </span><input cols="40" class="tm-text-primary" id="nameAnime" value=" " >
                        </div>

                <h3 class="tm-text-gray-dark mb-3">Choose Image poster</h3>    

                <img src="sitepng\site_empty.jpg"  alt="Image" class="img-fluid"  width="250"    style="object-fit: contain;" height="250">


                <div>
                    <label class="form-label"> </label>
                    <input class="form-control" type="file" id="formFile">
                </div>

                <h3 class="tm-text-gray-dark mb-3">Choose Image banner</h3>    

                <img src="sitepng\site_empty.jpg"  alt="Image" class="img-fluid"  width="250"    style="object-fit: contain;" height="250">


                <div>
                    <label class="form-label"> </label>
                    <input class="form-control" type="file" id="formFile">
                </div>


  
                    
                </div>
            </div>
        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div style="background-color:<?php echo $satir_anime['page_color_2']?>;" class="tm-bg-gray tm-video-details">
                    <h3 class="tm-text-gray-dark mb-3">Synopsis</h3>
                    <p class="mb-4">
                        
                    
                    <form class="tm-text-primary">


                    <textarea rows="5" cols="40">

                </textarea>



                    </form>


                    </p>
                    <div>
                        <h3 class="tm-text-gray-dark mb-3">details</h3>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Synonyms:</span><form class="tm-text-primary">


                            <textarea rows="2" cols="40">
                            </textarea>

                            
                            
                            </form>
                        </div>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Japanese:</span><form class="tm-text-primary">


<textarea rows="2" cols="40">
</textarea>



</form>
                        </div>                        
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Type:</span><form class="tm-text-primary">


<textarea rows="2" cols="40">
</textarea>



</form>
                        </div>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Episodes:</span><form class="tm-text-primary">


<textarea rows="2" cols="40">
</textarea>



</form>
                        </div>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Status:</span><form class="tm-text-primary">


<textarea rows="2" cols="40">
</textarea>



</form>
                        </div>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Aired:</span><form class="tm-text-primary">


<textarea rows="2" cols="40">
</textarea>



</form>
                        </div>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Premiered:</span><form class="tm-text-primary">


<textarea rows="2" cols="40">
</textarea>



</form>
                        </div>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Broadcast:</span><form class="tm-text-primary">


<textarea rows="2" cols="40">
</textarea>



</form>
                        </div>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Producers:</span><form class="tm-text-primary">


<textarea rows="2" cols="40">
</textarea>



</form>
                        </div>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Licensors:</span><form class="tm-text-primary">


<textarea rows="2" cols="40">
</textarea>



</form>
                        </div>
                        <div class="mr-4 mb-2">
                            <span class="tm-text-gray-dark">Studios:</span><form class="tm-text-primary">


<textarea rows="2" cols="40">
</textarea>



</form>
                        </div>
                  
                    </div>
             
                </div>
       </div>
        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div style="background-color:<?php echo $satir_anime['page_color_2']?>;" class="tm-bg-gray tm-video-details">
                    <iframe width="100%" height="345" src="https://www.youtube.com/embed/<?php echo  $satir_anime['youtubelink']?>">
                    </iframe>
                    <div class="mb-4">
                        <h3 class="tm-text-gray-dark mb-3">Background</h3>
                            <p>
                            <form class="tm-text-primary"><textarea rows="5" cols="40"></textarea></form>
                            </p>
                    </div>


                    <div style="margin-top: 50px;">
                        <h3 class="tm-text-gray-dark mb-3">Themes</h3>



                        <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Enter some programming Language</label>
                                        <div class="myContainer"></div>
                                    </div>
                                    </div>
                                <input type="text" class="inputTags" hidden/>
                            </div>

                        <script>
                            $('.myContainer').TagsInput({
                        initialTags: ['c#', 'python', 'jQuery'], // allow initialization of tags
                        tagInputPlaceholder:'eg. python',
                        tagHiddenInput: $('.inputTags'),
                        tagContainerBorderColor: '#d3d3d3',
                        tagBackgroundColor: '#295070',
                        tagColor: '#9cc3db',
                        tagBorderColor: '#688eac'
                        });
                        </script>

                        <?php
                            // $sorgu_anime = mysqli_query($conn,"select * from themes where animeid='".$_animeid."'");
                            // $say_anime = mysqli_num_rows($sorgu_anime);
                            // if ( $say_anime > 0 ) {
                            //         while ( $while_anime = mysqli_fetch_array($sorgu_anime) ) {
                            ?>
                                <a href="index.php?theme=<?php echo  $while_anime['theme']?>" class="tm-text-primary mr-4 mb-2 d-inline-block"><?php echo  $while_anime['theme']?></a>
                                
                        <?php
                    //  }}
                     ?>

                    </div>

                    <div style="margin-top: 50px;">
                        <h3 class="tm-text-gray-dark mb-3">Genre</h3>                  <?php
                            $sorgu_anime = mysqli_query($conn,"select * from genres where animeid='".$_animeid."'");
                            $say_anime = mysqli_num_rows($sorgu_anime);
                            if ( $say_anime > 0 ) {
                                    while ( $while_anime = mysqli_fetch_array($sorgu_anime) ) {
                            ?>
                                <a href="index.php?theme=<?php echo  $while_anime['gener']?>" class="tm-text-primary mr-4 mb-2 d-inline-block"><?php echo  $while_anime['gener']?></a>                    
                        <?php }}?>
                    </div>






                    <div class="container justify-content-center mt-9 border-left border-right">
    <div class="d-flex justify-content-center pt-3 pb-2">



</div>



    </div>

</div>








        </div>
    </div>
</body>
</html>