//Navbar hover function

function Navbar(){
    if($(window).width()<1200){
        $(".dropdown-toggle").attr("data-toggle","dropdown")
    }
    else{
       $(".dropdown-toggle").removeAttr("data-toggle","dropdown")
    }
}

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


  

  //Menu


  $("#addmenuform").toggle()
  $("#addmenubutton").on('click',function(){
    $("#addmenuform").toggle()
  })
  $(".addsubmenuform").toggle()
  $(".addsubmenubutton").on('click',function(){
  $(this).parent().parent().parent().find(".addsubmenuform").toggle();
  })

});

//Navbar

$(window).resize(Navbar)
