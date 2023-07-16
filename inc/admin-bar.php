<?php
/**
 * Adds a node (menu item) to the admin bar menu.
 *
 * @link https://developer.wordpress.org/reference/classes/wp_admin_bar/add_menu/
 * @link https://developer.wordpress.org/reference/hooks/admin_bar_menu/
 * @link https://developer.wordpress.org/reference/functions/admin_url/
 * @link https://developer.wordpress.org/reference/functions/site_url/
 *
 * @package Really Simple
 * @subpackage inc
 */

/**
 * ReallySimpleAdminBars
 */
class ReallySimpleAdminBars
{
  /**
   * ReallySimpleAdminBars: __construct()
   */
  function __construct()
	{
    add_action( 'admin_bar_menu', [ $this,'really_simple_item' ], 500);
		add_action( 'admin_bar_menu', [ $this,'really_simple_update_item' ], 500);
		add_action( 'admin_bar_menu', [ $this,'really_simple_doc_item' ], 500);
		add_action( 'admin_bar_menu', [ $this,'really_simple_support_item' ], 500);
	}

  /**
   * ReallySimpleAdminBars: really_simple_item( $admin_bar )
   */
	function really_simple_item( $admin_bar ){
		$admin_bar->add_menu([
			'id'		  => 'really-simple-admin-bar',
			'parent'	=> null,
			'title'		=> esc_html__( 'Really Simple Theme', 'really-simple' ),
			'href'		=> 'https://wordpress.org/themes/really-simple/',
			'meta'    => [ 'target' => '_blank' ],
		]);
	}

  /**
   * ReallySimpleAdminBars: really_simple_update_item( $admin_bar )
   */
	function really_simple_update_item( $admin_bar ){
		$admin_bar->add_menu([
			'id'		  => 'really-simple-admin-bar-update',
			'parent'	=> 'really-simple-admin-bar',
			'title'		=> esc_html__( 'Updates', 'really-simple' ),
			'href'		=> 'https://github.com/Dev-Flaubert-Wordpress/really-simple-theme/releases',
			'meta'    => [ 'target' => '_blank' ],
		]);
	}

  /**
   * ReallySimpleAdminBars: really_simple_doc_item( $admin_bar )
   */
	function really_simple_doc_item( $admin_bar ){
		$admin_bar->add_menu([
			'id'		  => 'really-simple-admin-bar-documentation',
			'parent'	=> 'really-simple-admin-bar',
			'title'		=> esc_html__( 'Documentation', 'really-simple' ),
			'href'		=> 'https://github.com/Dev-Flaubert-Wordpress/really-simple-theme#really-simple-theme',
			'meta'    => [ 'target' => '_blank' ],
		]);
	}

  /**
   * ReallySimpleAdminBars: really_simple_support_item( $admin_bar )
   */
	function really_simple_support_item( $admin_bar ){
		$admin_bar->add_menu([
			'id'		  => 'really-simple-admin-bar-support',
			'parent'	=> 'really-simple-admin-bar',
			'title'		=> esc_html__( 'Support / Suggestions', 'really-simple' ),
			'href'		=> 'https://wordpress.org/support/theme/really-simple/',
			'meta'    => [ 'target' => '_blank' ],
		]);
	}
}
