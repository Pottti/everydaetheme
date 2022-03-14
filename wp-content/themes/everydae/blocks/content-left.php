<?php 
  $content = get_sub_field('content');
  $selectFrame = get_sub_field('select_frame');
  $image = get_sub_field('image');
  $video = get_sub_field('video');
  $addCeo = get_sub_field('add_ceo_information');
  $ceoInformation = get_sub_field('ceo_information');
  $backgroundColor = get_sub_field('background_color')

?>
<section class="block" style="background-color: <?php echo $backgroundColor; ?> ">
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
                <?php if($selectFrame === 'video'){?>
                    
                    <div class="embed-container">

                    <?php

                    // Load value.
                    $iframe = $video;

                    // Use preg_match to find iframe src.
                    preg_match('/src="(.+?)"/', $iframe, $matches);
                    $src = $matches[1];

                    // Add extra parameters to src and replace HTML.
                    $params = array(
                        'controls'  => 0,
                        'hd'        => 1,
                        'autohide'  => 1
                    );
                    $new_src = add_query_arg($params, $src);
                    $iframe = str_replace($src, $new_src, $iframe);

                    // Add extra attributes to iframe HTML.
                    $attributes = 'frameborder="0"';
                    $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

                    // Display customized HTML.
                    echo $iframe;
                    ?>
                    </div>

                <?php }else{?>
                
                    <img src="<?php echo $image; ?>" alt="">
                
                <?php } ?>
            </div>
           
        </div>
    </div>
</section>