<?php require_once('include/connection.php'); ?>
<?php require_once('include/session.php'); ?>

<header class="navigation">
	<div class="nav">
				
		<div class="bar clearfix">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="categories.php">Categories</a></li>	
				<li><a href="about us.php">About us</a></li>
				<li><a href="help.php">Help</a></li>     
            
			<?php 
				checkSession();
				if(isset($_SESSION['name'])){
						
						if("{$_SESSION['type']}" == '1'){
							echo "<li><a href=\"admin.php\" class=\"sign\">Admin Panel</a></li>";
							echo "<li><a href=\"logout.php\" class=\"sign\">Log Out</a></li>";
							echo "<li><p class=\"sign\">You are Logged in as " . $_SESSION['name']. " (Admin)</p></li>";
						}
						elseif("{$_SESSION['type']}" == '0'){
							echo "<li><a href=\"custormerInterface.php\" class=\"sign\">Customer Dashboard</a></li>";						
							echo "<li><a href=\"logout.php\">Log Out</a></li>";
							echo "<li><p class=\"sign\">You are Logged in as " . $_SESSION['name']. " (Customer)</p></li>";
					   }
						
					}
				else{
					echo "<li><a class=\"sign\" href=\"login.php\">Login</a></li>";
					echo "<li><a class=\"sign\" href=\"reg.php\">Register</a></li>";
					}
			?>           
		</ul>   

		</div><!--bar-->
                      
    </div>

</header>