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

function PureWin_Add_menus() {
    add_menu_page('PureWin 设置', 'PureWin 设置', 'manage_options', __FILE__, 'PureWin_Setting');
}
//add_action钩子的回调函数"PureWin_Add_menus"

add_action('admin_menu', 'PureWin_Add_menus');
// 通过add_action调用PureWin_Add_menus函数

function PureWin_Setting(){ ?>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/config.css?ver=<?php echo wp_get_theme()->get('Version'); ?>">
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>

    <?php
        //保存

        if ($_POST['PureWin_form_SetUp-BackGround']=='保存') {
            PureWin_up_or_del('PureWin-BackGround');
            if (get_option('PureWin-BackGround') == ""  || get_option('PureWin-BackGround') == '/wp-content/themes/PureWin/images/background.png'){}else{
                if (get_option('PureWin-BackGround') == ""  || get_option('PureWin-BackGround') == '#0B0B0B'){update_option('PureWin-StatusArticle', 'rgba(11, 11, 11, 0.51);');}
                if (get_option('PureWin-StatusEdit') == ""  || get_option('PureWin-StatusEdit') == '#333333'){update_option('PureWin-StatusEdit', 'rgba(11, 11, 11, 0.51);');}
            }
            //保存背景
            echo '<script>alert("已保存背景");</script>';
        }
        if ($_POST['PureWin_form_SetUp-StatusBar']=='保存'){
            PureWin_up_or_del('PureWin-StatusArticle');
            //保存状态栏颜色
            PureWin_up_or_del('PureWin-StatusEdit');
            //保存编辑框颜色
            PureWin_up_or_del('PureWin-BolggerColor');
            //保存博主卡颜色

            echo '<script>alert("已保存状态栏调整");</script>';
        }
        if ($_POST['PureWin_form_SetUp-BloggerInfo']=='保存'){
            PureWin_up_or_del('PureWin-BloggerHead');
            //保存头像
            PureWin_up_or_del('PureWin-BloggerName');
            //保存博主名字
            PureWin_up_or_del('PureWin-BloggerToSay');
            //保存博主个性签名
            PureWin_up_or_del('PureWin-BloggerTags1');
            //保存个性签名1
            PureWin_up_or_del('PureWin-BloggerTags1-icon');
            //保存个性签名1的图标
            PureWin_up_or_del('PureWin-BloggerTags2');
            //保存个性签名2
            PureWin_up_or_del('PureWin-BloggerTags2-icon');
            //保存个性签名2的图标

            echo '<script>alert("已保存博主信息");</script>';
        }
    ?>
    <!--Main-->
    <main>
        <div class="Main-Title">
            <span>PureWin 设置</span>
        </div>
        <div class="Main-Subtitle">
            <span>在这里配置您的 WinPure 主题</span>
        </div>
        <div class="Main-Box">
            <li goto="#Setting_Style">
                <a href="javascript:;">
                    <div id="Mods-Cards">
                        <div class="Cards-icon">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <div class="Cards-Text">
                            <span id="Cards-Title">系统</span>
                            <span id="Cards-Subtitle">样式设置</span>
                        </div>
                    </div>
                </a>
            </li>
            <li goto="#Basic_Settings">
                <a href="javascript:;">
                    <div id="Mods-Cards">
                        <div class="Cards-icon">
                            <i class="fa fa-cog"></i>
                        </div>
                        <div class="Cards-Text">
                            <span id="Cards-Title">设置</span>
                            <span id="Cards-Subtitle">基础设置</span>
                        </div>
                    </div>
                </a>
            </li>

        </div>
    </main>
    <!--Main-->


    <div class="Do-Card">
        <!--样式设置-->
        <section id="Setting_Style">

            <div class="Face-Page">
                <div id="Side-Bar">
                    <div class="Side-Bar-Top">
                        <div id="Back-Box" class="Do-Home">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                        <span>样式设置</span>
                    </div>
                </div>
                <div class="Back-Bottom Do-Home">
                    <div id="Back-Box">
                        <i class="fa fa-home"></i>
                    </div>
                    <span>首页</span>
                </div>
                <div class="PureWin-Title">
                    <span>感谢您使用 PureWin V<?php echo wp_get_theme()->get('Version'); ?></span>
                </div>
                <div class="Face-Menu">
                    <span>样式</span>
                    <ul>
                        <li goto="#PureWin-BackGround">
                            <div id="Icon-Box">
                                <i class="fa fa-image"></i>
                            </div>
                            <span>桌面壁纸</span>
                        </li>
                        <li goto="#PureWin-StatusBar">
                            <div id="Icon-Box">
                                <i class="fa fa-signal"></i>
                            </div>
                            <span>状态栏调整</span>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="Face-Menu-Main">
                <!--背景图更换-->
                <section id="PureWin-BackGround" class="active">
                    <div class="BackGround-PNG">
                        <img src="<?php if (get_option('PureWin-BackGround') == ""){echo "/wp-content/themes/PureWin/images/background.png";}{echo get_option('PureWin-BackGround');} ?>">
                    </div>
                    <div class="SetUp-Box">
                        <form action="" method="post" id="PureWin_form_SetUp-BackGround">
                            <input type="text" name="PureWin-BackGround" value="<?php if (get_option('PureWin-BackGround') == ""){echo "/wp-content/themes/PureWin/images/background.png";}{echo get_option('PureWin-BackGround');} ?>">
                            <input type="submit" class="button-primary SetUp-Buttom" name="PureWin_form_SetUp-BackGround" value="保存">
                        </form>
                    </div>
                </section>
                <!--背景图更换-->
                <!--状态栏调整-->
                <section id="PureWin-StatusBar">
                    <div class="StatusBar-Box">
                        <form action="" method="post" id="PureWin_form_SetUp-StatusBar">
                            <div>
                                <span>状态条颜色  <a id="StatusBar-Color" style="font-size: 14px; background-color: <?php if (get_option('PureWin-StatusArticle') == ""){echo "#0B0B0B";}{echo get_option('PureWin-StatusArticle');} ?>;color: <?php if (get_option('PureWin-StatusArticle') == ""){echo "#0B0B0B";}{echo get_option('PureWin-StatusArticle');} ?>;">__</a></span>
                                <input type="text" name="PureWin-StatusArticle" value="<?php if (get_option('PureWin-StatusArticle') == ""){echo "#0B0B0B";}{echo get_option('PureWin-StatusArticle');} ?>">
                            </div>
                            <div>
                                <span>编辑框颜色  <a id="StatusBar-Color" style="font-size: 14px; background-color: <?php if (get_option('PureWin-StatusEdit') == ""){echo "#333333";}{echo get_option('PureWin-StatusEdit');} ?>;color: <?php if (get_option('PureWin-StatusEdit') == ""){echo "#333333";}{echo get_option('PureWin-StatusEdit');} ?>;">__</a></span>
                                <input type="text" name="PureWin-StatusEdit" value="<?php if (get_option('PureWin-StatusEdit') == ""){echo "#333333";}{echo get_option('PureWin-StatusEdit');} ?>">
                            </div>
                            <div>
                                <span>博主卡颜色  <a id="StatusBar-Color" style="font-size: 14px; background-color: <?php if (get_option('PureWin-BolggerColor') == ""){echo "rgba(53, 53, 53, 0.42);";}{echo get_option('PureWin-BolggerColor');} ?>;color: <?php if (get_option('PureWin-BolggerColor') == ""){echo "rgba(53, 53, 53, 0.42);";}{echo get_option('PureWin-BolggerColor');} ?>;">__</a></span>
                                <input type="text" name="PureWin-BolggerColor" value="<?php if (get_option('PureWin-BolggerColor') == ""){echo "rgba(53, 53, 53, 0.42);";}{echo get_option('PureWin-BolggerColor');} ?>">
                            </div>
                            <div>
                                <input type="submit" class="button-primary" name="PureWin_form_SetUp-StatusBar" value="保存">
                            </div>
                        </form>
                    </div>
                </section>
                <!--状态栏调整-->
            </div>

        </section>
        <!--样式设置-->

        <!--基础设置-->
        <section id="Basic_Settings">

            <div class="Face-Page">
                <div id="Side-Bar">
                    <div class="Side-Bar-Top">
                        <div id="Back-Box" class="Do-Home">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                        <span>基础设置</span>
                    </div>
                </div>
                <div class="Back-Bottom Do-Home">
                    <div id="Back-Box">
                        <i class="fa fa-home"></i>
                    </div>
                    <span>首页</span>
                </div>
                <div class="PureWin-Title">
                    <span>感谢您使用 PureWin V<?php echo wp_get_theme()->get('Version'); ?></span>
                </div>
                <div class="Face-Menu">
                    <span>基础</span>
                    <ul>
                        <li goto="#PureWin-BloggerInfo">
                            <div id="Icon-Box">
                                <i class="fa fa-address-card"></i>
                            </div>
                            <span>博主信息</span>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="Face-Menu-Main">
                <!--博主信息更换-->
                <section id="PureWin-BloggerInfo" class="active">
                    <div class="BloggerInfo-Box">
                        <img src="<?php if (get_option('PureWin-BloggerHead') == ""){echo "https://p.lfio.net/i/?i=30751423";}{echo get_option('PureWin-BloggerHead');}?>">
                    </div>
                    <form action="" method="post" id="PureWin_form_SetUp-BloggerInfo">
                        <div>
                            <span>博主头像 :  </span>
                            <input type="text" name="PureWin-BloggerHead" value="<?php if (get_option('PureWin-BloggerHead') == ""){echo "https://p.lfio.net/i/?i=30751423";}{echo get_option('PureWin-BloggerHead');} ?>">
                        </div>
                        <div>
                            <span>博主名称 :  </span>
                            <input type="text" name="PureWin-BloggerName" value="<?php if (get_option('PureWin-BloggerName') == ""){echo "PureWin";}{echo get_option('PureWin-BloggerName');} ?>">
                        </div>
                        <div>
                            <span>个性签名 :  </span>
                            <input type="text" name="PureWin-BloggerToSay" value="<?php if (get_option('PureWin-BloggerToSay') == ""){echo "如果现在不开始想，那以后哪有时间做";}{echo get_option('PureWin-BloggerToSay');} ?>">
                        </div>
                        <div>
                            <span>个性标签 : </span>
                            <input type="text" name="PureWin-BloggerTags1" value="<?php if (get_option('PureWin-BloggerTags1') == ""){echo "肥宅快乐";}{echo get_option('PureWin-BloggerTags1');} ?>">
                        </div>
                        <div>
                            <span>小图标<i class="<?php if (get_option('PureWin-BloggerTags1-icon') == ""){echo "fa fa-paper-plane";}{echo get_option('PureWin-BloggerTags1-icon');} ?>"></i> : </span>
                            <input type="text" name="PureWin-BloggerTags1-icon" value="<?php if (get_option('PureWin-BloggerTags1-icon') == ""){echo "fa fa-paper-plane";}{echo get_option('PureWin-BloggerTags1-icon');} ?>">
                        </div>
                        <div>
                        <span>个性标签 : </span>
                        <input type="text" name="PureWin-BloggerTags2" value="<?php if (get_option('PureWin-BloggerTags2') == ""){echo "咸鱼干";}{echo get_option('PureWin-BloggerTags2');} ?>">
                        </div>
                        <div>
                            <span>小图标<i class="<?php if (get_option('PureWin-BloggerTags2-icon') == ""){echo "fa fa-fish";}{echo get_option('PureWin-BloggerTags2-icon');} ?>"></i> : </span>
                            <input type="text" name="PureWin-BloggerTags2-icon" value="<?php if (get_option('PureWin-BloggerTags2-icon') == ""){echo "fa fa-fish";}{echo get_option('PureWin-BloggerTags2-icon');} ?>">
                        </div>
                        <div>
                            <input type="submit" class="button-primary SetUp-Buttom" name="PureWin_form_SetUp-BloggerInfo" value="保存">
                        </div>
                    </form>
                </section>
                <!--博主信息更换-->

            </div>

        </section>
        <!--基础设置-->

    </div>

        <script>
            //样式设置
            $('.Face-Page .Face-Menu ul li').click(function() {
                target = $(this).attr('goto');
                switchTo(target);
            });

            function switchTo(target) {
                $('.Face-Menu-Main section').each(function() {
                    $(this).removeClass('active')
                });
                $(target).addClass('active')
            }
            //样式设置
            $(' main .Main-Box li').click(function() {
                $('main').addClass('Hide');
                target = $(this).attr('goto');
                switchTo_1(target);
            });

            function switchTo_1(target) {
                $('.Do-Card section').each(function() {
                    $(this).removeClass('active')
                });
                $(target).addClass('active')
            }

            $('.Do-Home').click(function () {
                $(".Do-Card section").removeClass('active')
                $('main').removeClass('Hide');
            });
        </script>
    <!--Main-->

<?php }
//后台配置页

function PureWin_up_or_del($op) {
    update_option($op, $_POST[$op]);
    //若值为空，则删除这行数据
    if( empty($_POST[$op]) ) delete_option($op);
}

function PureWin_up($op) {
    update_option($op, $_POST[$op]);
}

?>