<!DOCTYPE html>
<?php
include('baglan.php');
include('nav_bar.php');
?>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img\indir.gif">
        <form class="d-flex tm-search-form">
            <input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
        <h2  class="col-6 tm-text-primary">
        Animes: </h2>

        </div>
        <div class="row tm-mb-90 tm-gallery">



<?php

if (isset($_GET['theme']) && $_GET['theme']!=""&& $_GET['theme']!="all")
{
    $catagory= "  WHERE theme='".$_GET['theme']."' OR gener='".$_GET['theme']."' ";
}
else{
$catagory=" ";
    }
       

if (isset($_GET['page_no']) && $_GET['page_no']!="") {
	$page_no = $_GET['page_no'];
	} else {
		$page_no = 1;
        }
	$total_records_per_page = 4;
    $offset = ($page_no-1) * $total_records_per_page;
	$previous_page = $page_no - 1;
	$next_page = $page_no + 1;
	$adjacents = "2"; 

	$result_count = mysqli_query($conn,"SELECT DISTINCT COUNT( *) As total_records FROM animes   LEFT JOIN genres ON animes.animecode = genres.animeid   LEFT JOIN themes ON animes.animecode = themes.animeid ".$catagory." GROUP BY animes.animecode");
	$result_count = mysqli_query($conn, "SELECT COUNT(DISTINCT animes.animecode) AS total_records FROM animes LEFT JOIN genres ON animes.animecode = genres.animeid LEFT JOIN themes ON animes.animecode = themes.animeid " . $catagory);

    $total_records = mysqli_fetch_array($result_count);
	$total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
	$second_last = $total_no_of_pages - 1; // total page minus 1
    $result = mysqli_query($conn, "SELECT DISTINCT animes.*, genres.*, themes.* FROM animes LEFT JOIN genres ON animes.animecode = genres.animeid LEFT JOIN themes ON animes.animecode = themes.animeid " . $catagory ." GROUP BY animes.animecode"."LIMIT $offset, $total_records_per_page");
    $result = mysqli_query($conn, "SELECT DISTINCT animes.*, genres.*, themes.* FROM animes LEFT JOIN genres ON animes.animecode = genres.animeid LEFT JOIN themes ON animes.animecode = themes.animeid " . $catagory . " GROUP BY animes.animecode LIMIT $offset, $total_records_per_page");

    // $result = mysqli_query($conn, "SELECT DISTINCT animes.*, genres.*, themes.* FROM FROM animes   LEFT JOIN genres ON animes.animecode = genres.animeid   LEFT JOIN themes ON animes.animecode = themes.animeid ".$catagory." GROUP BY animes.animecode"." LIMIT $offset, $total_records_per_page");

    // $result = mysqli_query($conn, "SELECT DISTINCT animes.*, genres.*, themes.* FROM FROM animes   LEFT JOIN genres ON animes.animecode = genres.animeid   LEFT JOIN themes ON animes.animecode = themes.animeid ".$catagory." GROUP BY animes.animecode"." LIMIT $offset, $total_records_per_page");
    while($row = mysqli_fetch_array($result)){
?>

        
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="anime\<?php echo  $row['imgnames']?>.jpg" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2><?php echo  $row['name']?></h2>
                        <a href="photo-detail.php?animeid=<?php echo $row['animecode']?>">View more</a>
                    </figcaption>                   
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light"><?php echo  $row['adddate']?></span>
                    <span>9,906 views</span>
                </div>
            </div>  


              <?php
        }
    ?>

<!-- <div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div> -->



        </div> <!-- row -->
        <div class="row tm-mb-90">
            <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">








            <a href="?theme=<?php echo isset($_GET['theme']) ? $_GET['theme'] : ''; ?>&page_no=<?php echo ($page_no > 1) ? $previous_page : $page_no; ?>" class="btn btn-primary tm-btn-prev mb-2 <?php if($page_no <= 1){ echo 'disabled'; } ?>">Previous</a>

            <!-- <a  href="<?php if (isset($_GET['theme']) && $_GET['theme']!=""){echo "?";}else {echo "?theme=".$_GET['theme']."&";}?><?php if($page_no > 1){ echo "page_no='$previous_page'"; } ?>"    class="btn btn-primary tm-btn-prev mb-2 <?php if($page_no <= 1){ echo "class='disabled'"; } ?> ">Previous</a> -->
                <div class="tm-paging d-flex">

                    <?php if (isset($_GET['theme']) && $_GET['theme']!=""){$catagory= "?theme=".$_GET['theme']."&";}else {$catagory="?";}

                                            if ($total_no_of_pages <= 10){  	 
                                                for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
                                                    if ($counter == $page_no) {
                                                echo "<a class='active  tm-paging-link'>$counter</a>";	
                                                        }else{
                                                echo "<a class=' tm-paging-link' href='".$catagory."page_no=$counter'>$counter</a>";
                                                        }
                                                }
                                            }
                                            elseif($total_no_of_pages > 10){
                                                
                                            if($page_no <= 4) {			
                                            for ($counter = 1; $counter < 8; $counter++){		 
                                                    if ($counter == $page_no) {
                                                        echo "<a class='active  tm-paging-link'>$counter</a>";	
                                                    }else{
                                                         echo "<a class=' tm-paging-link' href='".$catagory."page_no=$counter'>$counter</a>";
                                                    }
                                                }
                                                echo "<a  class='tm-paging-link'>...</a>";
                                                echo "<a class='tm-paging-link' href='".$catagory."page_no=$second_last'>$second_last</a>";
                                                echo "<a class='tm-paging-link' href='".$catagory."page_no=$total_no_of_pages'>$total_no_of_pages</a>";
                                                }

                                            elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
                                                echo "<a  class='tm-paging-link' href='".$catagory."page_no=1'>1</a>";
                                                echo "<a  class='tm-paging-link' href='".$catagory."page_no=2'>2</a>";
                                                echo "<a class='tm-paging-link'>...</a>";
                                                for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
                                                if ($counter == $page_no) {
                                                echo "<a class='active tm-paging-link'>$counter</a>";	
                                                        }else{
                                                echo "<a  class='tm-paging-link' href='".$catagory."page_no=$counter'>$counter</a>";
                                                        }                  
                                            }
                                            echo "<a  class='tm-paging-link'>...</a>";
                                            echo "<a class='tm-paging-link' href='".$catagory."page_no=$second_last'>$second_last</a>";
                                            echo "<a class='tm-paging-link' href='".$catagory."page_no=$total_no_of_pages'>$total_no_of_pages</a>";      
                                                    }
                                                
                                                else {
                                                echo "<a class='tm-paging-link' href='".$catagory."page_no=1'>1</a>";
                                                echo "<a class='tm-paging-link' href='".$catagory."page_no=2'>2</a>";
                                                echo "<a class='tm-paging-link'>...</a>";

                                                for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
                                                if ($counter == $page_no) {
                                                echo "<a class='active tm-paging-link'>$counter</a>";	
                                                        }else{
                                                echo "<a class='tm-paging-link' href='".$catagory."page_no=$counter'>$counter</a>";
                                                        }                   
                                                        }
                                                    }
                                            }
                                        ?>


                </div>
            
            <a  <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?> class="btn btn-primary tm-btn-next <?php if($page_no >= $total_no_of_pages){ echo "disabled"; } ?>">Next Page</a>
            </div>            
        </div>








    </div> <!-- container-fluid, tm-container-content -->

    <footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
        <div class="container-fluid tm-container-small">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 px-5 mb-5">
                    <h3 class="tm-text-primary mb-4 tm-footer-title">About Catalog-Z</h3>
                    <p>Catalog-Z is free <a rel="sponsored" href="https://v5.getbootstrap.com/">Bootstrap 5</a> Alpha 2 HTML Template for video and photo websites. You can freely use this TemplateMo layout for a front-end integration with any kind of CMS website.</p>
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
    <script>
  document.getElementById('slideLeft').addEventListener('click', function() {
    const buttonContainer = document.querySelector('.button-container');
    buttonContainer.scrollLeft -= 50; // Adjust the scroll distance as needed
  });

  document.getElementById('slideRight').addEventListener('click', function() {
    const buttonContainer = document.querySelector('.button-container');
    buttonContainer.scrollLeft += 50; // Adjust the scroll distance as needed
  });
</script>
</body>
</html>