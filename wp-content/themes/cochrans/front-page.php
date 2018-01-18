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
		<?php 
		  $currentLanguage  = pll_current_language();
		?>
		<?php if ( $currentLanguage == "en" ): ?>
			<div id="section-1">
				<div class="background">
					<img src="<?php bloginfo('template_directory'); ?>/images/background.jpg">
				</div>
				<div class="overlay"></div>
				<div class="section-wrapper">
					<div class="column">
						<div class="text-wrapper">
							
							<h1 class="title stroke stroke-black thick-8" title="Welcome to">Welcome to</h1>
							<h1 class="title stroke stroke-black thick-8" title="Cochran's Cafeteria">Cochran's Cafeteria</h1>
							<p class="paragraph">Everything here is hand-crafted, <br> fresh-made, everyday. Straight from <br> Gun Barrel City, Texas.</p>
							<p class="schedule">
								Open Monday through Friday <br>
								9:00a.m. Until 9:00p.m. <br> 
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
										<img src="<?php bloginfo('template_directory'); ?>/images/facebook.svg" alt="">
									</a>
									<a href="https://www.instagram.com">
										<img src="<?php bloginfo('template_directory'); ?>/images/instagram.svg" alt="">
									</a>

								</div>
							</div>
						</div>
					</div>
					<div class="column">
						<div class="dot chicken-tigh">
							<img src="<?php bloginfo('template_directory'); ?>/images/chicken-1.png">
						</div>
						<div class="dot fish-plate">
							<img src="<?php bloginfo('template_directory'); ?>/images/fish-2.png">
						</div>
						<div class="dot fish-fries">
							<img src="<?php bloginfo('template_directory'); ?>/images/fish.png">
						</div>
						<div class="dot chicken-leg">
							<img src="<?php bloginfo('template_directory'); ?>/images/chicken-4.png">
						</div>
						<div class="dot chicken-breast">
							<img src="<?php bloginfo('template_directory'); ?>/images/chicken-5.png">
						</div>
					</div>
				</div>
			</div>


			<div id="section-2" class="small-section">
				<div class="image-container">
					<img src="<?php bloginfo('template_directory'); ?>/images/fish-background.jpg" alt="">
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
					<img src="<?php bloginfo('template_directory'); ?>/images/fish-background-2.png" alt="">
				</div>
			</div>
			<div id="section-4" class="small-section">
				<div class="image-container">
					<img src="<?php bloginfo('template_directory'); ?>/images/vegetables.png" alt="">
				</div>
				<div class="text-container">
					<div class="title stroke stroke-black" title="16 world class vegetables">16 world class vegetables</div>
					<div class="title stroke stroke-black" title="14 homemade meats">14 homemade meats</div>
				</div>
			</div>
			<div id="section-5" class="small-section">
				<p class="paragraph">The oldest in Texas style homemade rolls. Cochran’s is very famous for our handmade peach cobblers. Cochran’s Cafeteria has a wide variety of sugar frees pies. We try to have the best chicken and catfish. We’re still building the concept to provide the best service for your whole family: dine, in, or carry-out. We strive to have always offer you the very best quality fresh vegetables we can find on the market.</p>
			</div>
		<?php endif; ?>
		<?php if ( $currentLanguage == "es" ): ?>
			<div id="section-1">
				<div class="background">
					<img src="<?php bloginfo('template_directory'); ?>/images/background.jpg">
				</div>
				<div class="overlay"></div>
				<div class="section-wrapper">
					<div class="column">
						<div class="text-wrapper">
							
							<h1 class="title stroke stroke-black thick-8" title="Bienvenidos a">Bienvenidos a</h1>
							<h1 class="title stroke stroke-black thick-8" title="Cochran's Cafeteria">Cochran's Cafeteria</h1>
							<p class="paragraph">Todo aquí es hecho a mano, <br> fresco, a diario. Directo desde <br> Gun Barrel City, Texas.</p>
							<p class="schedule">
								Abierto de Lunes a Viernes <br>
								de 9:00a.m. a 9:00p.m. <br> 
							</p>

							<div class="info">
								<div class="info-col">
									<a href="tel:9038871807" class="call-us stroke stroke-black-thin" title="Llámanos:">Llámanos:</a>
									<a href="tel:9038871807" class="call-us stroke stroke-black-thin" title="903-887-1807">903-887-1807</a>
									<p class="address stroke stroke-black-thin" title="816 W. Main St,">816 W. Main St,</p>
									<p class="address stroke stroke-black-thin" title="Gun Barrel City, TX">Gun Barrel City, TX</p>
								</div>
								<div class="social-col">
									<a href="https://www.facebook.com">
										<img src="<?php bloginfo('template_directory'); ?>/images/facebook.svg" alt="">
									</a>
									<a href="https://www.instagram.com">
										<img src="<?php bloginfo('template_directory'); ?>/images/instagram.svg" alt="">
									</a>

								</div>
							</div>
						</div>
					</div>
					<div class="column">
						<div class="dot chicken-tigh">
							<img src="<?php bloginfo('template_directory'); ?>/images/chicken-1.png">
						</div>
						<div class="dot fish-plate">
							<img src="<?php bloginfo('template_directory'); ?>/images/fish-2.png">
						</div>
						<div class="dot fish-fries">
							<img src="<?php bloginfo('template_directory'); ?>/images/fish.png">
						</div>
						<div class="dot chicken-leg">
							<img src="<?php bloginfo('template_directory'); ?>/images/chicken-4.png">
						</div>
						<div class="dot chicken-breast">
							<img src="<?php bloginfo('template_directory'); ?>/images/chicken-5.png">
						</div>
					</div>
				</div>
			</div>


			<div id="section-2" class="small-section">
				<div class="image-container">
					<img src="<?php bloginfo('template_directory'); ?>/images/fish-background.jpg" alt="">
				</div>
				<div class="text-container">
					<div class="title stroke stroke-black" title="Nuestra Comida">Nuestra Comida</div>
					<p class="paragraph">Toda nuestra comida está hecha usando técnicas auténticas de Abuelita; desde nuestro famosísimo pez gato de Mississippi, nuestros suculentos vegetales, costillas barbecue, salchicha ahumada, hasta nuestros rollos y pay de durazno, todo servido por nuestro staff 100% amigable y profesional. <br><br>¡Es un honor servirte!</p>
				</div>
			</div>
			<div id="section-3" class="small-section">
				<div class="text-container">
					<div class="title stroke stroke-black" title="Pollo y Pescado">Pollo y Pescado</div>
					<div class="title stroke stroke-black" title="Listo y Fresco">Listo y Fresco</div>
				</div>
				<div class="image-container">
					<img src="<?php bloginfo('template_directory'); ?>/images/fish-background-2.png" alt="">
				</div>
			</div>
			<div id="section-4" class="small-section">
				<div class="image-container">
					<img src="<?php bloginfo('template_directory'); ?>/images/vegetables.png" alt="">
				</div>
				<div class="text-container">
					<div class="title stroke stroke-black" title="16 riquísimos vegetales">16 riquísimos vegetales</div>
					<div class="title stroke stroke-black" title="14 carnes hechas en casa">14 carnes hechas en casa</div>
				</div>
			</div>
			<div id="section-5" class="small-section">
				<p class="paragraph">
				Los rollos estilo Texanos más antiguos. Cochran's es muy famosa por nuestros pays de durazno hechos a mano. También tenemos una gran variedad de pays libres de azucar. Siempre tenemos el mejor pollo y pescado, y seguimos construyendo el concepto para darte el mejor servicio a ti y a tu familia: come aquí, o pide para llevar. Tratamos siempre de ofrecer la mejor calidad de vegetales que podamos encontrar en el mercado. </p>
			</div>
		<?php endif; ?>
<script src="<?php bloginfo('template_directory'); ?>/javascripts/landing.js"></script>
<?php get_footer(); ?>

