<?php 
  $content = get_sub_field('content');
  $backgroundColor = get_sub_field('background_color');
  $fontColor = get_sub_field('font_color');
?>

<style>
 .text-only{
    background-color: <?php echo $backgroundColor; ?>;
    color: <?php echo $fontColor; ?>;
 }
</style>
<div class="block text-only">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
</div>