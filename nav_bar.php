
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                
                ANIBASE
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1 active" aria-current="page" href="index.html">Photos</a>
                </li>
                <li class="dropdown nav-item">
                    <a href="javascript:void(0)" class="dropbtn nav-link nav-link-3">Genres</a>
                    <div class="dropdown-content nav-item">
                        
                    <a href="index.php">all</a>

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
                <li class="nav-item">
                    <a class="nav-link nav-link-3" href="about.html">About</a>
                </li>

            </ul>
            </div>
        </div>
    </nav>