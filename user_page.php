<!DOCTYPE html>
<?php

use LDAP\Result;

include('baglan.php');
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

</style>








































    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css'>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <script src="DynamicSelect.js"></script>
    <link href="DynamicSelect.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

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
    

    
          <div class="row gutters-sm">
            <div class="col-md-3 mb-4 ">
              <div class="card-deck">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="profilpngs/<?php echo  $_SESSION['user_png']?>" alt="Admin" class="rounded-circle" width="250"    style="object-fit: contain;" height="250">
                    <div class="mt-3">
                      <h4><?php echo $_SESSION["user_name"]?></h4>

                      <button  class="btn btn-secondary" id="myBtn">choose profile picture</button>

       

                    </div>
                  </div>
                </div>
              </div>
              <div class="card-deck mt-4">
                <ul  class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg   width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"></svg>Like count:</h6>
                    <span class="text-secondary">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg   width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"> </svg>Comment count:</h6>
                    <span class="text-secondary">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"> </svg>Addded anime:</h6>
                    <span class="text-secondary">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"> <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Request anime:</h6>
                    <span class="text-secondary">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"></svg>Addded character:</h6>
                    <span class="text-secondary">0</span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-9 ">
              <div class="card-deck mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Kenneth Valdez
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      fip@jukmuh.al
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (239) 816-9029
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (320) 380-4539
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Bay Area, San Francisco, CA
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-outline-secondary" target="__blank" href="add_anime.php">add anime</a>
                      <a class="btn btn-outline-secondary" target="__blank" href="_added_animes.php">added anime</a>
                      
                      <a class="btn btn-outline-secondary" target="__blank" href="_request_animes.php">reguest anime</a>

                    </div>


                  </div>
                </div>
              </div>


        <h4>liked animes:</h4>
        <?php include('liked_animes.php');?>

            </div>
          </div>





<div id="myModal" class="modal" data-bs-backdrop='static'>

          <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
              <div class="modal-content">
                  <span class="close">&times;</span>
                  <p>Choose photo for profile</p>
                  <label for="photo">Choose Photo:</label>
                  <select id="photo" name="photo" multiple="multiple">
                  </select>
                  <button type="submit" class="btn btn-primary" id="saveprofile">Save</button>
              </div>
          </form>

</div>



<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['photo'])) {
        $selectedPhoto = $_POST['photo'];
        $_SESSION['user_png'] = $selectedPhoto;

        $update_query = "UPDATE `user` SET `user_png`=? WHERE `username`=?";
        $stmt = $conn->prepare($update_query);
        $stmt->bind_param("ss", $selectedPhoto, $_SESSION['user_name']); 
        $stmt->execute();     
        $stmt->close();
 


    } else {
        echo "No photo selected!";
    }
}

?>







<script>
  // Get the modal
  var modal = document.getElementById("myModal");

  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks the button, open the modal 
  btn.onclick = function() {
    modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>







<script>
  new DynamicSelect('#photo', {
    columns: 3,
    height: '100px',
    width: '100%',
    dropdownWidth: '400px',
    'object-fit': 'contain',
    placeholder: 'Select a photo',
    data: [ 
      <?php $result=mysqli_query($conn,"SELECT * FROM  `image` ");
      $result_count=mysqli_query($conn,"SELECT count(*)  FROM  `image` ");
    while ($row = mysqli_fetch_assoc($result)) {
      
      echo "      {
        value:'". $row['png_name']." ',
        img: 'profilpngs/". $row['png_name']."',
        imgWidth: '100px',
        imgHeight: '100%',
        
      }";     
      if($row['id']!=$result_count) echo ",";
      
     } ?>
    ],
  });
</script>


<!-- 
<script>
  new DynamicSelect('#photo', {
    columns: 3,
    height: '100px',
    width: '100%',
    dropdownWidth: '400px',
    'object-fit': 'contain',
    placeholder: 'Select a photo',
    data: [
      {
        value: 'p_1.jpg',
        img: 'profilpngs/p_1.jpg',
        imgWidth: '100px',
        imgHeight: '100%',
        
      },
      {
        value: 'p_2.jpg',
        img: 'profilpngs/p_2.jpg',
        imgWidth: '100px',
        imgHeight: '100%'      },
      {
        value: 'p_3.jpg',
        img: 'profilpngs/p_3.jpg',
        imgWidth: '100px',
        imgHeight: '100%'   
         },
      {
        value: 'p_4.jpg',
        img: 'profilpngs/p_4.jpg',
        imgWidth: '100px',
        imgHeight: '100%'
            },
      {
        value: 'p_5.jpg',
        img: 'profilpngs/p_5.jpg',
        imgWidth: '100px',
        imgHeight: '100%'
            },
      {
        value: 'p_6.jpg',
        img: 'profilpngs/p_6.jpg',
        imgWidth: '100px',
        imgHeight: '100%'
            }
    ],
  });
</script> -->






        </div>
    </div>
</body>
</html>