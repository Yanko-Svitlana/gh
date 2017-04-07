<?php
/**
 * Template part for displaying first section in homepage
 *
 * @package BusinessPlus
 */

?>

<section id="" class="section">
    <div class="container">
        <div class="row">
            <?php if (get_theme_mod('first_section_title') || get_theme_mod('first_section_subtitle') ) : ?>
                <div class="section-header col-xs-12 col-sm-5">
                    <?php if (get_theme_mod('first_section_title')):?>
                        <h2 class="section-title"><?php echo get_theme_mod('first_section_title')?></h2>
                    <?php endif;?>
                    <?php if (get_theme_mod('first_section_subtitle')):?>
                        <p class="section-subtitle"><?php echo get_theme_mod('first_section_subtitle')?></p>
                    <?php endif;?>
                </div>
            <?php endif;?>

            <?php if (get_theme_mod('first_section_description') || get_theme_mod('first_section_link') ) : ?>
                <div class="first-section-desc col-xs-12 col-sm-7">
                    <?php  if (get_theme_mod('first_section_description')):?>
                        <p class="section-description"><?php echo get_theme_mod('first-section_description')?></p>
                    <?php endif;?>
                    <?php if (get_theme_mod('first_section_link')):?>
                        <a class="button" href="<?php echo get_permalink(get_theme_mod('first_section_link'));?>">
                            <?php if (get_theme_mod('first_section_btn_text')):
                                echo get_theme_mod('first_section_btn_text');
                            else: echo __('Read more','gh-exam');
                            endif;?>
                        </a>
                    <?php endif;?>

                </div>
            <?php endif;?>
        </div>

    </div>
</section>
