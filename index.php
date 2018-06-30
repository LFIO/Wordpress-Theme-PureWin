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
            <!--Blogger Card-->
            <div class="Cards" id="Blogger-Cards">
                <div id="Blogger-Card">
                    <div class="Head-PNG">
                        <img src="<?php if (get_option('PureWin-BloggerHead') == ""){echo "https://p.lfio.net/i/?i=30751423";}else{echo get_option('PureWin-BloggerHead');}?>">
                    </div>
                    <div class="Head-Info">
                        <a id="Blogger-Des"><?php if (get_option('PureWin-BloggerToSay') == ""){echo "如果现在不开始想，那以后哪有时间做";}else{echo get_option('PureWin-BloggerToSay');}?></a>
                        <div id="Blogger-Name"><?php if (get_option('PureWin-BloggerName') == ""){echo "PureWin";}else{echo get_option('PureWin-BloggerName');}?></div>
                    </div>
                    <div class="Tags-Box">
                        <div id="Tags">
                            <i class="<?php if (get_option('PureWin-BloggerTags1-icon') == ""){echo "fa fa-paper-plane";}{echo get_option('PureWin-BloggerTags1-icon');} ?>"></i>
                            <a><?php if (get_option('PureWin-BloggerTags1') == ""){echo "肥宅快乐";}{echo get_option('PureWin-BloggerTags1');} ?></a>
                        </div>
                        <div id="Tags">
                            <i class="<?php if (get_option('PureWin-BloggerTags2-icon') == ""){echo "fa fa-fish";}{echo get_option('PureWin-BloggerTags2-icon');} ?>"></i>
                            <a><?php if (get_option('PureWin-BloggerTags2') == ""){echo "咸鱼干";}{echo get_option('PureWin-BloggerTags2');} ?></a>
                        </div>
                    </div>
                    <div class="Contact-Me">
                        <div id="Split-Main">
                            <div class="Split"></div>
                        </div>
                    </div>
                </div>

                <div id="Article-Main">
                    <div class="Article-Main">
                        <ul>
                        <?php if ( have_posts() ) { ?>
                            <?php while ( have_posts() ) { the_post(); global $post; ?>
                                <?php if( $post->post_type== 'post' ) { ?>
                            <li>
                                <div id="Article-Box">
                                    <div class="Article-info">
                                        <div id="Art-Info">
                                            <span><i class="fa fa-clock"></i>&nbsp;<?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . '前'; ?></span>&nbsp;-&nbsp;
                                            <span><i class="fa fa-eye"></i>&nbsp;<?php echo getPostViews(get_the_ID()); ?></span>&nbsp;-&nbsp;
                                            <span><i class="fa fa-comment-alt"></i>&nbsp;<?php comments_popup_link('0', '1', '%', '', '评论已关闭'); ?></span>&nbsp;-&nbsp;
                                            <span><i class="fa fa-tag"></i>&nbsp;<?php the_tags('', ', ', ''); ?></span>&nbsp;-&nbsp;
                                            <span><i class="fa fa-clone"></i>&nbsp;<?php the_category( ', ' ); ?></span>&nbsp;&nbsp;/&nbsp;&nbsp;
                                            <span><?php bloginfo('name'); ?></span>
                                        </div>
                                        <div id="Article-Name">
                                            <h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                                        </div>
                                        <div id="Article-FFF"></div>
                                        <div id="Article-Content">
                                            <?php if ( has_post_thumbnail() ) {the_post_thumbnail();}the_excerpt(); ?>
                                        </div>
                                    </div>
                                    <div class="Article-Footer">
                                        <span><a href="<?php the_permalink(); ?>"><i class="fa fa-caret-down"></i> 阅读全文</a></span>
                                        <div id="Article-Author">
                                            <h3><?php echo the_author_posts_link(); ?></h3>
                                            <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                            <?php } ?>
                                <?php } ?>
                        </ul>
                    </div>
                </div>

            </div>
            <!--Blogger Card-->
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
                <a target="_blank" href="/wp-admin"><i class="far fa-window-restore"></i></a>
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