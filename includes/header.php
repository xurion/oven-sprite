<?php
include('vars.php');
?>
<!doctype html>
<html>

	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="keywords" content="<?= $keywords ?>" />
		<meta http-equiv="description" content="<?= $description ?>" />


		<title><?php
			if($pageTitle){
				echo $pageTitle . ' - ';
			}
		?>Oven Sprite Domestic Oven Cleaning Specialists For South East Essex</title>

		<script type="text/javascript" src="scripts/jquery.js"></script>
		<script type="text/javascript" src="scripts/callback.js"></script>
		<script type="text/javascript" src="scripts/ovensprite.js"></script>

		<link href="css/ovensprite.css" rel="stylesheet" />

		<!--[if IE 6]>
			<style type="text/css">
				@import "css/ie6.css";
			</style>
		<![endif]-->

	</head>

	<body>

		<div id="container">

			<div id="header">

				<a href="<?php echo $homeUrl; ?>" id="logo" title="Oven Sprite">
					<img src="images/logo.gif" height="81" width="236" alt="Oven Sprite" />
				</a>

				<div id="contactDetails">

					<ul>

						<?php
						
						if($phoneNumber){
							
						?>
						
						<li id="phoneContactDetail">
							<span id="phoneLabel">Telephone:</span>
							<span><?=$phoneNumber?></span>
						</li>
						
						<?php
						
						}
						
						if($mobilePhoneNumber){
						
						?>

						<li id="mobileContactDetail">
							<span id="mobileLabel">Mobile:</span>
							<span><?=$mobilePhoneNumber?></span>
						</li>
						
						<?php
						
						}
						
						if($emailAddress){
						
						?>

						<li id="emailContactDetail">
							<span id="emailLabel">Email:</span>
							<a href="mailto:<?=$emailAddress?>"><?=$emailAddress?></a>
						</li>
						
						<?php
						
						}
						
						?>

					</ul>

				</div>

			</div>
			
			<?php

			if(!$disableMenu){
				
			?>
			
			<div id="menu">

				<ul>

					<li class="first">
						<a href="<?php echo $homeUrl; ?>">Home</a>
					</li>

					<li>
						<a href="oven-cleaning.php">Oven Cleaning</a>
					</li>

					<li>
						<a href="fridges-and-freezers.php">Fridges &amp; Freezers</a>
					</li>

					<li>
						<a href="prices.php">Prices</a>
					</li>

					<li>
						<a href="offers.php">Offers</a>
					</li>

					<li class="last">
						<a href="faq.php">FAQ</a>
					</li>

				</ul>

			</div>
			
			<?php
			
			}
				
			?>

			<div id="outerBodyWrapper">

				<div id="bodyWrapper1">

					<div id="bodyWrapper2">

						<div id="bodyWrapper3">

							<div id="bodyWrapper4">

								<div id="body">