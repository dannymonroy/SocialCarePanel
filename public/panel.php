<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php");?>

<?php
  $query = "SELECT * FROM test;";
  $result = mysqli_query($connection, $query);
  //Functions: Confirms if the query was successful.
  confirm_query($result);
?>

<?php include("../includes/layouts/header.php");?>

  <div class="container">
    <h2>Welcome, <?php echo @displayName($_POST['username']);?></h2>
    </div>
      <div class="container justify-center">
           <main class="col text-center">
             <h1>Dashboard</h1>
             <section class="row text-center placeholders">
               <div class="col-6 col-sm-3 placeholder">
                 <a href="create_client.php">
                 <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                 </a>
                 <h4>Clients</h4>
                 <div class="text-muted">Add or view clients</div>
               </div>
               <div class="col-6 col-sm-3 placeholder">
                 <a href="create_carer.php">
                 <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                 </a>
                 <h4>Carers</h4>
                 <span class="text-muted">Add or view carers</span>
               </div>
               <div class="col-6 col-sm-3 placeholder">
                 <a href="create_visit.php">
                 <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                 </a>
                 <h4>Visits</h4>
                 <span class="text-muted">Create new visits</span>
               </div>
               <div class="col-6 col-sm-3 placeholder">
                 <a href="reports.php">
                 <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                 </a>
                 <h4>Reports</h4>
                 <span class="text-muted">View reports</span>
               </div>
             </section>
           </main>
           <div class="container justify-center">
             <div class="col text-center">
             <h2>Visits Today</h2>
             </div>
           </div>
           <table class="table">
             <thead class="thead-inverse">
               <tr>
                 <th>Title</th>
                 <th>Name</th>
                 <th>Area</th>
                 <th>Start Time</th>
               </tr>
             </thead>
 <tbody>
   <?php
    while($row = mysqli_fetch_assoc($result)){
      ?>
   <tr>
     <th scope="row"><?php echo $row['title']?></th>
     <td><b><?php echo $row['full_name']?></b></td>
     <td><?php echo $row['area']?></td>
     <td><?php echo $row['start_date']?></td>
   </tr>

   <?php } ?>
 </tbody>
</table>

    <!-- Bootstrap 4: Scripts  -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <?php
    // Making the database in memory free when is no longer needed.
    mysqli_free_result($result); ?>
    <?php include("../includes/layouts/footer.php"); ?>
  </body>
</html>
