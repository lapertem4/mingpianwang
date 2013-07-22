

//sidebar scroll  
$(document).ready(function(){ 

$(".scroll_ask").mouseenter(function(){ 
    $(".scrollpanel_ask").animate({width:'toggle'},'fast','swing');
  }); 

$(".scroll_top").mouseenter(function(){ 
    $(".scrollpanel_top").animate({width:'toggle'},'fast','swing');
  }); 

$(".scroll_ask").mouseleave(function(){ 
    $(".scrollpanel_ask").animate({width:'toggle'},'fast','swing');
  }); 

$(".scroll_top").mouseleave(function(){ 
    $(".scrollpanel_top").animate({width:'toggle'},'fast','swing');
  }); 

}); 	



//back top
$(document).ready(function(){
	$('.scrollpanel_top').click(function(){
		$('body,html').animate({scrollTop:0},500)
	});
});



//comment type
function show(n){ 
var o = document.getElementById('comment_type').getElementsByTagName("a"); 
var c = document.getElementById('comment_content').getElementsByTagName("div"); 
for(i = 0; l = o.length, i < l; o[i].className = '', c[i].style.display = 'none',i++ ); 
o[n].className = 'over'; 
c[n].style.display = 'block'; 
} 