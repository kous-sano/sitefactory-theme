<?php

/**
 * Add image size
 */
/**
 * Proper way to enqueue scripts and styles
 */
function wpdocs_theme_scripts()
{
    wp_enqueue_style('style-base', get_stylesheet_uri());
    wp_enqueue_style('style-common', get_template_directory_uri() . '/css/add/common.css');

    wp_enqueue_script('script-jquery', '//code.jquery.com/jquery-1.12.0.min.js');
    //wp_enqueue_script('script-top', get_template_directory_uri() . '/js/jquery.inview.min.js');
    wp_enqueue_script('script-common', get_template_directory_uri() . '/js/common.js');

    if (is_home()) {
        wp_enqueue_style('style-home', get_template_directory_uri() . '/css/add/home.css');
        wp_enqueue_style('style-slick', get_template_directory_uri() . '/js/slick/slick.css');
        wp_enqueue_style('style-slick-theme', get_template_directory_uri() . '/js/slick/slick-theme.css');
        wp_enqueue_script('script-jquery-migrate', '//code.jquery.com/jquery-migrate-1.2.1.min.js');
        wp_enqueue_script('script-slick', get_template_directory_uri() . '/js/slick/slick.min.js');
        wp_enqueue_script('script-top', get_template_directory_uri() . '/js/top.js');
    }

    if (is_page() || is_single() || is_archive() || is_tax() || is_404()) {
        wp_enqueue_style('style-page', get_template_directory_uri() . '/css/add/page.css');
    }


    if (is_page("contact") || is_page("entry")) {
        wp_enqueue_script(
            'script-jpostal',
            '//jpostal-1006.appspot.com/jquery.jpostal.js',
            array(),
            '',
            true
        );
        wp_enqueue_script('script-contact', get_template_directory_uri() . '/js/contact.js', array(), '', true);
        wp_enqueue_script('script-kana', get_template_directory_uri() . '/js/jquery.autoKana.js');
    }

    if (!wp_is_mobile()) {
        wp_enqueue_style('style-pc', get_template_directory_uri() . '/css/add/pc.css');
    }
    wp_enqueue_style('style-customize', get_template_directory_uri() . '/css/customize.css');
}
add_action('wp_enqueue_scripts', 'wpdocs_theme_scripts');


//wp_headに追加
function adds_head()
{
    echo "
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n
    <meta name=\"format-detection\" content=\"telephone=no\">\n
    <!--[if lte IE 8]>\n
        <link rel=\"stylesheet\" href=\"https://unpkg.com/purecss@1.0.0/build/grids-responsive-old-ie-min.css\">\n
    <![endif]-->\n
    <!--[if gt IE 8]><!-->\n
        <link rel=\"stylesheet\" href=\"https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css\">\n
    <!--<![endif]-->\n

";
}
add_action('wp_head', 'adds_head');

/******************************************
ショートコード
 *******************************************/
function return_template_path($arg)
{
    $url = get_bloginfo("template_url");
    return $url;
}

add_shortcode('template_url', 'return_template_path');


/******************************************
authorリダイレクト禁止
 *******************************************/
function author_archive_redirect()
{
    if (is_author()) {
        wp_redirect(home_url(), 301);
        exit;
    }
}
add_action('template_redirect', 'author_archive_redirect');

/********************************************
カスタムメニュー
 *******************************************/

if (!function_exists('gnavi')) :
    function gnavi()
    {
        register_nav_menus(array(
            'globalnavi' => 'グローバルナビ',
            'footernavi' => 'フッターナビ'
        ));
    }
endif;
add_action('after_setup_theme', 'gnavi');

add_filter('walker_nav_menu_start_el', 'description_in_nav_menu', 10, 4);

function description_in_nav_menu($item_output, $item)
{
    return preg_replace('/(<a.*?>[^<]*?)</', '$1' . "<span>{$item->attr_title}</span><", $item_output);
}

/******************************************
TinyMCE　自動設定無効
 *******************************************/
function tinymce_custom($settings)
{

    $invalid_style = array(
        'table' => 'width height',
        'th' => 'width height',
        'td' => 'width height'
    );
    $settings['invalid_styles'] = json_encode($invalid_style);
    $settings['table_resize_bars'] = false;
    $settings['object_resizing'] = "img";

    return $settings;
}
add_filter('tiny_mce_before_init', 'tinymce_custom', 0);

/******************************************
親スラッグ判定
 *******************************************/

function is_parent_slug()
{
    global $post;
    if ($post->post_parent) {
        $post_data = get_post($post->post_parent);
        return $post_data->post_name;
    }
}

/********************************************************

アイキャッチ

 *********************************************************/

add_theme_support('post-thumbnails');

/********************************************************

親スラッグから子の一覧ナビを生成

 *********************************************************/

function create_subpage_list($val)
{

    $page_ID = get_page_by_path($val);

    $children = wp_list_pages(array(
        'title_li' => '',
        'child_of' => $page_ID->ID,
        'sort_column'  => 'menu_order',
        'depth' => 1,
        'echo' => '0'
    ));

    if ($children) {
        $html = '<ul>';
        $html .= $children;
        $html .= '</ul>';
    }

    return $html;
}

/********************************************************

スラッグから、タイトル表示に適切な形式に変換する
（今回はアッパーケース）

 *********************************************************/
function slug2Title($slug)
{
    $slugs = [];
    if (strpos($slug, '-') >= 1) {
        $slugs = explode('-', $slug);
    } else {
        $slugs = [$slug];
    }
    foreach ($slugs as $key => $value) {
        $slugs[$key] = strtoupper($value);
    }
    return implode(' ', $slugs);
}


/********************************************************

archive.php　を、「news」スラッグで表示
（この関数追加後、「パーマリンク」画面でそのまま「保存」を押すと反映される）

 *********************************************************/
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news';
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


/********************************************************

「投稿」の名称を「お知らせ」に変更

 *********************************************************/
function Change_menulabel()
{
    global $menu;
    global $submenu;
    $name = 'お知らせ';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name . '一覧';
    $submenu['edit.php'][10][0] = '新しい' . $name;
}
function Change_objectlabel()
{
    global $wp_post_types;
    $name = 'お知らせ';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = $name . 'の新規追加';
    $labels->edit_item = $name . 'の編集';
    $labels->new_item = '新規' . $name;
    $labels->view_item = $name . 'を表示';
    $labels->search_items = $name . 'を検索';
    $labels->not_found = $name . 'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
}
add_action('init', 'Change_objectlabel');
add_action('admin_menu', 'Change_menulabel');

function login_logo(){
    echo '<style type="text/css">#login h1 a{background-size: contain!important;background-position: center!important;}</style>';
}
add_action('login_head', 'login_logo');