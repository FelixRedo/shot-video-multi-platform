<?php 
/*
 * Plugin Name:       wp-shot-video-multi-platform
 * Plugin URI:        https://github.com/FelixRedo
 * Description:       Inserts a responsive video iframe from different platforms. 
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Félix Redondo Pérez
 * Author URI:        https://github.com/FelixRedo
 * License:           GNU GPLv3 or later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 * Update URI:        https://github.com/FelixRedo
 */

 /*
wp-shot-video-multi-platform is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

wp-shot-video-multi-platform is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with wp-shot-video-multi-platform. If not, see https://www.gnu.org/licenses/gpl-3.0.html.
*/

add_shortcode( "svmp",
    function($atts = []){
        $args = shortcode_atts( array(
            'vro_pf' => 'Y', // Y = Youtube, V = Vimeo, W = wistia
            'vro_id' => 'DOoG_KiEJM4', // id video
            'vro_x' => '560', //width
            'vro_y' => '315', //height
            'vro_fb' => '0' //frameborder
        ), $atts );
        $id = $args['vro_id'];
        $mp = $args['vro_pf'];
        $sr = "https://";
        if ($mp == "Y") { $sr .= "www.youtube.com/embed/" . $id . "?rel=0"; }
        if ($mp == "V") { $sr .= "player.vimeo.com/video/" . $id . '?autoplay=1&amp;h=f071231f74'; }
        if ($mp == "W") { $sr .= "fast.wistia.net/embed/iframe/" . $id; }
        return '<div class="responsiveContent">
            <iframe width="'.$args['vro_x'].'" height="'.$args['vro_y'].'" src="'.$sr.'" frameborder="'.$args['vro_fb'].'0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
            </div>';
    }  
    );
?>
