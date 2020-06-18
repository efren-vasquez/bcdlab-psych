<?php
/**
 * Plugin Name: BCD Lab Plugin
 * Plugin URI: https://bcdlab.psych.ufl.edu/
 * Description: This plugin is for custom functionality for the BCD Lab website
 * Version: 1.0
 * Author: Efren Vasquez
 * Author URI: https://mediaservices.clas.ufl.edu
 */


 /*========================================
 *
 * BCD Lab Home page ACF fields
 *
 *==========================================*/
 if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
    	'key' => 'left-column',
    	'title' => 'Left Column',
    	'fields' => array (
    		array (
    			'key' => 'left-image',
    			'label' => 'Image',
    			'name' => 'left-image',
    			'type' => 'image',
    		),

        array (
          'key' => 'left-link',
          'label' => 'URL',
          'name' => 'left-url',
          'type' => 'url',
          'instructions' => 'Type in the page you would like to link to'
        ),

        array (
          'key' => 'left-heading',
          'label' => 'Heading',
          'name' => 'left-heading',
          'type' => 'text',
          'instructions' => 'Large text inside the block'
        ),

        array (
          'key' => 'left-button',
          'label' => 'Button Text',
          'name' => 'left-button',
          'type' => 'text',
          'instructions' => 'Text that will show up inside the button'
        ),

    	),
    	'location' => array (
    		array (
    			array (
    				'param' => 'page_template',
    				'operator' => '==',
    				'value' => 'public/templates/home-template.php',
    			),
    		),
    	),
    ));

    acf_add_local_field_group(array(
      'key' => 'middle-top-column',
      'title' => 'Middle Top Column',
      'fields' => array (
        array (
          'key' => 'middle-top-image',
          'label' => 'Image',
          'name' => 'middle-top-image',
          'type' => 'image',
        ),

        array (
          'key' => 'middle-top-link',
          'label' => 'URL',
          'name' => 'left-url',
          'type' => 'url',
          'instructions' => 'Type in the page you would like to link to'
        ),

        array (
          'key' => 'middle-top-heading',
          'label' => 'Heading',
          'name' => 'middle-top-heading',
          'type' => 'text',
          'instructions' => 'Large text inside the block'
        ),

        array (
          'key' => 'middle-top-button',
          'label' => 'Button Text',
          'name' => 'middle-top-button',
          'type' => 'text',
          'instructions' => 'Text that will show up inside the button'
        ),

        array (
          'key' => 'middle-top-text',
          'label' => 'Text',
          'name' => 'middle-top-text',
          'type' => 'text',
        ),

      ),
      'location' => array (
        array (
          array (
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'public/templates/home-template.php',
          ),
        ),
      ),
    ));

    acf_add_local_field_group(array(
      'key' => 'middle-bottom-column',
      'title' => 'Middle Bottom Column',
      'fields' => array (

        array (
          'key' => 'middle-bottom-image',
          'label' => 'Image',
          'name' => 'middle-bottom-image',
          'type' => 'image',
        ),

        array (
          'key' => 'middle-bottom-link',
          'label' => 'URL',
          'name' => 'middle-bottom-url',
          'type' => 'url',
          'instructions' => 'Type in the page you would like to link to'
        ),

        array (
          'key' => 'middle-bottom-heading',
          'label' => 'Heading',
          'name' => 'middle-bottom-heading',
          'type' => 'text',
          'instructions' => 'Large text inside the block'
        ),

        array (
          'key' => 'middle-bottom-button',
          'label' => 'Button Text',
          'name' => 'middle-bottom-button',
          'type' => 'text',
          'instructions' => 'Text that will show up inside the button'
        ),

        array (
          'key' => 'middle-bottom-text',
          'label' => 'Text',
          'name' => 'middle-bottom-text',
          'type' => 'text',
        ),

      ),
      'location' => array (
        array (
          array (
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'public/templates/home-template.php',
          ),
        ),
      ),
    ));

    acf_add_local_field_group(array(
      'key' => 'right-top-column',
      'title' => 'Right Top Column',
      'fields' => array (

        array (
          'key' => 'right-top-image',
          'label' => 'Image',
          'name' => 'right-top-image',
          'type' => 'image',
        ),

        array (
          'key' => 'right-top-link',
          'label' => 'URL',
          'name' => 'right-top-url',
          'type' => 'url',
          'instructions' => 'Type in the page you would like to link to'
        ),

        array (
          'key' => 'right-top-heading',
          'label' => 'Heading',
          'name' => 'right-top-heading',
          'type' => 'text',
          'instructions' => 'Large text inside the block'
        ),

        array (
          'key' => 'right-top-button',
          'label' => 'Button Text',
          'name' => 'right-top-button',
          'type' => 'text',
          'instructions' => 'Text that will show up inside the button'
        ),

        array (
          'key' => 'right-top-text',
          'label' => 'Text',
          'name' => 'right-top-text',
          'type' => 'text',
        ),

      ),
      'location' => array (
        array (
          array (
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'public/templates/home-template.php',
          ),
        ),
      ),
    ));

    acf_add_local_field_group(array(
      'key' => 'right-bottom-column',
      'title' => 'Right Bottom Column',
      'fields' => array (

        array (
          'key' => 'right-bottom-image',
          'label' => 'Image',
          'name' => 'right-bottom-image',
          'type' => 'image',
        ),

        array (
          'key' => 'right-bottom-link',
          'label' => 'URL',
          'name' => 'right-bottom-url',
          'type' => 'url',
          'instructions' => 'Type in the page you would like to link to'
        ),

        array (
          'key' => 'right-bottom-heading',
          'label' => 'Heading',
          'name' => 'right-bottom-heading',
          'type' => 'text',
          'instructions' => 'Large text inside the block'
        ),

        array (
          'key' => 'right-bottom-button',
          'label' => 'Button Text',
          'name' => 'right-bottom-button',
          'type' => 'text',
          'instructions' => 'Text that will show up inside the button'
        ),

        array (
          'key' => 'right-bottom-text',
          'label' => 'Text',
          'name' => 'right-bottom-text',
          'type' => 'text',
        ),

      ),
      'location' => array (
        array (
          array (
            'param' => 'page_template',
            'operator' => '==',
            'value' => 'public/templates/home-template.php',
          ),
        ),
      ),
    ));

endif;




/*==================================

Create page home page template

====================================*/
class PageTemplater {

	/**
	 * A reference to an instance of this class.
	 */
	private static $instance;

	/**
	 * The array of templates that this plugin tracks.
	 */
	protected $templates;

	/**
	 * Returns an instance of this class.
	 */
	public static function get_instance() {

		if ( null == self::$instance ) {
			self::$instance = new PageTemplater();
		}

		return self::$instance;

	}

	/**
	 * Initializes the plugin by setting filters and administration functions.
	 */
	private function __construct() {

		$this->templates = array();


		// Add a filter to the attributes metabox to inject template into the cache.
		if ( version_compare( floatval( get_bloginfo( 'version' ) ), '4.7', '<' ) ) {

			// 4.6 and older
			add_filter(
				'page_attributes_dropdown_pages_args',
				array( $this, 'register_project_templates' )
			);

		} else {

			// Add a filter to the wp 4.7 version attributes metabox
			add_filter(
				'theme_page_templates', array( $this, 'add_new_template' )
			);

		}

		// Add a filter to the save post to inject out template into the page cache
		add_filter(
			'wp_insert_post_data',
			array( $this, 'register_project_templates' )
		);


		// Add a filter to the template include to determine if the page has our
		// template assigned and return it's path
		add_filter(
			'template_include',
			array( $this, 'view_project_template')
		);


		// Add your templates to this array.
		$this->templates = array(
			'public/templates/home-template.php' => 'Home Page',
		);

	}

	/**
	 * Adds our template to the page dropdown for v4.7+
	 *
	 */
	public function add_new_template( $posts_templates ) {
		$posts_templates = array_merge( $posts_templates, $this->templates );
		return $posts_templates;
	}

	/**
	 * Adds our template to the pages cache in order to trick WordPress
	 * into thinking the template file exists where it doens't really exist.
	 */
	public function register_project_templates( $atts ) {

		// Create the key used for the themes cache
		$cache_key = 'page_templates-' . md5( get_theme_root() . '/' . get_stylesheet() );

		// Retrieve the cache list.
		// If it doesn't exist, or it's empty prepare an array
		$templates = wp_get_theme()->get_page_templates();
		if ( empty( $templates ) ) {
			$templates = array();
		}

		// New cache, therefore remove the old one
		wp_cache_delete( $cache_key , 'themes');

		// Now add our template to the list of templates by merging our templates
		// with the existing templates array from the cache.
		$templates = array_merge( $templates, $this->templates );

		// Add the modified cache to allow WordPress to pick it up for listing
		// available templates
		wp_cache_add( $cache_key, $templates, 'themes', 1800 );

		return $atts;

	}

	/**
	 * Checks if the template is assigned to the page
	 */
	public function view_project_template( $template ) {

		// Get global post
		global $post;

		// Return template if post is empty
		if ( ! $post ) {
			return $template;
		}

		// Return default template if we don't have a custom one defined
		if ( ! isset( $this->templates[get_post_meta(
			$post->ID, '_wp_page_template', true
		)] ) ) {
			return $template;
		}

		$file = plugin_dir_path( __FILE__ ). get_post_meta(
			$post->ID, '_wp_page_template', true
		);

		// Just to be safe, we check if the file exist first
		if ( file_exists( $file ) ) {
			return $file;
		} else {
			echo $file;
		}

		// Return template
		return $template;

	}

}
add_action( 'plugins_loaded', array( 'PageTemplater', 'get_instance' ) );

/*======================================

  Add Admin Styles

=======================================*/
// Update CSS within in Admin
function admin_style() {
  wp_enqueue_style('admin-styles', plugin_dir_url(__FILE__).'admin/css/styles.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

// Update CSS for home page

  function public_style() {
    if(is_page_template('public/templates/home-template.php')){
      wp_enqueue_style('public-styles', plugin_dir_url(__FILE__).'public/css/styles.css');
    }
  }

  add_action('wp_enqueue_scripts', 'public_style');
