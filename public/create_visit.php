<?php require_once("../includes/functions.php");?>
<?php include("../includes/layouts/header.php");?>
  <div class="container justify-center">
     <div class="col">
        <h2>Create Visit</h2>
        <div class="form-group">
          <label for="title" class="col-3 col-form-label">Title</label>
          <div class="col-6">
            <input class="form-control" type="text" placeholder="Mr" id="title">
          </div>
        </div>
        <div class="form-group">
          <label for="example-search-input" class="col-3 col-form-label">Full Name</label>
          <div class="col-6">
            <input class="form-control" type="search" placeholder="John Doe" id="example-search-input">
          </div>
        </div>
        <div class="form-group">
          <label for="example-email-input" class="col-3 col-form-label">Area</label>
          <div class="col-6">
            <input class="form-control" type="email" placeholder="London" id="example-email-input">
          </div>
        </div>
        <div class="form-group">
          <label for="example-url-input" class="col-3 col-form-label">Start Time</label>
          <div class="col-6">
            <input class="form-control" type="url" placeholder="00:00" id="example-url-input">
          </div>
        </div>
        <div class="col-md text-center" id="submit">
          <input class="btn btn-primary btn-lg" type="submit" value="Submit">
        </div>
  </div>
</div>
