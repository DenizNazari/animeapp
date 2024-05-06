<?php
include("baglan.php"); // Include database connection

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

                                function getYoutubeID($url) {
                                    $video_id = '';
                                    $pattern = 
                                        '%^# Match any YouTube URL
                                        (?:https?://)?  # Optional scheme. Either http or https
                                        (?:www\.)?      # Optional www subdomain
                                        (?:             # Group host alternatives
                                        youtu\.be/    # Either youtu.be,
                                        | youtube\.com  # or youtube.com
                                        (?:           # Group path alternatives
                                            /embed/     # Either /embed/
                                        | /v/         # or /v/
                                        | /watch\?v=  # or /watch\?v=
                                        )             # End path alternatives.
                                        )               # End host alternatives.
                                        ([\w-]{10,12})  # $1: Video ID
                                        $%x'
                                        ;
                                    $result = preg_match($pattern, $url, $matches);
                                    if ($result) {
                                        $video_id = $matches[1];
                                    }
                                    return $video_id;
                                }




            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Get the values from the form
                $synopsis = $_POST['synopsis'];
                $synonyms = $_POST['synonyms'];
                $japanese = $_POST['japanese'];
                $type = $_POST['type'];
                $episodes = $_POST['episodes'];
                $status = $_POST['status'];
                $aired = $_POST['aired'];
                $premiered = $_POST['premiered'];
                $broadcast = $_POST['broadcast'];
                $producers = $_POST['producers'];
                $licensors = $_POST['licensors'];
                $studios = $_POST['studios'];
                $userid = mysqli_query($conn, "SELECT   max(id) as id FROM request_animes  ");
                $userid = mysqli_fetch_array($userid)['id']+1; // Fetch user as an array
                $youtube  = $_POST['youtube'];

                // Other values you need to insert
                $name =trim($_POST['name']); 
                $background = $_POST['background'];  
                $imgnames = str_replace(' ', '_', (strtolower(trim($_POST['name'])))); 
                $youtubelink = getYoutubeID($youtube);  
                $adddate = date('Y-m-d');  
                $animecode = 'r'.$userid;  
                $userid = $_SESSION['id'];  
                $request = 0;  





                // Check if any field is empty
                $fields = array($name, $synopsis, $background, $imgnames, $type, $youtubelink, $adddate, $animecode, $episodes, $status, $aired, $premiered, $broadcast, $licensors, $producers, $studios, $synonyms, $japanese, $userid, $request);
                $empty_fields = array_filter($fields, function ($value) {
                    return empty($value);
                });

                if (!empty($empty_fields)) {
                    echo "Please fill all the fields.";
                } else {
                    $query = "INSERT INTO `request_animes` 
                        (`name`, `Synopsis`, `Background`, `imgnames`, `Type`, `youtubelink`, `adddate`, `animecode`, `Episodes`, `Status`, `Aired`, `Premiered`, `Broadcast`, `Previewed`, `Licensors`, `Producers`, `Studios`,   `Synonyms`, `Japanese`,  `userid`, `request`) 
                        VALUES 
                        ('$name', '$synopsis', '$background', '$imgnames', '$type', '$youtubelink', '$adddate', '$animecode', '$episodes', '$status', '$aired', '$premiered', '$broadcast', '', '$licensors', '$producers', '$studios',  '$synonyms', '$japanese', '$userid', '$request')";

                    $result = mysqli_query($conn, $query);

                    if ($result) {
                        echo "Data added successfully";
                    } else {
                        echo "Error: " . $query . "<br>" . mysqli_error($conn);
                    }
                }
                }
                ?>