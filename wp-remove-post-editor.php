<?php
/*
    Plugin Name: WP Remove Post Editor
    Plugin URI: http://web.pules.jp/wp-plugins/
    Description: This is not to display editor.
    Author: Hironori Watanabe
    Author URI: http://web.pules.jp/
    Version: 0.1
*/

/*  Copyright 2015 Hironori Watanabe (email: info+wpplugins at pules.jp)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function wp_remove_post_editor() {
    remove_post_type_support('post', 'editor');
}
add_action('init', 'wp_remove_post_editor');
