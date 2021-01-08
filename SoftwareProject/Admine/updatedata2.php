<?php 
        // DB connection
        $conn = mysqli_connect('localhost','root','','mydb') ;
        
        if(!$conn){
            die("Not Connected" . mysqli_error($conn)) ;
        }

        if(isset($_REQUEST['update2']))
        {
          
            $updateusername = $_REQUEST['title'];
            $updatepassword = $_REQUEST['price'];
            $updatedescription = $_REQUEST['description'];
            
            $updateid = $_REQUEST['update_hidden_id'];
            
            $update_query =" UPDATE alljobs SET title='$updateusername' , price='$updatepassword',description='$updatedescription' WHERE id='$updateid'  ";
            
            $run_update_query = mysqli_query($conn,$update_query);
            
            if($run_update_query)
            {
               header("location: userjob.php?UPDATED") ;
            }
        }
?>
        
        
