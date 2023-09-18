<!DOCTYPE html> <?php include("func.php");?> <html>
  <head>
    <title>Members details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
    <div class="jumbotron "  style="background: url('images/2.jpg') no-repeat;background-size: cover;height: 300px;"></div>
    <div class="container mb-3">
      <div class="card">
        <div class="card-body " style="background-color:#3498DB;color:#ffffff;">
          <div class="row">
            <div class="col-md-1">
              <a href="admin-panel.php" class="btn btn-light ">Go Back</a>
            </div>
            <div class="col-md-3">
              <h3>Member Details</h3>
            </div>
            <div class="col-md-8">
   
            </div>
          </div>
        </div>
        <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
          <div class="card-body">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Member ID</th>
                  <th>Member Name</th>
                  <th>Member Email</th>
                  <th>Member Phone No</th>
                  <th>Trainer For Member</th>
                </tr>
              </thead>
              <tbody> <?php get_member_details(); ?> </tbody>
            </table>
          </div>
        </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
  </body>
</html>