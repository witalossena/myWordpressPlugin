<?php

/**
 * @package Getnews
 */
/*
Plugin Name: getnews-witalo
Plugin URI: https://getnews-witalo.com
Description: para pegar as noticias do g1
Version: 1.0
Author: witalossena
Author URI: https://witalossena.heroku.com
License: GPLv2 or later
Text Domain: getnews
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2020 Automattic, Inc.
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


class GetNoticias
{

    function __construct()
    {
        add_action( 'init', array( $this, 'custom_post_type')); 
        
    }

    function activate(){
    }

    function deactivate(){

    }

    function uninstall(){

    }

    function custom_post_type(){
        register_post_type('noticias', ['public' => true, 'label' => 'Noticias']);
    }

}

if( class_exists('GetNoticias')){
    $getNoticiasPlugin = new GetNoticias();
}

register_activation_hook(__FILE__, array( $getNoticiasPlugin, 'activate'));

register_deactivation_hook(__FILE__, array( $getNoticiasPlugin, 'deactivate'));