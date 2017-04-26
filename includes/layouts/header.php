<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap 4: CSS Import -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- General CSS import -->
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <!-- Favicon import -->
    <link rel="icon" href="images/favicon_i.ico" type="image/x-icon">
    <!-- General JavaScript Import-->
    <script src="js/script.js"></script>
    <!-- vis.js -->
    <link href="http://visjs.org/dist/vis.css" rel="stylesheet" type="text/css" />
    <script src="http://visjs.org/dist/vis.js"></script>
    <link href="http://visjs.org/dist/vis-timeline-graph2d.min.css" rel="stylesheet" type="text/css" />

    <title>Social Care Panel</title>
  </head>
  <body>

    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Social Care Panel</a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="panel.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="new_client.php">Add Clients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="new_carer.php">Add Carers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="new_visit.php">Add Visits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reports.php">Reports</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">Help</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Log out</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Jumbotron -->
    <div class="jumbotron">
      <a href="panel.php" class="nounderline">
      <div class="container">
        <h1 class="display-2" id="font">Social Care Panel</h1>
        <blockquote class="lead">A place to manage your clients needs</blockquote>
      </div>
      </a>
    </div>
