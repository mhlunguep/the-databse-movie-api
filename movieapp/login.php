<?php 
    session_start(); 
    include('config.php'); 
    require_once('includes/head.php');  
?>
<div class="container">

	<div class="form-wrapper">
  
  		<form action="#" method="post">
    	<h3>Login here</h3>
	
    	<div class="form-item">
			<input type="text" name="user" required="required" placeholder="Username" autofocus required></input>
    	</div>
    
    	<div class="form-item">
			<input type="password" name="pass" required="required" placeholder="Password" required></input>
    	</div>
    
    	<div class="button-panel">
			<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
    	</div>

  </form>
		<?php
			if (isset($_POST['login']))
				{
					$username = mysqli_real_escape_string($conn, $_POST['user']);
					$password = mysqli_real_escape_string($conn, $_POST['pass']);
					
					$query 		= mysqli_query($conn, "SELECT * FROM users WHERE  password='$password' and username='$username'");
					$row		= mysqli_fetch_array($query);
					$num_row 	= mysqli_num_rows($query);
					
					if ($num_row > 0) 
						{			
							$_SESSION['user_id']=$row['user_id'];
							header('location:home.php');
							
						}
					else
						{
							echo 'Invalid Username and Password Combination';
						}
				}
		?>
  		<div class="reminder">
    		<p>Not a member? <a href="#">Sign up now</a></p>
    		<p><a href="#">Forgot password?</a></p>
  		</div>
  
	</div>

</div>
			</div>