<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="theme-color" content="#100F0F">
<title><?php the_title()?> | CISOLINK d.o.o. za informacione sisteme i tehnologije </title>

<head>

    <?php wp_head();?>
</head>

<body <?php body_class();?>>

    <div class="pagewrapper">
        <div class="sidebar">
                <div class="logo" onclick="window.location.href='<?php echo get_permalink( 16 ) ?>'">
                </div>
            
            <div class="slide_loader">
                <div class="loader"></div>
            </div>
            <div class="link_option">
                <div class="share_button">Podijeli<svg xmlns="http://www.w3.org/2000/svg" width="50" height="2"
                        viewBox="0 0 50 2" transform="translate(10 -5)">
                        <line x2="50" fill="none" stroke="#B7B6B5" stroke-width="2vh" /></svg></div>
                <svg xmlns="http://www.w3.org/2000/svg" width="26.5" height="27.18" viewBox="0 0 26.5 27.18"
                    transform="translate(100, -25) rotate(90)">
                    <g fill="none" stroke="#a4a4a4" stroke-width="4">
                        <circle cx="5.096" cy="5.096" r="5.096" stroke="none" />
                        <circle cx="5.096" cy="5.096" r="3.096" fill="none" />
                    </g>
                    <g transform="translate(0 16.987)" fill="none" stroke="#a4a4a4" stroke-width="4">
                        <circle cx="5.096" cy="5.096" r="5.096" stroke="none" />
                        <circle cx="5.096" cy="5.096" r="3.096" fill="none" />
                    </g>
                    <g transform="translate(16.308 10.192)" fill="none" stroke="#a4a4a4" stroke-width="4">
                        <circle cx="5.096" cy="5.096" r="5.096" stroke="none" />
                        <circle cx="5.096" cy="5.096" r="3.096" fill="none" />
                    </g>
                    <line x2="10.192" transform="translate(8.724 7.814) rotate(30)" fill="none" stroke="#a4a4a4"
                        stroke-width="2" />
                    <line x2="10.192" transform="translate(8.725 21.064) rotate(-30)" fill="none" stroke="#a4a4a4"
                        stroke-width="2" />
                </svg>
            </div>
        </div>
        <div class="nav_menu">
            <?php wp_nav_menu(array('theme_loaction'=>'top-menu','menu_class'=>'menu-word-list'),);?>
        </div>
        <div class="menu-toggle">
            <a class="menu-btn">
                <div class="menu-btn-block top"></div>
                <div class="menu-btn-block bottom"></div>
            </a>
        </div>
        <div class="menu-overall">
            <div class="menu-word-list">
                <?php wp_nav_menu(array('theme_loaction'=>'top-menu','menu_class'=>'menu-word-list'),);?>

            </div>
            <div class="menu-link-list">
                <a href="#">
                    <div class="menu-link"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 612"
                    style="enable-background:new 0 0 612 612;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M612,116.258c-22.525,9.981-46.694,16.75-72.088,19.772c25.929-15.527,45.777-40.155,55.184-69.411
        c-24.322,14.379-51.169,24.82-79.775,30.48c-22.907-24.437-55.49-39.658-91.63-39.658c-69.334,0-125.551,56.217-125.551,125.513
        c0,9.828,1.109,19.427,3.251,28.606C197.065,206.32,104.556,156.337,42.641,80.386c-10.823,18.51-16.98,40.078-16.98,63.101
        c0,43.559,22.181,81.993,55.835,104.479c-20.575-0.688-39.926-6.348-56.867-15.756v1.568c0,60.806,43.291,111.554,100.693,123.104
        c-10.517,2.83-21.607,4.398-33.08,4.398c-8.107,0-15.947-0.803-23.634-2.333c15.985,49.907,62.336,86.199,117.253,87.194
        c-42.947,33.654-97.099,53.655-155.916,53.655c-10.134,0-20.116-0.612-29.944-1.721c55.567,35.681,121.536,56.485,192.438,56.485
        c230.948,0,357.188-191.291,357.188-357.188l-0.421-16.253C573.872,163.526,595.211,141.422,612,116.258z" />
                        </g>
                    </g>
                </svg></div>
                </a>
                <a href="#">
                    <div class="menu-link"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 96.124 96.123" style="enable-background:new 0 0 96.124 96.123;"
                    xml:space="preserve">
                    <g>
                        <path
                            d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803
    c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654
    c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246
    c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z" />
                    </g>
                </svg></div>
                </a>
                <a href="#"> 
                    <div class="menu-link">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"              viewBox="0 0 169.063 169.063" style="enable-background:new 0 0 169.063 169.063;"
                    xml:space="preserve">
                    <g>
                        <path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
    c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
    c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
    c17.455,0,31.656,14.201,31.656,31.655V122.407z" />
                        <path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
    C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
    c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z" />
                        <path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
    c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
    C135.661,29.421,132.821,28.251,129.921,28.251z" />
                    </g>
                </svg>

                </div>
                </a>
                <a href="#"> 
                    <div class="menu-link"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"                    viewBox="0 0 430.117 430.118" style="enable-background:new 0 0 430.117 430.118;"
                    xml:space="preserve">
                    <g>
                        <path id="LinkedIn__x28_alt_x29_" d="M398.355,0H31.782C14.229,0,0.002,13.793,0.002,30.817v368.471
    c0,17.025,14.232,30.83,31.78,30.83h366.573c17.549,0,31.76-13.814,31.76-30.83V30.817C430.115,13.798,415.904,0,398.355,0z
     M130.4,360.038H65.413V165.845H130.4V360.038z M97.913,139.315h-0.437c-21.793,0-35.92-14.904-35.92-33.563
    c0-19.035,14.542-33.535,36.767-33.535c22.227,0,35.899,14.496,36.331,33.535C134.654,124.415,120.555,139.315,97.913,139.315z
     M364.659,360.038h-64.966V256.138c0-26.107-9.413-43.921-32.907-43.921c-17.973,0-28.642,12.018-33.327,23.621
    c-1.736,4.144-2.166,9.94-2.166,15.728v108.468h-64.954c0,0,0.85-175.979,0-194.192h64.964v27.531
    c8.624-13.229,24.035-32.1,58.534-32.1c42.76,0,74.822,27.739,74.822,87.414V360.038z M230.883,193.99
    c0.111-0.182,0.266-0.401,0.42-0.614v0.614H230.883z" />
                    </g>
                </svg></div>
                    
                </a>
            </div>
        </div>


        