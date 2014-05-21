<?php

/**
 * Add 1 widget to 2 widgets in parent theme
 *
 * @return void
 */
function twentythirteenchild_add_top_widget() {
    register_sidebar( array(
        //'name'          => __( 'Top Widget Area', 'twentythirteen' ),
        'name'          => 'Блок в шапке',
        'id'            => 'sidebar-3',
        //'description'   => __( 'Appears in the header section of the site.', 'twentythirteen' ),
        'description'   => 'Отображается в шапке сайта.',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'twentythirteenchild_add_top_widget' );


add_action( 'init', 'remove_crap' );
function remove_crap() {
    remove_custom_image_header();
    remove_custom_background();
    //remove_theme_support('post-formats');
}

/*
 *  Add my js-functions to head 
 */
add_action('wp_head', 'stop_submit_by_enter');
function stop_submit_by_enter(){
    /*
     *  Stop form submit by enter 
     */
?>    
    <script type="text/javascript"><!--//<![CDATA[
    jQuery(document).ready(function($) {
        $('form').bind("keyup keypress", function(e) {
            var code = e.keyCode || e.which; 
            if (code == 13) {               
                e.preventDefault();
                return false;
            }
        });
    });
    //]]>--></script>
<?php    
    /*
     *  Scroll page to title in mobile screen 
     */
?>    
    <script type="text/javascript"><!--//<![CDATA[
    function scrollToAnchor(aid){
        var aTag = jQuery("a[name='"+ aid +"']");
        jQuery('html,body').animate({scrollTop: aTag.offset().top},'slow');
    }
    jQuery(document).ready(function($) {
        if($(document).width()<770)
            scrollToAnchor('header');
    });
    //]]>--></script>
<?php    
}

/*
 * Add anchors to right menu
// Make sure to edit wp_nav_menu_your_menu_items
//http://www.jeffreydev.com/how-to-extend-wp_nav_menu/
add_filter( 'wp_nav_menu_myrightmenu_items', 'myrightmemu_add_anchors' );
function myrightmemu_add_anchors( $menuItemsHtml ){
    $menuItemsHtml = preg_replace('|href="(http[^"]+)"|', 'href="$1#header"', $menuItemsHtml ); 
    return $menuItemsHtml;
}
 */
/*
 * Add anchors to the pages titles  (will scroll by jquery)
 */
add_filter( 'the_title', 'my_ancchors_to_titles');
function my_ancchors_to_titles($title) {
  if ( in_the_loop() && is_page() ) {
    $title = '<a name="header"></a>'.$title;
  }
  return $title;
} 


?>
