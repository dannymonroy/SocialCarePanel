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
    <title>Social Care Panel!</title>
  </head>
  <body>

    <!-- Jumbotron -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-1">Social Care Panel</h1>
        <blockquote class="lead">A place to manage your clients needs</blockquote>
      </div>
    </div>
    <!-- Login Form -->
    <?php
      if(isset($_POST["username"])){
        $username = $_POST["username"];
      } else {
        $username = "Stranger!";
      }
    ?>
    <div class="container">
      <div class="row">
        <div class="col-10">
          <h1 id="welcome">Welcome back, <?php echo $username;?></h1>
        </div>
        <div class="col-2">
          <h2 class="lead"><?php echo "Today is " . date("l")." ".date("d/m/Y")." ".date("h:i:s"); ?></h2>
        </div>
      </div>
      <div class="container">
        <!--PLEASE ERASE THIS. I DID IT FOR PADDING -->
      </div>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card text-center">
              <h3 class="card-header" id="card-header"> View Reports </h3>
              <div class="card-block">
                <p class="card-text">Click in the button to see all the visits of your clients.</p>
                <a href="#" class="btn btn-primary">Go</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-center">
              <h3 class="card-header" id="card-header"> View Carers </h3>
              <div class="card-block">
                <p class="card-text">View all carers register in the application.</p>
                <a href="#" class="btn btn-primary">Go</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-center">
              <h3 class="card-header" id="card-header"> Access Clients </h3>
              <div class="card-block">
                <p class="card-text">View all clients register under your management.</p>
                <a href="#" class="btn btn-primary ">Go</a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-center">
              <h3 class="card-header" id="card-header"> Create Visits </h3>
              <div class="card-block">
                <p class="card-text">Create new visits for an existing client</p>
                <a href="#" class="btn btn-primary">Go</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Bootstrap 4: Scripts  -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>

<!--
<div class="container">
  <div class="row">
    <form class="login-form">
      <div class="col-md-12">
      <div class="form-group">
        <label for="username">Please Introduce Your Username:</label>
        <input type="text" class="form-control" id="username" placeholder="Username">
      </div>
      <div class="form-group col-md text-center">
        <label for="password">Another label</label>
        <input type="text" class="form-control" id="password" placeholder="Password">
      </div>
      <div class="col-md text-center">
        <input class="btn btn-primary btn-lg" type="submit" value="Submit">
      </div>
    </form>
  </div>
</div>
-->
