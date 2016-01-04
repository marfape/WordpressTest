<?php

/**
 * Plugin Name: Wp_test
 * Plugin URI: http://www.sweatworks.net/
 * Description: Plugin for add one value
 * Author: Marcos Fabre
 * Author: URI: http://www.sweatworks.net/
 * Version: 1.0
 */


//register css
function add_css() {
  wp_register_style('wp_test_css', plugin_dir_url( __FILE__ ) . 'css/wp_test.css', false, '1.00', 'all');
  wp_enqueue_style( 'wp_test_css');
}

add_action('init', 'add_css');

//register js
function add_script(){
    wp_register_script( 'wp_test_js', plugin_dir_url( __FILE__ ) . 'js/wp_test.js' );
    wp_enqueue_script( 'wp_test_js');
}

add_action( 'init', 'add_script' );


//When deactivation delete option
function wp_test_deactivation() {
    delete_option(getOptionName());
    remove_shortcode('wp_test');    
}

register_deactivation_hook(__FILE__, 'wp_test_deactivation');

// admin tab
function wp_test_tab()
{
    add_menu_page (
        'WP Test Plugin',
        'WP Test Plugin',
        'manage_options',
        'wp-test-plugin',
        'wp_test_page',
        plugin_dir_url( __FILE__ ).'icons/wp_test_icon.png',
        '6'
    );
}

add_action('admin_menu', 'wp_test_tab');

//Return value shortcode
function wp_test_shortcode() {
    return get_option(getOptionName()); 
}
 
//register shortcode 
function wp_test_register_shortcode() {
    add_shortcode( 'wp_test', 'wp_test_shortcode' );
}
 
add_action( 'init', 'wp_test_register_shortcode',99 );


//Name of the option
function getOptionName()
{
    return 'WpTestPlugin';

} 


// admin page
function wp_test_page()
{
             
    if (isset($_POST['save'])) {
        update_option( getOptionName(), $_POST['desc']);

    } else {
        if (isset($_POST['delete'])) {
            delete_option(getOptionName());
        }   

    }


    
    ob_start();
?>
    <div class="wrap">
        <h1>WP Test</h1>
        <h3>This value can be inserted into a page or post using the [wp_test] shortcode.</h3>
        <form action="" method="POST">
            <div id="data">
                <label>Value</label>
                <input type="text" name="desc" id="desc" value="<?php echo get_option(getOptionName()); ?>" <?php if (get_option(getOptionName())!='') { echo 'disabled';} ?> />

            </div>
            <div id="edit" onclick="enableDescription();"></div>
            <div id="message" ></div>   
            <div class="submit">
                <input type="submit" name="save" id="save" onclick="return notIsEmpty();" class="button button-primary" value="Update">
                <input type="submit" name="delete" id="delete" onclick="return deleteConfirm();" class="button button-primary" value="Delete">
            </div>
        </form>
        
              
    </div>
<?php
    echo ob_get_clean();
    return get_option(getOptionName());
}



/* End wp_test plugin */