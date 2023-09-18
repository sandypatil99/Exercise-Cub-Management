<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Members details</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="background: url('images/2.jpg') no-repeat;background-size: cover;height: 300px;"></div>	

 <div class="container">
<div class="card">
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="row">
             <div class="col-md-1">
    <a href="admin-panel.php" class="btn btn-light ">Go Back</a>
             </div>
             <div class="col-md-10"><h3> Trainer Information</h3></div>
        </div>
    </div>
     <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
         <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Trainer ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                        </tr>   
                    </thead>
                    <tbody>
                        <?php get_trainer(); ?>
                    </tbody>
                </table>
                <div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
                   <h3>Register new Trainer</h3>
                </div> 
                <form class="form-group" name="traineform" onsubmit="return validateForm()" action="func.php" method="post">
                    <label>Trainer Name</label>
                        <input type="text" name="Name" id="trainername" class="form-control"><br>
                    <label>Phone</label>
                        <input type="text" name="phone" id="trainerphone" class="form-control"><br> 
                        <input type="submit" class="btn btn-primary" name="tra_submit" value="Register">
                  </div>
                </div>
            </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
    <script>
          function validateForm() {
          var trainername = document.forms["traineform"]["trainername"].value;
          var trainerphone = document.forms["traineform"]["trainerphone"].value;

          if (trainername == null || trainername == "") {
              alert("Please Enter Full Number!");
              return false;
          } else if (trainerphone == null || trainerphone == "") {
              alert("Please Enter Phone Number");
              return false;
          }
      }
    </script>
    </body>
</html>