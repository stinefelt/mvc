<?php
/*
 * Plugin Name: MVC
 * Description: A OOP MVC Based Plugin
 */

include "app/init.php";

// Values to uses inside plugin app. like $vars['login_page'] ect.
set_value([
    'admin_route'   => 'dashboard',
    'plugin_route'  => 'mvc',
    'tables'         => [
        'sites'     => 'sites'
    ]
]);

// Permissions for users
add_filter('permissions', function($permissions){

    //permissions
    $permissions[] = 'view_mvc';

    return $permissions;
});

// Add's to the dashboard links
add_filter('basic-dashboard_before_admin_links',function($links){

    $vars = get_value();

    if(user_can('view_mvc'))
    {
        $obj = (object)[];
        $obj->title = 'MVC Test';
        $obj->link = ROOT . '/'.$vars['admin_route'].'/'.$vars['plugin_route'] . '/home';
        $obj->icon = 'fa-solid fa-layer-group';
        $obj->parent = 0;
        $links[] = $obj;
    }

    return $links;
});

$app = new App();


