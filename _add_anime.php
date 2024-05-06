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




<script>
    function postAnime() {
        var  name = document.getElementsByName("name")[0].value;
        var  synonyms = document.getElementsByName("synonyms")[0].value;
        var  japanese = document.getElementsByName("japanese")[0].value;
        var  type = document.getElementsByName("type")[0].value;
        var  episodes = document.getElementsByName("episodes")[0].value;
        var  status = document.getElementsByName("status")[0].value;
        var  aired = document.getElementsByName("aired")[0].value;
        var  premiered = document.getElementsByName("premiered")[0].value;
        var   broadcast = document.getElementsByName("broadcast")[0].value;
        var   producers = document.getElementsByName("producers")[0].value;
        var   licensors = document.getElementsByName("licensors")[0].value;
        var   studios = document.getElementsByName("studios")[0].value;
        var   youtube = document.getElementsByName("youtube")[0].value;
        var   background = document.getElementsByName("background")[0].value;

        if (name !== "" && type !== "" && episodes !== "" && status !== "" && aired !== "" && premiered !== "" && broadcast !== "" && producers !== "" && licensors !== "" && studios !== "" && youtube !== "" && background !== "") {
            var xhttp = new XMLHttpRequest();
            xhttp.open("POST", "add_anime_post.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            xhttp.onreadystatechange = function () {
                if (xhttp.readyState === 4 && xhttp.status === 200) {
                    console.log(xhttp.responseText);

                    var commentsContainer = document.getElementById("commentsContainer");
                    var newCommentDiv = document.createElement("div");
                    newCommentDiv.innerHTML = xhttp.responseText;
                    commentsContainer.appendChild(newCommentDiv);

                    commentInput.value = "";
                }
            };
            var params = "comment=" + encodeURIComponent(comment) + "&animeid=" + encodeURIComponent(animeid);
            xhttp.send(params);
        }
    }
</script>



        <form  class="tm-text-primary">

                    <div   class="row tm-mb-90">            
                                                <div  class="col-xl-4 col-lg-7 col-md-6 col-sm-12 ">
                                                    <div  class="tm-bg-gray tm-video-details">

                                                    <div class="mr-4 mb-2">
                                                    <h3 class="tm-text-gray-dark mb-3">Choose name anime</h3>    

                                                                <span class="tm-text-gray-dark"> </span><input  name="name" type="text" cols="40" class="tm-text-primary" id="nameAnime" value=" " >
                                                            </div>

                                     <h3 class="tm-text-gray-dark mb-3">Choose Image poster</h3>

                                    <img id="posterImage" src="sitepng\site_empty.jpg" alt="Image" class="img-fluid" width="250" style="object-fit: contain;" height="250">

                                    <div>
                                        <label class="form-label"> </label>
                                        <input class="form-control" type="file" id="formFile" onchange="previewImage(event)">
                                    </div>

                                                    
                                    <script>
                                        function previewImage(event) {
                                            var reader = new FileReader();
                                            reader.onload = function () {
                                                var output = document.getElementById('posterImage');
                                                output.src = reader.result;
                                            }
                                            reader.readAsDataURL(event.target.files[0]);
                                        }
                                    </script>

                                                    <h3 class="tm-text-gray-dark mb-3">Choose Image banner</h3>    

                                                    <img id="posterImage_1" src="sitepng\site_empty.jpg"  alt="Image" class="img-fluid"  width="250"    style="object-fit: contain;" height="250">


                                                    <div>
                                                        <label class="form-label"> </label>
                                                        <input class="form-control" type="file" id="formFile" onchange="previewImage1(event)">
                                                    </div>
                                                   
                                <script>
                                        function previewImage1(event) {
                                            var reader = new FileReader();
                                            reader.onload = function () {
                                                var output = document.getElementById('posterImage_1');
                                                output.src = reader.result;
                                            }
                                            reader.readAsDataURL(event.target.files[0]);
                                        }
                                </script>




                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                                                                <div   class="tm-bg-gray tm-video-details">
                                                                    <h3 class="tm-text-gray-dark mb-3">Synopsis</h3>
                                                                    <p class="mb-4"><textarea name="synopsis" rows="5" cols="40"></textarea></p>
                                                                    <div>
                                                                        <h3 class="tm-text-gray-dark mb-3">details</h3>
                                                                        <div class="mr-4 mb-2">
                                                                            <span class="tm-text-gray-dark">Synonyms:</span><textarea name="synonyms" rows="2" cols="40"></textarea>
                                                                        </div>
                                                                        <div class="mr-4 mb-2">
                                                                            <span class="tm-text-gray-dark">Japanese:</span><textarea name="japanese" rows="2" cols="40"></textarea>
                                                                        </div>
                                                                        <div class="mr-4 mb-2">
                                                                            <span class="tm-text-gray-dark">Type:</span><textarea name="type" rows="2" cols="40"></textarea>
                                                                        </div>
                                                                        <div class="mr-4 mb-2">
                                                                            <span class="tm-text-gray-dark">Episodes:</span><textarea name="episodes" rows="2" cols="40"></textarea>
                                                                        </div>
                                                                        <div class="mr-4 mb-2">
                                                                            <span class="tm-text-gray-dark">Status:</span><textarea name="status" rows="2" cols="40"></textarea>
                                                                        </div>
                                                                        <div class="mr-4 mb-2">
                                                                            <span class="tm-text-gray-dark">Aired:</span><textarea name="aired" rows="2" cols="40"></textarea>
                                                                        </div>
                                                                        <div class="mr-4 mb-2">
                                                                            <span class="tm-text-gray-dark">Premiered:</span><textarea name="premiered" rows="2" cols="40"></textarea>
                                                                        </div>
                                                                        <div class="mr-4 mb-2">
                                                                            <span class="tm-text-gray-dark">Broadcast:</span><textarea name="broadcast" rows="2" cols="40"></textarea>
                                                                        </div>
                                                                        <div class="mr-4 mb-2">
                                                                            <span class="tm-text-gray-dark">Producers:</span><textarea name="producers" rows="2" cols="40"></textarea>
                                                                        </div>
                                                                        <div class="mr-4 mb-2">
                                                                            <span class="tm-text-gray-dark">Licensors:</span><textarea name="licensors" rows="2" cols="40"></textarea>
                                                                        </div>
                                                                        <div class="mr-4 mb-2">
                                                                            <span class="tm-text-gray-dark">Studios:</span><textarea name="studios" rows="2" cols="40"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                                                            <div   class="tm-bg-gray tm-video-details">
                                                            <h3 class="tm-text-gray-dark mb-3">youtube fragman link</h3>
                                                                <p class="mb-4">
                                                                <form class="tm-text-primary"><textarea name="youtube" rows="2" cols="40"></textarea></form>
                                                                </p>

                                                                <div class="mb-4">
                                                                    <h3 class="tm-text-gray-dark mb-3">Background</h3>
                                                                    <p><textarea name="background" rows="5" cols="40"></textarea></p>
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

                                                                <div style="margin-top: 50px;">
                                                                    <h3 class="tm-text-gray-dark mb-3">Genre</h3>       
                                                                        
                                                                <button   class="btn btn-primary" > Add </button>
                                                                </div>
                                                            </div>

                                                </div>
                    </div>
        </form>
    </div>
</div>

</body>
</html>