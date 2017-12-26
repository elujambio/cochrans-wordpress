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
