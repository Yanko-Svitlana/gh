<?php
/**
 * Template part for displaying social links in pages
 *
 * @package gh-exam
 */

?>

<div class="container">
    <ul class="social-links">
        <?php
        $soc=array('facebook','twitter', 'linkedin','google-plus','pinterest');
        for ( $i = 0; $i < count($soc); $i++ ) {
            if (get_theme_mod($soc[$i].'_link')!=''):?>
                <li class="<?php echo $soc[$i]?>">
                    <a href="<?php echo get_theme_mod($soc[$i].'_link')?>" target="_blank">
                        <i class="fa fa-<?php echo $soc[$i]?>"></i>
                    </a>
                </li>
            <?php endif;
        }
        ?>
    </ul>
</div>
