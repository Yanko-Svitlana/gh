<?php
/**
 * Template part for displaying first section in homepage
 *
 * @package BusinessPlus
 */

?>

<section id="first_section" class="first section">
    <div class="container">
        <div class="row">

            <?php if (get_theme_mod('first_section_image') ) : ?>
                <div class="col-xs-12 col-md-6">
                    <img src="<?php echo esc_url( get_theme_mod('first_section_image'));?>" alt="banner">
                </div>
            <?php endif;?>
            <?php if (get_theme_mod('first_section_title-first_word')|| get_theme_mod('first_section_title-second_word') ||
                get_theme_mod('first_section_subtitle')|| get_theme_mod('first_section_description') ||
                get_theme_mod('first_section_span1') || get_theme_mod('first_section_span2')): ?>
                <div class="section-intro col-xs-12 col-md-6">
                    <?php if (get_theme_mod('first_section_title-first_word')|| get_theme_mod('first_section_title-second_word')):?>
                        <h2 class="intro-title"><?php echo get_theme_mod('first_section_title-first_word')?>
                            <span class="dark"><?php echo get_theme_mod('first_section_title-second_word')?></span>
                        ?</h2>
                    <?php endif;?>
                    <?php if (get_theme_mod('first_section_subtitle')):?>
                        <h3 class="intro-subtitle"><?php echo get_theme_mod('first_section_subtitle')?></h3>
                    <?php endif;?>
                    <?php if (get_theme_mod('first_section_span1')|| get_theme_mod('first_section_span2')):?>
                        <span class="additional_info"><?php echo get_theme_mod('first_section_span1')?>,
                                                    <?php echo get_theme_mod('first_section_span2')?>
                        </span>
                    <?php endif;?>

                    <?php if (get_theme_mod('first_section_description') ) : ?>
                        <p class="intro-description"><?php echo get_theme_mod('first_section_description')?></p>
                    <?php endif;?>

                </div>
            <?php endif;?>

                <div class="col-xs-12">
                    <span class="more">
                    <a href="#second_section">
                        <i class="fa fa-chevron-down"></i>
                    </a>
                </span>
                </div>

        </div>

    </div>
</section>
