


<?php get_header();?>

<div class="service_slider">

    <div class="slide_item">
        <img src="<?php echo bloginfo('template_url');?>/images/b1.jpg" alt="">
        <div class="service_overlay"></div>
        <h1><div id="spec_img"></div> Pantheon</h1>
        <h2>Za jednostavno vođenje preduzeća</h2>
    </div>
    <div class="slide_item">
        <img src="<?php echo bloginfo('template_url');?>/images/b2.jpg" alt="">
        <div class="service_overlay"></div>
        <h1>Networking</h1>
        <h2>Administracija mreza i racunarskih sistema</h2>
    </div>
    <div class="slide_item">
        <img src="<?php echo bloginfo('template_url');?>/images/b3.jpg" alt="">
        <div class="service_overlay"></div>
        <h1>Web <br/>development</h1>
        <h2>Izrada web stranica po zelji kupca</h2>
    </div>
    <div class="slide_item">
        <img src="<?php echo bloginfo('template_url');?>/images/b4.jpg" alt="">
        <div class="service_overlay"></div>
        <h1>Fiskalizacija</h1>
        <h2>Automatizacija finaciskog aspekta preduzeca</h2>
    </div>
    


    <div class="service_slider_controls">
        <div class="switch_left" onclick="plusSlides(-1)" ><svg xmlns="http://www.w3.org/2000/svg" width="26.981" height="30.732" viewBox="0 0 26.981 30.732"><g transform="translate(3649.661 1267.366) rotate(180)"><path d="M0,0H30" transform="translate(3623.18 1237.5) rotate(30)" fill="none" stroke="#f3f3f3" stroke-width="2"/><line x2="30" transform="translate(3623.179 1266.5) rotate(-30)" fill="none" stroke="#f3f3f3" stroke-width="2"/></g></svg></div>
        <div class="next_service" onclick="plusSlides(1)">
        <div class="next_item">Networking</div>
        <div class="next_item">Webdevelopment</div>
        <div class="next_item">Fiskalizacija</div>
        <div class="next_item">Pantheon</div>
        </div>
        <div class="switch_right" onclick="plusSlides(1)"><svg xmlns="http://www.w3.org/2000/svg" width="26.981" height="30.732" viewBox="0 0 26.981 30.732"><g transform="translate(-3622.68 -1236.634)"><path d="M0,0H30" transform="translate(3623.18 1237.5) rotate(30)" fill="none" stroke="#f3f3f3" stroke-width="2"/><line x2="30" transform="translate(3623.179 1266.5) rotate(-30)" fill="none" stroke="#f3f3f3" stroke-width="2"/></g></svg></div>
    </div>


</div>




<?php get_footer();?>
