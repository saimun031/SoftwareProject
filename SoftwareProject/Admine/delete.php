<?php 
        // DB connection
        $conn = mysqli_connect('localhost','root','','mydb') ;
        
        if(!$conn){
            die("Not Connected" . mysqli_error($conn)) ;
        }


        $receive = $_REQUEST['user_id'];

        $receive_image_name = $_REQUEST['profile_pic'];
        
        $delete_query = "DELETE FROM user WHERE user_id = $receive " ;
        
        

        $run_delete_query = mysqli_query($conn,$delete_query) ;
        
        if($run_delete_query)
        {
            unlink("img/profile/$receive_image_name") ;
            header("location: loginfo.php?DELETED") ;
        }
    
?>
