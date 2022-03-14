<?php 
  $content = get_sub_field('content');
  $selectFrame = get_sub_field('select_frame');
  $image = get_sub_field('image');
  $video = get_sub_field('video');
  $testimonialContent = get_sub_field('testimonial_content');
  $backgroundColor = get_sub_field('background_color');
  $fontColor = get_sub_field('font_color');
?>

<style> 
    .testimonial{
        background-color: <?php echo $backgroundColor; ?>;
        color: <?php echo $fontColor; ?>;
    }
</style>
<section class="block testimonial" >
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block--content">
                            <!-- <h3>Explain how you deliver on your value prop</h3>
                            <ul>
                                <li>Benefit 1</li>
                                <li>Benefit 2</li>
                                <li>Benefit 3</li>
                            </ul> -->
                            <?php echo $content; ?>
                        </div>
                    </div>
             
            
                </div>
            </div>
            <div class="col-md-6">
                <div class="testimonial--container">
                    <img src="<?php echo $image; ?>" alt="">
                     <div class="testimonial--content">
                         <?php echo $testimonialContent ?>
                     </div>
                </div>
            </div>
           
        </div>
    </div>
</section>