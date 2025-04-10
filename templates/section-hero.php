<section class="section-hero">

<?php
    $images = $your_array = explode("\n", get_field('site_settings_hero_section_images'));
?>

    <div class="section-hero-wrapper">

        <div class="section-hero-images-wrapper">
            <div class="section-hero-images">
                <?php foreach ($images as $image) { ?>

                    <div class="section-hero-image">
                        <img src="<?=$image?>">
                    </div>

                <?php } ?>
            </div>
        </div>
        <div class="container section-hero-container">
            <div class="section-hero-data">
                <div class="section-hero-data-left">
                    <div class="section-hero-data-left-wrapper">
                        <div class="section-hero-data-title">
                            <?= get_field('site_settings_hero_section_title')?>
                        </div>
                        <div class="section-hero-data-divider"></div>
                        <div class="section-hero-data-text">
                        <?= get_field('site_settings_hero_section_description')?>
                        </div>
                    </div>
                </div>
                <div class="section-hero-data-right">
                    <div class="section-hero-images-controls">
                        <div class="section-hero-images-controls-left">
                            <img src="<?= get_template_directory_uri()?>/assets/img/arr_white_01.svg" alt="">
                        </div>
                        <div class="section-hero-images-controls-dots"></div>
                        <div class="section-hero-images-controls-right">
                            <img src="<?= get_template_directory_uri()?>/assets/img/arr_white_01.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<script>
    $(document).ready(function(){
        $('.section-hero-images').slick({
            prevArrow: null,
            nextArrow: null,
            autoplay: true,
            autoplaySpeed: 4000,
            speed: 600,
            dots: true,
            appendDots: $('.section-hero-images-controls-dots'),
            prevArrow: $('.section-hero-images-controls-left'),
            nextArrow: $('.section-hero-images-controls-right')
        });
    });

</script>