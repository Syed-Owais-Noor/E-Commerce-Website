<?php

	try {
		if (!defined('DevEx')) {
			die('<script>window.location.href="index.php"</script>');
		}
	} catch (\Throwable $th) {
		echo '<script>alert("Some thing went wrong!!!");</script>';
	}

?>

<body class="js">
	
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>