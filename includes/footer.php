									<div class="clear"><!-- clear --></div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

			<div id="footerPush"></div>

		</div>

		<div id="footer">

			<div id="footerLinks">

				<p>Copyright &copy; Oven Sprite 2011. All rights reserved.</p>

				<?php
				
				if(!$disableMenu){
					
				?>
				
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
				
			<?php
			
				}
				
			?>

			</div>

			<div id="footerExternalLinks">

				<ul>

					<li id="footerLogo">

						<a href="<?php echo $homeUrl; ?>" title="Oven Sprite">
							<img src="images/logo-small.gif" height="40" width="111" alt="Oven Sprite" />
						</a>

					</li>
					
					<?php
					
					if($facebookUrl){
						
					?>

					<li>

						<a href="<?php echo $facebookUrl; ?>" title="Visit us on Facebook!" id="facebook" target="_blank">
							Visit us on Facebook!
						</a>

					</li>
					
					<?php
					
					}
					
					?>

					<li>

						<span title="We use only biodegradable products" id="bioD">
							We use only biodegradable products
						</span>

					</li>

				</ul>

			</div>

		</div>

	</body>

</html>