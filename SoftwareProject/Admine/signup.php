<?php
    if(isset($_POST['register']))
    {
        $name = $_POST['uname'] ;
        $email = $_POST['uemail'] ;
        $phn = $_POST['phone'] ;
        $pass = $_POST['password'] ;
        $cpass = $_POST['cpassword'] ;
        
        $rec_file = $_FILES['upload_img'] ;
        
        $image_name = $rec_file['name'] ;
        
        $image_tmp_name = $rec_file['tmp_name'] ;
        
        if(!empty($image_name))
        {
            
            $loc = "img/profile" ;
            
            move_uploaded_file( $image_tmp_name , $loc.$image_name ) ;
        }
        else
        {
            echo "File is empty" ;
        }
        
        
        // DB connection
        $conn = mysqli_connect('localhost','root','','mydb') ;
        
        if(!$conn){
            die("Not Connected" . mysqli_error($conn)) ;
        }
        
        // Insert Query
        
        // Password & Confirm Password
        if( $pass == $cpass)
        {
            // Checking Email Alreday Exists or Not
            
            $query = " SELECT * FROM user WHERE useremail='$email' " ;
            
            $query_check = mysqli_query($conn,$query) ;
            
            // QUERY CHECK
            
            if($query_check)
            {
                if(mysqli_num_rows($query_check) >  0)
                {
                    echo"<script>
                            alert('Email Already In Use') ; 
                            location.assign('login.php');
                        </script>" ;
                }
                else
                {
                    // email check else
                    $insertion = "INSERT INTO user (profile_pic,username,useremail,phone,password) VALUES ( '$image_name' ,'$name' ,  '$email' , '$phn' , '$pass' )";
                    
                    $query_run = mysqli_query($conn,$insertion) ;
                    
                    if($query_run)
                    {
                        echo "<script>location.assign('login.php');</script>";
                    }
                    else
                    {
                        // run else
                        echo"<script>
                        alert('Registration not Successfully Done!!! TRY AGAIN') ;
                        location.assign('signup.php');
                    </script>" ;
                        //echo "Registration not Successfully Done!!! TRY AGAIN" ;
                        //echo "<script>location.assign('signup.php');</script>";
                    }
                }
            }
            else
            {
                echo"<script>
                        alert('DB ERROR') ;
                        location.assign('signup.php');
                    </script>" ;
            }
        }
        else
        {
             // password else
            echo"<script>
                    alert('Password & Confirm Password Doesn't match') ;
                    location.assign('signup.php');
                </script>" ;
        }
    }
?>

<!doctype html>
<html lang="en">

<head>
    <title>Signup Page</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!--JQUERY FILE-->

    <!--Theme CSS FILE-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="box"> <!--container==box-->
        <h1>REGISTER FORM</h1>

            <form action="signup.php" method="post" enctype="multipart/form-data">
                
                <b>USERNAME</b><br>
                <input class="inputclass" type="text" name="uname" id="uname" placeholder="Enter Username" required autocomplete="off"><br>
                
                <b>USER EMAIL</b><br>
                <input class="inputclass" type="text" name="uemail" id="uemail" placeholder="Enter Useremail" required autocomplete="off"><br>
                
                <b>PHONE NUMBER</b><br>
                <input class="inputclass" type="text" name="phone" id="phone" placeholder="Enter Phone Number" required autocomplete="off"><br>
                
                <b>PASSWORD</b><br>
                <input class="inputclass" type="password" name="password" id="password" placeholder="Enter Password" required autocomplete="off"><br>
                
                <b>CONFIRM PASSWORD</b><br>
                <input class="inputclass" type="password" name="cpassword" id="cpassword" placeholder="Enter Confirm Password" required autocomplete="off"><br>
                
                <input type="file" value="UPLOAD" name="upload_img" id="upload_img"><br>
                
                <input type="submit" value="REGISTER" name="register" id="register"><br>
                Already have an account? <a href="login.php">Click here to Login.</a>
            </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>