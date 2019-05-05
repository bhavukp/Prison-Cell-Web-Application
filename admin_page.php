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
  					<li class="current"><a href="admin_page.html">Welcome Admin</a></li>
  					<li><a href="visit.html">Visit</a></li>
  					<li><a href="logout.php">Logout</a></li>
  				</ul>	
  			</nav>
		</div>
	</header>
	
		<section>
			<div class="container" id="welcomeadmin">
				<table align="center" border="1px" width="300px" >
				<tr>
					<th colspan="2"><h2>Guard Record</h2></th>
				</tr>
				<tr>
					<th>Guard ID</th>
					<th>Guard Name</th>
				</tr>
				<?php
				include("connect.php");
				$query = "select * from guard_login_data";
				$data = mysqli_query($conn,$query);
				while ($rows=mysqli_fetch_assoc($data)) {
				?>
				<tr>
					<td><?php echo $rows['id']; ?></td>
					<td><?php echo $rows['guardname']; ?></td>
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