<?php 
        // DB connection
        $conn = mysqli_connect('localhost','root','','mydb') ;
        
        if(!$conn){
            die("Not Connected" . mysqli_error($conn)) ;
        }

        if(isset($_REQUEST['update1']))
        {
          
            $updateusername = $_REQUEST['username'];
            $updatepassword = $_REQUEST['password'];
          
            $updateid = $_REQUEST['update_hidden_id'];
            
            $update_query =" UPDATE users SET username='$updateusername' , password='$updatepassword' WHERE id='$updateid'  ";
            
            $run_update_query = mysqli_query($conn,$update_query);
            
            if($run_update_query)
            {
               header("location: user.php?UPDATED") ;
            }
        }
?>
        
        
