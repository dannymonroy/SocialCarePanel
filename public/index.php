<?php require_once("../includes/session.php"); ?>
<?php $_SESSION["username"] = null; ?>
<!--

Social Care Management Panel: index.php
Danny Monroy, drodri06
Basic login in page.

-->
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
    <title>Social Care Panel</title>
  </head>
  <body>

    <!-- Jumbotron -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-2">Social Care Panel</h1>
        <blockquote class="lead">A place to manage your clients needs</blockquote>
      </div>
    </div>
    <!-- Login Form -->
    <div class="container-fluid">
      <div class="row">
        <div class="col"><!-- For Space --></div>
        <div class="col-md-6 col-lg-3">
          <div class="container">
              <blockquote class="lead error"><?php echo message(); ?></blockquote>
          </div>
          <form action="login_process.php" method="post">
            <div class="form-group input-group-lg" >
              <label for="username">Username:</label>
              <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
            </div>
            <div class="form-group input-group-lg">
              <label for="password">Password:</label>
              <input type="password" class="form-control input-lg" id="password" placeholder="Password" name="password" required>
            </div>
            <div class="col-md text-center" id="submit">
              <input class="btn btn-primary btn-lg" name="submit" type="submit" value="Submit">
            </div>
          </form>
          <blockquote>For more information in how to use the site please click <a href="about.php">here</a></blockquote>
        </div>
        <div class="col"><!-- For Space --></div>
      </div>
    </div>

    <!-- Bootstrap 4: Scripts  -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
