<?php
/**
 * Template part for displaying fourth section in homepage
 *
 * @package BusinessPlus
 */

?>

<section id="fourth_section" class="fourth section">
    <div class="container">
        <?php if (get_theme_mod('fourth_section_title') || get_theme_mod('fourth_section_subtitle') ) : ?>
            <div class="section-heading">
                <?php if (get_theme_mod('fourth_section_title')):?>
                    <h2 class="section-title"><?php echo get_theme_mod('fourth_section_title')?></h2>
                <?php endif;?>
                <?php if (get_theme_mod('fourth_section_subtitle')):?>
                    <p class="section-subtitle"><?php echo get_theme_mod('fourth_section_subtitle')?></p>
                <?php endif;?>
            </div>
        <?php endif;?>

        <?php $args = array('post_type' => 'Portfolio',
            'posts_per_page'=>6);
        $query = new WP_Query($args);
        if ($query->have_posts()) :?>
            <div id="options">
                <div id="filters" class="button-group js-radio-button-group">
                    <button class="btn-isotope button is-checked" data-filter="*"><?php echo esc_html__('All','gh-exam')?></button>
                    <button class="btn-isotope button" data-filter=".design"><?php echo esc_html__('Design','gh-exam')?></button>
                    <button class="btn-isotope button" data-filter=".development"><?php echo esc_html__('Development','gh-exam')?></button>
                    <button class="btn-isotope button" data-filter=".seo"><?php echo esc_html__('Seo','gh-exam')?></button>
                    <button class="btn-isotope button" data-filter=".other"><?php echo esc_html__('Other','gh-exam')?></button>
                </div>
            </div>
            <div class="isotope">
                <?php while ($query->have_posts()):
                    $query->the_post();?>
                    <div class="item <?php echo get_post_meta($post->ID,'category',true)?>">
                        <div class="feature-icon"><?php the_post_thumbnail()?></div>
                        <div class="overlay-rect">
                            <h3 class="heading-overlay"><?php echo get_post_meta($post->ID,'category',true);?></h3>
                        </div>
                    </div>
                <?php endwhile;?>
            </div>
        <?php endif;?>
    </div>
</section>
