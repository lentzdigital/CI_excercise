<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PANEL</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body>

<div class="wrapper">
	<header id="site-header">
		<h1>ADMIN PANEL</h1>
	</header>
	<div class="content-container">
		<main id="site-main">
			<table class="page-admin">
				<thead>
					<tr>
						<th class="page-title">Page name</th>
						<th class="page-edit">Tasks</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Some page name</td>
						<td>
							<a href="update.php"><i class="fa fa-pencil fa-border fa-lg"></i></a>
							<a href="delete.php"><i class="fa fa-trash-o fa-border fa-lg"></i></a>
							<a href="#"><i class="fa fa-eye pencil fa-border fa-lg"></i></a>
						</td>
					</tr>
				</tbody>
			</table>
		</main>
		<nav id="site-nav">
			<ul>
				<li><a href="index.php">See all pages</a></li>
				<li><a href="create.php">Create new page</a></li>
				<li><a href="../">Logout</a></li>
			</ul>
		</nav>
	</div>
	<footer id="site-footer">
		&copy; 2017 Whatever name you want.
	</footer>
</div>


</body>
</html>