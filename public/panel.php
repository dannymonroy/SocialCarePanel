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

    <div class="container-fluid">
      <div class="row">
        <h1>Hello, <?php echo $_POST['username']?></h1>
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
