<?php
/**
 *  _     _____ _ _ ____               _
 * | |   |  ___/ / |___ \   _ __   ___| |_
 * | |   | |_  | | | __) | | '_ \ / _ \ __|
 * | |___|  _| | | |/ __/ _| | | |  __/ |_
 * |_____|_|   |_|_|_____(_)_| |_|\___|\__|
 *
 * @package WordPress
 * @Theme PureWin
 *
 * @author lf@lf112.net
 * @link https://lf112.net
 */

get_template_part( 'PureWin_Config' );

register_nav_menus();

// 移除网站头部wp-admin条
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

//前端隐藏工具条
if ( !is_admin() ) {
    add_filter('show_admin_bar', '__return_false');
}

//WP漏洞补血包
add_filter( 'wp_update_attachment_metadata', 'rips_unlink_tempfix' );
function rips_unlink_tempfix( $data ) {
    if( isset($data['thumb']) ) {
        $data['thumb'] = basename($data['thumb']);
    }
    return $data;
}


// 文章浏览量
function restyle_text($number) {
    if($number >= 1000) {
        return round($number/1000,2) . 'k';
    }else{
        return $number;
    }
}
function getPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return restyle_text($count);
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

//分页
