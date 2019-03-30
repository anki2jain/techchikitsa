<?php
include 'backend/functions.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
.container {
  display: table;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
}

.wrapper {
  display: table-cell;
  vertical-align: middle;
}

.wrapper-inner {
  margin-left: auto;
  margin-right: auto;
  width: 400px;
  /*whatever width you want*/
}
    </style>

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container target">
        <div class="row">
            <div class="col-sm-10">
                 <h1 class="">DOCTOR</h1>
             
              <button type="button" class="btn btn-warning">Return to Profile</button>  <button type="button" class="btn btn-success">Appointments</button>
    <br>
                <!-- <h2>Patient Details</h2> -->
            </div>
          <div class="col-sm-2"><a href="/users" class="pull-sright"><img title="profile image" class="img-circle img-responsive" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBG685vI07-3MsuqJxjCfzIabfFJJG-8yM-ppvjjNpD5QNtWNE4A"></a>
            <h4> &nbsp; &nbsp; Hey, <span id="doctorName">Ankit jain</span></h4>
    
            </div>
        </div>
        <div class="container text-center">
            <div class="wrapper">
             <div class="wrapper-inner">
            <label> <h3>Enter Unique Customer ID:</h3></label>
              <div class="form-group">
                  <form method="GET">
                      <input type="text" class="form-control" id="usr" name="userid" placeholder="Customer ID">
                      <br>
                      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                      <?php
                  checkpatient();
                  ?>
                  </form>
                  
              </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
