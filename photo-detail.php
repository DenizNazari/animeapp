<!DOCTYPE html>

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>
<?php
$cookie_name = 'animeid';

if (!isset($_GET['animeid'])) {
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
        $_animeid = "a1";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        $_animeid = $_COOKIE[$cookie_name];
    }
} else {
    $cookie_value = $_GET['animeid'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    $_animeid = $cookie_value;
}


include('baglan.php');

$sorgu_anime = mysqli_query($conn, "SELECT * FROM animes WHERE animecode='".$_animeid."'");

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
    <link rel="stylesheet" href="css/star.css">

    <link rel="stylesheet" href="css/templatemo-style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/fe459689b4.js"></script>


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


<style>
* {
    margin: 0;
    padding: 0;
}

.rate {
    float: left;
    height: 80px; /* Adjust height to accommodate larger stars */
    padding: 0 5px;
}

.rate:not(:checked) > input {
    position: absolute;
    top: -9999px;
}

.rate:not(:checked) > label {
    float: right;
    width: 1em;
    overflow: hidden;
    white-space: nowrap;
    cursor: pointer;
    font-size: 50px; /* Increase font size for larger stars */
    color: #ccc;
}

.rate:not(:checked) > label:before {
    content: '★    ';
}

.rate > input:checked ~ label {
    color: #ffc700;
}

.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;
}

.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}



                        .rated {
                            float: left;
                            height: 80px; /* Adjust height to accommodate larger stars */
                            padding: 0 5px;
                        }

                        .rated:not(:checked) > input {
                            position: absolute;
                            top: -9999px;
                        }

                        .rated:not(:checked) > label {
                            float: right;
                            width: 1em;
                            overflow: hidden;
                            white-space: nowrap;
                            cursor: default; /* Change cursor to default */
                            font-size: 50px; /* Increase font size for larger stars */
                            color: #ccc;
                        }

                        .rated:not(:checked) > label:before {
                            content: '★    ';
                        }

                        .rated > input:checked ~ label {
                            color: #ffc700;
                        }

                        .rated:not(:checked) > label:hover,
                        .rated:not(:checked) > label:hover ~ label {
                            color: #deb217;
                        }

                        .rated > input:checked + label:hover,
                        .rated > input:checked + label:hover ~ label,
                        .rated > input:checked ~ label:hover,
                        .rated > input:checked ~ label:hover ~ label,
                        .rated > label:hover ~ input:checked ~ label {
                            color: #c59b08;
                        }








.bookmark-btn {
    height: 50px;
    width: 150px;
    display: inline-flex;
    justify-content: center;
    padding: 10px 15px;
    column-gap: 5px;
    color: #3a3d52;
    background-color: #fff;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color .25s;
    align-items: center;
    box-shadow:0 0 5px rgb(0,0,.25s);
    border: 2px solid #eee;
    font-size: 17px;
}

.bookmark-btn:hover {
    background-color: #e6e6e6;
}

.bookmark-btn:focus .fa {
    animation: ribbon .25s cubic-bezier(.77 , 0 , 0.17, 1) forwards;
}

@keyframes ribbon {
    0% {
        transform: scaleY(.1);
    }
    25% {
        transform: scaleY(.1);
    }
    100% {
        color: #ed3f40;
    }
}






</style>



</head>
<body style="background-color:<?php echo $satir_anime['page_color_1']?>;">
    <?php

include('nav_bar.php');
?>





    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="sitepng\banner_<?php echo $satir_anime['imgnames']?>.jpg">


            <form class="d-flex tm-search-form" method="GET" action="index.php">
        </form>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary"><?php echo $satir_anime['name']?></h2>



            <?php        
            $bookmark_count_query = mysqli_query($conn, "SELECT COUNT(*) FROM likes WHERE animes_id='".$satir_anime['id']."' AND rate=1");
                    if($bookmark_count_query) {
                        $bookmark_count_result = mysqli_fetch_all($bookmark_count_query);
                        $bookmark_count = $bookmark_count_result[0][0];
                    } else {
                        $bookmark_count = 0; // or handle the error in some other way
                    }
    if(isset($_SESSION['user_name'])){
        $user_id = $_SESSION['id'];

        
        $status_query = mysqli_query($conn, "SELECT rate FROM likes WHERE animes_id='".$satir_anime['id']."' AND user_id=$user_id");
        if($status_query) {
            $status_result = mysqli_fetch_all($status_query);
            $status = $status_result[0][0];
        } else {
            $status = null; // or handle the error in some other way
        }
    }
    else{
        $user_id=0;
    }
         ?> 

<form method="post"> 
    <button type="submit" name="button1" value="Button1" class="bookmark-btn <?php if(isset($status) && $status==1){echo "active";} else {echo "inactive";}?>"   <?php if($user_id==0){echo "disabled";}?>     data-id="<?php echo $satir_anime['id']; ?>">
        <i class="fa ">👍</i>
        <span data-count="<?php echo $bookmark_count?>"><?php echo $bookmark_count?></span>
    </button>
</form>



        </div>

        <script type="text/javascript">
    $(document).ready(function(){
        $('.bookmark-btn').click(function(e){
            e.preventDefault();
            var post_id = $(this).data('id');
            var status = $(this).hasClass('active') ? 0 : 1;

            $.ajax({
                type: "POST",
                url: "bookmark.php",
                data: {
                    post_id: post_id,
                    user_id: <?php echo $user_id; ?>,
                    status: status
                },
                success: function(response) {
                    var data = JSON.parse(response);
                    if(data.success) {
                        if(status == 1) {
                            $('.bookmark-btn[data-id="' + post_id + '"]').addClass('active').removeClass('inactive');
                            var count = parseInt($('.bookmark-btn[data-id="' + post_id + '"] span').data('count')) + 1;
                            $('.bookmark-btn[data-id="' + post_id + '"] span').html(count).data('count', count);
                        } else {
                            $('.bookmark-btn[data-id="' + post_id + '"]').removeClass('active').addClass('inactive');
                            var count = parseInt($('.bookmark-btn[data-id="' + post_id + '"] span').data('count')) - 1;
                            $('.bookmark-btn[data-id="' + post_id + '"] span').html(count).data('count', count);
                        }
                    }
                }
            });
        });
    });
</script>



        <div   class="row tm-mb-90">            
            <div  class="col-xl-4 col-lg-7 col-md-6 col-sm-12 ">
                <div style="background-color:<?php echo $satir_anime['page_color_2']?>;" class="tm-bg-gray tm-video-details">
                    <img src="sitepng\site_<?php echo $satir_anime['imgnames']?>.jpg" alt="Image" class="img-fluid">

                    <div style="margin-top: 50px;">
                        <h3 class="tm-text-gray-dark mb-3">Genre</h3>    
                        <div class="row col-xl-8 col-lg-10 col-md-6 col-sm-12">
                        <span class="tm-text-gray-dark">Japanese:</span>
                        <div class="rated">
                            <input type="radio" disabled id="star5" name="rate" value="5" />
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" disabled id="star4" name="rate" value="4" />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" disabled id="star3" name="rate" value="3" checked />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" disabled id="star2" name="rate" value="2" />
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" disabled id="star1" name="rate" value="1" />
                            <label for="star1" title="text">1 star</label>
                        </div>

                        </div>
                        <div class="row col-xl-8 col-lg-10 col-md-6 col-sm-12">
                        <span class="tm-text-gray-dark">Japanese:</span>

                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                        </div>
                                                                    
                    </div>
 
                    
                </div>
            </div>
        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div style="background-color:<?php echo $satir_anime['page_color_2']?>;" class="tm-bg-gray tm-video-details">
                    <h3 class="tm-text-gray-dark mb-3">Synopsis</h3>
                    <p class="mb-4">
                        
                    
                    <?php echo  $satir_anime['Synopsis']?>


                    </p>
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
                        <div style="margin-top: 50px;">
                        <h3 class="tm-text-gray-dark mb-3">Themes</h3>





                        <?php
                            $sorgu_anime = mysqli_query($conn,"select * from themes where animeid='".$_animeid."'");
                            $say_anime = mysqli_num_rows($sorgu_anime);
                            if ( $say_anime > 0 ) {
                                    while ( $while_anime = mysqli_fetch_array($sorgu_anime) ) {
                            ?>
                                <a href="index.php?theme=<?php echo  $while_anime['theme']?>" class="tm-text-primary mr-4 mb-2 d-inline-block"><?php echo  $while_anime['theme']?></a>
                                
                        <?php }}?>

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
                                <?php echo  $satir_anime['Background']?>
                            </p>
                    </div>









                    <div class="container justify-content-center mt-9 border-left border-right">
    <div class="d-flex justify-content-center pt-3 pb-2">


    <?php
if(isset($_SESSION['user_name'])) 
{
    echo '<input type="text" name="text"   placeholder="+ Add a message" class="form-control addtxt" id="commentInput"> ';

} else {
    echo '<input type="text" name="text" readonly  placeholder="First login" class="form-control addtxt" id="commentInput">';

}
?>

    </div>

    <div style="height:400px;overflow:auto;color:white;scrollbar-base-color:gold;font-family:sans-serif;padding:10px;" id="commentsContainer">
    <?php
    $sorgu_msj = mysqli_query($conn, "SELECT * FROM mesages WHERE animecode='" . $_animeid . "'");
    if ($sorgu_msj) {
        while ($while_msj = mysqli_fetch_array($sorgu_msj)) {
            $sorgu_user = mysqli_query($conn, "SELECT username FROM user WHERE usercode='" . $while_msj['userid'] . "'");
            if ($sorgu_user) {
                $say_user = mysqli_fetch_array($sorgu_user);
            } else {
                $say_user = array('username' => 'Unknown'); // Provide a default value if user not found
            }
    ?>
            <div class="d-flex justify-content-center py-2">
                <div class="second py-2 px-2">
                    <span class="text1"><?php echo $while_msj["text"] ?></span>
                    <div class="d-flex justify-content-between py-1 pt-2">
                        <div><img  src="profilpngs/<?php echo $_SESSION['user_png']?>" width="18"><span class="text2"><?php echo $say_user['username'] ?></span></div>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>
</div>



    </div>

</div>

<script>

$('.button').click(function() {
    $('.label').html(function(i, val) { 
      return (val*1) + 0.5;
    });
});



    function postComment() {
        var commentInput = document.getElementById("commentInput");
        var comment = commentInput.value.trim();
        var animeid = "<?php echo $_GET['animeid']; ?>"; 
        if (comment !== "") {
            <?php
                
                ?>
            var xhttp = new XMLHttpRequest();
            xhttp.open("POST", "submit_comment.php", true);
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

    document.getElementById("commentInput").addEventListener("keyup", function (event) {
        if (event.key === "Enter") {
            postComment();
        }
    });
</script>









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
                            $sorgu_anime = mysqli_query($conn,"select * from `character` where animecode='".$_animeid."'");
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