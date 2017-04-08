<?php
/**
 * Template part for displaying sixth section in homepage
 *
 * @package BusinessPlus
 */

?>

<section id="sixth_section" class="sixth section">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <?php if (get_theme_mod('contact_title') || get_theme_mod('contact_description') ) : ?>
                    <div class="contact-heading">
                        <?php if (get_theme_mod('contact_title')):?>
                            <h2 class="title"><?php echo get_theme_mod('contact_title')?></h2>
                        <?php endif;?>
                        <?php if (get_theme_mod('contact_description')):?>
                            <p class="subtitle"><?php echo get_theme_mod('contact_description')?></p>
                        <?php endif;?>
                        <?php if (get_theme_mod('phone-number')|| get_theme_mod('address')):?>
                            <ul class="contact-info">
                                <?php if (get_theme_mod('phone-number')):?>
                                    <li class="phone"><?php echo get_theme_mod('phone-number')?></li>
                                <?php endif;?>
                                <?php if (get_theme_mod('address')):?>
                                    <li class="address"><?php echo get_theme_mod('address')?></li>
                                <?php endif;?>
                            </ul>
                        <?php endif;?>
                    </div>
                <?php endif;?>
                <?php dynamic_sidebar('footer-map')?>
            </div>
            <div class="col-xs-12 col-md-6">
                <?php dynamic_sidebar('contact-form');?>
            </div>
        </div>

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
