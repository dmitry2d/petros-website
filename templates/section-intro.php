<section class="section-intro">

    <img class="section-intro-bg-top" src="<?= get_template_directory_uri()?>/assets/img/section-intro-bg-top.png" alt="">
    <img class="section-intro-bg-bottom" src="<?= get_template_directory_uri()?>/assets/img/section-intro-bg-bottom.png" alt="">
    
    <div class="container">

        <h1 class="section-intro-title">
            <?= get_field('site_settings_intro_section_title')?>
        </h1>
        <div class="section-intro-text">
            <?= get_field('site_settings_intro_section_description')?>
        </div>

    </div>


</section>