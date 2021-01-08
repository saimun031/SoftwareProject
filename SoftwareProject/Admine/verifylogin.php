<?php
    if(isset($_POST['login']))
    {
        $email = $_POST['uemail'] ;
        $pass = $_POST['upassword'] ;
        
        // DB connection
        $conn = mysqli_connect('localhost','root','','test') ;
        
        if(!$conn){
            die("Not Connected" . mysqli_error($conn)) ;
        }
        
        $query = "SELECT * FROM user WHERE useremail='$email' AND password='$pass' " ;
        
        $query_check = mysqli_query($conn,$query) ;
        
        if($query_check)
        {
            if(mysqli_num_rows($query_check) > 0)
            {
                 echo"<script>
                        location.assign('home.php');
                    </script>" ;
            }
            else
            {
                echo"<script>
                        alert('You are not Registered') ;
                        location.assign('signup.php');
                    </script>" ;
            }
        }
        else
        {
            // email & pass check
            $error = "Please enter correct login details" ;
            echo"<script>
                        
                        location.assign('login.php');
                    </script>" ;
        }
        
    }
?>
