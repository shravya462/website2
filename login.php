<?php 

session_start();

	include("dbcon.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
	

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($db, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: adminreminder.php");
						die;
					}
				}
			}
			
			echo"<script>alert('wrong username or password!')</script>";
		}else
		{
			echo"<script>alert('Please Enter Required Field!')</script>";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Form Layouts - Build whatever layout you need with our Architect framework.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Build whatever layout you need with our Architect framework.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="./main.css" rel="stylesheet"></head>
<body>

	<style type="text/css">
	
	body{
		padding-top:6%;
		justify-content:center;
	}


	#text{
		display: block;
		width: 100%;
		padding: 0.75rem;
		box-sizing: border-box;
		border-radius:5px;
		border: 1px solid #0c0c0c;
		outline: none;
		background: #eeeeee;
		transition: background 0.2s, border-color 0.2s;
		font: 500 1rem 'Quicksand', sans-serif;
	}

	#button{
		 width: 100%;
		padding: 1rem 2rem;
		font-weight: bold;
		font-size: 1.1rem;
		border: none;
		border-radius: 5px;
		outline: none;
		cursor: pointer;
		background: #3f6ad8;
		color: white;
	}

	#button : hover{
		background-color:#870720;
	}

	#box{

		width: 400px;
		max-width: 400px;
		margin: auto;
		padding: 2rem;
		box-shadow: 0 0 40px rgba(0, 0, 0, 0.2);
		border-radius: var(--border-radius);
		background: #ffffff;
		font: 500 1rem 'Quicksand', sans-serif;
	}
	.form__text {
    text-align: center;
	}

	.form__link {
		color: var(--color-secondary);
		text-decoration: none;
		cursor: pointer;
	}

	.form__link:hover {
		text-decoration: underline;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: black;  margin-bottom: 2rem;
    text-align: center;"><h1>Login</h1></div>
			<div>
			<input class="form-control id="text" type="text" name="user_name" autofocus placeholder="Username " ><br><br>
			<input class="form-control id="text" type="password" name="password" autofocus placeholder="Password"><br><br>
			</div>
			<input class="mt-2 btn btn-primary" id="button" type="submit" href="adminreminder.php" value="Login"><br><br>
			
            
			<!--a href="signup.php">Click to Signup</a><br><br-->
		</form>
	</div>
</body>
</html>