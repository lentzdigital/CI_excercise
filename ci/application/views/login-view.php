<!DOCTYPE html>
<html>
<head>
	<title>My Simple CMS</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body>
<div class="wrapper">
	<header id="site-header">
		<h1>My Simple CMS</h1>
	</header>
	<div class="content-container">
		<main id="site-main">
			<h2>Title of the page</h2>

			<p>
				Haxx0r ipsum Linus Torvalds hello world packet sniffer afk fail dereference hexadecimal. Malloc eaten by a grue fopen regex mega thread packet throw continue. Win ssh stdio.h I'm sorry Dave, I'm afraid I can't do that root bypass port.
			</p>

			<p>
				Warez perl recursively Donald Knuth Dennis Ritchie ctl-c. Double int class private packet rsa wabbit *.* irc long thread concurrently infinite loop bin gurfle I'm compiling then echo try catch public. Ban giga break afk bit Starcraft false cookie linux.
			</p>

			<p>
				Fopen echo continue brute force /dev/null man pages socket bit semaphore eof chown daemon rm -rf ban. Piggyback salt int python concurrently machine code regex do gurfle access lib hello world crack. Void leapfrog gcc case mutex memory leak exception hash function.
			</p>
		</main>
		<nav id="site-nav">
			<ul>
				<li><a href="#">Link to page</a></li>
				<li><a href="#">Link to page</a></li>
				<li><a href="#">Link to page</a></li>
				<li><a href="#">Link to page</a></li>
				<li><a href="#">Link to page</a></li>
			</ul>

			<form method="post">
				<h3>Login <?php if($loggedIn == true) : echo ' Fuck yeah cowboy'; elseif($loggedIn == false) : ' Retard'; endif; ?></h3>
				<div>
					<p><label for="username">Username</label></p>
					<div>
						<input type="text" name="username" id="username">
					</div>
				</div>
				<div>
					<p><label for="password">Password</label></p>
					<div>
						<input type="password" name="password" id="password">
					</div>
				</div>
				<div>
					<input type="submit" value="Login">
				</div>
			</form>
		</nav>
	</div>
	<footer id="site-footer">
		&copy; 2017 Whatever name you want.
	</footer>
</div>


</body>
</html>