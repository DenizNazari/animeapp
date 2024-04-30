
 <?php
   session_start();
@include('baglan.php');

if(isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if(empty($username) || empty($password)){
        header("Location: sign_in.php?error=Username and password are required");
        exit();
    } else {
        $hashed_password = hash('sha256', $password);
        $sql = "SELECT * FROM `user` WHERE `username` = ? AND `password` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: index.php");
            exit();
        } else {
            header("Location: sign_in.php?error=Incorrect username or password");
            exit();
        }
    }
} else {
    header("Location: sign_in.php");
    exit();
}
?>