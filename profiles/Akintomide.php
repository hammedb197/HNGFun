<!doctype html>
<html>
<?php
    require "db.php";
		$query = $conn->query("SELECT * FROM secret_word where secret_word  = 'secret_word'");
$result = $query->fetch(PDO::FETCH_ASSOC);
$secret_word = $result['secret_word'];
	
?>
<?php
	$data = $conn->query("select *From secret_word LIMIT1");
	$data = $data->fetch(PDO:: FETCH_OBJ);
	$secret_word =  $data->secret_word;
	
	$result2 = $conn->query("select *From interns_data where username = 'Akintomide'");
	$user = $result2->fetch(PDO:: FETCH_OBJ);
	
	?>
<head>

<meta charset="utf-8">
<title>Akintomide</title>
<style>
h2{
	font-family: 'Montserrat',sans-serif;
	font-size: 60px;
	font-weight: 4400;
	letter-spacing: -1px;
	margin: 0 0 22px 0;
	color: black;
	}
	h1{
	font-family: 'Montserrat',sans-serif;
	font-size: 25px;
	font-weight: 40;
	letter-spacing: -1px;
	margin: 0 0 22px 0;
	color: #000;
	}
	h3{
	font-family: 'Montserrat',sans-serif;
	font-size: 30px;
	font-weight: 40;
	letter-spacing: -1px;
	margin: 0 0 22px 0;
	color: #000;
	}
	.profile {
		box-shadow: 0 4px 8px 0 rgb(0, 0, 0, 0.2 );
		max-width: 500px;
		margin: auto;
		text-align: center;
		}
	.title {
		color: grey;
		font-size: 18px;
	}
	button {
		border: none;
		outline: 0;
		display: inline-block;
		padding: 8px;
		color:  white;
		background-color: #000;
		text-align: center;
		cursor: pointer;
		width: 100%;
		font-size: 18px;
	}
	a {
		text-decoration: none;
		font-size: 22px;
		color: black;
	}
	button: hover, a:hover{
		opacity: 0.7;
	}
	.fa {
		padding: 20px;
		font-size: 30px;
		width: 50px;
		text-align: center;
		text-decoration: none;
		border-radius: 50%;
	}
	
	</style>
	
</head>

<body>

<div style="margin-top: 30px;">
 <h2 align="center">My Profile</h2>
 </div>


<div class="profile">
<img src="https://res.cloudinary.com/akintomide/image/upload/v1523798928/michael.png" style="width: 100%">
<!--<img src="michael.png" style="width: 100%">-->
<?php
require 'db.php';
$username = "Akintomide";
$data = $conn->query("SELECT * FROM  interns_data WHERE username = '".$username."' ");
$my_data = $data->fetch(PDO::FETCH_BOTH);
$name = $my_data['name'];
$img = $my_data['image_filename'];
$username =$my_data['username'];
?>

<h1><?php echo $name;?></h1>
<p class="title">Embedded Systems Designer</p>
<p>C++ </p>

<p>Front End Developper </p>
<p class="title">HNGinternship</p>
<p>HTML CSS </p>
<p><button>contact</button></p>	
</div>






</body>

</html>