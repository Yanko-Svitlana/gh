<?php
/**
 * Template part for displaying third section in homepage
 *
 * @package BusinessPlus
 */

?>

<section id="third_section" class="third section">
    <div class="container">
        <?php if (get_theme_mod('third_section_title') || get_theme_mod('third_section_subtitle') ) : ?>
            <div class="section-heading">
                <?php if (get_theme_mod('third_section_title')):?>
                    <h2 class="section-title"><?php echo get_theme_mod('third_section_title')?></h2>
                <?php endif;?>
                <?php if (get_theme_mod('third_section_subtitle')):?>
                    <p class="section-subtitle"><?php echo get_theme_mod('third_section_subtitle')?></p>
                <?php endif;?>
            </div>
        <?php endif;?>

        <?php $args = array('post_type' => 'Features',
                            'posts_per_page'=>-1);
        $query = new WP_Query($args);
        if ($query->have_posts()) :?>
            <ul class="features-list">
                <?php while ($query->have_posts()):
                    $query->the_post();?>
                    <li class="features-item">
                        <div class="feature-icon"><?php the_post_thumbnail()?></div>
                        <div class="feature-content">
                            <h3 class="feature-item-title"><?php the_title();?></h3>
                            <p><?php the_content()?></p>
                        </div>
                    </li>
                <?php endwhile;?>
            </ul>
        <?php endif;?>
    </div>
</section>
