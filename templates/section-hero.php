<section class="section-hero">

<?php
    $images = $your_array = explode("\n", get_field('site_settings_hero_section_images'));
?>

    <div class="section-hero-wrapper">
        <div class="section-hero-images">

        <?php foreach ($images as $image) { ?>

            <div class="section-hero-image">
                <img src="<?=$image?>">
            </div>

        <?php } ?>

        </div>
        <div class="container">
            <div class="section-hero-data">
                text
            </div>
        </div>
    </div>

</section>


<script>
    $(document).ready(function(){
        $('.section-hero-images').slick({
            // prevArrow: '<div class="project-photo__items__prev-arrow"></div>',
            // nextArrow: '<div class="project-photo__items__next-arrow"></div>'
        });
    });

</script>