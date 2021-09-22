<html>
<body>

<?php
//Database connection
$dbhost = 'mysql.gravitytruth.org';
$dbuser = 'gravitytruthorg';
$dbpass = 'pSaQ2EmC';
$db = 'gravitytruth_org';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $db) or die($conn); 
 
//insert into database
if(!empty($_POST)) {
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $Game = $_POST['Game'];
 $Points = $_POST['Points']; 
 mysqli_query($conn, "insert into Points (firstname, lastname, Game, Points) values ('$firstname', '$lastname', '$Game','$Points')"); 
 
 echo "Name : ".$firstname."</br>";
 echo "Name : ".$lastname."</br>";
 echo "Email : ".$Game."</br>";
 echo "Message : ".$Points."</br>";
}
?>

</body>
</html>
