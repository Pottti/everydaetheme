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
    .curved--banner-center{
        background-color: <?php echo $backgroundColor; ?>;
        margin-bottom:160px;
        position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 400px;
    padding-top: 100px;
    /* background: #3c31dd; */
	margin-bottom:157px;
    }
    .curved--banner-center .curve {
    position: absolute;
    height: 250px;
    width: 100%;
    bottom: 0;
    text-align: center;
}

.curved--banner-center .curve::before {
    content: '';
    display: block;
    position: absolute;
    border-radius: 100% 50%;
    width: 55%;
    height: 100%;
    transform: translate(85%, 60%);
    background-color: #fff;
}

.curved--banner-center .curve::after {
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
.curved--banner-center .curved--content{
	color:<?php echo $fontColor; ?>;
}
.button{
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
<section class="curved--banner-center">
    <div class="curve">

    </div>
    <div class="container position-relative">
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <div class="curved--content">
                <p class="review">
                        <?php 
                        for ($k = 0 ; $k < $numberOfStars; $k++){ 
                            echo ' <i class="fa-solid fa-star"></i>'; 
                        }
                        ?>
                        <!-- <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i> -->
                        <span><?php echo $numberOfUsers; ?></span>
                    </p>
                    <?php echo $content; ?>
                    <!-- <h1>  Explanation of what you do (key value proposition)</h1>
                    <p class="sub--title">
                    Subtitle: Explanation of how your solution creates the value in your title.
                    </p> -->
                    <!-- <button><?php echo $buttonText ?> </button> -->

                    <a class="button-blue" href="<?php echo $buttonLink; ?>" target="_blank"><?php echo $buttonText; ?></a>
                </div>
            </div>
            <!-- <div class="col-md-6 text-center">
                <img src="https://via.placeholder.com/400x300" alt="">
            </div> -->
        </div>
    </div>
</section>