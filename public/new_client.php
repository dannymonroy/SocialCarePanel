<?php require_once("../includes/functions.php");?>
<?php include("../includes/layouts/header.php");?>
<!--

Social Care Management Panel: new_client.php
Danny Monroy, drodri06
Form that posts the information to create_client.php.

-->
  <div class="container text-center">
    <div class="padding">
      <h4 class="display-4">New Client</h4>
    </div>
  </div>
  <div class="container">
    <p>Here you can add a new client under your manager.
      The information placed here will be displayed for the carer in the Android application.</p>
    <div class="row">
      <div class="col-2">
      </div>
        <div class="col-8">
          <form class="" action="create_client.php" method="post">
            <div class="form-group">
              <label for="title">Title:</label>
              <select class="form-control" name="title">
                <option value="Mr">Mr</option>
                <option value="Ms">Ms</option>
                <option value="Mrs">Mrs</option>
                <option value="Miss">Miss</option>
                <option value="Dr">Dr</option>
                <option value="Madam">Madam</option>
              </select>
            </div>
            <div class="form-group">
              <label for="name">First Name:</label>
              <input class="form-control" type="text" name="name" placeholder="John" value="" required>
            </div>
            <div class="form-group">
              <label for="middle_name">Middle Name:</label>
              <input class="form-control" type="text" name="middle_name" placeholder="E.">
            </div>
            <div class="form-group">
              <label for="surname">Surname:</label>
              <input class="form-control" type="text" name="surname" placeholder="Doe" required>
            </div>
            <div class="form-group">
              <label for="address">Address:</label>
              <textarea class="form-control" id="address" name="address" rows="3" placeholder="Full Address" required></textarea>
            </div>
            <div class="form-group">
              <label for="postcode">Postcode:</label>
              <input  type="text" name="postcode" placeholder="NW5 4PJ" required>
              <label for="area">Area:</label>
              <input type="text" name="area" placeholder="London" required>
              <label for="keycode">Keycode:</label>
              <input type="text" name="keycode" placeholder="1234">
            </div>
            <div class="form-group">
              <p>This is to be displayed in the carers application.</p>
              <label for="general_information">General Information:</label>
              <textarea class="form-control" id="address" name="general_information" rows="3" placeholder="This is to be displayed in the carers application"></textarea>
            </div>
            <div class="form-group">
              <label for="levelVulnerability">Level of Vulnerability:</label><br>
              <input type="radio" name="level_vulnerability" value="Low" checked/> Low <br>
              <input type="radio" name="level_vulnerability" value="Medium"/> Medium <br>
              <input type="radio" name="level_vulnerability" value="High"/> High <br>

            </div>
            <div class="row">

            <div class="col-sm text-center padding">
                <input class="btn btn-primary btn-lg" name="submit" type="submit" value="Submit">
            </div>
            <div class="col-sm text-center padding">
              <a href="panel.php" name="back" class="margin">
                <button href="panel.php" class="btn btn-primary btn-lg" type="button">Go Back</button>
              </a>
            </div>

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

<!--  <select class="form-control" name="levelVulnerability">
<option value="low">Low</option>
<option value="medium">Medium</option>
<option value="high">High</option>
</select> -->
