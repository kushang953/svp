<?php
	session_start();
	include("cnn.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css">
	
		.wlc{
			margin-top: 10px;
			margin-left: 50px;
		}
		h2{
			color: gray;
		}
		.srch{
			margin-top: 10px;
			margin-left: 50px;
		}
		input[type=text]{
			width: 250px;
			height: 15px;
			outline: none;
			border-radius: 15px;
		}
		input[type=submit]{
			border-radius: 15px;
			width: 80px;
			background-color: blue;
			color: whitesmoke;	
			outline: none;
		}
		table{
			text-align: center;
			margin-left: 50px;
		}
		thead tr{
			background-color: whitesmoke;
		}
		th{
			padding-left: 5px;
			padding-right: 5px;
		}
		td{
			padding-left: 5px;
			padding-right: 5px;
		}
	</style>
</head>
<body>
	<div class="frm_main">
	<div class="hed">
		<h1>Matrimony</h1>
	</div>
	<div class="wlc">
	<?php
		if(isset($_SESSION['username'])) {
			echo '<h2>Welcome ' . $_SESSION['username'] . '</h2>';
		} 
		else {
			echo '<h3>Welcome Guest.</h3>';
		}
	?>
	</div>
	<div class="srch">
	<form action="#" name="frm_srch" method="get">
		<input type="text" name="search" id="" placeholder=" Search By Cast Or City">
		<input type="submit" name="btnSearch" value="Search" />
	</form>
	</div><br>
</div>

</body>
</html>
