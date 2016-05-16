(function( $ ) {
	$('.posText').each(function(){
	  $(this).next(this).prev(this).css('margin-bottom','30px');
	  var content_height = $(this).find('.overlay_content').height();
	  $(this).find('.overlay_content.vertical_align_middle').css('margin-top',-(Math.ceil((content_height/2))+30));
	});
})(jQuery);
