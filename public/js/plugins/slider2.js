// Utility
if ( typeof Object.create !== 'function' ) {
  Object.create = function( obj ) {
    function F() {};
    F.prototype = obj;
    return new F();
  };
}

(function( $, window, document, undefined ) {

	var Slider2 = {
	    init: function( options, elem ) {
	        
	      var self = this;
	      
	      	self.elem = elem;
	      	self.$elem = $( elem );

	      	// self.$elem.css('')

	      	self.width = self.$elem.width();
	      	self.options = $.extend( {}, $.fn.slider2.options, options );

	      	self.$slider = self.$elem.find(".slide-items");
	      	self.$items = self.$slider.find('.slide-item');
	      	
	      	self.index = 0;
	      	self.$index = self.$slider.find('.slide-item').eq( self.index )
	      	self.length = self.$items.length;

	      	for (var i = self.length - 1; i >= 0; i--) {
	      		var left = parseInt( self.$slider.css('left') )*-1;
	      		console.log( left );

	      		left += self.width;
	      		self.$slider.css('left', (left*-1)).find('.slide-item').first().before( self.$items.eq( i ).clone() );
	      	}


	      	self.$index.addClass('active');
	      	console.log(  );

	      	// self.active();
	    },
	    active: function (options) {
	    	var self = this;

	    	// if( !options ) options = self.options.duration;

	    	var left = parseInt( self.$slider.css('left') )*-1;
	    	var n = (self.width + left)*-1;

	    	console.log( self.width );

	    	var $index = self.$slider.find('.slide-item').eq( self.options.index );
	    	// self.$slider.append( $index.clone() );

	    	self.$slider.animate({
	    		left: n,
	    	}, self.options.duration, self.options.easing, function (){

	    		setTimeout(function () {
	    			self.active();
	    		}, self.options.refresh);
	    	});
	    }
	}
	$.fn.slider2 = function( options ) {
		return this.each(function() {
		  	var $this = Object.create( Slider2 );
		  	$this.init( options, this );
		  	$.data( this, 'slider2', $this );
		});
	};
	$.fn.slider2.options = {
        effect: "fade",
        speed: 500,
        duration: 750,
        easing: "easeInOutQuint",
        auto: !0,
        refresh: 5e3,
        random: !0,
        min_height: 180,
        index: 0
    };
})( jQuery, window, document );
