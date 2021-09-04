
$(document).ready(function(){
 $(".U,.Z,.E,.d,.s,.l,.m").click(function(){touchSideSwipe.tssClose()})
 $(".C").click(function(){
   window.open("mailto:www.noelkhantsilwin@gmil.com","_system");
 })
 $(".Fb").click(function(){
   window.open("fb://profile/100037776096226","_system");
 })
   $(".Z").click(function(){
    $(".unicode").css("display","none");
    $(".zawgyi").css("display","block");
    $(".english").css("display","none");
    $(".Z").css("background-color","rgba(0,0,0,0.11)");
    $(".Z").css("filter","invert(11%) sepia(50%) saturate(7390%) hue-rotate(330deg) brightness(81%) contrast(108%)");
    $(".Z").css("-webkit-filter","invert(11%) sepia(50%) saturate(7390%) hue-rotate(330deg) brightness(81%) contrast(108%)");
    $(".U,.E").css("background-color","rgba(0,0,0,0)");
    $(".U,.E").css("filter","none");
    $(".U,.E").css("-webkit-filter","none");
})
$(".U").click(function(){
   $(".zawgyi").css("display","none");
   $(".unicode").css("display","block");
   $(".english").css("display","none");
   $(".U").css("background-color","rgba(0,0,0,0.11)");
   $(".U").css("filter","invert(11%) sepia(50%) saturate(7390%) hue-rotate(330deg) brightness(81%) contrast(108%)");
   $(".U").css("-webkit-filter","invert(11%) sepia(50%) saturate(7390%) hue-rotate(330deg) brightness(81%) contrast(108%)");
   $(".Z,.E").css("background-color","rgba(0,0,0,0)");
   $(".Z,.E").css("filter","none");
   $(".Z,.E").css("-webkit-filter","none");
})
$(".E").click(function(){
   $(".zawgyi").css("display","none");
   $(".unicode").css("display","none");
   $(".english").css("display","block");
   $(".E").css("background-color","rgba(0,0,0,0.11)");
   $(".E").css("filter","invert(11%) sepia(50%) saturate(7390%) hue-rotate(330deg) brightness(81%) contrast(108%)");
   $(".E").css("-webkit-filter","invert(11%) sepia(50%) saturate(7390%) hue-rotate(330deg) brightness(81%) contrast(108%)");
   $(".U,.Z").css("background-color","rgba(0,0,0,0)");
   $(".U,.Z").css("filter","none");
   $(".U,.Z").css("-webkit-filter","none");
})
$(".d").click(function(){
      $("body,.li").toggleClass("dark");
      $("body").toggleClass("h3");
       $(".d").toggleClass("dd");
       $("nav").toggleClass("dark");
   })
});
$(".F,.s,.m,.l").click(function(){
   $(".dropdown").slideToggle();
   $(".F").toggleClass("dd");
   $(".arrow").toggleClass("ro");
  
})
$(".s").click(function(){
   $("body").css("font-size","small");
   $(".s").css("background-color","#990025");
   $(".s").css("color","white");
   $(".m,.l").css("background-color","rgba(0,0,0,0)");
   $(".m,.l").css("color","black");
   $(".firstchild").addClass("margin");
})
$(".m").click(function(){
   $("body").css("font-size","medium");
   $(".m").css("background-color","#990025");
   $(".m").css("color","white");
   $(".s,.l").css("background-color","rgba(0,0,0,0)");
   $(".s,.l").css("color","black");
   $(".firstchild").removeClass("margin");
})
$(".l").click(function(){
   $("body").css("font-size","large");
   $(".l").css("background-color","#990025");
   $(".l").css("color","white");
   $(".s,.m").css("background-color","rgba(0,0,0,0)");
   $(".s,.m").css("color","black");
   $(".firstchild").removeClass("margin");
});

 let b =[];
 for ( let i=0; i<16; i++){
    b.push(i);
 }
   $(document).ready(function(){
   for(let a= 0; a<b.length; a++){
    $(`.head${b[a]}`).click(function(){
      $(`.para${b[a]}`).slideToggle();
  }); 
 };
});
$(document).ready(function(){
$(window).scroll(function() {
   if($(window).scrollTop() >= $('body').offset().top + $('body').outerHeight() - window.innerHeight) {
       $(".para0,.para1,.para2,.para3,.para4,.para5,.para6").hide(500);
   }
});
$(window).scroll(function() {

   if($(window).scrollTop() == 0) {
      $(".para7,.para8,.para9,.para10,.para11,.para12,.para13,.para14").hide(500);
  }
});
});