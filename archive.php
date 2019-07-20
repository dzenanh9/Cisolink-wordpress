<?php get_header();?>


<div class="page_content">
    <div class="service_overlay"></div>
    <h1><?php single_cat_title()?></h1>
    <div class="service_wrapper">
    
<table id="full-screen">
    

    
            
                <tr id=firstline>
                <?php $x=1; if (have_posts()) : while (have_posts()) : the_post();?>
                        <?php switch($x): case $x % 2!=0: ?>
                        <td>
                        <a href="<?php echo get_permalink( get_the_ID() ) ?>"><div class="servicebox">
                                <div class="firstborder"><svg xmlns="http://www.w3.org/2000/svg" width="60.5" height="161" viewBox="0 0 60.5 161"><g transform="translate(-525 -383)"><line x2="50" transform="translate(340.5 539.5)" fill="none" stroke="#4d6094" stroke-width="1"/><g transform="translate(330 534)" fill="none" stroke="#456bd1" stroke-width="2"><circle cx="5" cy="5" r="5" stroke="none"/><circle cx="5" cy="5" r="4" fill="none"/></g><line x2="150" transform="translate(334.5 383.5) rotate(90)" fill="none" stroke="#4d6094" stroke-width="1"/><line x2="20" transform="translate(334.5 383.5)" fill="none" stroke="#4d6094" stroke-width="1"/></g></svg></div>                     
                                <div class="titlebox"><h1><?php the_title()?></h1></div>
                                <div class="subtitlebox"><h2><?php the_excerpt()?></h2></div>
                                <div class="service_number">0<?php echo $x?></div>
                                <div class="toservicebutton" ><a href="<?php echo get_permalink( get_the_ID() ) ?>"> <svg xmlns="http://www.w3.org/2000/svg" width="26.981" height="30.732" viewBox="0 0 26.981 30.732"><g transform="translate(-3622.68 -1236.634)"><path d="M0,0H30" transform="translate(3623.18 1237.5) rotate(30)" fill="none" stroke="#f3f3f3" stroke-width="2"></path><line x2="30" transform="translate(3623.179 1266.5) rotate(-30)" fill="none" stroke="#f3f3f3" stroke-width="2"></line></g></svg></a></div>
                            </div></a>
                        </td>
                                <?php break;?>
                            <?php endswitch ?>
                        <?php $x++;?>
                    <?php endwhile; endif;?>  
                </tr>    
                
        
                
                <tr id=secondline>  
                <?php $x=1; if (have_posts()) : while (have_posts()) : the_post();?>
                        <?php switch($x): case $x % 2==0: ?>  
                        <td>
                        <a href="<?php echo get_permalink( get_the_ID() ) ?>"><div class="servicebox">
                                <div class="secondborder"><svg xmlns="http://www.w3.org/2000/svg" width="350.5" height="160" viewBox="0 0 350.5 160"><g transform="translate(-376 -535)"><line x2="380" transform="translate(340.5 543.5)" fill="none" stroke="#4d6094" stroke-width="1"/><g transform="translate(330 539)" fill="none" stroke="#456bd1" stroke-width="2"><circle cx="5" cy="5" r="5" stroke="none"/><circle cx="5" cy="5" r="4" fill="none"/></g><line x2="150" transform="translate(334.5 548.5) rotate(90)" fill="none" stroke="#4d6094" stroke-width="1"/><line x2="20" transform="translate(334.5 698.5)" fill="none" stroke="#4d6094" stroke-width="1"/></g></svg></div>                     
                                <div class="titlebox"><h1><?php the_title()?></h1></div>
                                <div class="subtitlebox"><h2><?php the_excerpt()?></h2></div>
                                <div class="service_number">0<?php echo $x ?></div>
                                <div class="toservicebutton"><a href="<?php echo get_permalink( get_the_ID() ) ?>"> <svg xmlns="http://www.w3.org/2000/svg" width="26.981" height="30.732" viewBox="0 0 26.981 30.732"><g transform="translate(-3622.68 -1236.634)"><path d="M0,0H30" transform="translate(3623.18 1237.5) rotate(30)" fill="none" stroke="#f3f3f3" stroke-width="2"></path><line x2="30" transform="translate(3623.179 1266.5) rotate(-30)" fill="none" stroke="#f3f3f3" stroke-width="2"></line></g></svg></a></div>
                            </div></a> 
                        </td>
                            <?php break;?>
                        <?php endswitch ?>
                    <?php $x++;?>
                <?php endwhile; endif;?>  
                </tr>               
</table>
        
        <div id="small-screen">
            <?php $x=1; if (have_posts()) : while (have_posts()) : the_post();?>
                        <a href="<?php echo get_permalink( get_the_ID() ) ?>">
                            <div class="servicebox">  
                                <div class="titlebox"><h1><?php the_title()?></h1></div>
                                <div class="subtitlebox"><h2><?php the_excerpt()?></h2></div>
                            </div>
                        </a>
            <?php endwhile; endif;?> 
        </div>
        
       
    </div>
    
</div>


    




<?php get_footer();?>
<script>
$( ".service_details" ).hide();
document.title="<?php single_cat_title()?>" +" | CISOLINK d.o.o. za informacione sisteme i tehnologije ";
</script>