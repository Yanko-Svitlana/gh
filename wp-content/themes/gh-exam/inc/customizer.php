<?php
/**
 * gh-exam Theme Customizer
 *
 * @package gh-exam
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function gh_exam_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	/*------------------------------------
	 Homepage panel
	------------------------------------*/
	$wp_customize->add_panel( 'home_page_panel', array(
		'priority' => 30,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Home page', 'gh-exam' ),
		'description' => esc_html__( 'Home page.', 'gh-exam' ),
	) );
	/*------------------------------------
	 Homepage banner
	------------------------------------*/

	/*------------------------------------
	 		first section
	------------------------------------*/
	$wp_customize->add_section('first_section',array(
		'title'		=> esc_html__('First section','gh-exam'),
		'priority'	=>2,
		'panel'		=>'home_page_panel'
	));

	$wp_customize->add_setting('first_section_title',array(
		'transport'	=>'postMessage'
	));
	$wp_customize->add_control('first_section_title',array(
		'section'	=>	'first_section',
		'label'		=>	esc_html__('Enter title of first section', 'gh-exam')
	));

	$wp_customize->add_setting('first_section_subtitle',array(
		'transport'	=>'postMessage'
	));
	$wp_customize->add_control('first_section_subtitle',array(
		'section'	=>	'first_section',
		'label'		=>	esc_html__('Enter subtitle of first section', 'gh-exam')
	));

	$wp_customize->add_setting('first_section_description',array(
		'transport'	=>	'postMessage'
	));
	$wp_customize->add_control('first_section_description',array(
		'section'	=>	'first_section',
		'label'		=>	esc_html__('First section content', 'gh-exam'),
		'type'		=>	'textarea'
	));

	$wp_customize->add_setting('first_section_btn_text',array(
		'transport'	=>	'postMessage'
	));
	$wp_customize->add_control('first_section_btn_text',array(
		'section'	=>	'first_section',
		'label'		=>	esc_html__('Text in button', 'gh-exam')
	));

	$wp_customize->add_setting('first_section_link'
	);
	$wp_customize->add_control('first_section_link',array(
		'section'	=> 'first_section',
		'label' 	=> esc_html__('Choose page to link', 'gh-exam'),
		'type'     	=> 'dropdown-pages'
	));

	$wp_customize->add_setting( 'display_first_section' , array(
		'transport' => 'postMessage'
	) );
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'display_first_section' , array(
		'section'	=>	'first_section',
		'label'		=>	esc_html__('Hide section?', 'gh-exam'),
		'type'		=> 'checkbox',
	)));

	/*------------------------------------
         second section
     ------------------------------------*/
	$wp_customize->add_section('second_section',array(
		'title'		=> esc_html__('Second section','gh-exam'),
		'priority'	=>3,
		'panel'		=>'home_page_panel'
	));

	$wp_customize->add_setting('second_section_title',array(
		'transport'	=>'postMessage'
	));
	$wp_customize->add_control('second_section_title',array(
		'section'	=>	'second_section',
		'label'		=>	esc_html__('Enter title of second section', 'gh-exam')
	));

	$wp_customize->add_setting('second_section_subtitle',array(
		'transport'	=>'postMessage'
	));
	$wp_customize->add_control('second_section_subtitle',array(
		'section'	=>	'second_section',
		'label'		=>	esc_html__('Enter subtitle of second section', 'gh-exam')
	));

	$wp_customize->add_setting('second_section_btn_text',array(
		'transport'	=>	'postMessage'
	));
	$wp_customize->add_control('second_section_btn_text',array(
		'section'	=>	'second_section',
		'label'		=>	esc_html__('Text in button', 'gh-exam')
	));

	$wp_customize->add_setting('second_section_link'
	);
	$wp_customize->add_control('second_section_link',array(
		'section'	=> 'second_section',
		'label' 	=> esc_html__('Choose page to link', 'gh-exam'),
		'type'     	=> 'dropdown-pages'
	));

	$wp_customize->add_setting( 'display_second_section' , array(
		'default'	=>	false,
		'transport' => 'postMessage'
	) );
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'display_second_section' , array(
		'section'	=>	'second_section',
		'label'		=>	esc_html__('Hide section?', 'gh-exam'),
		'type'		=> 'checkbox',
	)));

	/*------------------------------------
         third section
     ------------------------------------*/
	$wp_customize->add_section('third_section',array(
		'title'		=> esc_html__('Third section','gh-exam'),
		'priority'	=>3,
		'panel'		=>'home_page_panel'
	));

	$wp_customize->add_setting('third_section_title',array(
		'transport'	=>'postMessage'
	));
	$wp_customize->add_control('third_section_title',array(
		'section'	=>	'third_section',
		'label'		=>	esc_html__('Fill title of third section', 'gh-exam')
	));

	$wp_customize->add_setting('third_section_subtitle',array(
		'transport'	=>'postMessage'
	));
	$wp_customize->add_control('third_section_subtitle',array(
		'section'	=>	'third_section',
		'label'		=>	esc_html__('Fill subtitle of third section', 'gh-exam')
	));

	$wp_customize->add_setting( 'display_third_section' , array(
		'default'	=>	false,
		'transport' => 'postMessage'
	) );
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'display_third_section' , array(
		'section'	=>	'third_section',
		'label'		=>	esc_html__('Display Section?', 'gh-exam'),
		'type'		=> 'checkbox',
	)));

	/*------------------------------------
             fourth section
    ------------------------------------*/
	$wp_customize->add_section('fourth_section',array(
		'title'		=> esc_html__('Fourth section','gh-exam'),
		'priority'	=>3,
		'panel'		=>'home_page_panel'
	));

	$wp_customize->add_setting('fourth_section_title',array(
		'transport'	=>'postMessage'
	));
	$wp_customize->add_control('fourth_section_title',array(
		'section'	=>	'fourth_section',
		'label'		=>	esc_html__('Fill title of fourth section', 'gh-exam')
	));

	$wp_customize->add_setting('fourth_section_subtitle',array(
		'transport'	=>'postMessage'
	));
	$wp_customize->add_control('fourth_section_subtitle',array(
		'section'	=>	'fourth_section',
		'label'		=>	esc_html__('Fill subtitle of fourth section', 'gh-exam')
	));

	$wp_customize->add_setting('fourth_section_btn_text',array(
		'transport'	=>	'postMessage'
	));
	$wp_customize->add_control('fourth_section_btn_text',array(
		'section'	=>	'fourth_section',
		'label'		=>	esc_html__('Text in button', 'gh-exam')
	));

	$wp_customize->add_setting('fourth_section_link'
	);
	$wp_customize->add_control('fourth_section_link',array(
		'section'	=> 'fourth_section',
		'label' 	=> esc_html__('Choose page to link', 'gh-exam'),
		'type'     	=> 'dropdown-pages'
	));

	$wp_customize->add_setting( 'display_fourth_section' , array(
		'default'	=>	false,
		'transport' => 'postMessage'
	) );
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'display_fourth_section' , array(
		'section'	=>	'fourth_section',
		'label'		=>	esc_html__('Display section?', 'gh-exam'),
		'type'		=> 'checkbox',
	)));

	/*------------------------------------
         fifth section
     ------------------------------------*/
	$wp_customize->add_section('fifth_section',array(
		'title'		=> esc_html__('Fifth section','gh-exam'),
		'priority'	=>3,
		'panel'		=>'home_page_panel'
	));

	$wp_customize->add_setting('fifth_section_title',array(
		'transport'	=>'postMessage'
	));
	$wp_customize->add_control('fifth_section_title',array(
		'section'	=>	'fifth_section',
		'label'		=>	esc_html__('Fill title of fifth section', 'gh-exam')
	));

	$wp_customize->add_setting('fifth_section_subtitle',array(
		'transport'	=>'postMessage'
	));
	$wp_customize->add_control('fifth_section_subtitle',array(
		'section'	=>	'fifth_section',
		'label'		=>	esc_html__('Fill subtitle of fifth section', 'gh-exam')
	));

	$wp_customize->add_setting( 'display_fifth_section' , array(
		'default'	=>	false,
		'transport' => 'postMessage'
	) );
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'display_fifth_section' , array(
		'section'	=>	'fifth_section',
		'label'		=>	esc_html__('Display section?', 'gh-exam'),
		'type'		=> 'checkbox',
	)));

	/*------------------------------------
         sixth section
     ------------------------------------*/
	$wp_customize->add_section('sixth_section',array(
		'title'		=> esc_html__('Sixth section','gh-exam'),
		'priority'	=>3,
		'panel'		=>'home_page_panel'
	));

	$wp_customize->add_setting('sixth_section_title',array(
		'transport'	=>'postMessage'
	));
	$wp_customize->add_control('sixth_section_title',array(
		'section'	=>	'sixth_section',
		'label'		=>	esc_html__('Fill title of sixth section', 'gh-exam')
	));

	$wp_customize->add_setting('sixth_section_subtitle',array(
		'transport'	=>'postMessage'
	));
	$wp_customize->add_control('sixth_section_subtitle',array(
		'section'	=>	'sixth_section',
		'label'		=>	esc_html__('Fill subtitle of sixth section', 'gh-exam')
	));

	$wp_customize->add_setting( 'display_sixth_section' , array(
		'default'	=>	false,
		'transport' => 'postMessage'
	) );
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'display_sixth_section' , array(
		'section'	=>	'sixth_section',
		'label'		=>	esc_html__('Display section?', 'gh-exam'),
		'type'		=> 'checkbox',
	)));

	/*------------------------------------
     Contact info
     ------------------------------------*/
	$wp_customize->add_section('contact_info',array(
		'title'		=> esc_html__('Contact info','gh-exam'),
		'priority'	=>35
	));

	$wp_customize->add_setting('phone-number',array(
		'transport'	=>'postMessage'
	));

	$wp_customize->add_control('phone-number',array(
		'section'	=>	'contact-info',
		'label'		=>	esc_html__('Fill your contact phone number', 'gh-exam')
	));

	$wp_customize->add_setting('email',array(
		'transport'	=>	'postMessage'
	));

	$wp_customize->add_control('email',array(
		'label'		=>	esc_html__('Fill your contact email','gh-exam'),
		'section'	=>	'contact_info',
	));

	$wp_customize->add_setting('address',array(
		'transport'	=>	'postMessage'
	));
	$wp_customize->add_control('address',array(
		'label'		=>	esc_html__('Fill your contact address','gh-exam'),
		'section'	=>	'contact_info',
	));

	/*------------------------------------
     Social links
	------------------------------------*/
	$wp_customize->add_section('social_links',array(
		'title'		=>esc_html__('Social pages', 'gh-exam'),
		'priority'	=>35
	));

	$soc=array('facebook','twitter', 'linkedin','google-plus','pinterest');
	for ( $i = 0; $i < count($soc); $i++ ) {
		$wp_customize->add_setting($soc[$i] . '_link', array(
			'transport' => 'postMessage'
		));
		$wp_customize->add_control($soc[$i].'_link', array(
			'label' => esc_html__("Enter link to your $soc[$i] page if you have it", 'gh-exam'),
			'section' => 'social_links',
			'settings' => $soc[$i] . '_link'
		));
	};


	/*------------------------------------
     Footer section
     ------------------------------------*/
	$wp_customize->add_section('footer',array(
		'title'		=>esc_html__('Footer custom fields', 'gh-exam'),
		'priority'	=>35
	));
	//copyrights
	$wp_customize->add_setting('copyrights-year',array(
		'transport'	=>'postMessage'
	));

	$wp_customize->add_control('copyrights-year',array(
		'section'	=>	'footer',
		'label'		=>	esc_html__('Fill year of creating site', 'gh-exam')
	));

	$wp_customize->add_setting('copyrights',array(
		'transport'	=>'postMessage'
	));

	$wp_customize->add_control('copyrights',array(
		'section'	=>	'footer',
		'label'		=>	esc_html__('Fill copyrights of this site', 'gh-exam')
	));

}
add_action( 'customize_register', 'gh_exam_customize_register' );

/********************/

function gh_exam_customizer_action() {?>

	<style>
		.first.section{
			display: <?php if (get_theme_mod('display_first_section')===true) echo 'none';?>
		}
		.secong.section{
			display: <?php if (get_theme_mod('display_second_section')===true) echo 'none';?>
		}
		.third.section{
			display: <?php if (get_theme_mod('display_third_section')===true) echo 'none';?>
		}
		.fourth.section{
			display: <?php if (get_theme_mod('display_fourth_section')===true) echo 'none';?>
		}
		.fifth.section{
			display: <?php if (get_theme_mod('display_fifth_section')===true) echo 'none';?>
		}
		.sixth.section{
			display: <?php if (get_theme_mod('display_sixth_section')===true) echo 'none';?>
		}
	</style>
	<script>
		jQuery(function ($) {
			$('.slider').slick({
				dots: true,
				arrows: false,
				cssEase: 'ease-in',
				slidesToShow: 1,
				autoplay: true,
				<?php if (get_theme_mod('fade_slide_options')==='slide') { ?>

				SlideToScroll: 1,

				<?php }  else  {?>
				fade: true,
				<?php } ?>
				speed: 500
			});
		});
	</script>



<?php }

add_action( 'wp_head', 'gh_exam_customizer_action' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function gh_exam_customize_preview_js() {
	wp_enqueue_script( 'gh_exam_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'gh_exam_customize_preview_js' );