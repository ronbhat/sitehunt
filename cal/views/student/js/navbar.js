//$('.x-navigation').children().removeClass('active');
'use-strict';

$('document').ready(function() {
	var path = window.location.pathname;
	var page = path.split("/").pop();
	
	switch(page) {
		case '' 			: 	$('#index').addClass('active');
								break;
		case 'index.php' 	: 	$('#index').addClass('active');
								break;
		case 'addClass.php' :	$('#class').addClass('active');
								$('#add-class').addClass('active');
								break;
		case 'viewClass.php' :	$('#class').addClass('active');
								classNav();
								break;
		case 'askQuestion.php' :	$('#class').addClass('active');
								questionNav();
								break;
								
		case 'joinClass.php' :	$('#class').addClass('active');
								$('#add-class').addClass('active');
								break;
								
		case 'calendar.php' :	$('#cal').addClass('active');
								break;
								
		case 'editProfile.php' :$('#profile').addClass('active');	
								$('#updateProfile').addClass('active');
								break;
								
		case 'changePass.php' :	$('#profile').addClass('active');
								$('#changePass').addClass('active');
								break;
	}
});

//function to add 'active' css class to the respective nav item of the class sub navs
function classNav() {
	var vars = getUrlVars();
	var classId = vars.classId;
	
	var selector = '#class-id-' + classId;
	$(selector).addClass('active');
	$(selector).closest(".xn-openable").addClass('active');;
}

//function to add 'active' css class to the respective nav item of the question sub navs
function questionNav() {
	var vars = getUrlVars();
	var classId = vars.classId;
	
	var selector = '#ques-id-' + classId;
	$(selector).addClass('active');
	$(selector).closest(".xn-openable").addClass('active');;
}

function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++) {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}