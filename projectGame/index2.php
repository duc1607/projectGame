<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nhóm 7 - Game Store</title>
	<link rel="icon" type="image/png" href="favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<style type="text/css">
		#searchButton {border: 3px solid white; color: white; border-radius: 25px; background-color: transparent; width: 120px; height: 40px; z-index: 1; font-size: 20px; cursor: pointer;}
		#cartButton {border: 3px solid white; color: white; border-radius: 25px; background-color: transparent; width: 120px; height: 40px; font-size: 20px; cursor: pointer; z-index: 0}
	</style>

	<script type="text/javascript">
		searchBarState = 0;
		function showSearchBar()
		{
			if(searchBarState == 1)
			{
				document.getElementById('searchBar').style.display="none";
				document.getElementById('searchButton').style.border="3px solid white";
				document.getElementById('searchButton').style.color="white";
				document.getElementById('searchButton').value="Tìm kiếm";
				searchBarState = 0;
			}
			else {
				document.getElementById('searchBar').style.display="flex";
				document.getElementById('searchButton').style.border="3px solid red";
				document.getElementById('searchButton').style.color="red";
				document.getElementById('searchButton').value="Đóng lại";
				searchBarState+=1;
			}
		}
	</script>
</head>
<body>
	<?php
		session_start();
		include 'connectDB.php';
		mysqli_set_charset($con,'utf8');
		if(isset($_SESSION['cartItem']));
		else
			$_SESSION['cartItem'] = array();
		$row = 0;
		$demPage = 0;
	?>
	
	<div class="col-md-12" style="height: 45px; background-color: cyan">
		<div class="col-md-1" style="height: 45px; background-color: red"></div>
		<div class="col-md-1" style="height: 45px; background-color: green"></div>
		<div class="col-md-1" style="height: 45px; background-color: red"></div>
		<div class="col-md-1" style="height: 45px; background-color: green"></div>
		<div class="col-md-1" style="height: 45px; background-color: red"></div>
		<div class="col-md-1" style="height: 45px; background-color: green"></div>
		<div class="col-md-1" style="height: 45px; background-color: red"></div>
		<div class="col-md-1" style="height: 45px; background-color: green"></div>
		<div class="col-md-1" style="height: 45px; background-color: red"></div>
		<div class="col-md-1" style="height: 45px; background-color: green"></div>
		<div class="col-md-1" style="height: 45px; background-color: red"></div>
		<div class="col-md-1" style="height: 45px; background-color: green"></div>
	</div>

	<div class="col-md-12 col-xs-12" style="height: 105px; background-color: darkviolet; position: relative;">
		<div class="col-md-8 col-xs-8" style="height: 45px;">
			<div style="height: 105px;display: flex; align-items: center;">
				<span style="font-size: 50px; color: white; margin-left: 20px">Team 07</span>
			</div>
		</div>
		<div class="col-md-4 col-xs-4">
			<div class="col-md-6 text-center" style="height: 105px;display: flex; align-items: center;">
				<input type="button" id="cartButton" value="Giỏ hàng">
			</div>
			<div class="col-md-6 col-xs-6 text-center" style="height: 105px;display: flex; align-items: center;">
				<input type="button" id="searchButton" value="Tìm kiếm" onclick="showSearchBar()">
			</div>
		</div>
	</div>
	<div class="col-md-12 col-xs-12" id="searchBar" style="height: 105px; background-color: white; position: absolute; top: 45px; display: none;">
		
	</div>

	<div class="col-md-12 col-xs-12" style="height: 500px; background-color: red; position: relative;">
	</div>

	<div class="container">
		<div class="col-md-4">
			
		</div>
		<div class="col-md-4">
			
		</div>
		<div class="col-md-4">
			
		</div>
	</div>
	<?php mysqli_close($con); ?>
</body>
</html>