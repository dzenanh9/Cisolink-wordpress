

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


//details controls

TriggerClick = 0;
$(".item_goto").click(function () {
    timeout_clear()
    Itemstimeout_clear()

    $(".service_details").toggleClass("active");

    $(".category_items").children(":nth-child(n)").toggleClass('hidden');
    $(".category_items").children(":first").removeClass('hidden');
    $(".category_items").children(":first").toggleClass('active');
    // $(".service_details").children(":nth-child(2)").removeClass('hidden');
    // $(".service_details").children(":nth-child(2)").toggleClass('prepare');
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
  var cat_slide = document.getElementsByClassName("category_items");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < next_slide.length; i++) {
    next_slide[i].style.display = "none"; 
  }
  for (i = 0; i < cat_slide.length; i++) {
    cat_slide[i].style.display = "none"; 
  }
  slides[slideIndex-1].style.display = "block";
  next_slide[slideIndex-1].style.display = "block";
  cat_slide[slideIndex-1].style.display = "block";
  cat_items=cat_slide[slideIndex-1].children;

timeout_clear()
timeout_init()
}

//service details slide animation
var cat_items;
var itemIndex = 1;
categoryItemsSlider(itemIndex);

// Next/previous controls
function plusItem(n) {
    timeout_clear()
    $(".loader").stop()
    categoryItemsSlider(itemIndex += n);
}

// Thumbnail image controls
function currentItem(n) {
    categoryItemsSlider(itemIndex = n);
}

var itemtimeout;
//clear timer
function Itemstimeout_clear() {
    clearTimeout(itemtimeout);
}
//set timer
function Itemstimeout_init() {
    itemtimeout = setTimeout(autoitemslide, 10000);
}
// Autoslide category controls
function autoitemslide(){
    categoryItemsSlider(itemIndex += 1);
}
function categoryItemsSlider(n) {
    var i;
    if (n > cat_items.length) {itemIndex = 1} 
    if (n < 1) {itemIndex = cat_items.length}
    for (i = 0; i < cat_items.length; i++) {
        cat_items[i].style.display = "none"; 
    }
    cat_items[itemIndex-1].style.display = "block";
  Itemstimeout_clear()
  Itemstimeout_init()
  }

