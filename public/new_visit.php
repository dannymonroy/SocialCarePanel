<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/functions.php");?>
<?php require_once("../includes/db_connection.php"); ?>
<?php include("../includes/layouts/header.php");?>
<?php notLoginRedirect(); ?>
<!--

Social Care Management Panel: new_visit.php
Danny Monroy, drodri06
Form that posts the information to create_visit.php.

-->
  <div class="container text-center">
    <div class="padding">
      <h4 class="display-4">New Visit</h4>
    </div>
  </div>
  <div class="container text-center">
    <p>Please introduce all fields of an existing carer and client to create a new visit.
      This visit will show in the carers Android application.</p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-2">
        <!-- Column for Spacing -->
      </div>
        <div class="col-8">
          <form class="" action="create_visit.php" method="post">
            <div class="form-group">
              <label for="client-id">Select Client:</label>
              <?php
              $query =  "SELECT client_id, name, surname FROM Clients";
              $result = mysqli_query($connection, $query); ?>
              <select class="form-control" name="client_id">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<option value=\""; echo $row['client_id']."\""; echo ">".$row['name']." ".$row['surname']; echo "</option>";
                } ?>
              </select>
            </div>

            <div class="form-group">
              <label for="carer_id">Select Carer:</label>
              <?php
              $query =  "SELECT carer_id, name, surname FROM Carers";
              $result = mysqli_query($connection, $query); ?>
              <select class="form-control" name="carer_id">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                  echo " <option value=\""; echo $row['carer_id']."\""; echo ">".$row['name']." ".$row['surname']; echo "</option>";
                } ?>
              </select>
            </div>


            <div class="form-group">
                <label for="start_time">Start Time:</label>
                <input type="text" name="start_time" placeholder="00:00" required>
                <label for="end_time">End Time:</label>
                <input type="text" name="end_time" placeholder="00:00" required>
            </div>
            <div class="form-group">
              <label for="date">Date:</label>
              <input type="text" name="date" placeholder="dd/mm/yyyy" required>
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
        <!-- Column for Spacing -->
      </div>
    </div>
  </div>
  <?php include("../includes/layouts/footer.php"); ?>
  </body>
</html>
