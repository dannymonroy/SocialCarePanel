<?php require_once("../includes/functions.php");?>
<?php include("../includes/layouts/header.php");?>
  <div class="container text-center">
    <div class="padding">
      <h4 class="display-4">Create Visit</h4>
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
              <label for="client-id">Select Client:</label>
              <select class="form-control" name="client_id">
                <option value=""></option>
              </select>
            </div>
            <div class="form-group">
              <label for="carer_id">Select Carer:</label>
              <select class="form-control" name="carer_id">
                <option value=""></option>
              </select>
            </div>
            <div class="form-group">
                <label for="start_time">Start Time:</label>
                <input type="text" name="start_time" placeholder="00:00">
                <label for="end_time">End Time:</label>
                <input type="text" name="end_time" placeholder="00:00">
              <label for="date">Date:</label>
              <input type="text" name="date" placeholder="dd/mm/yy">
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
<!--
<div class="container justify-center">
<div class="col"></div>
<div class="col-3">
<h2>Create Visit</h2>
<div class="form-group">
<form class="" action="create_visit.php" method="post">
<label for="title" class="col-3 col-form-label">Title</label>
<div class="col-6">
<input class="form-control" name="title" type="text" placeholder="Mr" id="title">
</div>
</div>
<div class="form-group">
<label for="example-search-input" class="col-3 col-form-label">Full Name</label>
<div class="col-6">
<input class="form-control" name="full_name" type="text" placeholder="John Doe" id="example-search-input">
</div>
</div>
<div class="form-group">
<label for="example-email-input" class="col-3 col-form-label">Area</label>
<div class="col-6">
<input class="form-control" name="area" type="text" placeholder="London" id="example-email-input">
</div>
</div>
<div class="form-group">
<label for="example-url-input" class="col-3 col-form-label">Start Time</label>
<div class="col-6">
<input class="form-control" name="start_date" type="text" placeholder="00:00" id="example-url-input">
</div>
</div>
<div class="col-md text-center" id="submit">
<input class="btn btn-primary btn-lg" name="submit" type="submit" value="Submit">
</div>
</form>
</div>
<div class="col-3"></div>
</div>
-->
