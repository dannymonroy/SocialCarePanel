<?php require_once("../includes/functions.php");?>
<?php include("../includes/layouts/header.php");?>
  <div class="container text-center">
    <div class="padding">
      <h4 class="display-4">Create Client</h4>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-2">
      </div>
        <div class="col-8">
          <form class="" action="create_visit.php" method="post">
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
              <label for="address">Address:</label>
              <textarea class="form-control" id="address" name="address" rows="3" placeholder="Full Address"></textarea>
            </div>
            <div class="form-group">
              <label for="postcode">Postcode:</label>
              <input  type="text" name="postcode" placeholder="NW5 4PJ">
              <label for="postcode">Area:</label>
              <input type="text" name="area" placeholder="London">
              <label for="keycode">Keycode:</label>
              <input type="text" name="keycode" placeholder="1234">
            </div>
            <div class="form-group">
              <p>This is to be displayed in the carers application.</p>
              <label for="address">General Information:</label>
              <textarea class="form-control" id="address" name="general_information" rows="3" placeholder="This is to be displayed in the carers application"></textarea>
            </div>
            <div class="form-group">
              <label for="level_vulnerability">Level of Vulnerability:</label>
              <select class="form-control" name="level_vulnerability">
                <option value="low">Low</option>
                <option value="Medium">Ms</option>
                <option value="High">Mrs</option>
              </select>
            </div>
            <div class="col-md text-center" id="submit">
            <input class="btn btn-primary btn-lg" name="submit" type="submit" value="Submit">
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
