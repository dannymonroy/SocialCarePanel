<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php");?>
<?php include("../includes/layouts/header.php");?>
<?php notLoginRedirect(); ?>

<!--

Social Care Management Panel: new_carer.php
Danny Monroy, drodri06
Form that posts the information to create_carer.php.

-->

      <div class="container justify-center">
           <main class="col text-center">
             <div class="padding">
             <h4 class="display-4">Dashboard</h4>
             </div>
             <section class="row text-center placeholders">
               <div class="col-6 col-sm-3 placeholder">
                 <a href="new_client.php">
                 <!--<img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">-->
                 <img src="images/icon_client.png" width="200" height="200" class="img-fluid" alt="Generic placeholder thumbnail">
                 </a>
                 <h4>Clients</h4>
                 <div class="text-muted">Add a new client</div>
                 <blockquote class="lead error"><?php echo messageClient(); ?></blockquote>
               </div>
               <div class="col-6 col-sm-3 placeholder">
                 <a href="new_carer.php">
                  <img src="images/icon_carer.png" width="200" height="200" class="img-fluid" alt="Generic placeholder thumbnail">
                 <!--<img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">-->
                 </a>
                 <h4>Carers</h4>
                 <span class="text-muted">Add a new carer</span>
                <blockquote class="lead error"><?php echo messageCarer(); ?></blockquote>
               </div>
               <div class="col-6 col-sm-3 placeholder">
                 <a href="new_visit.php">
            <!--<img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">-->
                 <img src="images/icon_visit.png" width="200" height="200" class="img-fluid" alt="Generic placeholder thumbnail">
                 </a>
                 <h4>Visits</h4>
                 <span class="text-muted">Add a new visit</span>
                 <blockquote class="lead error"><?php echo messageVisit(); ?></blockquote>
               </div>
               <div class="col-6 col-sm-3 placeholder">
                 <a href="http://socialcareapp.000webhostapp.com/public/reports.php">
                 <img src="images/icon_reports.png" width="200" height="200" class="img-fluid" alt="Generic placeholder thumbnail">
                 <!--<img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">-->
                 </a>
                 <h4>Reports</h4>
                 <span class="text-muted">View reports</span>
                 <blockquote class="lead error"><?php echo messageEraseVisit(); ?></blockquote>
               </div>
             </section>
           </main>
           <div class="padding">

           </div>
           <div class="container justify-center">
             <div class="col text-center">
               <div class="padding">
                 <h4 class="display-4">Visits Today</h4>
               </div>
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
    $result = find_all_visists();
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
</div>
<div class="col-sm text-center padding">
  <a href="erase_visit.php" name="back" class="margin">
    <button class="btn btn-primary btn-lg" type="button">Delete Visit</button>
  </a>
</div>
<?php include("../includes/layouts/footer.php"); ?>
    <!-- Bootstrap 4: Scripts  -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <?php
    // Making the database in memory free when is no longer needed.
    mysqli_free_result($result); ?>

  </body>
</html>
