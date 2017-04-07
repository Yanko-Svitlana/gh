<?php
/**
 * Template part for displaying second section in homepage
 *
 * @package BusinessPlus
 */

?>

<section id="second_section" class="second section">
    <div class="container">
        <?php if (get_theme_mod('second_section_title') || get_theme_mod('econd_section_subtitle') ) : ?>
            <div class="section-header">
                <?php if (get_theme_mod('second_section_title')):?>
                    <h2 class="section-title"><?php echo get_theme_mod('second_section_title')?></h2>
                <?php endif;?>
                <?php if (get_theme_mod('second_section_subtitle')):?>
                    <p class="section-subtitle"><?php echo get_theme_mod('second_section_subtitle')?></p>
                <?php endif;?>
            </div>
        <?php endif;?>

        <?php $args = array('post_type'     => 'post',
                            'posts_per_page'=> 4,
                            'category_name' =>'');
        $query = new WP_Query($args);
        if ($query->have_posts()) :?>
            <ul class="_______-list row ">
                <?php while ($query->have_posts()):
                    $query->the_post();?>
                    <li class="______-item">
                        <div class="______-icon col-xs-2 col-sm-2 col-md-1"><?php the_post_thumbnail()?></div>
                        <div class="_______-content col-xs-10 col-sm-4 col-md-5">
                            <h3 class="___________-item-title">
                                <a href="<?php echo get_permalink();?>"><?php the_title();?></a></h3>
                            <p><?php the_content()?></p>
                        </div>
                    </li>
                <?php endwhile;?>
            </ul>
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
</section>