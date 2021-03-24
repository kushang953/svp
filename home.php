<?php
	session_start();
	include("cnn.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css">
	.frm_main{
			margin: 150px 530px;
			border: 1px solid black;
			width: 500px;
			height: 150px;
			text-align: center;
			background-color: white;
			border-radius: 15px;
			box-shadow: 5px 5px 5px 5px gray;
		}
		*{
			margin: 0px 0px;
			padding: 0px 0px;
		}
		.hed{
			margin-top: 10px;
			margin-left: 50px;
		}
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
<center>
	<table border="1">
		<thead class="thead-dark">
			<tr>
				<th>Name</th>
				<th>City</th>
				<th>Phone</th>
				<th>Cast</th>
				<th>Subcast</th>
				<th>Gender</th>
				<th>Qualification</th>
				<th>Date of Birth</th>
			</tr>
		</thead>
		<?php
			if (isset($_REQUEST['btnSearch'])) {
				$var_srch = $_REQUEST['search'];
				// $Q = "select * from person where city like '$name%' or cast like '%$name%'";
				$Q = "select * from parson where city='$var_srch' or cast='$var_srch'";
				//echo $Q."<br>";
				//return;
 	
				$res = mysql_query($Q);
				$cnt = mysql_num_rows($res);
				if ($cnt > 0) {
					while ($ans = mysql_fetch_array($res)) {
						$pname = $ans['pname'];
						$city = $ans['city'];
						$pho = $ans['pho'];
						$cast = $ans['cast'];
						$subcast = $ans['subcast'];
						$gender = $ans['gender'];
						$qua = $ans['qua'];
						$dob = $ans['dob'];
	
						
					}	
				} else {
					echo "<tr><td colspan=\"8\" color=\"red\" align=\"center\">Records Not Found.....</td></tr>";
				}
			}
		?>
	</table>
</center>
</body>
</html>
