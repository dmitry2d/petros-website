<?php
/*
* Section Common
* Common Styles and Scripts
*/
?>

<style>

    :root {

        --asset-root: "<?= get_template_directory_uri() . '/assets/'?>";
        
        /* colors */
        --theme-color-primary: <?=get_field('site_settings_color_primary');?>;
        --theme-color-secondary: <?=get_field('site_settings_color_secondary');?>;
        --theme-color-secondary-light: <?=get_field('site_settings_color_secondary_light');?>;
        --theme-color-light: <?=get_field('site_settings_color_light');?>;

        /* fonts */
        --title-font: 400 42px/1.3 var(--title-font-family);
        --main-font: 200 21px/1.3 var(--main-font-family);
        --numbers-font-size: 70px;
        --bottom-menu-title-font-size: 28px;
        

    }

</style>
