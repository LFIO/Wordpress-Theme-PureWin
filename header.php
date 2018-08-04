<!DOCTYPE html>
<html>

<!--
 _     _____ _ _ ____               _
| |   |  ___/ / |___ \   _ __   ___| |_
| |   | |_  | | | __) | | '_ \ / _ \ __|
| |___|  _| | | |/ __/ _| | | |  __/ |_
|_____|_|   |_|_|_____(_)_| |_|\___|\__|

 Html Name: PureWin
 Description：Html Code by LF112
 Version：0.0.3
 Author：LF112
 Author URI：https://lf112.net
 Author QQ: 2275203821

 -->

<head>
    <title><?php if ( is_home() ) {
            bloginfo('name'); echo " - "; bloginfo('description');
        } elseif ( is_category() ) {
            single_cat_title(); echo " - "; bloginfo('name');
        } elseif (is_single() || is_page() ) {
            single_post_title();
        } elseif (is_search() ) {
            echo "搜索结果"; echo " - "; bloginfo('name');
        } elseif (is_404() ) {
            echo '页面未找到!';
        } else {
            wp_title('',true);
        } ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="BY LF112">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css?ver=<?php echo wp_get_theme()->get('Version');?>" type="text/css" media="screen" />

    <style>
        <?php
            if(get_option('PureWin-BackGround') == "" || get_option('PureWin-BackGround') == '/wp-content/themes/PureWin/images/background.png'){}else{
                echo "body { background-image: url('".get_option('PureWin-BackGround')."');}";
                if (get_option('PureWin-BackGround') == ""  || get_option('PureWin-BackGround') == '#0B0B0B'){echo '#Taskbar-footer {background-color: rgba(11, 11, 11, 0.51);}';}else{echo '#Taskbar-footer {background-color: '.get_option('PureWin-BackGround').'}';}
                if (get_option('PureWin-StatusEdit') == ""  || get_option('PureWin-StatusEdit') == '#333333'){echo '#Taskbar-footer .Search {background-color: rgba(11, 11, 11, 0.51);}';}else{echo '#Taskbar-footer {background-color: '.get_option('PureWin-StatusEdit').'}';}
            }
            if (get_option('PureWin-BolggerColor') == ""  || get_option('PureWin-BolggerColor') == 'rgba(53, 53, 53, 0.42);'){}else{echo '#Desktop #Blogger-Cards {background-color: '.get_option('PureWin-BolggerColor').';}';}
        ?>
    </style>
</head>
<body>

