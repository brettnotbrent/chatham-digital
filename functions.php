<?php
/*
Chatham Digital functions.
*/

add_action( 'after_setup_theme', 'chathamdigital_setup' );

if ( ! function_exists( 'chathamdigital_setup' ) ):

  add_theme_support( 'post-thumbnails' );

//==================================== page navigation menu	
  function registerMenus() {
  register_nav_menus(
    array(
      'header-nav' => __( 'Global Nav', 'chatham-digital' ),
      'sidebar-nav' => __( 'Sidebar Nav', 'chatham-digital' )
    )
  );
  }
  add_action( 'init', 'registerMenus' );

//==================================== global search form

function globalSearchFormatting( $form ) {
    $form = '
    <form role="search" method="get" class="site-search" action="' . home_url( '/' ) . '" >
      <label class="screen-reader-text" for="s">' . __('Search for:') . '</label>
      <input type="text" value="' . get_search_query() . '" name="s" id="s" class="global-search-field" tabindex="1" />
      <input type="submit" class="search-submit" value="" />
    </form>
    <div class="clear"></div>';

    return $form;
}

add_filter( 'get_search_form', 'globalSearchFormatting' );


endif; // chathamdigital_setup
?>