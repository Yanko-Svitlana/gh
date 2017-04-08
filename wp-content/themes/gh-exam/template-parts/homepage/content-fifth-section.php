<?php
/**
 * Template part for displaying fifth section in homepage
 *
 * @package BusinessPlus
 */

?>

<section id="fifth_section" class="fifth section">
    <div class="container">
        <?php if (get_theme_mod('fifth_section_title')) : ?>
            <div class="section-heading">
                <?php if (get_theme_mod('fifth_section_title')):?>
                    <h2 class="section-title"><?php echo get_theme_mod('fifth_section_title')?></h2>
                <?php endif;?>

            </div>
        <?php endif;?>

        <?php $args = array('post_type' => 'Clients',
            'posts_per_page'=>4);
        $query = new WP_Query($args);
        if ($query->have_posts()) :?>
        <div class="clients-list">
            <?php while ($query->have_posts()):
                $query->the_post();?>
                <div class="client-item">
                    <div class="client-icon"><?php the_post_thumbnail();?></div>
                </div>
            <?php endwhile;?>
        </div>
        <?php endif;?>
    </div>
</section>