<?php
/**
 * @package WordPress_Cloud_Management_Console
 * @version 1.0
 */
/*
Plugin Name: WordPress Cloud Management Console
Plugin URI: http://wordpress.org/extend/plugins/hello-dolly/
Description: This plugin links your WordPress installation to the WordPress Cloud Management Console to make it easy to backup, upgrade and secure all your WordPress sites and servers
Author: Bitnami
Version: 1.0
Author URI: https://bitnami.com/
*/


add_action('admin_bar_menu', 'bitnami_prod_add_bar', 25);
function bitnami_prod_add_bar($admin_bar){
    $admin_bar->add_menu( array(
        'id'    => 'bitnami-prod-console',
        'title' => 'WordPress Cloud Management Console',
        'href'  => 'https://bitnami.com/wordpress-management-console',
        'meta'  => array(
            'title' => __('WordPress Cloud Management Console'),            
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
