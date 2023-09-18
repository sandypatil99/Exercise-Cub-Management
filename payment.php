<!DOCTYPE html> <?php include("func.php");?> <html>
  <head>
    <title>Members details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
    <div class="jumbotron" style="background: url('images/2.jpg') no-repeat;background-size: cover;height: 300px;"></div>
    <div class="container mb-3">
      <div class="card">
        <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
          <div class="row">
            <div class="col-md-1">
              <a href="admin-panel.php" class="btn btn-light ">Go Back</a>
            </div>
            <div class="col-md-3">
              <h3>Payment Details</h3>
            </div>
            <div class="col-md-8">
              <form class="form-group" action="patient_search.php" method="post">
                <div class="row">
              </form>
            </div>
          </div>
        </div>
        <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr>
                <th>Customer ID</th>
                <th>Customer Name</th>
                  <th>Amount</th>
                  <th>Payment Type</th>
                </tr>
              </thead>
              <tbody> <?php get_payment(); ?> </tbody>
            </table>
            <div class="card-body" style="background-color:#3498DB;color:FFFFFF;">
              <h3 class="m-0">Make new Payment</h3>
            </div>
            <form class="form-group px-3" name="contactForm" onsubmit="return validateForm()" id="form" action="func.php" method="post">
            <!-- <label>Member ID</label>
              <input type="text" name="customer_id" id="customerid" class="form-control" onkeyup="GetDetails(this.value)">
              <br> -->

              <label>Member Name</label>
              <input type="text" name="customer_name" id="customername" class="form-control">
              <br>

              <label>Select Package</label>
              <?php
                $con = mysqli_connect("localhost", "root", "", "loginsystem");
                  $sql = "select Package_name, Amount from package";
                  $result = mysqli_query($con,$sql);
                  ?>
                  <select name="packname" id="packname" onChange="get_data()" class="form-control"  >
                    <?php $i=0;?>
                    <?php while($row = mysqli_fetch_array($result)): ?>
                    <option value="<?php echo $row["Amount"];?>">
                    <?php echo $row["Package_name"];?>
                    </option>
                    <?php $i++; ?>
                    <?php endwhile ?>
                  </select>
              <br>

              <label>Amount</label>
              <input type="text" name="Amount" id="showvalue"  class="form-control" readonly>
              <br>
    
              <label>Payment Type</label>
              <select name="payment_type" class="form-control" id="dropdown" name="paymenttype" >
                  <option value="">Select Payment Type</option>
                  <option value="cash">Cash</option>
                  <option value="cheque">Cheque</option>
                  <option value="online">Online</option>
              </select>
              <br/>
              <input type="submit" class="btn btn-primary" name="pay_submit" value="PAY">
          </div>
        </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
      <script>
         function get_data()
            {
                var option_value = document.getElementById("packname").value;
                var dataString =  option_value;

                console.log(dataString);

              var shwovalueinput = document.getElementById("showvalue").value = dataString;

            } 
      </script>
      <script>
          function GetDetails(str){
              if(str.length == 0){
                  document.getElementById("customername").value= "";
                  return;
              }
              else{
                  var xmlhttp = new XMLHttpRequest();

                xmlhttp.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        var myObj = JSON.parse(this.responseText);
                        document.getElementById("customername").value = myObj[0];

                    }
                }

                  xmlhttp.open("GET" , "searchpayment.php?customerid=" + str, true );
                  xmlhttp.send();
              }
          }
      </script>
         <script>
          function validateForm() {
          var sname = document.forms["contactForm"]["customer_name"].value;
          var docapp = document.forms["contactForm"]["payment_type"].value;

          if (sname == null || sname == "") {
            alert("Member name is required!");
              return false;
          }
         else if (docapp == null || docapp == "") {
              alert("Please select payment type");
              return false;
          }
      }
    </script>
    </div>
  </body>
</html>