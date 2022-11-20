


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CHIMERA</title>

	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>


	<header>
		<!-- navbar -->
		<div class="logo">
			<img src="../images/logo.svg">
		</div>
		<div class="main">
			<ul>
				<li class="active"><a href="#">Home</a></li>
				<li><a href="shop.php">Shop</a></li>
				<li><a href="cart.php">Cart</a></li>

				<?php 
            if(empty($_SESSION['cid'])){
                ?>
               <li><a href="login.php">Login</a></li>
            <?php
            }
            ?>
				
				<?php
                    session_start();
                    if(!empty($_SESSION['cid'])){
                ?>
               <li><a href="logout.php">Logout</a></li>
                <?php
                    }
                ?>
			</ul>

			

		</div>

		<!-- title and shop button -->
		<div class="title">
		<?php
            if(!empty($_SESSION['name'])){
               echo $_SESSION['name'];
				echo'	<h3>WELCOME TO CHIMERA</h3>
				<h1>The Best Books for You</h1>'; 
            }
                ?>
            <br>
            <br>

            <?php 
            if(empty($_SESSION['cid'])){
                ?>
               <h3>WELCOME TO CHIMERA</h3>
				<h1>The Best Books for You</h1>
            <?php
            }
            ?>
		
		</div>

		<div class="button">
			<a href="shop.php" class="btn">SHOP</a>
		</div>
		
	</header>
	
	

	
	
</body>
</html>

	