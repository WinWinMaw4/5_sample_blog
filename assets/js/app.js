$(".show-sidebar-btn").click(function(){
    $(".sidebar").animate({marginLeft:0});
});

$(".hide-sidebar-btn").click(function(){
    $(".sidebar").animate({marginLeft:"-100%"});
});

function go(url){
    setTimeout(function(){
        location.href = url;
    },500)
};

//full-screen-card

$(".full-screen-btn").click(function(){
   let current = $(this).closest(".card");
    current.toggleClass("full-screen-card");
    if(current.hasClass("full-screen-card")){
        $(this).html(`<i class="feather-minimize-2 h4 "></i>`)
    }else{
        $(this).html(`<i class="feather-maximize-2 h4 "></i>`)
    }
});

//sidebar overflow Scroll
// let screenHeight = $(window).height();
// let currentHeight = $('.nav-menu .active').offset().top;
//
// if(currentHeight > screenHeight*0.8){
//     $(".sidebar").animate({
//         scrollTop:currentHeight-150
//     },1000)
// };

