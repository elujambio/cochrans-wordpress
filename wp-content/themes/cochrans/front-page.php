<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 */

get_header(); ?>

		<style>
			html, 
			body {
				background-color:  #EFAD00;
			}
		</style>
		<div class="menu-trigger">
			<div class="mt-1"></div>
			<div class="mt-2"></div>
		</div>
		<div class="menu">
			<div class="menu-options"></div>
			<div class="info">
				<div class="info-col">
					<a href="tel:9038871807" class="call-us stroke stroke-black-thin" title="Call us:">Call us:</a>
					<a href="tel:9038871807" class="call-us stroke stroke-black-thin" title="903-887-1807">903-887-1807</a>
					<p class="address stroke stroke-black-thin" title="816 W. Main St,">816 W. Main St,</p>
					<p class="address stroke stroke-black-thin" title="Gun Barrel City, TX">Gun Barrel City, TX</p>
				</div>
				<div class="social-col">
					<a href="https://www.facebook.com">
						<img src="wp-content/themes/cochrans/images/facebook.svg">
					</a>
					<a href="https://www.instagram.com">
						<img src="wp-content/themes/cochrans/images/instagram.svg">
					</a>

				</div>
			</div>	
		</div>
		<div class="navigation">
			<div class="left">
				<a class="navigation-link tingle stroke stroke-white" href="" title="Turkey order">Turkey order</a>
				<a class="navigation-link tingle stroke stroke-white" href="" title="Menu">Menu</a>
			</div>
			<a class="logo-link" href="">
				<img class="logo" src="wp-content/themes/cochrans/images/logo.png">
			</a>
			<div class="right">
				<a class="navigation-link tingle stroke stroke-white" href="" title="Catering">Catering</a>
				<a class="navigation-link tingle stroke stroke-white" href="" title="Gift cards">Gift cards</a>
			</div>
		</div>
		<div id="section-1">
			<div class="background">
				<img src="wp-content/themes/cochrans/images/background.jpg">
			</div>
			<div class="overlay"></div>
			<div class="section-wrapper">
				<div class="column">
					<div class="text-wrapper">
						
						<h1 class="title stroke stroke-black thick-8" title="Welcome to">Welcome to</h1>
						<h1 class="title stroke stroke-black thick-8" title="Cochran's Cafeteria">Cochran's Cafeteria</h1>
						<p class="paragraph">Everything here is hand-crafted, <br> fresh-made, everyday. Straight from <br> Gun Barrel City, Texas.</p>
						<p class="schedule">
							Open 7 Days a Week <br>
							9:00a.m. Until 9:00p.m. <br>
							Friday & Saturday open until 9:30p.m. 
						</p>

						<div class="info">
							<div class="info-col">
								<a href="tel:9038871807" class="call-us stroke stroke-black-thin" title="Call us:">Call us:</a>
								<a href="tel:9038871807" class="call-us stroke stroke-black-thin" title="903-887-1807">903-887-1807</a>
								<p class="address stroke stroke-black-thin" title="816 W. Main St,">816 W. Main St,</p>
								<p class="address stroke stroke-black-thin" title="Gun Barrel City, TX">Gun Barrel City, TX</p>
							</div>
							<div class="social-col">
								<a href="https://www.facebook.com">
									<img src="wp-content/themes/cochrans/images/facebook.svg" alt="">
								</a>
								<a href="https://www.instagram.com">
									<img src="wp-content/themes/cochrans/images/instagram.svg" alt="">
								</a>

							</div>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="dot chicken-tigh">
						<img src="wp-content/themes/cochrans/images/chicken-1.png">
					</div>
					<div class="dot fish-plate">
						<img src="wp-content/themes/cochrans/images/fish-2.png">
					</div>
					<div class="dot fish-fries">
						<img src="wp-content/themes/cochrans/images/fish.png">
					</div>
					<div class="dot chicken-leg">
						<img src="wp-content/themes/cochrans/images/chicken-4.png">
					</div>
					<div class="dot chicken-breast">
						<img src="wp-content/themes/cochrans/images/chicken-5.png">
					</div>
				</div>
			</div>
		</div>
		<div id="section-2" class="small-section">
			<div class="image-container">
				<img src="wp-content/themes/cochrans/images/fish-background.jpg" alt="">
			</div>
			<div class="text-container">
				<div class="title stroke stroke-black" title="Our food">Our food</div>
				<p class="paragraph">All our food is made using authentic Grandma’s traditional techniques; from our famous Mississippi catfish to our mouth watering vegetables, BBQ Ribs, Smoked sausage, daily homemade peach cobbler, and rolls, served by our friendly and professional staff. <br><br>It’s our honor to serve YOU!</p>
			</div>
		</div>
		<div id="section-3" class="small-section">
			<div class="text-container">
				<div class="title stroke stroke-black" title="Fresh ‘n’ Ready">Fresh ‘n’ Ready</div>
				<div class="title stroke stroke-black" title="Chicken and Catfish">Chicken and Catfish</div>
			</div>
			<div class="image-container">
				<img src="wp-content/themes/cochrans/images/fish-background-2.png" alt="">
			</div>
		</div>
		<div id="section-4" class="small-section">
			<div class="image-container">
				<img src="wp-content/themes/cochrans/images/vegetables.png" alt="">
			</div>
			<div class="text-container">
				<div class="title stroke stroke-black" title="16 world class vegetables">16 world class vegetables</div>
				<div class="title stroke stroke-black" title="14 homemade meats">14 homemade meats</div>
			</div>
		</div>
		<div id="section-5" class="small-section">
			<p class="paragraph">The oldest in Texas style homemade rolls. Cochran’s is very famous for our handmade peach cobblers. Cochran’s Cafeteria has a wide variety of sugar frees pies. We try to have the best chicken and catfish. We’re still building the concept to provide the best service for your whole family: dine, in, or carry-out. We strive to have always offer you the very best quality fresh vegetables we can find on the market.</p>
		</div>
		<footer>
			<div class="row">
				<a class="title stroke stroke-black" title="Click here to view in Google Maps">Click here to view in Google Maps</a>
				<a class="title stroke stroke-black" title="Click here to order now">Click here to order now</a>
			</div>
			<div class="row">
				
				<div class="info">
					<div class="info-col">
						<a href="tel:9038871807" class="call-us stroke stroke-black-thin" title="Call us:">Call us:</a>
						<a href="tel:9038871807" class="call-us stroke stroke-black-thin" title="903-887-1807">903-887-1807</a>
						<p class="address stroke stroke-black-thin" title="816 W. Main St,">816 W. Main St,</p>
						<p class="address stroke stroke-black-thin" title="Gun Barrel City, TX">Gun Barrel City, TX</p>
					</div>
					<div class="social-col">
						<a href="https://www.facebook.com">
							<img src="wp-content/themes/cochrans/images/facebook.svg">
						</a>
						<a href="https://www.instagram.com">
							<img src="wp-content/themes/cochrans/images/instagram.svg">
						</a>

					</div>
				</div>			
				<a href="" class="logo-link">
					<img src="wp-content/themes/cochrans/images/logo.png" alt="">
				</a>
			</div>
		</footer>
	</body>
</html>

<script src="wp-content/themes/cochrans/javascripts/landing.js"></script>
<script src="wp-content/themes/cochrans/javascripts/menu.js"></script>
