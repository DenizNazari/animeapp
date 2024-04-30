
<?php
// Check if a session is already active before starting a new one
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Redirect user if not logged in



?>

<?php



if(!isset($_SESSION['user_name'])) {
    $control = false;
} else {
    $control = true;
}
?>

<?php

$cookie_name = "dark-mode";
// Check if dark mode preference is set in the URL
if(isset($_GET["dark-mode"])) {
    $cookie_value = $_GET["dark-mode"];
    // Set the dark mode cookie
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
}

// Check if the dark mode cookie is set
$darkMode = isset($_COOKIE[$cookie_name]) ? $_COOKIE[$cookie_name] : 'light';
?>



<?php
// if(!isset($_COOKIE[$cookie_name])) {
//   echo "Cookie named '" . $cookie_name . "' is not set!";
// } else {
//   echo "Cookie '" . $cookie_name . "' is set!<br>";
//   echo "Value is: " . $_COOKIE[$cookie_name];
// }
?>

<link rel="stylesheet" href="css/dark-mode.css">

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                
                ANIBASE
            </a>
            
    <input type="checkbox" class="sr-only" id="darkmode-toggle" name="dark-mode"  <?php if($darkMode === 'dark') echo 'checked'; ?>  >
        <label for="darkmode-toggle" class="toggle">
            <span>Toggle dark mode</span>
        </label>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1 active" aria-current="page" href="index.php">Animes</a>
                </li>
                <li class="dropdown nav-item">
                    <a href="javascript:void(0)" class="dropbtn nav-link nav-link-3">Genres</a>
                    <div class="dropdown-content nav-item">
                        
                    <a href="index.php">All</a>

                    <?php

                        
                        $sorgu_anime = mysqli_query($conn,"SELECT DISTINCT gener FROM genres ORDER BY gener");
                            $say_anime = mysqli_num_rows($sorgu_anime);
                            if ( $say_anime > 0 ) {
                                    while ( $while_anime = mysqli_fetch_array($sorgu_anime) ) {
                            ?>
                                <a href="index.php?theme=<?php echo  $while_anime['gener']?>"><?php echo  $while_anime['gener']?></a>                    
                        <?php }}?>

                    </div>


                </li>
                <li class="dropdown nav-item">
                    <a href="javascript:void(0)" class="dropbtn nav-link nav-link-3">Themes</a>
                    <div class="dropdown-content nav-item">
                        
                    <a href="index.php">All</a>

                    <?php

                        
                        $sorgu_anime = mysqli_query($conn,"SELECT DISTINCT theme FROM themes ORDER BY theme");
                            $say_anime = mysqli_num_rows($sorgu_anime);
                            if ( $say_anime > 0 ) {
                                    while ( $while_anime = mysqli_fetch_array($sorgu_anime) ) {
                            ?>
                                <a href="index.php?theme=<?php echo  $while_anime['theme']?>"><?php echo  $while_anime['theme']?></a>                    
                        <?php }}?>

                    </div>


                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3" href="about.php">Rapor</a>
                </li>

                <?php
if(isset($_SESSION['user_name'])) {
    if($_SESSION['isAdmin'] == true) {

         echo '<li class="nav-item"><a class="nav-link nav-link-3" href="admin_panel.php">Admin Panel</a></li>';
        echo '<li class="nav-item"><a class="nav-link nav-link-3" href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
      </svg></a></li>';

    } else {
        echo '<li class="nav-item"><a class="nav-link nav-link-3" href="user_page.php"><img class="nav-link nav-link-3 rounded-circle" href="user_page.php" alt="Admin" src="profilpngs/'.$_SESSION['user_png'].'" width="50"    style="object-fit: contain;" height="50" > </a>'.'</li>';
        echo '<li class="nav-item"><a class="nav-link nav-link-3" href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
      </svg></a></li>';
    }
} else {
    echo '<li class="nav-item"><a class="nav-link nav-link-3" href="sign_in.php">Sign In</a></li>';
}


?>


                

            </ul>
            </div>
        </div>
    </nav>