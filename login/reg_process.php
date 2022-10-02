<?php
    require('./login/db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
		$username = mysqli_real_escape_string($con, $username);
		$f_name = stripslashes($_REQUEST['f_name']);
        $f_name = mysqli_real_escape_string($con, $f_name);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $phone    = stripslashes($_REQUEST['phone_no']);
        $phone    = mysqli_real_escape_string($con, $phone);
        $address    = stripslashes($_REQUEST['address']);
        $address    = mysqli_real_escape_string($con, $address);
        $password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con, $password);
		$pincode = stripslashes($_REQUEST['pincode']);
        $pincode = mysqli_real_escape_string($con, $pincode);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username , f_name , email , phone_no,address  , pincode ,  password , create_datetime)
                     VALUES ('$username','$f_name','$email','$phone','$address','$pincode', '" . md5($password) . "', '$create_datetime')";
        $result   = mysqli_query($con, $query);

        if ($result) {
		 
			$mes = "registerd succeccfully.\\nTry again.";
     echo "<div class='form'>
     <script type='text/javascript'>alert('$mes ');
   window.location= 'login.php';</script>
        
        </div>";
            } 
     else {
		$message = "fill form correctly.\\n redirecting to login.";
     echo "<div class='form'>
     <script type='text/javascript'>alert('$message ');
   window.location= 'registration.php';</script>
     
     </div>";
         }
        
    }

?>