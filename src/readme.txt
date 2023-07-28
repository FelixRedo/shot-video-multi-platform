=== shot video multi platform ===
Contributors: FélixRedondo
Donate link:  https://github.com/FelixRedo
Tags: video, multimedia
Requires at least: 5.0
Tested up to: 6.3
Stable tag: 1.0.0
Requires PHP: 5.2.4
License: GNU GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html


General purpose shortcodes for WordPress.

== Description ==
Show the indicated video of the desired platform. You can specify the size of the video (width and height) and the border (frameborder).
The video platforms are: Youtube (Y), Vimeo (V) and Wistia (W).



## Shortcodes
### [svmp]
This shortcode contains a total of five parameters. The first two are necessary.

Parameters list:
 'vro_pf' (necessary) in this variable the platform where the video is located is specified. The values ​​it can take are the following: Y = Youtube, V = Vimeo, W = wistia
 'vro_id' (necessary) the platform video code is indicated.
 'vro_x' the width
 'vro_y' the height
 'vro_fb' frameborder value

E.g.: You write ``[svmp vro_pf="Y" vro_id="_xc7tNbjnHM" vro_x= "560" vro_y="315" vro_fb="0"] ``.

> Note; if no value is given to the vro_x, vro_y and vro_fb parameters, they will take the values ​​'560', '315' and '0' respectively.

== Frequently Asked Questions ==

Please, send me any questions you have so I can answer them.

== Changelog ==

= 1.0.0 =
* Added the fist version


== Upgrade Notice ==

= 1.0.0 =
First shortcode.

== Screenshots ==

1. There are no screenshots.