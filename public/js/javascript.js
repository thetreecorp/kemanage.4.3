$(document).ready(function(){
    $(".modal-button-desktop li").click(function(){
        $(".system-modal-left").slideToggle();
    });
    $(".modal-button").click(function(){
        $(".system-modal").slideToggle();
    });
    $(".close-modal").click(function(){
        $(".system-modal").slideToggle();
    });

    // $(".main-button").click(function(){
    //     $(".main-menu-modal").slideToggle();
    // });
    // $(".close-main-modal").click(function(){
    //     $(".main-menu-modal").slideToggle();
    // });

    $(".modal-button-left").click(function(){
        $(".system-modal-left").slideToggle();
    });



    $(".close-modal-left").click(function(){
        $(".system-modal-left").slideToggle();
    });


    $(".accordion .accordion-box .header").click(function(){
            $(this).next('.content').slideToggle();
            $(this).find(".fa-chevron-down").toggleClass("rotate");

    });

   /*$(".mobile-bottom-bar .mobile-nav .toooltip .toooltip-content > li").click(function(){
		$(this).find(".toooltip-content").eq(0).slideToggle();
        event.stopImmediatePropagation();
    });
	*/

	$(".mobile-bottom-bar .mobile-nav .toooltip li").click(function(){
		$(this).find(".toooltip-content").first().slideToggle();
		$(this).find(".toooltip-content").each(function(i,e){
			if(i>0)
				$(e).css('display','none');
		});
        event.stopImmediatePropagation();
    });

    $(".mobile-bottom-bar .mobile-nav .toooltip li .close").click(function(){
        //$(this).closest(".mobile-bottom-bar .mobile-nav .toooltip li .toooltip-content").slideToggle();
		$(this).parent("div.button").parent(".toooltip-content").slideToggle();
		event.stopImmediatePropagation();
    });

   /* $(".toooltip-click-content").hide();

    $(".toooltip-click").click(function(){
        $(".toooltip-click-content").css({'display':'block'});
    });

    $(".curr-close").click(function(){
        $(".toooltip-click-content").slideToggle();
    });*/

    $('.currencies').select2({
        placeholder: 'Select an option'
    });

    $('.sidebar-main .bar').scrollbar();
    //$('.scrollbar-inner').scrollbar();


    $(".sidebar-main .bar .list .list-button").click(function(){
        $(".sidebar-main .bar .list .list-button").not(this).next(".nav-dropdown").removeClass("sidebar-dropdown");
        $(".sidebar-main .bar .list .nav-dropdown .subnav .nav-item .sub-button").not(this).next(".sub-nav-dropdown").removeClass("sidebar-dropdown");
        $(this).next(".nav-dropdown").toggleClass("sidebar-dropdown");
        $(".sidebar-main .bar .list").not(this).removeClass("active");
        $(this).parent().toggleClass("active");
    });

    $(".sidebar-main .bar .list .nav-dropdown .nav-close").click(function(){
        $(".sidebar-main .bar .list .list-button").not(this).next(".nav-dropdown").removeClass("sidebar-dropdown");
        $(".sidebar-main .bar .list .nav-dropdown .subnav .nav-item .sub-button").not(this).next(".sub-nav-dropdown").removeClass("sidebar-dropdown");
    });

    $('.sidebar-main .bar .list .nav-dropdown .subnav .nav-item .sub-nav-dropdown .sub-nav-close').click(function(){
        $(".sidebar-main .bar .list .nav-dropdown .subnav .nav-item .sub-button").not(this).next(".sub-nav-dropdown").removeClass("sidebar-dropdown");
    });

    $(".sidebar-main .bar .list .nav-dropdown .subnav .nav-item .sub-button").click(function(){
        $(".sidebar-main .bar .list .nav-dropdown .subnav .nav-item .sub-button").not(this).next(".sub-nav-dropdown").removeClass("sidebar-dropdown");
        $(this).next('.sub-nav-dropdown').toggleClass("sidebar-dropdown");
        $(".sidebar-main .bar .list .nav-dropdown .subnav .nav-item").not(this).removeClass("active");
        $(this).parent().toggleClass("active");
    });


    $(".main-box .accordion-list").click(function(){
        var data = document.getElementsByClassName('child-accordion')[$(this).index()];
        $(".child-accordion").not(data).slideUp();
        $(data).slideToggle();
    });

    $(".main-box .sub-accordion-list").click(function(){
        var currentParentIndex = $(this).parent().parent().index(".child-accordion");
        console.log(currentParentIndex);
        var data = document.getElementsByClassName('child-accordion')[currentParentIndex];
        var openSlide = data.children[$(this).index()+3];
        $(".sub-child-accordion").not(openSlide).slideUp();
        $(openSlide).slideToggle();
    });


});
