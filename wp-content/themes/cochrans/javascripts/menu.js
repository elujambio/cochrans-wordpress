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
