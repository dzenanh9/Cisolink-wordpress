

// Hamburger menu 

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
//footer nav mob controls
var footer_nav = document.getElementById('footer');

if(footer_nav!=null){
    var footer = new Hammer(footer_nav);
footer.get('swipe').set({ direction: Hammer.DIRECTION_VERTICAL });
// listen to events...
footer.on("swipeup", function(ev) {
    $('.footer-nav').animate({
        height:"50%"
    },500, function(){
    
    })
});
footer.on("swipedown", function(ev) {
    $('.footer-nav').animate({
        height:"5%"
    },500, function(){
    
    })
});
}




//resize issue
$("html, body, .pagewrapper, .service_slider, .menu-overall").css({
    height: $(window).height()
});




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
  get_category(cat_slide[slideIndex-1]);
  
timeout_clear()
timeout_init()
}



//service details slide animation
var cat_card
var cat_items;
var itemIndex = 1;
categoryItemsSlider(itemIndex);
function get_category(cat){
    
    cat_card=cat;
    cat_items=cat.children;
    
}

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
    selectedCard=itemIndex;
    cardLenght=cat_items.length;

  Itemstimeout_clear()
  Itemstimeout_init()
  }

var selectedCard;
var cardLenght;

//details controls
    //show details
    $(".item_goto").click(function () {
        timeout_clear()
        Itemstimeout_clear()
        
        $(".service_details").addClass("active");
        //remove classes of past cards
        $(".category_items").children(":nth-child(n)").removeClass('active');
        $(".category_items").children(":nth-child(n)").removeClass('prepare');
        $(".category_items").children(":nth-child(n)").css("display", "none");

        //display new cards
        
        $(".category_items").children(":nth-child("+(selectedCard)+")").addClass('active');
        $(".category_items").children(":nth-child("+(selectedCard+1)+")").addClass('prepare');
        $(".category_items").children(":nth-child("+(selectedCard)+")").css("display", "block");
        $(".category_items").children(":nth-child("+(selectedCard+1)+")").css("display", "block");
        if (selectedCard == cardLenght) { 
            $(".category_items").children(":nth-child("+selectedCard+")").addClass('last');
        }
        selectedCard++;
        if (selectedCard > cardLenght) { selectedCard = 1}
    })
    //hide details
    $(".backbutton").click(function () { 
        $(".service_details").removeClass("active");
        $(".category_items").children(":nth-child(n)").removeClass('active');
        $(".category_items").children(":nth-child(n)").removeClass('prepare');
        $(".category_items").children(":nth-child(n)").removeClass('last');
        $(".category_items").children(":nth-child(n)").css("display", "none");
        $(".category_items").children(":nth-child("+(selectedCard)+")").css("display", "block");
        
        timeout_init();
        Itemstimeout_init();

       
    })


//footer nav controls

$(".footer-nav").on('click' ,function(){
    $(".footer-nav").animate({
        height: "50vh"
    },200,function(){

    })
})

// Device gestures functions

var myElement = document.getElementById('service_slider')
var card = cat_items[selectedCard-1].children[0]
var cardPreview = cat_items[selectedCard-1].children[1];

var mc = new Hammer(myElement);

mc.get('swipe').set({ direction: Hammer.DIRECTION_VERTICAL });
// listen to events...
mc.on("swipeup", function(ev) {
    
        timeout_clear()
        Itemstimeout_clear()
        $('.service_details ').css("display", "block");
        setValues()
});



mc = new Hammer(card);

mc.get('swipe').set({ direction: Hammer.DIRECTION_ALL });
// listen to events...
mc.on("swipeup", function(ev) {
    
        $('.service_preview ').css("display", "block");
        setValues();
});
mc.on("swipedown", function(ev) {
    
        $('.service_details ').css("display", "none");
        setValues();
});
mc.on("swipeleft", function(ev) {
    
    plusItem(1)
    setValues()
});
mc.on("swiperight", function(ev) {
    
    plusItem(-1)
    setValues()
});


mc = new Hammer(cardPreview);

mc.get('swipe').set({ direction: Hammer.DIRECTION_VERTICAL });
// listen to events...
mc.on("swipedown", function(ev) {
    
        $('.service_preview ').css("display", "none");
        setValues();
});

function setValues(){
    card = cat_items[selectedCard-1].children[0]
    cardPreview = cat_items[selectedCard-1].children[1]
    
    mc = new Hammer(card);

mc.get('swipe').set({ direction: Hammer.DIRECTION_ALL });
// listen to events...
mc.on("swipeup", function(ev) {
    
        $('.service_preview ').css("display", "block");
    
});
mc.on("swipedown", function(ev) {
    
        $('.service_details ').css("display", "none");
    
});
mc.on("swipeleft", function(ev) {
    
    plusItem(1)
    setValues()
});
mc.on("swiperight", function(ev) {
    
    plusItem(-1)
    setValues()
});
mc = new Hammer(cardPreview);

mc.get('swipe').set({ direction: Hammer.DIRECTION_VERTICAL });
// listen to events...
mc.on("swipedown", function(ev) {
    
        $('.service_preview ').css("display", "none");
        setValues();
});

}


