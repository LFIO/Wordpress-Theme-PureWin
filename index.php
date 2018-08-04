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
get_header();
?>

    <main>

        <!--Main-->
        <div id="Main">

        </div>
        <!--Main-->

        <div id="Desktop">
            <!--Shortcut Mode-->
            <ul>
                <li class="Top-li">
                    <div class="Main-Card">
                        <div id="logo">
                            <img src="/wp-content/themes/PureWin/images/Start.png">
                        </div>
                        <div id="Title">
                            <a>PureWin</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="Main-Card">
                        <div id="logo">
                            <img src="/wp-content/themes/PureWin/images/WordPress.png">
                        </div>
                        <div id="Title">
                            <a>WordPress</a>
                        </div>
                    </div>
                </li>
            </ul>
            <!--Shortcut Mode-->
        </div>

        <div id="Taskbar-footer">
            <div class="Start">
                <i class="fab fa-windows"></i>
            </div>
            <div class="Search">
                <i class="fa fa-search"></i>
                <input id="SSR" type="text" placeholder="在这里输入你想要搜索的内容" value="">
                <i class="fas fa-greater-than" id="left"></i>
            </div>
            <div class="Menu">
                <a target="_blank" href="/wp-admin"><i class="far fa-window-restore"></i></a>
            </div>
            <div class="I">
                <i class="far fa-comment-alt"></i>
            </div>
            <div class="Time">
                <span id='i-Time'></span>
                <br>
                <span id='l-Time'></span>
            </div>
        </div>
    </main>

<?php get_footer(); ?>