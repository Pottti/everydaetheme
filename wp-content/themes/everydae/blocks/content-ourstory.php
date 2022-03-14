<?php 
  $content = get_sub_field('content');
  $selectFrame = get_sub_field('select_frame');
  $image = get_sub_field('image');
  $video = get_sub_field('video');
  $addCeo = get_sub_field('add_ceo_information');
  $ceoInformation = get_sub_field('ceo_information');
  $backgroundColor = get_sub_field('background_color');
  $fontColor = get_sub_field('font_color');
?>
<style>

.our-story{
    background-color:<?php echo $backgroundColor; ?>;
    color:<?php echo $fontColor; ?>;
    position:relative;
}
.ceo{
	/* position:absolute; */
	bottom:0;
}
.ceo .ceo-img{
height:74px;
width:75px;
object-fit:cover;
border-radius:50%;
}
.ceo .signature{
	height:35px;
}
.ceo p{
	margin-bottom:0;
}
</style>
<section class="block our-story">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php if($selectFrame === 'Video'){?>
                    <video src="<?php echo $video; ?>"></video>
                <?php }else{?>
                
                    <img src="<?php echo $image; ?>" alt="">
                
                <?php } ?>
            </div>
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
                    <?php if($addCeo === true){ ?>
                    <div class="col-md-12">
                        <div class="ceo">
                            <div class="row">
                                <div class="col">
                                    <img class="ceo-img" src="<?php echo $ceoInformation['ceo_image']; ?>" alt="">
                                </div>
                                <div class="col-10">
                                    <img src="<?php echo $ceoInformation['ceo_signature']; ?>" alt="" class="signature">
                                    <p><?php echo $ceoInformation['company_name']; ?></p>
                                    <p><?php echo $ceoInformation['ceo_name']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</section>