<?php get_header();?>


<div class="main_content">
    <h1><?php the_title()?></h1>
    <div class="content_display">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="692" viewBox="0 0 15 692">
            <g transform="translate(-76 -252)">
                <line y2="663" transform="translate(83.5 266.5)" fill="none" stroke="#a4a4a4" stroke-width="2" />
                <line id="scroll_indicator" y2="663" transform="translate(83.5 267.5)" fill="none" stroke="#456bd1" stroke-width="4" />
                <g transform="translate(76 252)" fill="none" stroke="#456bd1" stroke-width="4">
                    <circle cx="7.5" cy="7.5" r="7.5" stroke="none" />
                    <circle cx="7.5" cy="7.5" r="5.5" fill="none" />
                </g>
                <g transform="translate(76 929)" fill="none" stroke="#a4a4a4" stroke-width="4">
                    <circle cx="7.5" cy="7.5" r="7.5" stroke="none" />
                    <circle cx="7.5" cy="7.5" r="5.5" fill="none" />
                </g>
            </g>
        </svg>
        <?php if (have_posts()) : while (have_posts()) : the_post();?>

        <?php the_content();?>

        <?php endwhile; endif;?>


    </div>
</div>

<div class="footer-nav">
    <div class="nav-word-list">
    <?php wp_nav_menu(array('theme_loaction'=>'top-menu'),);?>
    </div>
</div>



<?php get_footer();?>