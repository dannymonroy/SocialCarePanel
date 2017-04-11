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
    <title>Social Care Panel</title>
  </head>
  <body>

    <?php
    if (isset($_POST['username'])) {
      $username = $_POST['username'];
    } else {
      //For testing purposes only. This will never be the case.
      $username = "Stranger";
    }
    ?>
    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Social Care App</a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Help</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Jumbotron -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-1">Social Care Panel</h1>
        <blockquote class="lead">A place to manage your clients needs</blockquote>
      </div>
    </div>

    <div class="container">
      <h2>Welcome, <?php echo $username  ?></h2>
    </div>

      <div class="container justify-center">
           <main class="col text-center">
             <h1>Dashboard</h1>
             <section class="row text-center placeholders">
               <div class="col-6 col-sm-3 placeholder">
                 <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                 <h4>Clients</h4>
                 <div class="text-muted">Add or view clients</div>
               </div>
               <div class="col-6 col-sm-3 placeholder">
                 <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                 <h4>Carers</h4>
                 <span class="text-muted">Add or view carers</span>
               </div>
               <div class="col-6 col-sm-3 placeholder">
                 <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                 <h4>Profile</h4>
                 <span class="text-muted">View your profile</span>
               </div>
               <div class="col-6 col-sm-3 placeholder">
                 <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                 <h4>Reports</h4>
                 <span class="text-muted">View reports</span>
               </div>
             </section>
           </main>


         </div>


    <!-- Bootstrap 4: Scripts  -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
