
<?php
include('baglan.php');
?>
<?php
// Check if a session is already active before starting a new one
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<?php 
try {
$q = intval($_GET['q']);}
catch(Exception $e) { $q = 1; }
if($q==1){
    

?>

                            <?php
                    
                        

                                                    if (isset($_GET['page_no']) && $_GET['page_no']!="") {
                                                        $page_no = $_GET['page_no'];
                                                        } else {
                                                            $page_no = 1;
                                                            }
                                                        $total_records_per_page = 20;
                                                        $offset = ($page_no-1) * $total_records_per_page;
                                                        $previous_page = $page_no - 1;
                                                        $next_page = $page_no + 1;
                                                        $adjacents = "2"; 

                                                        $result_count = mysqli_query($conn, "SELECT COUNT(DISTINCT request_animes.animecode) AS total_records FROM request_animes LEFT JOIN genres ON request_animes.animecode = genres.animeid LEFT JOIN themes ON request_animes.animecode = themes.animeid " );

                                                        $total_records = mysqli_fetch_array($result_count);
                                                        $total_records = $total_records['total_records'];
                                                        $total_no_of_pages = ceil($total_records / $total_records_per_page);
                                                        $second_last = $total_no_of_pages - 1; // total page minus 1
                                                        $result = mysqli_query($conn, "SELECT DISTINCT request_animes.*, genres.*, themes.* FROM request_animes LEFT JOIN genres ON request_animes.animecode = genres.animeid LEFT JOIN themes ON request_animes.animecode = themes.animeid "  . " GROUP BY request_animes.animecode ");
                                                        while($row = mysqli_fetch_array($result)){
                                                    ?>


                                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                                                        <figure class="effect-ming tm-video-item">
                                                            <div class="btn-group btn-group-lg mb-3" role="group" aria-label="Large button group">
                                                                <button type="button" class="btn btn-secondary">Details</button>
                                                                <button type="button" class="btn btn-secondary"><?php echo $row['request'] == 0 ? "request" : "added" ?></button>
                                                                
                                                                <?php
                                                                $say_user = array('username' => 'Unknown'); 
                                                                $a = 1;
                                                                $sorgu_msj = mysqli_query($conn, "SELECT * FROM request_animes WHERE animecode='" . $row['animecode'] . "'");
                                                                if ($sorgu_msj) {
                                                                    $a = 2;
                                                                    while ($while_msj = mysqli_fetch_array($sorgu_msj)) {
                                                                        $a = 3;
                                                                        $sorgu_user = mysqli_query($conn, "SELECT username FROM user WHERE usercode='" . $while_msj['userid'] . "'");
                                                                        if ($sorgu_user) {
                                                                            $say_user = mysqli_fetch_array($sorgu_user);
                                                                        } else {
                                                                            $say_user = array('username' => 'Unknown'); 
                                                                        }
                                                                    }
                                                                }
                                                                ?>
                                                                
                                                                <span class="col-5 fs-3 mb-10 badge bg-primary"><?php echo $say_user['username'] ?></span> 
                                                            </div>
                                                            <img src="anime/<?php echo $row['imgnames'] ?>.jpg" alt="Image" class="img-responsive img-fluid">
                                                            <figcaption class="d-flex align-items-center justify-content-center">
                                                                <h2><?php echo $row['name'] ?></h2>
                                                            </figcaption>                   
                                                        </figure>
                                                        <div class="d-flex justify-content-between tm-text-gray">
                                                        
                                                        </div>
                                                    </div>  
                        <?php
                            }
                        ?>







       
<?php    
     } 
elseif($q==2)
{
?>








<?php
                    
                        

                    if (isset($_GET['page_no']) && $_GET['page_no']!="") {
                        $page_no = $_GET['page_no'];
                        } else {
                            $page_no = 1;
                            }
                        $total_records_per_page = 20;
                        $offset = ($page_no-1) * $total_records_per_page;
                        $previous_page = $page_no - 1;
                        $next_page = $page_no + 1;
                        $adjacents = "2"; 

                        $result_count = mysqli_query($conn, "SELECT COUNT(DISTINCT request_animes.animecode) AS total_records FROM request_animes LEFT JOIN genres ON request_animes.animecode = genres.animeid LEFT JOIN themes ON request_animes.animecode = themes.animeid where request = 0 " );

                        $total_records = mysqli_fetch_array($result_count);
                        $total_records = $total_records['total_records'];
                        $total_no_of_pages = ceil($total_records / $total_records_per_page);
                        $second_last = $total_no_of_pages - 1; // total page minus 1
                        $result = mysqli_query($conn, "SELECT DISTINCT request_animes.*, genres.*, themes.* FROM request_animes LEFT JOIN genres ON request_animes.animecode = genres.animeid LEFT JOIN themes ON request_animes.animecode = themes.animeid  where request = 0 "  . " GROUP BY request_animes.animecode ");
                        while($row = mysqli_fetch_array($result)){
                    ?>


                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                        <figure class="effect-ming tm-video-item">
                            <div class="btn-group btn-group-lg mb-3" role="group" aria-label="Large button group">
                                <button type="button" class="btn btn-secondary">Details</button>
                                <button type="button" class="btn btn-secondary"><?php echo $row['request'] == 0 ? "request" : "added" ?></button>
                                
                                <?php
                                $say_user = array('username' => 'Unknown'); 
                                $a = 1;
                                $sorgu_msj = mysqli_query($conn, "SELECT * FROM request_animes WHERE animecode='" . $row['animecode'] . "'");
                                if ($sorgu_msj) {
                                    $a = 2;
                                    while ($while_msj = mysqli_fetch_array($sorgu_msj)) {
                                        $a = 3;
                                        $sorgu_user = mysqli_query($conn, "SELECT username FROM user WHERE usercode='" . $while_msj['userid'] . "'");
                                        if ($sorgu_user) {
                                            $say_user = mysqli_fetch_array($sorgu_user);
                                        } else {
                                            $say_user = array('username' => 'Unknown'); 
                                        }
                                    }
                                }
                                ?>
                                
                                <span class="col-5 fs-3 mb-10 badge bg-primary"><?php echo $say_user['username'] ?></span> 
                            </div>
                            <img src="anime/<?php echo $row['imgnames'] ?>.jpg" alt="Image" class="img-responsive img-fluid">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2><?php echo $row['name'] ?></h2>
                            </figcaption>                   
                        </figure>
                        <div class="d-flex justify-content-between tm-text-gray">
                        
                        </div>
                    </div>  














<?php
}
}
elseif($q==3)
{
      ?>


<?php
                    
                        

                    if (isset($_GET['page_no']) && $_GET['page_no']!="") {
                        $page_no = $_GET['page_no'];
                        } else {
                            $page_no = 1;
                            }
                        $total_records_per_page = 20;
                        $offset = ($page_no-1) * $total_records_per_page;
                        $previous_page = $page_no - 1;
                        $next_page = $page_no + 1;
                        $adjacents = "2"; 

                        $result_count = mysqli_query($conn, "SELECT COUNT(DISTINCT request_animes.animecode) AS total_records FROM request_animes LEFT JOIN genres ON request_animes.animecode = genres.animeid LEFT JOIN themes ON request_animes.animecode = themes.animeid where request = 1 " );

                        $total_records = mysqli_fetch_array($result_count);
                        $total_records = $total_records['total_records'];
                        $total_no_of_pages = ceil($total_records / $total_records_per_page);
                        $second_last = $total_no_of_pages - 1; // total page minus 1
                        $result = mysqli_query($conn, "SELECT DISTINCT request_animes.*, genres.*, themes.* FROM request_animes LEFT JOIN genres ON request_animes.animecode = genres.animeid LEFT JOIN themes ON request_animes.animecode = themes.animeid  where request = 1 "  . " GROUP BY request_animes.animecode ");
                        while($row = mysqli_fetch_array($result)){
                    ?>


                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                        <figure class="effect-ming tm-video-item">
                            <div class="btn-group btn-group-lg mb-3" role="group" aria-label="Large button group">
                                <button type="button" class="btn btn-secondary">Details</button>
                                <button type="button" class="btn btn-secondary"><?php echo $row['request'] == 0 ? "request" : "added" ?></button>
                                
                                <?php
                                $say_user = array('username' => 'Unknown'); 
                                $a = 1;
                                $sorgu_msj = mysqli_query($conn, "SELECT * FROM request_animes WHERE animecode='" . $row['animecode'] . "'");
                                if ($sorgu_msj) {
                                    $a = 2;
                                    while ($while_msj = mysqli_fetch_array($sorgu_msj)) {
                                        $a = 3;
                                        $sorgu_user = mysqli_query($conn, "SELECT username FROM user WHERE usercode='" . $while_msj['userid'] . "'");
                                        if ($sorgu_user) {
                                            $say_user = mysqli_fetch_array($sorgu_user);
                                        } else {
                                            $say_user = array('username' => 'Unknown'); 
                                        }
                                    }
                                }
                                ?>
                                
                                <span class="col-5 fs-3 mb-10 badge bg-primary"><?php echo $say_user['username'] ?></span> 
                            </div>
                            <img src="anime/<?php echo $row['imgnames'] ?>.jpg" alt="Image" class="img-responsive img-fluid">
                            <figcaption class="d-flex align-items-center justify-content-center">
                                <h2><?php echo $row['name'] ?></h2>
                            </figcaption>                   
                        </figure>
                        <div class="d-flex justify-content-between tm-text-gray">
                        
                        </div>
                    </div>  














<?php
}
}?>