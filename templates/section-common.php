<?php
/*
* Section Common
* Common Styles and Scripts
*/
?>

<style>

    :root {

        --asset-root: "<?= get_template_directory_uri() . '/assets/'?>";
        --theme-color-primary: <?=get_field('site_settings_color_primary');?>;
        --theme-color-secondary: <?=get_field('site_settings_color_secondary');?>;
        --theme-color-light: <?=get_field('site_settings_color_light');?>;
    }

</style>
