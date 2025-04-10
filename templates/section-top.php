
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
                <div class="section-top-hamburger-close">
                    <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30.5 14.5L22.5 22.5M22.5 22.5L15 30M22.5 22.5L14.5 14.5M22.5 22.5L30.5 30.5M44 22.5C44 34.3741 34.3741 44 22.5 44C10.6259 44 1 34.3741 1 22.5C1 10.6259 10.6259 1 22.5 1C34.3741 1 44 10.6259 44 22.5Z" stroke="#172D79" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <div class="section-top-button-wrapper">
                <div class="section-top-button">
                    <a href="">
                        Call&nbsp;Us!&nbsp;<b>(405)&nbsp;603-0450</b>
                    </a>
                </div>
            </div>
            <div class="section-top-hamburger">
                <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M32 22.5H14M14 14.5H32M14 30.5H32M44 22.5C44 34.3741 34.3741 44 22.5 44C10.6259 44 1 34.3741 1 22.5C1 10.6259 10.6259 1 22.5 1C34.3741 1 44 10.6259 44 22.5Z" stroke="#172D79" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>

    </div>
    
    <script>
        $(document).ready (()=> {
            $('.section-top-hamburger').on('click', e => {
                $('.section-top-menu-wrapper').addClass('open');
            });
            $(window).on('escKey', e => {
                $('.section-top-menu-wrapper').removeClass('open'); 
            });
            $('.section-top-hamburger-close').on('click', e => {
                $('.section-top-menu-wrapper').removeClass('open'); 
            });
        });
    </script>
    
</section>