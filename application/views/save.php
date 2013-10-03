                    <div id="featured"> 
     <img src="images/example/overflow.jpg" alt="...eliminates directly selecting strategies such as iron condors, straddles 
                or covered calls." />
     <img src="images/example/captions.jpg"  alt="HTML Captions" />
     <img src="images/example/features.jpg" alt="and more features" />
</div>
            <script type="text/javascript">
     $(window).load(function() {
         $('#featured').orbit();
     });

$('#featured').orbit({
     animation: 'fade',                  // fade, horizontal-slide, vertical-slide, horizontal-push
     animationSpeed: 800,                // how fast animtions are
     timer: true, 			 // true or false to have the timer
     advanceSpeed: 4000, 		 // if timer is enabled, time between transitions 
     pauseOnHover: false, 		 // if you hover pauses the slider
     startClockOnMouseOut: false, 	 // if clock should start on MouseOut
     startClockOnMouseOutAfter: 1000, 	 // how long after MouseOut should the timer start again
     directionalNav: true, 		 // manual advancing directional navs
     captions: true, 			 // do you want captions?
     captionAnimation: 'fade', 		 // fade, slideOpen, none
     captionAnimationSpeed: 800, 	 // if so how quickly should they animate in
     bullets: false,			 // true or false to activate the bullet navigation
     bulletThumbs: false,		 // thumbnails for the bullets
     bulletThumbLocation: '',		 // location from this file where thumbs will be
     afterSlideChange: function(){}, 	 // empty function 
     fluid: true                         // or set a aspect ratio for content slides (ex: '4x3') 
});
</script><?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
