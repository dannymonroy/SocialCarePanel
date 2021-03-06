<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php");?>
<?php include("../includes/layouts/header.php");?>
<?php @changeToHTTP(); ?>
<?php notLoginRedirect(); ?>
<!--

Social Care Management Panel: reports.php
Danny Monroy, drodri06
This area reports on information that exists in the database.
The graph is included with hard coded data for demostration purposes.

-->
<div class="container justify-center">
  <h2 class="margin-top">View Reports</h2>

  <p class="text-justify"> <strong>Number of clients: </strong></p><h3 class="margin-top">
    <?php
    echo displayNumClients();
    ?></h3>
  <p class="text-justify"> <strong>Number of clients with High Vulnerability: </strong></p><h3 class="margin-top">
    <?php
    echo displayNumClientsHigh();
    ?></h3>
  <p class="text-justify"> <strong>Number of clients with Medium Vulnerability: </strong></p><h3 class="margin-top">
    <?php
    echo displayNumClientsMedium();
    ?></h3>
  <p class="text-justify"> <strong>Number of clients with Low Vulnerability: </strong></p><h3 class="margin-top">
    <?php
    echo displayNumClientsLow();
    ?></h3>
  <p class="text-justify"> <strong>Visits added: </strong> </p>
  <p>The below graph shows the amount of visits given to your clients on a daily basis.</p>
  <div id="visualization" class="margin-top"></div>

<script type="text/javascript"> displayClientsGraph(); </script>
<div class="container text-center">
  <a href="panel.php" name="back" class="margin">
    <button href="panel.php" class="btn btn-primary btn-lg" type="button">Go Back</button>
  </a>
</div>
</div>
  <?php include("../includes/layouts/footer.php"); ?>
</body>
</html>
