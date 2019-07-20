

//Hamburger menu 

var menuBtn = $('a.menu-btn'),
    menuBtnBlock = menuBtn.find('div.menu-btn-block');
menuBtn.on('click', function () {

    menuBtnBlock.toggleClass('on');
    if(menuBtnBlock.hasClass('on')){
        $('.menu-overall').addClass('on');
        $('.menu-overall').animate({
            top:"0"
        },500, function(){
        
        })
    }else{
        $('.menu-overall').animate({
            top:"-100%"
        },500, function(){
            $('.menu-overall').removeClass('on');
        })

        
    }
    

});




TriggerClick = 0;
$(".detail_expand").click(function () {

    $(".service_details").toggleClass("active");

    $(".service_details").children(":nth-child(n)").toggleClass('hidden');
    $(".service_details").children(":first").removeClass('hidden');
    $(".service_details").children(":first").toggleClass('active');
    $(".service_details").children(":nth-child(2)").removeClass('hidden');
    $(".service_details").children(":nth-child(2)").toggleClass('prepare');
})

$(".footer-nav").on('click' ,function(){
    $(".footer-nav").animate({
        height: "50vh"
    },200,function(){

    })
})
//Main slideshow
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}
// Autoslide image controls
function autoslide(){
    showSlides(slideIndex += 1);
}

var timeout;
//clear timer
function timeout_clear() {
    clearTimeout(timeout);
}
//set timer
function timeout_init() {
    timeout = setTimeout(autoslide, 30000);
    //animation loader
    $(".loader").stop()
    $('.loader').animate({
        height:"0%"
    },10,function(){
        $('.loader').animate({
            height:"100%"
        },30000)
    })
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slide_item");
  var next_slide = document.getElementsByClassName("next_item");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < next_slide.length; i++) {
    next_slide[i].style.display = "none"; 
  }
  slides[slideIndex-1].style.display = "block";
  next_slide[slideIndex-1].style.display = "block";
timeout_clear()
timeout_init()
}


