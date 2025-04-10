<section class="section-contact">

    <img src="<?= get_template_directory_uri()?>/assets/img/section-contact-bg.png" alt="" class="section-contact-bg">

    <?php

        $contact_form_shortcode = get_field('site_settings_contact_section_shortcode');

    ?>

    <div class="container">
        <h1>
            <?= get_field('site_settings_contact_section_title')?>
        </h1>
        <div class="section-contact-form-wrapper">
            <div class="section-contact-form-intro">
                <?= get_field('site_settings_contact_section_intro')?>
            </div>
            <div class="section-contact-form-fields">
                <?php echo apply_shortcodes( get_field('site_settings_contact_section_shortcode') ); ?>
            </div>
        </div>
    </div>


   




</section>