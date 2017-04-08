<?php
/**
 * Template part for displaying second section in homepage
 *
 * @package BusinessPlus
 */

?>

<section id="second_section" class="second section">
    <div class="container">
        <div class="row">
            <?php if (get_theme_mod('second_section_image') ) : ?>
                <div class="about-image col-xs-12 col-sm-6">
                    <img src="<?php echo esc_url( get_theme_mod('second_section_image'));?>" alt="banner">
                </div>
            <?php endif;?>
            <?php if (get_theme_mod('second_section_title') || get_theme_mod('second_section_description') ) : ?>
                <div class="about-descrition col-xs-12 col-sm-6">
                    <?php if (get_theme_mod('second_section_title')):?>
                        <h2 class="about-title"><?php echo get_theme_mod('second_section_title')?><span class="big">.</span></h2>
                    <?php endif;?>
                    <?php if (get_theme_mod('second_section_description')):?>
                        <p class="about-desc"><?php echo get_theme_mod('second_section_description')?></p>
                    <?php endif;?>
                </div>
            <?php endif;?>

            

            <?php if (get_theme_mod('second_section_link')):?>
                <a class="button" href="<?php echo get_permalink(get_theme_mod('second_section_link'));?>">
                    <?php if (get_theme_mod('second_section_btn_text')):
                        echo get_theme_mod('second_section_btn_text');
                    else: echo __('View more','gh-exam');
                    endif;?>
                </a>
            <?php endif;?>
        </div>
    </div>
</section>