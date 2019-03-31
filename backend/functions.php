<?php
ob_start();
function connect_database(){
    $link = mysqli_connect("localhost","root","","heathcentre");
    if( mysqli_connect_error()){
         die("something is fishy");
     }     
return $link;

}

function sign(){

    if(isset($_POST["submit"])){
        echo '<script>alert("hrr");</script>';
        $link=connect_database();
        $name= $_POST['name'];
        $mobile= $_POST['mobile'];
        $email= $_POST['email'];
        $aadhar= $_POST['aadhar'];
        $password= $_POST['password'];
        $age= $_POST['age'];         
            $add = "INSERT INTO `users` (name,age,aadhar,password,email,mobile) VALUES ('$name','$age','$aadhar','$password','$email','$mobile')";
            $addt="CREATE TABLE `$aadhar` (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                prescription TEXT,
                remark TEXT,
                report TEXT,
                height TEXT,
                -- weight TEXT,
                bloodpressure TEXT,
                bloodgroup TEXT

                )";
        
        if (mysqli_query($link,$add)  )
        {
            echo '<script>alert("partially done");</script>';
    if(mysqli_query($link,$addt)){
            echo '<script> alert("Done!")</script>'; }
        // }
        }
         else {
        echo '<script> alert("Not Done!")</script>';
        
        echo "Error: " . $addt . "<br>" . $link->error;
        
        echo "Error: " . $add . "<br>" . $link->error;
        }
        
        
        
        
        }
        
}



function signdr(){

    if(isset($_POST["submit"])){
        echo '<script>alert("hrr");</script>';
        $link=connect_database();
        $name= $_POST['name'];
        $mobile= $_POST['mobile'];
        $email= $_POST['email'];
        $medlic= $_POST['medlic'];
        $password= $_POST['password'];
        $add = "INSERT INTO `doctors` (name,medlic,password,email,mobile) VALUES ('$name','$medlic','$password','$email','$mobile')";
        if (mysqli_query($link,$add)  )
        {
            echo '<script>alert("done");</script>';
            header( "Location : index.php");
        }
         else {
        echo '<script> alert("Not Done!")</script>';
        
        echo "Error: " . $addt . "<br>" . $link->error;
        
        echo "Error: " . $add . "<br>" . $link->error;
        }
        
        
        
        
        }
        
}

function loginuser(){

    if(isset($_POST["submit"])){
        $link=connect_database();
        $aadhar= $_POST['aadhar'];
        $password= $_POST['password'];
        $add = "SELECT * from `users` where aadhar='$aadhar' ";
        $result=mysqli_query($link,$add);
        if($result)
        {
            $row=mysqli_fetch_array($result);
            if($row['password']==$password){
                header("Location: profileuser.php?userid=$aadhar");
            // echo '<script>alert("done");</script>';
            // header( "Location : index.php");
        }
            else{
                echo '<script>alert("Please check your password");</script>';
            }
        }
         else {
        echo '<script> alert("user not exist!")</script>';
        
        // echo "Error: " . $addt . "<br>" . $link->error;
        
        echo "Error: " . $add . "<br>" . $link->error;
        }     
        }
        
}

function logindr(){

    if(isset($_POST["submit"])){
        $link=connect_database();
        $medlic= $_POST['medlic'];
        $password= $_POST['password'];
        $add = "SELECT * from `doctors` where medlic='$medlic' ";
        $result=mysqli_query($link,$add);
        if($result)
        {
            echo "<script>alert($password);</script>";
            $row=mysqli_fetch_array($result);
            if($row['password']==$password){
                header('Location: userid.php');
            // echo '<script>alert("done");</script>';
            // header( "Location : index.php");
        }
            else{
                echo '<script>alert("Please check your password '.$password.'");</script>';
            }
        }
         else {
        echo '<script> alert("user not exist!")</script>';
        
        // echo "Error: " . $addt . "<br>" . $link->error;
        
        echo "Error: " . $add . "<br>" . $link->error;
        } 
        }
        
}

function userd(){

    if(isset($_GET["userid"])){
        $link=connect_database();
        $userid=$_GET["userid"];
        $add = "SELECT * from `users` where aadhar='$userid' ";
        $result=mysqli_query($link,$add);
        if($result)
        {
            $row=mysqli_fetch_array($result);
            $name=$row['name'];
            $mobile=$row['mobile'];
            $blood=$row['blood_group'];
            $age=$row['age'];
            if($blood==null)
            {
                echo '<div class="alert alert-danger">
                <strong>Oops!</strong> Blood group details not available. Please Update Your Blood.
              </div>';
            }
echo '
<div class="col-xs-12 col-sm-9">
							
<div class="profile-user-info">
    <div class="profile-info-row">
        <div class="profile-info-name"> Name </div>

        <div class="profile-info-value">
            <span>'.$name.'</span>
        </div>
    </div>

    <div class="profile-info-row">
        <div class="profile-info-name"> Age </div>

        <div class="profile-info-value">
           
            <span>'.$age.'</span>
        </div>
    </div>

    <div class="profile-info-row">
        <div class="profile-info-name"> Blood Group </div>

        <div class="profile-info-value">
            <span>'.$blood.'</span>
        </div>
    </div>

    <div class="profile-info-row">
        <div class="profile-info-name"> Mobile NO. </div>

        <div class="profile-info-value">
            <span>'.$mobile.'</span>
        </div>
    </div>
    </div>
    
    ';}}
    else{
        echo '<script>alert("please login first");</script>';
        header('Location:user_login.php');
        
    }
}

function showdruser(){
    if(isset($_GET["userid"])){
        $link=connect_database();
        $userid=$_GET["userid"];
        $add = "SELECT * from `users` where aadhar='$userid' ";
        $result=mysqli_query($link,$add);
        if($result)
        {
            $row=mysqli_fetch_array($result);
            $name=$row['name'];
            $mobile=$row['mobile'];
            $blood=$row['bloodgroup'];
            $age=$row['age'];
            $email=$row['email'];
    echo  '<li class="list-group-item text-muted" contenteditable="false">Profile</li>
    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Name: </strong></span>'.$name.'</li>
    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Address: </strong></span> Ermita, Manila</li>
    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Email: </strong></span>'.$email.'</li>
    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Blood Group: </strong></span>AB+</li>
    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Age: </strong></span>'.$age.'</li>
    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Sex: </strong></span>M</li>
    <li class="list-group-item text-muted" contenteditable="false">Contact Details</li>
    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Telephone Number: </strong></span>'.$mobile.'</li>
    ';
    }
    else{
        echo '<script>alert("SOrry");</script>';
    }

}
else{
    header("Location : userId.php");
}

}

function checkpatient(){
    if(isset($_GET["submit"])){
        $link=connect_database();
        $userid=$_GET["userid"];
        $add = "SELECT * from `users` where aadhar='$userid' ";
        $result=mysqli_query($link,$add);
        if($result)
        {
            header("Location:profile.php?userid=$userid");
            // $row=mysqli_fetch_array($result);
            // $name=$row['name'];
            // $mobile=$row['mobile'];
            // $blood=$row['bloodgroup'];
            // $age=$row['age'];
            // $email=$row['email'];
    }
    else{
        echo '<script>alert("PLease Enter valid user id");</script>';
    }
        
}
else{
    echo '<script>alert("PLease Enter valid user id");</script>';
}

}

function drpres(){
   
    if(isset($_GET["userid"])){

     
        $link=connect_database();
        $userid=$_GET["userid"];
        $add = "SELECT * from `$userid`";
         echo "<script>alert($add);</script>";
        $result=mysqli_query($link,$add);
        if($result)
        {

        
            while($row=mysqli_fetch_array($result)){
                $timestamp = $row['timestamp'];
                $timestamp = date_create_from_format('Y-m-d H:i:s', $timestamp);
                $date =date_format($timestamp, 'd-m-Y');

                // $tt="SELECT DATE('2003-12-31 01:02:03'); -> '2003-12-31'";
                // $qu=mysqli_query($link,$tt);
                // $date=date($row['timestamp']);
                echo '<div class="card p-4 m-4">
                <div class="card-body">
                  <h5 class="text-center">Date:'.$date.'</h5>
                  <div class="row">
                    <div class="col-md-2">
                      <img src="'.$row['prescription'].'" style="height:180px; width:180px" alt="">
                    </div>
                    <div class="col-md-8 pl-4 ml-4">
                        <strong>Issue: '.$row['remark'].'</strong><br>
                      <strong>Type:
                      ';
                      if($row['prescription']!=NULL)
                      echo 'Prescription';
                      else
                      echo 'Report';

                      echo '
                      
                      
                      </strong>
          <br>
          <strong>Blood Pressure : '.$row['bloodpressure'].'</strong><br>
          <strong>Weight:'.$row['weight'].'Kg</strong>
          <br>
                     <br>
                     <a href="#">download prescription</a><br>
                     <a href="http://localhost/techchikista/'.$row['prescription'].'">view prescription</a>
                    </div>
                     
                  </div>
                 
                </div>
              </div>
        ';
            }
            echo 'done';
            // header("Location:profile.php?userid=$userid");
            // $row=mysqli_fetch_array($result);
            // $name=$row['name'];
            // $mobile=$row['mobile'];
            // $blood=$row['bloodgroup'];
            // $age=$row['age'];
            // $email=$row['email'];
    }
    else{
        echo '<script>alert($userid);</script>';
    }
        
}
else{
    echo '<script>alert("PLease Enter valid user id $");</script>';
}

}
function Uploadpre(){

}
?>