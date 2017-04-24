<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php");?>
<?php include("../includes/layouts/header.php");?>
<?php @changeToHTTP(); ?>
<div class="container justify-center">
  <h2>View Reports</h2>
  <p class="text-justify"> <strong>Number of clients: </strong></p><h3>
    <?php
    echo displayNumClients();
    ?></h3>
  <p class="text-justify"> <strong>Visits added: </strong>The below graph shows the amount of visits given to your clients on a daily basis.</p>
  <div id="visualization"></div>

<script type="text/javascript"> displayClientsGraph(); </script>
</div>
  <?php include("../includes/layouts/footer.php"); ?>
</body>
</html>
