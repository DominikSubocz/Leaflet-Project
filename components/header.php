<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>


    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />

    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css">

    <link rel="stylesheet" href="css/leaflet.awesome-markers.css">




    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>

    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

    <script src="js/leaflet.awesome-markers.js"></script>



    
  <title><?php echo $pageTitle; ?></title>

  <?php

  if (!empty($stylesheets)) {
    foreach ($stylesheets as $sheet) {
      echo "<link rel=\"stylesheet\" href=\"css/$sheet.css\">";
    }
  }

  if (!empty($scripts)) {
    foreach ($scripts as $script) {
      echo "<script src=\"js/$script.js\" defer></script>";
    }
  }

  ?>
</head>
<body>
  <header class="page-header">
    <div class="content-wrapper desktop-header-row">
      <div class="mobile-top">
        <h1 class="page-title">Book Store</h1>

        <button class="nav-button" id="nav-button">
          <img src="icons/nav-button.png">
        </button>
      </div>

      <nav class="page-navigation" id="nav-list">
        <ul class="nav-links">
          <li><a href="path-list.php">Paths</a></li>

          <?php

          if(isset($_SESSION["loggedIn"])) {
            $user = $_SESSION["username"];
            if($_SESSION["user_role"] === "Admin") {
              echo "<li><a href='add-book.php'>Add Book</a></li>";
            }
            echo "<li><a href='basket.php'>Basket</a></li>
            <li><a href='user.php'>$user's Account</a></li>
            <li><a href='logout.php'>Logout</a></li>";
          }

          else{
            echo "<li><a href='login.php'>Login</a></li>";

          }
          ?>
        </ul>
      </nav>
    </div>
  </header>

  <main class="content-wrapper main-content">