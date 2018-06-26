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
            <div class="Cards" id="Blogger-Cards">
                <div id="Blogger-Card">
                    <div class="Head-PNG">
                        <img src="https://p.lfio.net/i/?i=30751423">
                    </div>
                    <div class="Head-Info">
                        <a id="Blogger-Des">从现在开始我所展望的未来在哪里</a>
                        <div id="Blogger-Name">LF112</div>
                    </div>
                    <div class="Tags-Box">
                        <div id="Tags">
                            <i class="fa fa-paper-plane"></i>
                            <a>没技术</a>
                        </div>
                        <div id="Tags">
                            <i class="fa fa-paper-plane"></i>
                            <a>没技术</a>
                        </div>
                    </div>
                    <div class="Contact-Me">
                        <div id="Split-Main">
                            <div class="Split"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="Taskbar-footer">
            <div class="Start">
                <img src="/wp-content/themes/PureWin/images/Start.png">
            </div>
            <div class="Search">
                <i class="fa fa-search"></i>
                <input id="SSR" type="text" placeholder="在这里输入你想要搜索的内容" value="">
                <i class="fas fa-greater-than" id="left"></i>
            </div>
            <div class="Menu">
                <i class="far fa-window-restore"></i>
            </div>
            <div class="I">
                <img src="https://p.lfio.net/i/?i=30751423">
            </div>
            <div class="Time">
                <span id='i-Time'></span>
                <br>
                <span id='l-Time'></span>
            </div>
        </div>
    </main>

<?php get_footer(); ?>