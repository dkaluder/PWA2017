function evenpanels() {
			var heights = [];                           // make an array
			$(".panel-body").each(function(){           // copy the height of each
				heights.push($(this).height());         //   element to the array
			});
			heights.sort(function(a, b){return b - a}); // sort the array high to low
			var minh = heights[0];                      // take the highest number    
			$(".panel-body").height(minh);              // and apply that to each element
		}
		
		$(window).resize(function () { 
        $(".panel-body").each(function(){
            $(this).css('height',"");           // clear height values
        });                                     
        evenpanels();
});
