
<?php 
  $includeFaq = get_sub_field('include_faq');
  $title = get_sub_field('title');
  $description = get_sub_field('description');
  $buttonText = get_sub_field('button_text');
  $buttonLink = get_sub_field('button_link');

if($includeFaq === 'Yes'){?>

<style>
    .faq{
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%230099ff' fill-opacity='0.55' d='M0,128L80,117.3C160,107,320,85,480,85.3C640,85,800,107,960,144C1120,181,1280,235,1360,261.3L1440,288L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
        background-repeat:no-repeat;
        background-position:center bottom;
        background-size: cover;
    }  
</style>
<div class="block faq">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center header-style"><?php echo $title; ?></h1>
                <div class="accordion" id="accordionExample">
                    <?php 
                        $args = array(  
                            'post_type' => 'faq',
                            'post_status' => 'publish',
                            'posts_per_page' => 4, 
                            'orderby' => 'title', 
                            'order' => 'ASC', 
                        );

                        $loop = new WP_Query( $args ); 
                        $count = 0;;
                        while ( $loop->have_posts() ) : $loop->the_post(); 
                        $count++;
                        ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading<?php echo $count; ?>">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $count; ?>" aria-expanded="true" aria-controls="collapse">
                                    <?php the_title(); ?>
                                    </button>
                                    </h2>
                                    <div id="collapse<?php echo $count; ?>" class="accordion-collapse <?php echo $count === 1 ? 'show' : '' ?> collapse" aria-labelledby="heading<?php echo $count; ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php the_content(); ?>
                                    </div>
                                    </div>
                                </div>
                        <?php endwhile;

                        wp_reset_postdata(); 
                    ?> 
                </div>
            </div>
            <div class="col-md-12">
                <div class="join">
                    <?php echo $description ?>
                    <a href="<?php $buttonLink ?>"><?php echo $buttonText; ?></a>
                </div>
            </div>
        </div>

    </div>
</div>
<?php } ?>
