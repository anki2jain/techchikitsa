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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
    .head{
        margin-top: 30px;
        margin-bottom: 20px;
        color: teal;
        text-align: center;
    }
    .accordion {
  background-color: dimgray;
  color:black;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  text-align: center;
  border: none;
  outline: none;
  transition: 0.4s;
}
.jumbotron jumbotron-fluid{

    background-color: grey;
    back
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
.active, .accordion:hover {
  background-color:teal;
}

/* Style the accordion panel. Note: hidden by default */
.panel {
  padding: 0 18px;
  background-color: slategray;
  display: none;
  overflow: hidden;
}
body{
    background-color: lightgray;
    color: black;
    }
    .center{
       text-align: center;
       margin-top: 20px;
       margin-bottom: 20px;

    }

    </style>
  </head>
  <body>
    <div class="container head">
            <div class="jumbotron jumbotron-fluid" style="background-color:black;">
                    <div class="container">
                      <h1>Your Previous Records</h1>
                    </div>
                  </div>
    </div>
    <div class="container">
            <button class="accordion">User Maintained Record</button>
            <div class="panel">
                    <div class="container center">
                            <div class="row">
                              <div class="col">
                                    <button type="button" class="btn btn-secondary btn-lg">Prescription</button>
                                   
                              </div>
                              <div class="col">
                                    <button type="button" class="btn btn-secondary btn-lg">Test Reports</button>
                                    
                              </div>
                        </div></div>
            </div>
            
            <button class="accordion">Doctor Maintained Record</button>
            <div class="panel">
                    <div class="container">
                            <div class="row">
                              <div class="col">
                                    <button type="button" class="btn btn-secondary btn-lg">Prescription</button>
                                   
                              </div>
                              <div class="col">
                                    <button type="button" class="btn btn-secondary btn-lg">Test Reports</button>
                                    
                              </div>
                             
                        </div>
                      <div id="drpr">

                      
                  <?php
                  drpres();
                  ?>
                      </div>  
                      
                      
                      </div>
            </div>
            
           
    </div>
    <script>
           </script>
            

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}

</script>
            

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>