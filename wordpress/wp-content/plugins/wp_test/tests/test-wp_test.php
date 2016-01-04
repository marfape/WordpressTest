<?php

class Test_Wp_Test extends WP_UnitTestCase
{
    
   
    function test_cssfile_exists()
    {
        $this->assertFileExists(plugin_dir_path( __FILE__ ) . '../css/wp_test.css');
    }

    function test_jsfile_exists()
    {
        $this->assertFileExists(plugin_dir_path( __FILE__ ) . '../js/wp_test.js');
    }

    function test_getOptionName()
    {
        $this->assertFalse( 'WpTestPlugin' != getOptionName() );
    } 

    function test_deactivation()
    {
        wp_test_deactivation();
        $this->assertTrue( get_option(getOptionName())== '');
    }

    
    function test_wp_test_page_save()
    {
    	$_POST['save']='save';
    	$_POST['desc']='one value';

    	$this->assertEquals('one value',wp_test_page());
    }

    function test_wp_test_page_delete()
    {
    	$_POST['delete']='delete';
    	
    	$this->assertEquals('',wp_test_page());
    }

}

