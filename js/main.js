

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

if($('.main_content')[0]!=undefined){
(function(){
    
    var $w = $('.content_display');
    var $prog2 = $('#scroll_indicator');
    var wh = $w.height();
    var h = $('.content_display')[0].scrollHeight;
    var sHeight = h - wh;
    $w.on('scroll', function(){
        var perc = Math.max(0, Math.min(1, $w.scrollTop()/sHeight));
        updateProgress(perc);
        
    });
 
    function updateProgress(perc){
        var line_offset = 663 * perc;
        $prog2.css({"stroke-dashoffset" : 663 - line_offset});
        
    }
 
}());
}






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
  if(slides[slideIndex-1]!=null){
    slides[slideIndex-1].style.display = "block";
    next_slide[slideIndex-1].style.display = "block";
    cat_slide[slideIndex-1].style.display = "block";
    get_category(cat_slide[slideIndex-1]);
  }else{
    cat_slide[0].style.display = "block";
    get_category(cat_slide[0]);
  }
    
    
    
  
  
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
    animateCSS(cat_items[itemIndex-1], 'fadeIn', function() {})
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

//Animation
function animateCSS(node, animationName, callback) {
    
    // var node = document.querySelector(element)
    node.classList.add('animated', animationName)
    
    function handleAnimationEnd() {
        node.classList.remove('animated', animationName)
        node.removeEventListener('animationend', handleAnimationEnd)

        if (typeof callback === 'function') callback()
    }

    node.addEventListener('animationend', handleAnimationEnd)
}

//check if it's phone or tablet
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
    // some code..
    //resize issue
$("html, body, .pagewrapper, .service_slider, .menu-overall").css({
    height: $(window).height()
});


// Device gestures functions

var myElement = document.getElementById('service_slider')
var details = document.getElementById('service_details')
var card = cat_items[selectedCard-1].children[0]
var cardPreview = cat_items[selectedCard-1].children[1];

if(myElement!=null){



var mc = new Hammer(myElement);

mc.get('swipe').set({ direction: Hammer.DIRECTION_VERTICAL });
// listen to events...
mc.on("swipeup", function(ev) {
    
        timeout_clear()
        Itemstimeout_clear()
        $(details).css("display", "block");
        setValues()
        animateCSS(myElement, 'fadeOut', function() {
            // Do something after animation
            $(myElement).css("display", "none");
          })
        animateCSS(details, 'slideInUp', function() {
            // Do something after animation
            
          })
});
}


mc = new Hammer(card);

mc.get('swipe').set({ direction: Hammer.DIRECTION_ALL });
// listen to events...
mc.on("swipeup", function(ev) {
    $(cardPreview).css("display", "block");
    
    animateCSS(cardPreview, 'slideInUp', function() {
        // Do something after animation
        setValues();
      })
        
});
mc.on("swipedown", function(ev) {
        $(myElement).css("display", "block");
        animateCSS(details, 'slideOutDown', function() {
            // Do something after animation
            $(details).css("display", "none");
            setValues();
            
          })
        
});
mc.on("swipeleft", function(ev) {

    animateCSS(card, 'slideOutLeft', function() {
        // Do something after animation
        plusItem(1)
        timeout_clear()
        Itemstimeout_clear()
        setValues()
        animateCSS(card, 'slideInRight', function() {
            // Do something after animation
            
          })
      })
});
mc.on("swiperight", function(ev) {
    animateCSS(card, 'slideOutRight', function() {
        // Do something after animation
        plusItem(-1)
        timeout_clear()
        Itemstimeout_clear()
        setValues()
        animateCSS(card, 'slideInLeft', function() {
            // Do something after animation
            
          })
      })
    
});


mc = new Hammer(cardPreview);

mc.get('swipe').set({ direction: Hammer.DIRECTION_VERTICAL });
// listen to events...
mc.on("swipedown", function(ev) {
    animateCSS(cardPreview, 'slideOutDown', function() {
        // Do something after animation
        $(cardPreview).css("display", "none");
      })
        
     
});

function setValues(){
    card = cat_items[selectedCard-1].children[0]
    cardPreview = cat_items[selectedCard-1].children[1]
    
    mc = new Hammer(card);

mc.get('swipe').set({ direction: Hammer.DIRECTION_ALL });
// listen to events...
mc.on("swipeup", function(ev) {
        $(cardPreview).css("display", "block");
            animateCSS(cardPreview, 'slideInUp', function() {
            // Do something after animation
            
          })
    
});
mc.on("swipedown", function(ev) {
    $(myElement).css("display", "block");
    animateCSS(details, 'slideOutDown', function() {
        // Do something after animation
        $(details).css("display", "none");
      })
        
    
});
mc.on("swipeleft", function(ev) {
    
    animateCSS(card, 'slideOutLeft', function() {
        // Do something after animation
        plusItem(1)
        timeout_clear()
        Itemstimeout_clear()
        setValues()
        animateCSS(card, 'slideInRight', function() {
            // Do something after animation
            
          })
      })
});
mc.on("swiperight", function(ev) {
    
    animateCSS(card, 'slideOutRight', function() {
        // Do something after animation
        plusItem(-1)
        timeout_clear()
        Itemstimeout_clear()
        setValues()
        animateCSS(card, 'slideInLeft', function() {
            // Do something after animation
            
          })
      })
});
mc = new Hammer(cardPreview);

mc.get('swipe').set({ direction: Hammer.DIRECTION_VERTICAL });
// listen to events...
mc.on("swipedown", function(ev) {
    animateCSS(cardPreview, 'slideOutDown', function() {
        // Do something after animation
        $(cardPreview).css("display", "none");
        setValues();
      })
        
});

}

}
