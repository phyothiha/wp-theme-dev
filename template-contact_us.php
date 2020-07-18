<?php
/*
Template Name: Contact Us
*/
?>

<?php get_header('secondary'); ?>

<div class="container">

    <h1><?php the_title(); ?></h1>

    <div class="row">

        <div class="col-lg-6">
            <?php get_template_part('includes/section', 'content'); ?>
        </div>

        <div class="col-lg-6">
            That is where the contact form go!
        </div>
        
    </div>

</div>

<?php get_footer(); ?>