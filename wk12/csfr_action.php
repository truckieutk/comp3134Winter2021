<?php
   ob_start();
   session_start();
?>


<html lang = "en">
   
   <head>
      <title></title>
      
   </head>
	
   <body>
      
      <h2>Enter Username and Password</h2> 
      <div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['submit']) && !empty($_POST['username']) 
               && !empty($_POST['password']) && ($_POST['confirmation']=="confirmation")) {
				
               if ($_POST['username'] == 'host' && 
                  $_POST['password'] == 'pass') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'host';
                  $_SESSION['confirmation'] = 'confirmation';
                  
                  echo 'You have entered valid username and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username = host" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = pass" required>
            <input type="hidden" name="confirmation" value="confirmation">
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "submit">Submit</button>
         </form>
			
         Click here to clean <a href = "logout.php" tite = "Logout">Session.
         
      </div> 
      
   </body>
</html>