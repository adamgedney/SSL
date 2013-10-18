$(function(){
console.log(window.location.pathname);


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



	if(window.location.pathname === "/admin.php"){	


	$('body').css("background", "#252525");
	$('header').css("borderBottom", "1px solid #383838");

	};// /if

//--------------------Logout button--------------------
$('.logout-button').css("cursor", "pointer");
// $(document).on('click', '.logout-button', function(e){
// 	window.location = 'index.php?action=home&page=1';
// });


//------------control panel view posts link
$('#view-posts').on('click', function(e){
	// e.preventDefault;
	console.log('view clicked');

	$('#admin-content h2.title').html('Posts<img class="new-post-h-icon" src="images/add-icon.png" alt="icon">');
	$('.new-post-h-icon').css("cursor", "pointer");

});




//VIEW POSTS TITLE CLICKED -> Edit Post   -opens the new post page so as not to duplicate wysiwyg editor
$('.post-block').css("cursor", "pointer");



//------------control panel new posts link
$('#new-post').on('click', function(e){
	// e.preventDefault;
	console.log('new posts clicked');

	$('#admin-content h2.title').html('New Post');

	$('#temp').empty();

});




//------------control panel view library link
$('#view-lib').on('click', function(e){
	// e.preventDefault;
	console.log('view library clicked');

	$('#admin-content h2.title').html('Library<img class="add-media-h-icon" src="images/add-icon.png" alt="icon">');
	$('.add-media-h-icon').css("cursor", "pointer");

	// $('#temp').empty();

	// $.get('/templates/template.html', function(htmlArg){
	// 	var h = $(htmlArg).find('#view-lib').html();
	// 	$.template('viewLibTemplate', h);
	// 	var html = $.render('', 'viewLibTemplate');
	// 	$('#temp').append(html);
	// });
	
	// //renders gallery after lib page is made
	// //slight delay to guarantee rendered html exists
	// setTimeout(renderGallery, 100);

	// return false;
});




//--------------------------Renders Admin Library gallery------------------------
// function renderGallery(){
// 	//gets the block template
// 	$.get('/templates/template.html', function(htmlArg){
// 		var h = $(htmlArg).find('#gal-block').html();
// 		$.template('gt', h);
// 		var html = $.render('', 'gt');
		
// 		//*****************change the loop 10 to the # of uploaded images from server*******
// 		//handles populating gallery images based on folder contents
// 		//loops through 10 timesto append blocks from template
// 		for(var i=0;i<10;i++){

// 			//appends a rendered block as many times as needed
// 			$('#library').append(html);

// 			//for each block added, loops through all the blocks assigning an unique data-imgId
// 			//value to each block. if the block's imgId matches the loop index
// 			//the src attrib is appended with a consecutive # associated w/ filename
// 			for(var j=0;j<$('.library-image').length;j++){
// 				$('.library-image:eq('+i+')').attr('data-imgId', (i+1));
// 				$('.gal-lb:eq('+i+')').attr('data-lightbox', (i+1));

// 				if($('.library-image:eq('+i+')').attr('data-imgId') == (i+1)){
// 					$('.library-image:eq('+i+')').attr('src', 'images/library/thumbs/image' + (j+1) + '.jpg');
// 					$('.gal-lb:eq('+i+')').attr('src', 'images/library/thumbs/image' + (j+1) + '.jpg');
// 				};// /if
// 			};// /for
// 		};// /for


// 	});// /$.get
// };// /renderGallery




//------------control panel add media link
// $('#add-media').on('click', addMedia);
$(document).on('click', '#add-media', function(e){
	// e.preventDefault;
	// console.log('add media clicked');
	//.add-media-h-icon
	$('#admin-content h2.title').html('Add Media');

	$('#temp').empty();

	// $.get('/templates/template.html', function(htmlArg){
	// 	var h = $(htmlArg).find('#add-media').html();
	// 	$.template('addMediaTemplate', h);
	// 	var html = $.render('', 'addMediaTemplate');
	// 	$('#temp').append(html);
	// });

	// return false;
});




//----------control panel user settings link
$('#user-settings').on('click', function(e){
	// e.preventDefault;
	console.log('user settings clicked');

	$('#admin-content h2.title').html('User Settings');

	$('#temp').empty();

});




//------------CANCEL edit/new post click handler----------------------------------
$('.post-cancel').on('click', function(e){
	//e.preventDefault;
	console.log('view clicked');

	$('#admin-content h2.title').html('Posts');

	$('#temp').empty();

});




//----------------------------Form Validation---------------------------------------

$(document).on('click', '#login-submit-button', function (e){
		
		var email = $('#login-email').val();
		var password = $('#login-pw').val();

		emailPat = /^\w+[\w-\.]*\@\w+((-\w+)|(\w*))\.[a-z]{2,3}$/; // standard email validation
		passPat = /^([a-zA-Z0-9@*#]{8,15})$/; //8-15 characters

		//preg_match compares regex to string
		if(!emailPat.test(email) && passPat.test(password)){
			
			e.preventDefault();
			$('.login-error').css('opacity', '1').html("Email Invalid");
		}else if(!passPat.test(password) && emailPat.test(email)){
			
			e.preventDefault();
			$('.login-error').css('opacity', '1').html("Password Invalid");
		}else if(!emailPat.test(email) && !passPat.test(password)){
			
			e.preventDefault();
			$('.login-error').css('opacity', '1').html("Username & Password Invalid");
		}else{
			return "true";
		}

});// /validateLogin




$(document).on('click', '#register-submit-button', function(e){
console.log('reg submit clicked');
	var first = $('#reg-first').val();
	var last = $('#reg-last').val();
	var username = $('#reg-un').val();
	var email = $('#reg-email').val();
	var male = $('#reg-male').val();
	var female = $('#reg-female').val();
	var state = $('#reg-state').val();
	var url = $('#reg-site').val();
	var dob = $('#dob-field').val();
	var phone = $('#reg-phone').val();
	var donation = $('#reg-donate').val();
	var pass = $('#reg-pass').val();
	var passagain = $('#reg-passagain').val();

	var emailPat = /^\w+[\w-\.]*\@\w+((-\w+)|(\w*))\.[a-z]{2,3}$/; // standard email validation
	// var urlPat = /^http\://[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(/\S*)?$/;//http://example.com
	var datePat = /^\d{1,2}\/\d{1,2}\/\d{4}$/;// 12/12/2012
	var phonePat = /^[2-9]\d{2}-\d{3}-\d{4}$/; //845-216-5030 
	var currencyPat = /^(\$)?(([1-9]\d{0,2}(\,\d{3})*)|([1-9]\d*)|(0))(\.\d{2})?$/;// $12.20 12.20 12 .20
	var passPat = /^[a-zA-Z]\w{3,14}$/; //4-15 char abcd aBcd ac3D

	//checks that passwords match
	if(pass === passagain){
		pass = $('#reg-pass').val();;
	}else{
		$('.password-error').css('opacity', '1').html("Passwords Don't Match");
	};

	//reg form validation conditions
	if(!emailPat.test(email)){

		e.preventDefault();
		$('.email-error').css('opacity', '1').html("Email Invalid");
	}else if(!gender){

		e.preventDefault();
		$('.radio-error').css('opacity', '1').html("Please choose a gender");
	}else if(!state){

		e.preventDefault();
		$('.state-error').css('opacity', '1').html("Please choose a state");
	}
	// else if(!urlPat.test(url)){

	// 	e.preventDefault();
	// 	$('.website-error').css('opacity', '1').html("URL Invalid");
	// }
	else if(!datePat.test(dob)){

		e.preventDefault();
		$('.dob-error').css('opacity', '1').html("Date Invalid");
	}else if(!phonePat.test(phone)){

		e.preventDefault();
		$('.phone-error').css('opacity', '1').html("Phone Number Invalid");
	}else if(!currencyPat.test(donation)){

		e.preventDefault();
		$('.donate-error').css('opacity', '1').html("Format Invalid $donation");
	}else if(!passPat.test(pass)){

		e.preventDefault();
		$('.password-error').css('opacity', '1').html("Password Invalid");
	}else{
		console.log('validation passed in JS?');
		e.preventDefault();
		return "true";
	}


});// /validateReg










});// /self executing