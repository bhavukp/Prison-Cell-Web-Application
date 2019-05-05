<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Prison Cell Web Application</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<div id="branding">
  				<h1><span class="highlight">Prison</span> Cell Web Application</h1>
  			</div>
  			<nav>
  				<ul>
  					<li class="current"><a href="guard_page.html">Welcome Guard</a></li>
  					<li><a href="logout.php">Logout</a></li>
  				</ul>	
  			</nav>
		</div>
	</header>

	<section>
			<div class="container">
				<table align="center" border="1px" width="300px" >
				<tr>
					<th colspan="5"><h2>Visitor Records</h2></th>
				</tr>
				<tr>
					<th>ID</th>
					<th>Visitor Name</th>
					<th>Prisoner Name</th>
					<th>Date</th>
					<th>Contact Number</th>
				</tr>
				<?php
				include("connect.php");
				$query = "select * from visitor_records";
				$data = mysqli_query($conn,$query);
				while ($rows=mysqli_fetch_assoc($data)){
				?>
				<tr>
					<td><?php echo $rows['id']; ?></td>
					<td><?php echo $rows['visitorname']; ?></td>
					<td><?php echo $rows['prisonername']; ?></td>
					<td><?php echo $rows['date']; ?></td>
					<td><?php echo $rows['contactnumber']; ?></td>
				</tr>
				<?php } ?>
				</table>
			</div>
		</section>

	<footer>
		<p>In. Design, Copyright &copy; 2018</p>
	</footer>
</body>
</html>