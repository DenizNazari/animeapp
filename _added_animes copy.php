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



.bootstrap-tagsinput .tag {
   background: red;
   padding: 4px;
   font-size: 14px;
}


</style>


    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css'>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <script src="DynamicSelect.js"></script>
    <link href="DynamicSelect.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg==" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" integrity="sha512-9UR1ynHntZdqHnwXKTaOm1s6V9fExqejKvg5XMawEMToW4sSw+3jtLrYfZPijvnwnnE8Uol1O9BcAskoxgec+g==" crossorigin="anonymous"></script>



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

                <h3 class="tm-text-gray-dark mb-3">Background color picker </h3>    

                <form>
                    <label for="b_favcolor">Select your favorite color:</label>
                    <input type="color" id="b_favcolor" name="b_favcolor" value="#ff0000">
                </form>

                <div id="b_selectedColor"></div>

                <script>
                    const backgroundcolorPicker = document.getElementById("b_favcolor");
                    const backgroundselectedColorDiv = document.getElementById("b_selectedColor");

                    backgroundcolorPicker.addEventListener("input", function() {
                        const backgroundselectedColor = backgroundcolorPicker.value;
                        backgroundselectedColorDiv.innerHTML = `<p>Your selected color is: <span style="color:${backgroundselectedColor};">${backgroundselectedColor}</span></p>`;
                    });
                </script>

                    


                    <h3 class="tm-text-gray-dark mb-3">page color picker </h3>    



                    <form>
                        <label for="favcolor">Select your favorite color:</label>
                        <input type="color" id="favcolor" name="favcolor" value="#ff0000">
                    </form>

                    <div id="selectedColor"></div>

                    <script>
                        const colorPicker = document.getElementById("favcolor");
                        const selectedColorDiv = document.getElementById("selectedColor");

                        colorPicker.addEventListener("input", function() {
                            const selectedColor = colorPicker.value;
                            selectedColorDiv.innerHTML = `<p>Your selected color is: <span style="color:${selectedColor};">${selectedColor}</span></p>`;
                        });
                    </script>




                </div>
            </div>
        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div style="background-color:<?php echo $satir_anime['page_color_2']?>;" class="tm-bg-gray tm-video-details">
                    <h3 class="tm-text-gray-dark mb-3">Synopsis</h3>
                    <p class="mb-4">
                    <form class="tm-text-primary"><textarea rows="5" cols="40"></textarea></form>
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
                            <span class="tm-text-gray-dark">Aired:</span>
<form class="tm-text-primary"><textarea rows="2" cols="40"></textarea></form>
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
                <h3 class="tm-text-gray-dark mb-3">youtube fragman link</h3>
                    <p class="mb-4">
                    <form class="tm-text-primary"><textarea rows="2" cols="40"></textarea></form>
                    </p>


                    <div class="mb-4">
                        <h3 class="tm-text-gray-dark mb-3">Background</h3>
                            <p>
                            <form class="tm-text-primary"><textarea rows="5" cols="40"></textarea></form>
                            </p>
                    </div>


                    <div style="margin-top: 50px;">
                        <h3 class="tm-text-gray-dark mb-3">Themes</h3>
                        
                                        <script> 
                                        $(document).ready(function(){        
                                        var tagInputEle = $('#thema-input');
                                        tagInputEle.tagsinput();
                                        });
                                        </script>

                                        <input type="text" cols="60" class="form-control" name="city" id="thema-input" />



                    </div>

                    <div style="margin-top: 50px;">
                        <h3 class="tm-text-gray-dark mb-3">Genre</h3>       
                            
                                        <script> 
                                        $(document).ready(function(){        
                                        var tagInputEle = $('#genre-input');
                                        tagInputEle.tagsinput();
                                        });
                                        </script>

                                        <input type="text" cols="40" class="form-control" name="city" id="genre-input" />

                    </div>






                    <div class="container justify-content-center mt-9 border-left border-right">
    <div class="d-flex justify-content-center pt-3 pb-2">



    </div>

</div>








        </div>
    </div>
</body>
</html>