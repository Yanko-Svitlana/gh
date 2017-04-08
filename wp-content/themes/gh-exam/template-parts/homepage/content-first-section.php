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
            <?php if (get_theme_mod('first_section_title') || get_theme_mod('first_section_subtitle')||
                get_theme_mod('first_section_description') || get_theme_mod('first_section_span1') ||
                get_theme_mod('first_section_span2')): ?>
                <div class="section-header col-xs-12 col-md-6">
                    <?php if (get_theme_mod('first_section_title')):?>
                        <h2 class="section-title"><?php echo get_theme_mod('first_section_title')?></h2>
                    <?php endif;?>
                    <?php if (get_theme_mod('first_section_subtitle')):?>
                        <h3 class="section-subtitle"><?php echo get_theme_mod('first_section_subtitle')?></h3>
                    <?php endif;?>
                    <?php if (get_theme_mod('first_section_span1')|| get_theme_mod('first_section_span2')):?>
                        <span class="additional_info"><?php echo get_theme_mod('first_section_span1')?>,
                                                    <?php echo get_theme_mod('first_section_span2')?>
                        </span>
                    <?php endif;?>

                    <?php if (get_theme_mod('first_section_description') ) : ?>
                        <p class="section-description"><?php echo get_theme_mod('first_section_description')?></p>
                    <?php endif;?>

                </div>
            <?php endif;?>

            <?php if (get_theme_mod('first_section_description') || get_theme_mod('first_section_link') ) : ?>
                <div class="first-section-desc col-xs-12 col-md-6">
                    <?php  if (get_theme_mod('first_section_description')):?>
                        <p class="section-description"><?php echo get_theme_mod('first-section_description')?></p>
                    <?php endif;?>
                </div>
            <?php endif;?>


                <span class="more">
                    <a href="#second_section">
                        
                    </a>
                </span>

        </div>

    </div>
</section>
