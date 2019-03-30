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
                header("Location: asd.html?userid=$aadhar");
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
?>