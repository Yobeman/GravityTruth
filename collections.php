<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>The Long Heavy Champ</title>
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

            #myTable tr:hover {background-color: #f1f1f1;
            }
        </style>

    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <img src="/MeatWad.jpg" class="rounded-circle" alt="Cinque Terre" width="50" height="50"><a class="navbar-brand" href="#">&nbsp&nbspThe Long Heavy</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Collections</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Nothing Yet!</a></li>
                                <li><a class="dropdown-item" href="#">Nothing Yet!</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#">Nothing Yet!</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container">
            <div class="text-center mt-5">
                <h1>Board Game Collections</h1>
                <p class="lead">Search a User's Collection</p>                
            </div>
        </div>        
        <div class="container">
            <div class="row">
                <div class="col">
                </div>
                <div class="col-16"> 
                    <div class="input-group mb-3">
                        <input id="forminput" type="text" class="form-control" placeholder="BGG Username" aria-label="BGG Username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                        <button class="btn btn-primary" type="button" id="button-addon2" onclick="myFunction()"><i class="fas fa-search"></i></button>
                        </div>
                    </div>                                          
                </div> 
        <div class="container">
            <div class="row">
                <div class="col-auto">
                    <a href="https://gravitytruth.org/collections.php?bggname=NoChildren64"><i class="fas fa-user"></i>   Dan</a>
                </div>
        <div class="col-auto">
                    <a href="https://gravitytruth.org/collections.php?bggname=tailypojoel"><i class="fas fa-user"></i>   Joel</a></div>
                <div class="col-auto">
                    <a href="https://gravitytruth.org/collections.php?bggname=slyestfox"><i class="fas fa-user"></i>   Tim</a> 
                </div>
    <div class="col-auto">
<a href="https://gravitytruth.org/collections.php?bggname=all"><i class="fas fa-user-friends"></i>   All</a> 
    </div>
  </div>
                
                <table id="myTable" class="table">
                    <thead class="table-dark">                     
                        <tr>
                            <th scope="col" id ="sl">Title</th>
                            <th scope="col" id="nm">BGG Raiting</th>
                            <th scope="col">Player Count</th>
                            <th scope="col">Play Time (min)</th>
                            <th scope="col">Owner</th>
                        </tr> 
                    </thead>
                    <tbody>    
                    <?php
                    
                if($_GET['bggname'] == "all"){
                    include 'callapi.php';                   
                    $get_data = callAPI('GET', 'http://bgg-json.azurewebsites.net/collection/NoChildren64', false);
                    $response = json_decode($get_data, true);
                    $errors = $response['response']['name'];
                    $data = $response['response']['data'][0];
                    $arrlength = count($response);
                    for($x = 0; $x < $arrlength; $x++) {
                    if ($response[$x]['owned'] == 1){    
                    echo "<tr><td style='display:none;'>" . $response[$x]['name'] .  "</td><th scope='row'><a href='https://boardgamegeek.com/boardgame/" . $response[$x]['gameId'] . "'>" . $response[$x]['name'] . "</a></th><td>" . $response[$x]['averageRating'] . "</td><td>" . $response[$x]['minPlayers'] . "-" . $response[$x]['maxPlayers'] . "</td><td>". $response[$x]['playingTime'] . "</td><td>NoChildren64</td></tr>";
                    }
                    };
                    sleep (.5);
                    $get_data = callAPI('GET', 'http://bgg-json.azurewebsites.net/collection/tailypojoel', false);
                    $response = json_decode($get_data, true);
                    $errors = $response['response']['name'];
                    $data = $response['response']['data'][0];
                    $arrlength = count($response);
                    for($x = 0; $x < $arrlength; $x++) {
                    if ($response[$x]['owned'] == 1){    
                    echo "<tr><td style='display:none;'>" . $response[$x]['name'] .  "</td><th scope='row'><a href='https://boardgamegeek.com/boardgame/" . $response[$x]['gameId'] . "'>" . $response[$x]['name'] . "</a></th><td>" . $response[$x]['averageRating'] . "</td><td>" . $response[$x]['minPlayers'] . "-" . $response[$x]['maxPlayers'] . "</td><td>". $response[$x]['playingTime'] ."</td><td>tailypojoel</td></tr>";
                    }
                    };
                    sleep (.5);
                    $get_data = callAPI('GET', 'http://bgg-json.azurewebsites.net/collection/slyestfox', false);
                    $response = json_decode($get_data, true);
                    $errors = $response['response']['name'];
                    $data = $response['response']['data'][0];
                    $arrlength = count($response);
                    for($x = 0; $x < $arrlength; $x++) {
                    if ($response[$x]['owned'] == 1){    
                    echo "<tr><td style='display:none;'>" . $response[$x]['name'] .  "</td><th scope='row'><a href='https://boardgamegeek.com/boardgame/" . $response[$x]['gameId'] . "'>" . $response[$x]['name'] . "</a></th><td>" . $response[$x]['averageRating'] . "</td><td>" . $response[$x]['minPlayers'] . "-" . $response[$x]['maxPlayers'] . "</td><td>". $response[$x]['playingTime'] ."</td><td>slyestfox</td></tr>";
                    }
                    };
                    echo "<tr><td>sleep</td><td>sleep</td><td>sleep</td><td>sleep</td></tr>";                                  
                }
                else {
                    include 'callapi.php';                   
                    $get_data = callAPI('GET', 'http://bgg-json.azurewebsites.net/collection/' . $_GET['bggname'], false);
                    $response = json_decode($get_data, true);
                    $errors = $response['response']['name'];
                    $data = $response['response']['data'][0];

                    //echo $get_data;
                    //echo $response [0];
                    $arrlength = count($response);

                    for($x = 0; $x < $arrlength; $x++) {

                    if ($response[$x]['owned'] == 1){    
                    echo "<tr><td style='display:none;'>" . $response[$x]['name'] .  "</td><th scope='row'><a href='https://boardgamegeek.com/boardgame/" . $response[$x]['gameId'] . "'>" . $response[$x]['name'] . "</a></th><td>" . $response[$x]['averageRating'] . "</td><td>" . $response[$x]['minPlayers'] . "-" . $response[$x]['maxPlayers'] . "</td><td>". $response[$x]['playingTime'] ."</td><td>". $_GET['bggname'] ."</td></tr>";
                    }
                    };
                };
                    //echo '<pre>'; print_r($response); echo '</pre>';
                    //echo $errors;
                    //echo $data;
                    
                    ?>
                    </tbody>    
                </table>                   
              
        </div>
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
        <!--My Scripts -->
        <script>
 
            function myFunction() {
            var bggName = document.getElementById("forminput").value; 
            location.href = 'https://gravitytruth.org/collections.php?bggname='+bggName;
            }
            //This is the Table Sort JS it's sorting by the invisible TD field for BoardGame Name
            var table, rows, switching, i, x, y, shouldSwitch;
            table = document.getElementById("myTable");
            switching = true;            
            while (switching) {
                switching = false;
                rows = table.rows;                
                for (i = 1; i < (rows.length - 1); i++) {
                shouldSwitch = false;
                x = rows[i].getElementsByTagName("TD")[0];
                y = rows[i + 1].getElementsByTagName("TD")[0];
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {                   
                    shouldSwitch = true;
                    break;
                }
                }
                if (shouldSwitch) {
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
                }
            }
            //This is the onclick event for the input field
            var click = document.getElementById("forminput");
            click.addEventListener("keyup", function(event) {
            if (event.keyCode === 13) {
            event.preventDefault();
            document.getElementById("button-addon2").click();
  }
});

SmoothScroll({
    // &#1042;&#1088;&#1077;&#1084;&#1103; &#1089;&#1082;&#1088;&#1086;&#1083;&#1083;&#1072; 400 = 0.4 &#1089;&#1077;&#1082;&#1091;&#1085;&#1076;&#1099;
    animationTime    : 800,
    // &#1056;&#1072;&#1079;&#1084;&#1077;&#1088; &#1096;&#1072;&#1075;&#1072; &#1074; &#1087;&#1080;&#1082;&#1089;&#1077;&#1083;&#1103;&#1093; 
    stepSize         : 150,

    // &#1044;&#1086;&#1087;&#1086;&#1083;&#1085;&#1080;&#1090;&#1077;&#1083;&#1100;&#1085;&#1099;&#1077; &#1085;&#1072;&#1089;&#1090;&#1088;&#1086;&#1081;&#1082;&#1080;:
    
    // &#1059;&#1089;&#1082;&#1086;&#1088;&#1077;&#1085;&#1080;&#1077; 
    accelerationDelta : 30,  
    // &#1052;&#1072;&#1082;&#1089;&#1080;&#1084;&#1072;&#1083;&#1100;&#1085;&#1086;&#1077; &#1091;&#1089;&#1082;&#1086;&#1088;&#1077;&#1085;&#1080;&#1077;
    accelerationMax   : 2,   

    // &#1055;&#1086;&#1076;&#1076;&#1077;&#1088;&#1078;&#1082;&#1072; &#1082;&#1083;&#1072;&#1074;&#1080;&#1072;&#1090;&#1091;&#1088;&#1099;
    keyboardSupport   : true,  
    // &#1064;&#1072;&#1075; &#1089;&#1082;&#1088;&#1086;&#1083;&#1083;&#1072; &#1089;&#1090;&#1088;&#1077;&#1083;&#1082;&#1072;&#1084;&#1080; &#1085;&#1072; &#1082;&#1083;&#1072;&#1074;&#1080;&#1072;&#1090;&#1091;&#1088;&#1077; &#1074; &#1087;&#1080;&#1082;&#1089;&#1077;&#1083;&#1103;&#1093;
    arrowScroll       : 50,

    // Pulse (less tweakable)
    // ratio of "tail" to "acceleration"
    pulseAlgorithm   : true,
    pulseScale       : 4,
    pulseNormalize   : 1,

    // &#1055;&#1086;&#1076;&#1076;&#1077;&#1088;&#1078;&#1082;&#1072; &#1090;&#1072;&#1095;&#1087;&#1072;&#1076;&#1072;
    touchpadSupport   : true,
})
        </script>
        


    </body>
</html>
