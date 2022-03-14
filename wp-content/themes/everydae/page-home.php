<?php 
/**
 * Template Name: Main Page 
 */

get_header()
?>
<?php if( have_rows('Layout') ): ?>
    <?php while( have_rows('Layout') ): the_row(); ?>
        <?php if( get_row_layout() == 'wave_banner' ): ?>
            <?php get_template_part( 'blocks/content', 'wave' ); ?>
        <?php elseif( get_row_layout() == 'block_with_image_right' ): ?>
            <?php get_template_part( 'blocks/content', 'right' ); ?>
        <?php elseif( get_row_layout() == 'block_with_image_left' ): 
             get_template_part( 'blocks/content', 'left' ); ?>
        <?php elseif( get_row_layout() == 'faq' ): 
             get_template_part( 'blocks/content', 'faq' ); ?>
        <?php elseif( get_row_layout() == 'testimonial' ): 
             get_template_part( 'blocks/content', 'testimonial' ); ?>
        <?php elseif( get_row_layout() == 'payment' ): 
             get_template_part( 'blocks/content', 'payment' ); ?>
        <?php elseif( get_row_layout() == 'banner_with_text_center' ): 
             get_template_part( 'blocks/content', 'bannercenter' ); ?>
        <?php elseif( get_row_layout() == 'our_story' ): 
             get_template_part( 'blocks/content', 'ourstory' ); ?>
        <?php elseif( get_row_layout() == 'text' ): 
             get_template_part( 'blocks/content', 'text' ); ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
<?php 
get_footer();
?>