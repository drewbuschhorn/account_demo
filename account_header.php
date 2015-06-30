<div style="border-bottom: 1px solid black; padding: .5em; background-color: #15063A; color: white;">
	<style>
		.headerLink {
			color: white;
		}
		.headerLink:visited {
			color: white;
		}
	</style>
	<span>
		<?php
			require __DIR__ . '/vendor/autoload.php';
			$config = HTMLPurifier_Config::createDefault();
			$purifier = new HTMLPurifier($config);
			if(isset($first_name))
				echo "Hi, ".$purifier->purify($first_name).". ";
			echo "[Logged in as <b>".$purifier->purify($username)."</b>]";
		?>
	</span>
	<span style="float: right;"><a href="dashboard.php" class="headerLink">Home</a> - <a href="profile.php" class="headerLink">Account</a> - <a href="logout.php" class="headerLink">Logout</a></span>
</div>