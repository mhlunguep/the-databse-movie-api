<?php 
include('config.php');
include('session.php'); 
require_once('includes/head.php');
require_once('includes/header.php');

$result=mysqli_query($conn, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>

<div class="container text-white py-3">
<h4>Hi: <?php echo $row['username']; ?> </h4>
<p>Here are your favorite movies that you have picked.</p>

</div>
