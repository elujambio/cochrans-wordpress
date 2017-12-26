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
							<img src="<?php bloginfo('template_directory'); ?>/images/facebook.svg">
						</a>
						<a href="https://www.instagram.com">
							<img src="<?php bloginfo('template_directory'); ?>/images/instagram.svg">
						</a>

					</div>
				</div>			
				<a href="" class="logo-link">
					<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="">
				</a>
			</div>
		</footer>
		<!-- <script src="<?php bloginfo('template_directory'); ?>/javascripts/menu.js"></script> -->
		<script>	
			$(document).on("click", function(event){
				if ($(event.target).is(".menu-trigger")){
					toggleMenu(); 
				}
			});
			var menu_timeline = new TimelineMax({ paused: true }); 

			menu_timeline
				.addLabel("menu-closed")
				.to(".mt-1", .3, {
					y: 6, 
					ease: Power2.easeIn
				})
				.to(".mt-2", .3, {
					y: -6, 
					ease: Power2.easeIn
				}, "-=.3")
				.to(".mt-1", .3, {
					rotation: 45, 
					ease: Power2.easeOut
				})
				.to(".mt-2", .3, {
					rotation: -45, 
					ease: Power2.easeOut
				}, "-=.3")
				.from(".menu", 1, {
					opacity: 0, 
					pointerEvents: "none"
				}, "-=.3")
				.addLabel("menu-open");


			var menu_open = false; 
			function toggleMenu(){
				console.log("toggleMenu");
				if (menu_open == false){
					menu_timeline.tweenTo("menu-open"); 
					menu_open = true;
				} else {
					menu_timeline.tweenTo("menu-closed"); 
					menu_open = false;
				}

			}

		</script>
	</body>
</html>