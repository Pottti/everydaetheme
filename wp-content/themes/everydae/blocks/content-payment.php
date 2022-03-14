<?php 
    $includePayment = get_sub_field('include_payment');
  
?>

<?php 
  if($includePayment === 'Yes'){?>
<section class="block payment">
    <div class="container">
        <div class="row ">
        <?php 
                        $args = array(  
                            'post_type' => 'pricing',
                            'post_status' => 'publish',
                            'posts_per_page' => 3, 
                            'orderby' => 'title', 
                            'order' => 'ASC', 
                        );

                        $loop = new WP_Query( $args ); 
                            
                        while ( $loop->have_posts() ) : $loop->the_post(); 
                        $nameOfPricingTier = get_field('name_of_pricing_tier');
                        $price = get_field('price');
                            $description = get_field('description');
                            $buttonText = get_field('button_text');
                            $buttonLink = get_field('button_link');
                            $moneyBackGuarantee = get_field('money_back_guarantee');
                        ?>
                                    <div class="col-md-4">
                                        <div class="payment--card">
                                            <p class="pricing--tier"><?php echo $nameOfPricingTier; ?></p>
                                            <h5 class="price"><?php echo $price; ?></h5>
                                            <div class="payment--info">
                                                <!-- <p>X months of access</p>
                                                <p>Less than $X.XX per day</p>
                                                <p>One time payment, no extra fees</p> -->
                                                <?php echo $description; ?>
                                            </div>
                                            <!-- <button>TRY NOW FOR $XX</button> -->
                                            <a class="button-blue" href="<?php echo $buttonLink; ?>" target="_blank"><?php echo $buttonText; ?></a>

                                            <p class="money--back">
                                                <?php echo $moneyBackGuarantee; ?>
                                            </p>
                                        </div>
                                    </div>
                        <?php endwhile;

                        wp_reset_postdata(); 
                    ?> 


        </div>
    </div>
</section>


<?php } ?>

