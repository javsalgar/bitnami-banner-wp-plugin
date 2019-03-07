<?php
/**
 * @package Bitnami_Production_Console_Banner
 * @version 1.0
 */
/*
Plugin Name: Bitnami Production Console Helper
Plugin URI: http://wordpress.org/extend/plugins/hello-dolly/
Description: This plugin adds a link in the WordPress Admin Interface to the Bitnami Production Console
Author: Bitnami
Version: 1.0
Author URI: https://bitnami.com/
*/


add_action('admin_bar_menu', 'bitnami_prod_add_bar', 25);
function bitnami_prod_add_bar($admin_bar){
    $admin_bar->add_menu( array(
        'id'    => 'bitnami-prod-console',
        'title' => 'Bitnami Production Console',
        'href'  => '#',
        'meta'  => array(
            'title' => __('Bitnami Production Console'),            
        ),
    ));
    $admin_bar->add_menu( array(
        'id'    => 'bitnami-community',
        'parent' => 'bitnami-prod-console',
        'title' => 'Bitnami Community',
        'href'  => 'https://community.bitnami.com',
        'meta'  => array(
            'title' => __('Bitnami Community'),
            'target' => '_blank',
            'class' => 'bitnami_prod_class'
        ),
    ));
    $admin_bar->add_menu( array(
        'id'    => 'bitnami-docs',
        'parent' => 'bitnami-prod-console',
        'title' => 'Bitnami.com',
        'href'  => 'https://docs.bitnami.com',
        'meta'  => array(
            'title' => __('Bitnami Doc Pages'),
            'target' => '_blank',
            'class' => 'bitnami_prod_class'
        ),
    ));
}

?>
