<?php
    get_header();
?>

<main id="main">
    <?php
        if(have_posts()) {
            the_post();
            the_content();
        }
    ?>
</main>

<?php
    get_footer();
?>