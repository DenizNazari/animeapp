<?php
include('baglan.php');

$post_id = $_POST['post_id'];
$user_id = $_POST['user_id'];
$status = $_POST['status'];

$post_id = mysqli_real_escape_string($conn, $post_id);
$user_id = mysqli_real_escape_string($conn, $user_id);
$status = mysqli_real_escape_string($conn, $status);

$ratings = mysqli_query($conn, "SELECT * FROM likes WHERE animes_id=$post_id AND user_id=$user_id");
if(mysqli_num_rows($ratings) > 0){
    $rating = mysqli_fetch_assoc($ratings);
    if($rating['rate'] == $status){
        mysqli_query($conn, "DELETE FROM likes WHERE animes_id=$post_id AND user_id=$user_id");
        $response = array("success" => true);
    }
    else {
        mysqli_query($conn, "UPDATE likes SET rate=$status WHERE animes_id=$post_id AND user_id=$user_id");
        $response = array("success" => true);
    }
}
else {
    mysqli_query($conn, "INSERT INTO likes (animes_id, user_id, rate) VALUES ($post_id, $user_id, $status)");
    $response = array("success" => true);
}

echo json_encode($response);
?>
