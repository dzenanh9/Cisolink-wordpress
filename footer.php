<div class="service_details ">
    <!-- pantheon 4-->
    <div class="category_items">


        <?php $x=1; $custom_query = new WP_Query('cat=4'); //your category id 
            while($custom_query->have_posts()) : $custom_query->the_post(); ?>


        <div class="service_items ">
            <div class="service_front ">
                <!-- here goes the title and img -->
                <img src="<?php echo bloginfo('template_url');?>/images/p_<?php echo $x?>.jpg" alt="">
                <div class="item_details">
                    <div class="item_index">0<?php echo $x?></div>
                    <div class="item_title"><?php the_title()?></div>
                    <div class="item_tagline"><?php the_excerpt()?></div>
                </div>
                <div class="item_controls">
                    <div class="item_goto"><a href="#">Procitaj vise</a></div>
                    <div class="item_switch">
                        <div class="switch_left" onclick="plusItem(-1)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26.981" height="30.732"
                                viewBox="0 0 26.981 30.732">
                                <g transform="translate(3649.661 1267.366) rotate(180)">
                                    <path d="M0,0H30" transform="translate(3623.18 1237.5) rotate(30)" fill="none"
                                        stroke="#f3f3f3" stroke-width="2" />
                                    <line x2="30" transform="translate(3623.179 1266.5) rotate(-30)" fill="none"
                                        stroke="#f3f3f3" stroke-width="2" />
                                </g>
                            </svg>
                        </div>
                        <div class="switch_right" onclick="plusItem(1)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26.981" height="30.732"
                                viewBox="0 0 26.981 30.732">
                                <g transform="translate(-3622.68 -1236.634)">
                                    <path d="M0,0H30" transform="translate(3623.18 1237.5) rotate(30)" fill="none"
                                        stroke="#f3f3f3" stroke-width="2" />
                                    <line x2="30" transform="translate(3623.179 1266.5) rotate(-30)" fill="none"
                                        stroke="#f3f3f3" stroke-width="2" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service_preview ">
                <!-- detail desc goes here -->

                <div class="preview_item">
                    <div class="preview_title">O usluzi</div>

                    <div class="preview_text"><?php 
                        $text = apply_filters('the_content', get_post(get_the_ID())->post_content); 
                        $length = 300;
                        if(strlen($text)<$length+10) echo $text; //don't cut if too short
                    
                        $break_pos = strpos($text, ' ', $length);//find next space after desired length
                        $visible = substr($text, 0, $break_pos);
                        echo balanceTags($visible) . " …";
                        
                    
                        ?></div>
                    <div class="preview_goto"><a href="<?php echo get_permalink( get_the_ID() ) ?>">Procitaj sve</a>
                    </div>
                </div>
                <div class="backbutton">
                    <div>Nazad</div>
                </div>
            </div>
        </div>

        <?php $x++; ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); // reset the query ?>



    </div>
    <!-- network 6-->
    <div class="category_items">


        <?php $x=1; $custom_query = new WP_Query('cat=6'); //your category id 
            while($custom_query->have_posts()) : $custom_query->the_post(); ?>


        <div class="service_items ">
            <div class="service_front ">
                <!-- here goes the title and img -->
                <img src="<?php echo bloginfo('template_url');?>/images/n_<?php echo $x?>.jpg" alt="">
                <div class="item_details">
                    <div class="item_index">0<?php echo $x?></div>
                    <div class="item_title"><?php the_title()?></div>
                    <div class="item_tagline"><?php the_excerpt()?></div>
                </div>
                <div class="item_controls">
                    <div class="item_goto"><a href="#">Procitaj vise</a></div>
                    <div class="item_switch">
                        <div class="switch_left" onclick="plusItem(-1)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26.981" height="30.732"
                                viewBox="0 0 26.981 30.732">
                                <g transform="translate(3649.661 1267.366) rotate(180)">
                                    <path d="M0,0H30" transform="translate(3623.18 1237.5) rotate(30)" fill="none"
                                        stroke="#f3f3f3" stroke-width="2" />
                                    <line x2="30" transform="translate(3623.179 1266.5) rotate(-30)" fill="none"
                                        stroke="#f3f3f3" stroke-width="2" />
                                </g>
                            </svg>
                        </div>
                        <div class="switch_right" onclick="plusItem(1)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26.981" height="30.732"
                                viewBox="0 0 26.981 30.732">
                                <g transform="translate(-3622.68 -1236.634)">
                                    <path d="M0,0H30" transform="translate(3623.18 1237.5) rotate(30)" fill="none"
                                        stroke="#f3f3f3" stroke-width="2" />
                                    <line x2="30" transform="translate(3623.179 1266.5) rotate(-30)" fill="none"
                                        stroke="#f3f3f3" stroke-width="2" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service_preview ">
                <!-- detail desc goes here -->

                <div class="preview_item">
                    <div class="preview_title">O usluzi</div>

                    <div class="preview_text"><?php 
                        $text = apply_filters('the_content', get_post(get_the_ID())->post_content); 
                        $length = 300;
                        if(strlen($text)<$length+10) echo $text; //don't cut if too short
                    
                        $break_pos = strpos($text, ' ', $length);//find next space after desired length
                        $visible = substr($text, 0, $break_pos);
                        echo balanceTags($visible) . " …";
                        
                    
                        ?></div>
                    <div class="preview_goto"><a href="<?php echo get_permalink( get_the_ID() ) ?>">Procitaj sve</a>
                    </div>
                </div>
                <div class="backbutton">
                    <div>Nazad</div>
                </div>
            </div>
        </div>

        <?php $x++; ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); // reset the query ?>



    </div>
    <!-- Web development 5 -->
    <div class="category_items">


        <?php $x=1; $custom_query = new WP_Query('cat=5'); //your category id 
        while($custom_query->have_posts()) : $custom_query->the_post(); ?>


        <div class="service_items ">
            <div class="service_front ">
                <!-- here goes the title and img -->
                <img src="<?php echo bloginfo('template_url');?>/images/w_<?php echo $x?>.jpg" alt="">
                <div class="item_details">
                    <div class="item_index">0<?php echo $x?></div>
                    <div class="item_title"><?php the_title()?></div>
                    <div class="item_tagline"><?php the_excerpt()?></div>
                </div>
                <div class="item_controls">
                    <div class="item_goto"><a href="#">Procitaj vise</a></div>
                    <div class="item_switch">
                        <div class="switch_left" onclick="plusItem(-1)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26.981" height="30.732"
                                viewBox="0 0 26.981 30.732">
                                <g transform="translate(3649.661 1267.366) rotate(180)">
                                    <path d="M0,0H30" transform="translate(3623.18 1237.5) rotate(30)" fill="none"
                                        stroke="#f3f3f3" stroke-width="2" />
                                    <line x2="30" transform="translate(3623.179 1266.5) rotate(-30)" fill="none"
                                        stroke="#f3f3f3" stroke-width="2" />
                                </g>
                            </svg>
                        </div>
                        <div class="switch_right" onclick="plusItem(1)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26.981" height="30.732"
                                viewBox="0 0 26.981 30.732">
                                <g transform="translate(-3622.68 -1236.634)">
                                    <path d="M0,0H30" transform="translate(3623.18 1237.5) rotate(30)" fill="none"
                                        stroke="#f3f3f3" stroke-width="2" />
                                    <line x2="30" transform="translate(3623.179 1266.5) rotate(-30)" fill="none"
                                        stroke="#f3f3f3" stroke-width="2" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service_preview ">
                <!-- detail desc goes here -->

                <div class="preview_item">
                    <div class="preview_title">O usluzi</div>

                    <div class="preview_text"><?php 
                    $text = apply_filters('the_content', get_post(get_the_ID())->post_content); 
                    $length = 300;
                    if(strlen($text)<$length+10) echo $text; //don't cut if too short
                
                    $break_pos = strpos($text, ' ', $length);//find next space after desired length
                    $visible = substr($text, 0, $break_pos);
                    echo balanceTags($visible) . " …";
                    
                
                    ?></div>
                    <div class="preview_goto"><a href="<?php echo get_permalink( get_the_ID() ) ?>">Procitaj sve</a>
                    </div>
                </div>
                <div class="backbutton">
                    <div>Nazad</div>
                </div>
            </div>
        </div>

        <?php $x++; ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); // reset the query ?>



    </div>
    <!-- Marketing 7 -->
    <div class="category_items">


        <?php $x=1; $custom_query = new WP_Query('cat=7'); //your category id 
        while($custom_query->have_posts()) : $custom_query->the_post(); ?>


        <div class="service_items ">
            <div class="service_front ">
                <!-- here goes the title and img -->
                <img src="<?php echo bloginfo('template_url');?>/images/m_<?php echo $x?>.jpg" alt="">
                <div class="item_details">
                    <div class="item_index">0<?php echo $x?></div>
                    <div class="item_title"><?php the_title()?></div>
                    <div class="item_tagline"><?php the_excerpt()?></div>
                </div>
                <div class="item_controls">
                    <div class="item_goto"><a href="#">Procitaj vise</a></div>
                    <div class="item_switch">
                        <div class="switch_left" onclick="plusItem(-1)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26.981" height="30.732"
                                viewBox="0 0 26.981 30.732">
                                <g transform="translate(3649.661 1267.366) rotate(180)">
                                    <path d="M0,0H30" transform="translate(3623.18 1237.5) rotate(30)" fill="none"
                                        stroke="#f3f3f3" stroke-width="2" />
                                    <line x2="30" transform="translate(3623.179 1266.5) rotate(-30)" fill="none"
                                        stroke="#f3f3f3" stroke-width="2" />
                                </g>
                            </svg>
                        </div>
                        <div class="switch_right" onclick="plusItem(1)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26.981" height="30.732"
                                viewBox="0 0 26.981 30.732">
                                <g transform="translate(-3622.68 -1236.634)">
                                    <path d="M0,0H30" transform="translate(3623.18 1237.5) rotate(30)" fill="none"
                                        stroke="#f3f3f3" stroke-width="2" />
                                    <line x2="30" transform="translate(3623.179 1266.5) rotate(-30)" fill="none"
                                        stroke="#f3f3f3" stroke-width="2" />
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service_preview ">
                <!-- detail desc goes here -->

                <div class="preview_item">
                    <div class="preview_title">O usluzi</div>

                    <div class="preview_text"><?php 
                    $text = apply_filters('the_content', get_post(get_the_ID())->post_content); 
                    $length = 300;
                    if(strlen($text)<$length+10) echo $text; //don't cut if too short
                
                    $break_pos = strpos($text, ' ', $length);//find next space after desired length
                    $visible = substr($text, 0, $break_pos);
                    echo balanceTags($visible) . " …";
                    
                
                    ?></div>
                    <div class="preview_goto"><a href="<?php echo get_permalink( get_the_ID() ) ?>">Procitaj sve</a>
                    </div>
                </div>
                <div class="backbutton">
                    <div>Nazad</div>
                </div>
            </div>
        </div>

        <?php $x++; ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); // reset the query ?>



    </div>
</div>




</div>
<?php wp_footer();?>
</body>

</html>