<?php
// echo '<script>alert("hii");</script>';
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
        
        
        //$pic=$_POST['pic'];
        // $q="show table where $product";
        // $dub ="SELECT * from `$product`";
        // $check =mysqli_query($link,$dub);
        // $filename1=$_FILES['pic']['name'];
        // $tempname1=$_FILES['pic']['tmp_name'];
        // $folder1 = "fileupload/".$filename1 ;
        // move_uploaded_file($tempname1,$folder1);
        // if(mysqli_num_rows($check))
        // {
        //     echo '<div class="alert alert-danger"> product already exist</div>';
        // }
        // else 
         
            $add = "INSERT INTO `users` (name,age,aadhar,password,email,mobile) VALUES ('$name','$age','$aadhar','$password','$email','$mobile')";
        // $add ="INSERT INTO users (mobile) VALUES ('98987')";
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
        $age= $_POST['age'];
        
        
        //$pic=$_POST['pic'];
        // $q="show table where $product";
        // $dub ="SELECT * from `$product`";
        // $check =mysqli_query($link,$dub);
        // $filename1=$_FILES['pic']['name'];
        // $tempname1=$_FILES['pic']['tmp_name'];
        // $folder1 = "fileupload/".$filename1 ;
        // move_uploaded_file($tempname1,$folder1);
        // if(mysqli_num_rows($check))
        // {
        //     echo '<div class="alert alert-danger"> product already exist</div>';
        // }
        // else 
         
            $add = "INSERT INTO `users` (name,age,medlic,password,email,mobile) VALUES ('$name','$age','$medlic','$password','$email','$mobile')";
        // $add ="INSERT INTO users (mobile) VALUES ('98987')";
           
        
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
?>