<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cisolink</title>
<head>

    <?php wp_head();?>
</head>

<body <?php body_class();?>>


    <div class="sidebar">
        <a href="/wordpress">
            <div class="logo"></div>
        </a>
        <div class="slide_loader">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="441" viewBox="0 0 15 441">
                <g transform="translate(-76 -252)">
                    <line y2="350" transform="translate(83.5 307.5)" fill="none" stroke="#a4a4a4" stroke-width="2" />
                    <line x2="350" transform="translate(83.5 307.5) rotate(90)" fill="none" stroke="#456bd1"
                        stroke-width="4" />
                    <g transform="translate(76 252)" fill="none" stroke="#456bd1" stroke-width="4">
                        <circle cx="7.5" cy="7.5" r="7.5" stroke="none" />
                        <circle cx="7.5" cy="7.5" r="5.5" fill="none" />
                    </g>
                    <g transform="translate(76 678)" fill="none" stroke="#a4a4a4" stroke-width="4">
                        <circle cx="7.5" cy="7.5" r="7.5" stroke="none" />
                        <circle cx="7.5" cy="7.5" r="5.5" fill="none" />
                    </g>
                </g>
            </svg>
        </div>
        <div class="link_option">
            <div class="share_button">Podijeli<svg xmlns="http://www.w3.org/2000/svg" width="50" height="2"
                    viewBox="0 0 50 2" transform="translate(10 -5)">
                    <line x2="50" fill="none" stroke="#B7B6B5" stroke-width="2vh" /></svg></div>
            <svg xmlns="http://www.w3.org/2000/svg" width="26.5" height="27.18" viewBox="0 0 26.5 27.18" transform="translate(100, -25) rotate(90)">
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
        <ul>
            <li><a href="/wordpress/o-nama">O nama</a></li>
            <li><a href="#">Usluge</a></li>
            <li><a href="#">Informacije</a></li>
            <li><a href="#">Kontaktirajte nas</a></li>
        </ul>
    </div>

    <div class="service_details">
        <div class="service_detail_img">
            <img src="<?php echo bloginfo('template_url');?>/images/ser1.jpg" alt="">
        </div>
        <div class="service_detail_desc">
            <div class="detail_info">
                <div class="detail_index">
                    01
                </div>
                <div class="detail_small_title">
                    Small Business
                </div>
            </div>
            <div class="detail_tag_line">Za samostalne poduzetnike i mala preduzeća</div>

            <div class="detail_controls">
                <div class="detail_expand">Pročitaj više <svg xmlns="http://www.w3.org/2000/svg" width="50" height="2"
                        viewBox="0 0 50 2" transform="translate(0 -5)">
                        <line x2="50" fill="none" stroke="#F3F3F3" stroke-width="2" /></svg></div>
                <div class="detail_switch_controls">
                    <div class="switch_left"><svg xmlns="http://www.w3.org/2000/svg" width="26.981" height="30.732"
                            viewBox="0 0 26.981 30.732">
                            <g transform="translate(3649.661 1267.366) rotate(180)">
                                <path d="M0,0H30" transform="translate(3623.18 1237.5) rotate(30)" fill="none"
                                    stroke="#f3f3f3" stroke-width="2" />
                                <line x2="30" transform="translate(3623.179 1266.5) rotate(-30)" fill="none"
                                    stroke="#f3f3f3" stroke-width="2" />
                            </g>
                        </svg></div>
                    <div class="switch_right"><svg xmlns="http://www.w3.org/2000/svg" width="26.981" height="30.732"
                            viewBox="0 0 26.981 30.732">
                            <g transform="translate(-3622.68 -1236.634)">
                                <path d="M0,0H30" transform="translate(3623.18 1237.5) rotate(30)" fill="none"
                                    stroke="#f3f3f3" stroke-width="2" />
                                <line x2="30" transform="translate(3623.179 1266.5) rotate(-30)" fill="none"
                                    stroke="#f3f3f3" stroke-width="2" />
                            </g>
                        </svg></div>
                </div>
            </div>
        </div>
    </div>