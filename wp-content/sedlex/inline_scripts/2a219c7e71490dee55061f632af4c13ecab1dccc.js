		jQuery(document).ready(function () {	
		
			jQuery(window).resize(function () { 
				jQuery('a.gallery_colorbox').colorbox({
									maxWidth: Math.min(1200, Math.floor(0.95*jQuery(window).width())-80), 
					maxHeight: Math.min(1200, Math.floor(0.95*jQuery(window).height())-80)
				
				}) ; 
			});
				
			jQuery('a.gallery_colorbox').colorbox({ 
				slideshow: true,
								title: function(){ 
					if (typeof jQuery(this).children("img:first").attr('title') !== "undefined") {
						return "<h2>"+jQuery(this).children("img:first").attr('title')+"</h2>" ; 
					} else {
						return "" ; 
					}
				},
								slideshowAuto:false,
								slideshowSpeed: 5000 ,
				slideshowStart: 'Play',
				slideshowStop :  'Pause',
				current : 'Image {current} of {total}', 
				scalePhotos : true , 
				previous: 'Previous',	
				next:'Next',
				close:'Close',
													maxWidth: Math.min(1200, Math.floor(0.95*jQuery(window).width())-80), 
					maxHeight: Math.min(1200, Math.floor(0.95*jQuery(window).height())-80),
												
				
				opacity:0.8 , 
				onComplete : function(){ 
					jQuery("#cboxLoadedContent").css({overflow:'hidden'});
					jQuery("#colorbox").css({overflow:'visible'});
									jQuery("#cboxPrevious").hide();
					jQuery("#cboxNext").hide();
								},
				rel:'group1' 
			});
		});	
						
		