$(function(){

 $('img[data-post-id]').css('transform','rotate(' + 30 + 'deg)');
	//click handler for fold article icon
	$('.fold-icon').on('click', function(e){
		var currentPost = $(this).attr('data-post-id');

		if($(this).attr('data-post-flipped') == 'true'){
			
			$('.post-folded[data-post-id='+currentPost+']').addClass('post');
			$('.post[data-post-id='+currentPost+']').removeClass('post-folded');

			$('img[data-post-id='+currentPost+']').css('transform','rotate(' + 0 + 'deg)');

			//boolean stored in element
			$(this).attr('data-post-flipped', 'false');
		}else if($(this).attr('data-post-flipped') == 'false'){
			$('.post-folded[data-post-id='+currentPost+']').removeClass('post');
			$('.post[data-post-id='+currentPost+']').addClass('post-folded');

			$('img[data-post-id='+currentPost+']').css('transform','rotate(' + 30 + 'deg)');

			//boolean stored in element
			$(this).attr('data-post-flipped', 'true');
		};
	}); // /.fold-icon on click

	//if post clicked while folded, it will expand
	$('.post-folded h2, .post-folded p').on('click', function(){
		var currentPost = $(this).parent().attr('data-post-id');
		var post = $(this).parent();

		if($('img[data-post-id='+currentPost+']').attr('data-post-flipped') == 'true'){

			post.addClass('post');
			post.removeClass('post-folded');

			$('img[data-post-id='+currentPost+']').css('transform','rotate(' + 0 + 'deg)');
			
			//boolean stored in element
			$('img[data-post-id='+currentPost+']').attr('data-post-flipped', "false");
		};
	});// /.post on click

	//expands & contracts all articles
	$('.expand-all').on('click', function(){

		if($(this).attr('data-post-flipped') == 'true'){
			
			$('.post-folded').addClass('post');
			$('.post').removeClass('post-folded');

			$('img[data-post-id]').css('transform','rotate(' + 0 + 'deg)');

			//boolean stored in element
			$(this).attr('data-post-flipped', 'false');

		}else if($(this).attr('data-post-flipped') == 'false'){
			$('.post-folded').removeClass('post');
			$('.post').addClass('post-folded');

			$('img[data-post-id]').css('transform','rotate(' + 30 + 'deg)');

			//boolean stored in element
			$(this).attr('data-post-flipped', 'true');
		};


	});

});// /self executing