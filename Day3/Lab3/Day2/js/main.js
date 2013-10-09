$(function(){
console.log(window.location.pathname);

//hides logout button at init
$('.logout-button').hide();

 //handles Home page blog post folding
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
$('.expand-all').css("cursor", "pointer");
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




/*------------------Datepicker for Registration Form------------------*/

	$('#dob-field').datepicker();




/*-----------------------------Admin Page-----------------------------*/

//on admin.php load, admin content defaults to view posts



	if(window.location.pathname === "/Day2/admin.php"){	

	//removes login form on admin page
	//****** Check for session w/ a check login to better handle this
	$('.login-form').hide();
	$('.logout-button').show();

	$('body').css("background", "#252525");
	$('header').css("borderBottom", "1px solid #383838");

	// $('#temp').empty();
	// $('#admin-content h2.title').html('Posts');

	// $.get('/Day2/templates/template.html', function(htmlArg){
	// 	var h = $(htmlArg).find('#view-posts').html();
	// 	$.template('viewPostsTemplate', h);
	// 	var html = $.render('', 'viewPostsTemplate');
	// 	$('#temp').append(html);
	// });

	// $('.dash').css("cursor", "pointer");
	// $(document).on('click', '.dash', function(e){
	// 	$('#temp').empty();
	// 	$('#admin-content h2.title').html('Posts');

	// 	$.get('/Day2/templates/template.html', function(htmlArg){
	// 		var h = $(htmlArg).find('#view-posts').html();
	// 		$.template('viewPostsTemplate', h);
	// 		var html = $.render('', 'viewPostsTemplate');
	// 		$('#temp').append(html);
	// 	});
	// });
	};// /if


$('.logout-button').css("cursor", "pointer");
$(document).on('click', '.logout-button', function(e){
	
});


//------------control panel view posts link
$('#view-posts').on('click', function(e){
	// e.preventDefault;
	console.log('view clicked');

	$('#admin-content h2.title').html('Posts<img class="new-post-h-icon" src="images/add-icon.png" alt="icon">');
	$('.new-post-h-icon').css("cursor", "pointer");

	// $('#temp').empty();

		// $.get('/Day2/templates/template.html', function(htmlArg){
		// var h = $(htmlArg).find('#view-posts').html();
		// $.template('viewPostsTemplate', h);
		// var html = $.render('', 'viewPostsTemplate');
		// $('#temp').append(html);
		// });
	// return false;
});




//VIEW POSTS TITLE CLICKED -> Edit Post   -opens the new post page so as not to duplicate wysiwyg editor
$('.post-block').css("cursor", "pointer");
// $(document).on('click', '.post-block',function(e){
// 	e.preventDefault;
// 	console.log('new posts clicked');

// 	$('#admin-content h2.title').html('Edit Post');

// 	$('#temp').empty();

// 	$.get('/Day2/templates/template.html', function(htmlArg){
// 		var i = $(htmlArg).find('#new-post-temp').html();
// 		$.template('npt', i);
// 		var html = $.render('', 'npt');
// 		$('#temp').append(html);
// 	});

// 	return false;
// });// /#post-block




//------------control panel new posts link
$('#new-post').on('click', function(e){
	// e.preventDefault;
	console.log('new posts clicked');

	$('#admin-content h2.title').html('New Post');

	$('#temp').empty();

	// $.get('/Day2/templates/template.html', function(htmlArg){
	// 	var i = $(htmlArg).find('#new-post-temp').html();
	// 	$.template('npt', i);
	// 	var html = $.render('', 'npt');
	// 	$('#temp').append(html);
	// });

	// return false;

});




//------------control panel view library link
$('#view-lib').on('click', function(e){
	e.preventDefault;
	console.log('view library clicked');

	$('#admin-content h2.title').html('Library<img class="add-media-h-icon" src="images/add-icon.png" alt="icon">');
	$('.add-media-h-icon').css("cursor", "pointer");

	$('#temp').empty();

	$.get('/Day2/templates/template.html', function(htmlArg){
		var h = $(htmlArg).find('#view-lib').html();
		$.template('viewLibTemplate', h);
		var html = $.render('', 'viewLibTemplate');
		$('#temp').append(html);
	});
	
	//renders gallery after lib page is made
	//slight delay to guarantee rendered html exists
	setTimeout(renderGallery, 100);

	return false;
});




//--------------------------Renders Admin Library gallery------------------------
function renderGallery(){
	//gets the block template
	$.get('/Day2/templates/template.html', function(htmlArg){
		var h = $(htmlArg).find('#gal-block').html();
		$.template('gt', h);
		var html = $.render('', 'gt');
		
		//*****************change the loop 10 to the # of uploaded images from server*******
		//handles populating gallery images based on folder contents
		//loops through 10 timesto append blocks from template
		for(var i=0;i<10;i++){

			//appends a rendered block as many times as needed
			$('#library').append(html);

			//for each block added, loops through all the blocks assigning an unique data-imgId
			//value to each block. if the block's imgId matches the loop index
			//the src attrib is appended with a consecutive # associated w/ filename
			for(var j=0;j<$('.library-image').length;j++){
				$('.library-image:eq('+i+')').attr('data-imgId', (i+1));
				$('.gal-lb:eq('+i+')').attr('data-lightbox', (i+1));

				if($('.library-image:eq('+i+')').attr('data-imgId') == (i+1)){
					$('.library-image:eq('+i+')').attr('src', 'images/library/thumbs/image' + (j+1) + '.jpg');
					$('.gal-lb:eq('+i+')').attr('src', 'images/library/thumbs/image' + (j+1) + '.jpg');
				};// /if
			};// /for
		};// /for


	});// /$.get
};// /renderGallery




//------------control panel add media link
$('#add-media').on('click', addMedia);
$(document).on('click', '.add-media-h-icon', addMedia);

function addMedia (e){
	e.preventDefault;
	console.log('add media clicked');

	$('#admin-content h2.title').html('Add Media');

	$('#temp').empty();

	$.get('/Day2/templates/template.html', function(htmlArg){
		var h = $(htmlArg).find('#add-media').html();
		$.template('addMediaTemplate', h);
		var html = $.render('', 'addMediaTemplate');
		$('#temp').append(html);
	});

	return false;
};




//----------control panel user settings link
$('#user-settings').on('click', function(e){
	// e.preventDefault;
	console.log('user settings clicked');

	$('#admin-content h2.title').html('User Settings');

	$('#temp').empty();

	// $.get('/Day2/templates/template.html', function(htmlArg){
	// 	var h = $(htmlArg).find('#user-settings').html();
	// 	$.template('uSTemplate', h);
	// 	var html = $.render('', 'uSTemplate');
	// 	$('#temp').append(html);
	// });

	// return false;
});




//------------CANCEL edit/new post click handler----------------------------------
$('.post-cancel').on('click', function(e){
	//e.preventDefault;
	console.log('view clicked');

	$('#admin-content h2.title').html('Posts');

	$('#temp').empty();

		// $.get('/Day2/templates/template.html', function(htmlArg){
		// var h = $(htmlArg).find('#view-posts').html();
		// $.template('viewPostsTemplate', h);
		// var html = $.render('', 'viewPostsTemplate');
		// $('#temp').append(html);
		// });
	//return false;
});













});// /self executing