$(".dot").on("mouseenter touchstart", function(event){
  $target = $(event.target);
   var tl = new TimelineMax(); 
   tl
    .to($target.find("img"), 0, { rotation: 12 })
    .to($target.find("img"), 0, { rotation: -12, delay: .225 })
    .to($target.find("img"), 0, { rotation: 12, delay: .225 })
    .to($target.find("img"), 0, { rotation: -12, delay: .225 })
    .to($target.find("img"), 0, { rotation: 12, delay: .225 })
    .to($target.find("img"), 0, { rotation: -12, delay: .225 })
    .to($target.find("img"), 0, { rotation: 12, delay: .225 })
    .to($target.find("img"), 0, { rotation: -12, delay: .225 })
    .to($target.find("img"), 0, { rotation: 12, delay: .225 })
    .to($target.find("img"), 0, { rotation: -12, delay: .225 })
    .to($target.find("img"), 0, { rotation: 12, delay: .225 })
    .to($target.find("img"), 0, { rotation: -12, delay: .225 })
    .to($target.find("img"), 0, { rotation: 12, delay: .225 });

    $(event.target).on("mouseleave", function(event){
      $target = $(event.target);
      setTimeout(function(){
        tl.pause();
      }, 500)
    });
});


var landing_tl = new TimelineMax(); 

landing_tl 
  .from(".navigation", .5, {
    opacity: 0, 
    y: -40,
    ease:  Power1.easeOut,
    delay:  1 
  })
  .staggerFrom(".column .dot", .1, {
    opacity: 0 
  }, .35)
  .from("#section-1 .text-wrapper", .5, {
    opacity: 0, 
    x: -50, 
    ease:  Power1.easeOut
  }, 1.2)