//Detect URL and style links

$(document).ready(function () {

if(window.location.href.indexOf("events") != -1){
 $('li.nav-item a:contains("Events")').addClass('selected');
}

else if(window.location.href.indexOf("testing") != -1){
 $('li.nav-item a:contains("Testing")').addClass('selected');
}

else if(window.location.href.indexOf("photos") != -1){
 $('li.nav-item a:contains("Photos")').addClass('selected');
}

else if(window.location.href.indexOf("miscellaneous") != -1){
 $('li.nav-item a:contains("Miscellaneous")').addClass('selected');
}

});