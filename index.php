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
            <div class="Article-Card">
                <div id="AC-Menu">
                    <article>
                        <div class="AC-Menu_BackGroup"></div>
                        <div class="AC-Menu_Main">
                            <div id="AC-MM_Title"><a><?php bloginfo('name');?></a></div>
                            <div id="AC-MM_Folding"><a href="javascript:;"><i class="iconfont icon-caidan"></i></a></div>

                            <div id="AC-MM_Main">
                                <ul>
                                    <a href="/" style="text-decoration: none;">
                                        <li>
                                            <div class="AC-MM_M-Single AC-MM_M-Spacing">
                                                <div class="AC-MM_M-Single_i">
                                                    <i class="iconfont icon-shouye"></i>
                                                </div>
                                                <div class="AC-MM_M-Single_Title">
                                                    <h2>首页</h2>
                                                </div>
                                            </div>
                                        </li>
                                    </a>
                                    <a href="javascript:;" style="text-decoration: none;">
                                        <li>
                                            <div class="AC-MM_M-Single">
                                                <div class="AC-MM_M-Single_i">
                                                    <i class="iconfont icon-leimupinleifenleileibie"></i>
                                                </div>
                                                <div class="AC-MM_M-Single_Title">
                                                    <h2>分类</h2>
                                                </div>
                                            </div>
                                        </li>
                                    </a>
                                    <a href="javascript:;" style="text-decoration: none;">
                                        <li>
                                            <div class="AC-MM_M-Selectivity">
                                                <div class="AC-MM_M-Selectivity_i">
                                                    <div class="AC-MM_M-Selectivity_is"></div>
                                                </div>
                                                <div class="AC-MM_M-Selectivity_Text">
                                                    <span>PureWin</span>
                                                    <p>主题制作中</p>
                                                </div>
                                            </div>
                                        </li>
                                    </a>
                                    <a href="javascript:;" style="text-decoration: none;">
                                        <li>
                                            <div class="AC-MM_M-Selectivity">
                                                <div class="AC-MM_M-Selectivity_i"></div>
                                                <div class="AC-MM_M-Selectivity_Text">
                                                    <span>LF112</span>
                                                    <p>lf@lf112.net</p>
                                                </div>
                                            </div>
                                        </li>
                                    </a>

                                </ul>
                            </div>

                        </div>
                        <div class="AC-Menu_Footer">
                            <div class="AC-MF_Button AC-MF_is">
                                <a href="javascript:;"><i class="iconfont icon-shouye"></i></a>
                            </div>
                            <div class="AC-MF_Button">
                                <a href="javascript:;"><i class="iconfont icon-shi"></i></a>
                            </div>
                        </div>

                    </article>
                </div>
                <div id="AC-Article_list">
                    <div class="AC-AL_Title"></div>
                    <div class="AC-AL_Header">
                        <div class="AC-AL_H-Search">
                            <i class="iconfont icon-iconsousuo"></i>
                            <input type="text" placeholder="搜索" value="">
                        </div>
                        <a href="javascript:;"><i class="iconfont icon-shuaxin"></i></a>
                        <a href="javascript:;"><i class="iconfont icon-shi"></i></a>
                    </div>
                    <div class="AC-AL_Main">
                        <div class="AC-AL_M-Top">
                            <h2>文章</h2>

                        </div>
                        <div class="AC-AL_M-Main">
                            <ul>
                                <li>
                                    <div class="AC-AL_M-M_Head"><p>所有文章</p></div>
                                </li>
<?php if ( have_posts() ) { ?>
    <?php while ( have_posts() ) { the_post(); global $post; ?>
        <?php if( $post->post_type== 'post' ) { ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>" style="text-decoration: none;">
                                        <div class="AC-AL_M-M_Main">
                                            <div class="AC-AL_M-M_M-Header">
                                                <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
                                            </div>
                                            <div class="AC-AL_M-M_M-Text">
                                                <p id="AC-AL_M-M_M-T_Name"><?php echo the_author_posts_link(); ?></p>
                                                <span id="AC-AL_M-M_M-T_Title"><?php the_title(); ?></span>
                                                <?php if ( has_post_thumbnail() ) {the_post_thumbnail();}the_excerpt(); ?>
                                            </div>
                                            <div class="AC-AL_M-M_footer">
                                                <p><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . '前'; ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
        <?php } ?>
    <?php } ?>
<?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="AC-Article_Main">

                </div>
            </div>
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
                <i class="iconfont icon-win"></i>
            </div>
            <div class="Search">
                <i class="iconfont icon-iconsousuo"></i>
                <input id="SSR" type="text" placeholder="在这里输入你想要搜索的内容" value="">
                <i class="iconfont icon-xiangyou3-copy" id="left"></i>
            </div>
            <div class="Menu">
                <a target="_blank" href="/wp-admin"><i class="iconfont icon-renwu"></i></a>
            </div>
            <div class="I">
                <i class="iconfont icon-pinglun00"></i>
            </div>
            <div class="Time">
                <span id='i-Time'></span>
                <br>
                <span id='l-Time'></span>
            </div>
        </div>
    </main>

<?php get_footer(); ?>