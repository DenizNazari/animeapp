<?php
include("baglan.php"); // Include database connection

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if the request is a POST request and required parameters are set
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["comment"]) && isset($_POST["animeid"])) {
    // Sanitize input
    $comment = htmlspecialchars($_POST["comment"]);
    $animeid = htmlspecialchars($_POST["animeid"]);

    // Check if user is logged in
    if (isset($_SESSION['user_name'])) {
        // Perform the insertion
        $insert_query = "INSERT INTO `mesages`(`userid`, `date`, `mesagescol`, `text`, `like`, `animecode`) 
                         VALUES ('".$_SESSION["userid"]."','".date("Y-m-d H:i:s")."','','".$comment."','','".$animeid."')";
        $result = mysqli_query($conn, $insert_query);

        if ($result) {
            // Insertion successful
            ?>
                                        <div class="d-flex justify-content-center py-2">
                            <div class="second py-2 px-2"> <span class="text1"> <?php echo $comment?> </span>
                                <div class="d-flex justify-content-between py-1 pt-2">
                                    <div><img src="profilpngs/<?php echo $_SESSION['user_png']?>" width="18"><span class="text2"><?php echo $_SESSION['user_name']?></span></div>
                                </div>
                            </div>
                        </div>
            
            
            
            <?php
        } else {
            // Insertion failed
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // User is not logged in
        echo "Error: User not logged in.";
    }
} else {
    // Required parameters not received
    echo "Error: Comment or animeid not received";
}
?>
