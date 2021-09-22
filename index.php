<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bare - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

        <style>
        
        #wrapper { 
	    display: flex; 
	    justify-content: center; /* center horizontally */ 
	    align-items: center; /* center vertically */ 
} 

        </style>

    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Collections</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container">
            <div class="text-center mt-5">
                <h1>Long Heavy Game Stats</h1>
                <p class="lead">An Objective Solution to Finding the "LONG HEAVY CHAMP"</p>
                <p>2021</p>
                </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        
            <div id="wrapper"> 
                <canvas id="myChart" style="max-width: 800px"></canvas>
            </div>
        <br>
        <br>
<div class="container">
    <div class="row">
        <div class="col-2">
        Player:
        </div>
        <div class="col">
        One of three columns
        </div>
    </div>
    <div class="row">
        <div class="col-2">
        Game:
        </div>
        <div class="col">
        One of three columns
        </div>    
    </div>
    <div class="row">
        <div class="col-2">
        Points:
        </div>
        <div class="col">
        One of three columns
        </div>    
    </div>
</div>

 <div id="container">
    <form method="post" action="" id="contactform">
      <div class="form-group">
        <label for="name">FirstName:</label>
        <select class="form-control" id="firstname">
        <option></option>
        <option>Karl</option>
        <option>Cody</option>
        <option>Hope</option>
        <option>Andrew</option>
        </select>
      </div>
      <div class="form-group">
        <label for="email">LastName:</label>
        <input type="email" class="form-control" id="lastname">
      </div>
      <div class="form-group">
        <label for="message">Game:</label>
        <textarea name="message" class="form-control" id="Game"></textarea>
      </div>
      <div class="form-group">
        <label for="message">Points:</label>
        <textarea name="message" class="form-control" id="Points"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
 
    <div class="result">
    </div>
  </div>

<table>
    <tr>
        <th>ID</th>
        <th>FirstName</th>
        <th>LastName</th>
    </tr>
<?php
$servername = "mysql.gravitytruth.org";
$username = "gravitytruthorg";
$password = "pSaQ2EmC";
$dbname = "gravitytruth_org";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {    
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td></tr>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</table>
<?php

function callAPI($method, $url, $data){
   $curl = curl_init();
   switch ($method){
      case "POST":
         curl_setopt($curl, CURLOPT_POST, 1);
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
         break;
      case "PUT":
         curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
         break;
      default:
         if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
   }
   // OPTIONS:
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'APIKEY: 111111111111111111111',
      'Content-Type: application/json',
   ));
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
   // EXECUTE:
   $result = curl_exec($curl);
   if(!$result){die("Connection Failure");}
   curl_close($curl);
   return $result;
};

$get_data = callAPI('GET', 'http://bgg-json.azurewebsites.net/collection/NoChildren64', false);
$response = json_decode($get_data, true);
$errors = $response['response']['name'];
$data = $response['response']['data'][0];

echo 'hello there homie';
//echo $get_data;
//echo $response [0];
$arrlength = count($response);
for($x = 0; $x < $arrlength; $x++) {
  echo $response[$x]['name'];
  echo "<br>";
};
echo '<pre>'; print_r($response); echo '</pre>';
//echo $errors;
//echo $data; 
echo 'nopetest';

?>

        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>        
        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
        <!--AJAX -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
        <script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
type: 'bar',
data: {
labels: [
    
 <?php
$servername = "mysql.gravitytruth.org";
$username = "gravitytruthorg";
$password = "pSaQ2EmC";
$dbname = "gravitytruth_org";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT `firstname` FROM `Points` WHERE 1 group by firstname ORDER BY firstname, lastname";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {    
    echo "'" . $row["firstname"]. "',";
  }
} else {
  echo "0 results";
}
$conn->close();
?>   

],   
datasets: [{
label: '# of Wins',
data: [

<?php
$hostname="mysql.gravitytruth.org";
$username="gravitytruthorg";
$password="pSaQ2EmC";
$db = "gravitytruth_org";
$dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
foreach($dbh->query('SELECT firstname,SUM(Points) 
FROM Points
GROUP BY firstname ORDER BY firstname, lastname') as $row) {
echo "'" . $row['SUM(Points)'] . "',";
}
?>

],
backgroundColor: [
'rgba(255, 99, 132, 0.2)',
'rgba(54, 162, 235, 0.2)',
'rgba(255, 206, 86, 0.2)',
'rgba(75, 192, 192, 0.2)',
'rgba(153, 102, 255, 0.2)',
'rgba(255, 159, 64, 0.2)'
],
borderColor: [
'rgba(255,99,132,1)',
'rgba(54, 162, 235, 1)',
'rgba(255, 206, 86, 1)',
'rgba(75, 192, 192, 1)',
'rgba(153, 102, 255, 1)',
'rgba(255, 159, 64, 1)'
],
borderWidth: 1
}]
},
options: {
scales: {
yAxes: [{
ticks: {
beginAtZero: true
}
}]
}
}
});
//THis is the Async Form Post Function
$(document).ready(function () {
    $('.btn-primary').click(function (e) {
      e.preventDefault();
      var firstname = $('#firstname').val();
      var lastname = $('#lastname').val();
      var Game = $('#Game').val();
      var Points = $('#Points').val();
      $.ajax
        ({
          type: "POST",
          url: "welcome.php",
          data: { "firstname": firstname, "lastname": lastname, "Game": Game, "Points": Points },
          success: function (data) {
            $('.result').html(data);
            $('#contactform')[0].reset();
          }
        });
    });
  });



</script>
    </body>
</html>
