<?php
       
        include 'db_connection.php';
		
		$id = $_GET['id'];
		$email = $_GET['email'];
		$full_name = $_GET['full_name'];
		$password = $_GET['password'];
	
		$sql = "SELECT * FROM signup WHERE email='$email' ";
	        $check = mysqli_fetch_array(mysqli_query($con,$sql));
		if(isset($check)){
		$json = array('Response'=>2);
		}else{
		$sql = "INSERT INTO signup(id,email,full_name,password) VALUES('$id','$email','$full_name','$password')";
		if(mysqli_query($con,$sql)){
			$last_id = mysqli_insert_id($con);
			$json = array('Response'=>1,'signup_id'=> $last_id);
	
		}
		else{
				
			$json = array('Response'=>0);
		
		}
}	
		echo json_encode($json);		
			
	        mysqli_close($con);
	?>