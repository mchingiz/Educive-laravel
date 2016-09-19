jQuery(document).ready(function($) {
	
	// Slider
	var current=1; // Currently active item
	var items=3; // Total number of slider items
	$(".fa-chevron-left").on("click",function(){
		current--;
		if(current==0){
			current=items;
		}
		// Removes all animation classes and hide inactive elements
		$("div[id*='sliderItem']").removeClass("animateLeft").removeClass("animateRight").hide();
		// Adds animation to currently active item
		$("#sliderItem"+current).addClass("animateRight").show();
		// Chooses currently active element and sets play-state to running
		$(".animateRight").css("animation-play-state","running");
	})
	$(".fa-chevron-right").on("click",function(){
		current++;
		if(current==items+1){
			current=1;
		}
		// Removes all animation classes and hide inactive elements
		$("div[id*='sliderItem']").removeClass("animateLeft").removeClass("animateRight").hide();
		// Adds animation to currently active item
		$("#sliderItem"+current).addClass("animateLeft").show();
		// Chooses currently active element and sets play-state to running
		$(".animateLeft").css("animation-play-state","running");
	})
	
	// Special Items
	$("#special .col-md-2").hover(function(){
		$("#special .col-md-2").css("opacity",".3");
		$(this).css("opacity","1");
		
	},function(){
		$("#special .col-md-2").css("opacity","1");
	})
});
    
    
// Navbar
    
    
/*$("#header .dropdown").mouseenter(function(){
    if( $(window).width()>768){
    
    $(this).find(">a").css("color","#F44336")
    $(this).find(".dropdown-menu").slideDown()
    }
 })
$("#header .dropdown").mouseleave(function(){
    if( $(window).width()>768){
    $(this).find(">a").css("color","white")
    $(this).find(".dropdown-menu").slideUp();
    }
 })*/

    var dropp1=0;
$('#drop11').click(function (argument) {
    if (dropp1==0) {
    $('#drop1').css('display','block')
    dropp1=1;
}
else{
     $('#drop1').css('display','none')
    dropp1=0;
}
})




$('#drop11').hover(function() {
    
    $('#drop1').css('display','block')
}, function() {
    $('#drop1').css('display','none')
});
    
   
    
