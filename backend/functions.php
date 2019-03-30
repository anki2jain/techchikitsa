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
                header("Location: asd.php?userid=$aadhar");
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
            $row=mysqli_fetch_array($result);
            if($row['password']==$password){
                header('Location: http://www.facbook.com');
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
            $blood=$row['bloodgroup'];
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
            <i class="fa fa-map-marker light-orange bigger-110"></i>
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
    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Birthday: </strong></span>3 May 1981</li>
    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Age: </strong></span>'.$age.'</li>
    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Sex: </strong></span>M</li>
    <li class="list-group-item text-muted" contenteditable="false">Contact Details</li>
    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Telephone Number: </strong></span>'.$mobile.'</li>
    ';
    }}
else{
    header("Location : userId.php");
}

}
?>