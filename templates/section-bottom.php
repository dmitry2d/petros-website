<section class="section-bottom">

    <div class="container">

        <div class="section-bottom-wrapper">
            <div class="section-bottom-left">
                <img src="<?=get_field('site_settings_menu_logo')?>" class="section-bottom-logo">
                
                <div class="section-bottom-slogan">
                    Building the Extraordinary.
                </div>
                <div class="section-bottom-left-socials">
                    <a href="<?=get_field('site_settings_bottom_section_social_fb')?>">
                        <img src="<?= get_template_directory_uri()?>/assets/img/icn_fb.png">
                    </a>
                    <a href="<?=get_field('site_settings_bottom_section_social_in')?>">
                        <img src="<?= get_template_directory_uri()?>/assets/img/icn_ins.png">
                    </a>
                    <a href="<?=get_field('site_settings_bottom_section_social_yt')?>">
                        <img src="<?= get_template_directory_uri()?>/assets/img/icn_yt.png">
                    </a>
                </div>
            </div>
            <div class="section-bottom-right">
                <?php
                    wp_nav_menu(array(
                        'menu' => 'Main Menu',
                        'container_class' => 'section-bottom-menu',
                        'menu_class' => 'section-bottom-menu-container'
                    ));
                ?>
            </div>

        </div>

    </div>

</section>