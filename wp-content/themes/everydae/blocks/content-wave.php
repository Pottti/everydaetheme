<?php 
  $content = get_sub_field('content');
  $backgroundColor = get_sub_field('background_color');
  $fontColor = get_sub_field('font_color');
  $selectFrame = get_sub_field('select_frame');
  $image = get_sub_field('image');
  $video = get_sub_field('video');
  $buttonText = get_sub_field('button_text');
  $buttonLink = get_sub_field('button_link');
  $numberOfStars = get_sub_field('number_of_stars');
  $numberOfUsers = get_sub_field('number_of_users');

?>
<style>
    .curved--banner{
    background-color: <?php echo $backgroundColor; ?>;
    margin-bottom:160px;
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 400px;
    padding-top: 100px;
	margin-bottom:157px;
    }
    .curve {
    position: absolute;
    height: 250px;
    width: 100%;
    bottom: 0;
    text-align: center;
}

.curve::before {
    content: '';
    display: block;
    position: absolute;
    border-radius: 100% 50%;
    width: 55%;
    height: 100%;
    transform: translate(85%, 60%);
    background-color: #fff;
}

.curve::after {
    content: '';
    display: block;
    position: absolute;
    border-radius: 100% 50%;
    width: 55%;
    height: 100%;
    background-color: <?php echo $backgroundColor; ?>;
    transform: translate(-4%, 40%);
    z-index: -1;
}
.curved--banner .curved--content{
	color:<?php echo $fontColor; ?>;
}
.button-wave{
	font-family: SFPro;
	font-size: 16px;
	font-weight: 600;
	font-stretch: normal;
	font-style: normal;
	line-height: 1.63;
	letter-spacing: 0.5px;
	text-align: center;
	color: <?php echo $fontColor; ?>;
	outline: none;
	border:none;
	padding:10px;
    background-color:#326def;

  }
</style>
<section class="curved--banner">
    <div class="curve">

    </div>

    <div class="container position-relative">
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="curved--content">
                    <p class="review">
                        <?php 
                        for ($k = 0 ; $k < $numberOfStars; $k++){ 
                            echo ' <i class="fa-solid fa-star"></i>'; 
                        }
                        ?>
                        <span><?php echo $numberOfUsers; ?></span>
                    </p>
                    <?php echo $content; ?>
                
                    <div class="button-margin">
                        <a class="button-blue" href="<?php echo $buttonLink; ?>" target="_blank"><?php echo $buttonText; ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
            

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
                        'autohide'  => 1,
                    );
                    $new_src = add_query_arg($params, $src);
                    $iframe = str_replace($src, $new_src, $iframe);

                    // Add extra attributes to iframe HTML.
                    $attributes = 'frameborder="0" height"100%"';
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
</section>