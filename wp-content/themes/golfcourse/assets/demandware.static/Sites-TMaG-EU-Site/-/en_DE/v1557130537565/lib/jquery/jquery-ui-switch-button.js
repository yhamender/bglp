$.widget("custom.switchbutton", {
	
	options: {
        timeout: 150,
        disabled : false
    },
    
    _create: function() {
    	var $selectedItem;
    	
    	this.element.css({
    		position : 'relative'
    	});
    	
    	$selectedItem = this.element.find("li.selected");
    	$selectableItem = this.element.find("li.selectable");
    	
    	if ( $selectedItem.length > 0 ) {
    		this._addSwitch( $selectedItem.index() );
    	}
    	
    	if ( $selectableItem.length == 1 ) {
    		this.element.addClass("not-allowed");
    	}
    	
    	this._initializeEvent();
    },
	
	_initializeEvent: function() {
		var self = this;
		
		this.element.on("click", "li.switch-item a[href].swatchanchor", function(e) {
			var $selectedItem = self.element.find("li.selected"),
				$link = $(this),
				$li = $link.parent("li");
			
			e.preventDefault();
			
			if ( self.options.disabled ) {
				return false;
			}
			
			if ( $li.hasClass("selected") ) {
				return false;
			} 
			
			if ( $selectedItem.length == 0 ) {
				$li.addClass("selected");
				self._addSwitch( $li.index() );
				self._trigger( "change", null, $link.attr("href") );
			} else {
				$selectedItem.removeClass("selected");
				self.switchLi.animate({
					"left" : self._getLeftPosition( $li.index() )
				}, self.options.timeout, function() {
					$li.addClass("selected");
					self._trigger( "change", null, $link.attr("href") );
				});
			}
			
			return false;
		});
		
	},
	
	_addSwitch: function(selectedIndex) {
		this.switchLi = $("<li>", {
    		"class" : "switch",
    		"css"   : {
    			"left" :  this._getLeftPosition(selectedIndex)
    		}
    	}).appendTo(this.element);
	},
	
	_getLeftPosition: function(selectedIndex) {
		return selectedIndex == 0? "0" : "50%"
	}
});