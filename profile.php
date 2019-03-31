<?php
include 'backend/functions.php';
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container target">
    <div class="row">
        <div class="col-sm-10">
             <h1 class="">DOCTOR</h1>
         
          <button type="button" class="btn btn-warning">Return to Profile</button>  <button type="button" class="btn btn-success">Appointments</button>
<br>
            <h2>Patient Details</h2>
        </div>
      <div class="col-sm-2"><a href="/users" class="pull-srisght"><img title="profile image" class="img-circle img-responsive" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTBG685vI07-3MsuqJxjCfzIabfFJJG-8yM-ppvjjNpD5QNtWNE4A"></a>
        <h4> &nbsp; &nbsp; Hey, <span id="doctorName"> Doctor</span></h4>

        </div>
    </div>
  <br>
    <div class="row">
        <div class="col-sm-3">
            <!--left col-->
            <ul class="list-group">
                <?php
                showdruser();
                ?>                
            </ul>
           <div class="panel panel-default">
             
             <div class="panel-heading">Reminders:

                </div>
               <div class="panel-body"><button type="button" class="btn btn-info">Upcoming Appointments<br><button type="button" class="btn btn-secondary">Health Status</button>
                

                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">NOTIFICATIONS <i class="fa fa-link fa-1x"></i>

                </div>
                <div class="panel-body"><a href="http://bootply.com" class="">~Non-compliance to certain checklist items~</a>

                </div>
            </div>
        </div>
        <div class = "col-sm-6">
                           <div class="row">
        <div class="col-md-12">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-file">
                            </span>MEDICAL DETAILS</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <form method="post">
                            <label> Weight (KG): </label> <input type="text" name="weight" class="form-control" placeholder="Weight" required />
                            <label> Height(meters): </label> <input type="text" name="height"class="form-control" placeholder="Height" required />
                            <label> Blood Group: </label>
                            <input type="text" name="bloodpressure"class="form-control" placeholder="Blood Pressure" required />   
                                
                            <button type="submit" name="submit1" class="btn btn-success">Upload</button>
                        <?php
                        // uploadPre();
                        ?>    
                        </form>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th-list">
                            </span>&nbsp;&nbsp;UPLOAD MEDICAL REPORT</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form class="form form-inline " role="form">
                                         <label for="sel1">Select list:</label>
                                                  <select class="form-control" id="sel1">
                                                    <option>Medical Report</option>
                                                    <option>Prescription</option>
                                                  </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="btn-group">
                                            <div class="form-group">
                                
                                        <input type="text" class="form-control" placeholder="Title" required />
                                                
                                                </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Description" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="well well-sm well-primary">
                                        <div class="form-group">
                                        <button type="button" class="btn btn-success">Upload</button>
                                            <a href="http://www.jquery2dotnet.com" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-floppy-disk">
                                            </span>Save</a>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Title" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Description" required />
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Keywords" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="well well-sm well-primary">
                                        <form class="form form-inline " role="form">
                                        <div class="form-group">
<!--
                                            <a href="http://www.jquery2dotnet.com" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-floppy-disk">
                                            </span>Save</a>
-->
                                        </div>
                                         
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            
            </div>
        </div>
        
    </div>
</body>
</html>

