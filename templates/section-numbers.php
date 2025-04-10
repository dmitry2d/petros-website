<section class="section-numbers">

    <img class="section-numbers-bg" src="<?= get_template_directory_uri()?>/assets/img/section-numbers-bg.png">

    <?php
        $numbers = $your_array = explode("\n", get_field('site_settings_numbers_section_numbers'));
    ?>

    <h1>
        <?= get_field('site_settings_numbers_section_title')?>
    </h1>

    <div class="section-numbers-items-wrapper container">
        <div class="section-numbers-items">

            <?php foreach ($numbers as $number) {
                
                $number_text = explode("::", $number);
                
            ?>


                <div class="section-numbers-item">
                    <div class="section-numbers-item-title">
                        <?= $number_text['0']; ?>
                    </div>
                    <div class="section-numbers-item-text">
                        <?= $number_text['1']; ?>
                    </div>
                </div>

            <?php } ?>


        </div>
    </div>

</section>