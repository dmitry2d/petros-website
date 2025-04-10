
<section class="section-top">

    <div class="container">

        <div class="section-top-wrapper">

            <div class="section-top-logo">
                <img src="<?=get_field('site_settings_menu_logo')?>" alt="">
            </div>
            <div class="section-top-menu-wrapper">

                <?php
                    wp_nav_menu(array(
                        'menu' => 'Main Menu',
                        'container_class' => 'section-top-menu',
                        'menu_class' => 'section-top-menu-container'
                    ));
                ?>
                <div class="section-top-button">
                    <a href="">
                        Call Us! <b>(405) 603-0450</b>
                        
                    </a>
                </div>

            </div>

        </div>

    </div>    
    
</section>