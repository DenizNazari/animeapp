
<?php
//$conn = mysqli_connect("localhost","root","","kutuphane");
$conn = mysqli_connect("localhost", "root","", "db_121620201016", "3307");
//  $conn = mysqli_connect("localhost","121620201016","p146MdhHA7L","db_121620201016");
 /* Bağlantı Kontrolü */
 if ( mysqli_connect_errno() ) {
	 echo "Bağlantı Başarısız. Hata :".mysqli_connect_error();
	 die();
 } else {
	// echo "Bağlantı Başarılı";
 }
 mysqli_query($conn,"SET NAMES 'utf8'");
//  //mysqli_close($conn);


//  $sorgu_kitap_ilkharfler = mysqli_query($conn,"select * from animes");									
// while ( $satir_ilkharf = mysqli_fetch_array($sorgu_kitap_ilkharfler)) {
// echo $satir_ilkharf['name']."<br>";

// }


 ?> 

