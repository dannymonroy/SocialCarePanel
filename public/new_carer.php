<?php require_once("../includes/functions.php");?>
<?php include("../includes/layouts/header.php");?>
  <div class="container text-center">
    <div class="padding">
      <h4 class="display-4">New Carer</h4>
    </div>
  </div>
  <div class="container">
    <p>Here you can create carer who can be added to clients visits.
    The password chosen will be the one needed to log in to their Android application.</p>
    <div class="row">
      <div class="col-2">
      </div>
        <div class="col-8">
          <form class="" action="create_carer.php" method="post">
            <div class="form-group">
              <label for="title">Title:</label>
              <select class="form-control" name="title">
                <option value="mr">Mr</option>
                <option value="ms">Ms</option>
                <option value="mrs">Mrs</option>
                <option value="miss">Miss</option>
                <option value="dr">Dr</option>
                <option value="madam">Madam</option>
              </select>
            </div>
            <div class="form-group">
              <label for="name">First Name:</label>
              <input class="form-control" type="text" name="name" placeholder="John">
            </div>
            <div class="form-group">
              <label for="middle_name">Middle Name:</label>
              <input class="form-control" type="text" name="middle_name" placeholder="">
            </div>
            <div class="form-group">
              <label for="surname">Surname:</label>
              <input class="form-control" type="text" name="Surname" placeholder="Doe">
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input class="form-control" id="password" name="password" placeholder="Password for Carer"></input>
            </div>
            <div class="col-md text-center" id="submit">
            <input class="btn btn-primary btn-lg" name="submit" type="submit" value="Submit">
            <a href="panel.php" name="back">
              <button href="panel.php" class="btn btn-primary" type="button">Go Back</button>
            </a>
            </div>
          </form>
        </div>
      <div class="col-2">
      </div>
    </div>

  </div>

  <?php include("../includes/layouts/footer.php"); ?>
  </body>
</html>
