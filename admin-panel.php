<?php
// php select option value from database
$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "loginsystem";
// connect to mysql database
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
// mysql select query
$query = "SELECT * FROM `Trainer`";
// for method 1
$result1 = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Register New Member</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
    <div class="jumbotron" style="border-radius:0;background:url('images/3.jpg');background-size:cover;height:400px;"></div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="list-group">
            <a href="" class="list-group-item active">Members</a>
            <a href="member_details.php" class="list-group-item">Member details</a>
            <a href="package.php" class="list-group-item">Package details</a>
            <a href="payment.php" class="list-group-item">Payments</a>
          </div>
          <hr>
          <div class="list-group">
            <a href="trainer.php" class="list-group-item active">Trainer</a>
            <a href="trainer_details.php" class="list-group-item active">Trainer details</a>
            <a href="trainer.php" class="list-group-item active">Add new Trainer</a>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card">
            <div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
              <h3 class="text-white">Register new members</h3>
            </div>
            <div class="card-body"></div>
            <form class="form-group px-3" name="contactForm" onsubmit="return validateForm()" id="form" action="func.php" method="post">
              <label>Member Full Name:<span style="color:red">*</span></label>
              <input type="text" name="fname" id="fname" class="form-control">
              <br>
              <label>Email<span style="color:red">*</span></label>
              <input type="email" name="email" id="email" class="form-control">
              <br>
              <label>Phone Number<span style="color:red">*</span></label>
              <input type="tel"  name="contact" id="contact" class="form-control">
              <br>
              <label>Select Trainer For Member<span style="color:red">*</span> </label>
              <?php
                $con = mysqli_connect("localhost", "root", "", "loginsystem");
                  $sql = "select Name from trainer";
                  $result = mysqli_query($con,$sql);
                  ?>
                  <select name="tainername" id="packname" class="form-control"  >
                    <?php $i=0;?>
                    <?php while($row = mysqli_fetch_array($result)): ?>
                    <option value="<?php echo $row["Name"];?>">
                    <?php echo $row["Name"];?>
                    </option>
                    <?php $i++; ?>
                    <?php endwhile ?>
                  </select>
              <br>
              <input type="submit" class="btn btn-primary" name="pat_submit" value="Register">
              <a href="func.php" class="btn btn-light"></a>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
    <header style="position:absolute;top:15px;right:15px">
      <nav>
        <div class="main-wrapper">
          <div class="nav-login"> <?php
                    if (isset($_SESSION['u_id'])) {
                  echo '
																		<form action="includes/index.php" method="POST">
																			<button type="submit" name="submit">logout</button>
																		</form>';	
                                    } else{
                  
                  echo '
																		<form action="includes/index.php" method="POST"></form>
																		<a href="index.php" class="btn btn-light" style="background-color:#3498DB;color:FFFFFF">Logout</a>';
                  
                }
              
                ?> </div>
        </div>
      </nav>
    </header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script>
          function validateForm() {
          var fname = document.forms["contactForm"]["fname"].value;
          var sname = document.forms["contactForm"]["email"].value;
          var contact = document.forms["contactForm"]["contact"].value;
          var docapp = document.forms["contactForm"]["docapp"].value;

          if (fname == null || fname == "") {
              alert("Member full name is required!");
              return false;
          } else if (sname == null || sname == "") {
              alert("Email Id is required!");
              return false;
          } else if (contact == null || contact == "") {
              alert("Contact is required");
              return false;
          }
      }
    </script>
  </body>
</html>