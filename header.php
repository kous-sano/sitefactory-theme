<?php
$headImage = false;
$pageTitle = false;
$pageSlug = false;

$newsPage = false;
if (strpos($_SERVER['REQUEST_URI'], 'news') !== false) {
	$newsPage = true;
}

$parentPageName = false;

$defaultImageId = 86;

if (is_page()) {
	if ($post->post_parent > 0) {
		$postParent = get_post($post->post_parent);
		$pageTitle = $postParent->post_title;
		$pageSlug = $postParent->post_name;
		$parentPageName = $postParent->post_name;
		if (get_the_post_thumbnail_url($postParent->ID, 'full')) {
			$headImage = 'style="background-image: url(' . get_the_post_thumbnail_url($postParent->ID, 'full') . ');"';
		}
	} else {
		$pageTitle = get_the_title();
		$pageSlug = $post->post_name;
		if (get_the_post_thumbnail_url(get_the_id(), 'full')) {
			$headImage = 'style="background-image: url(' . get_the_post_thumbnail_url(get_the_id(), 'full') . ');"';
		}
	}
} else if (is_single() || is_category() || $newsPage) {
	if (wp_get_attachment_image_url($defaultImageId, 'full')) {
		$headImage = 'style="background-image: url(' . wp_get_attachment_image_url($defaultImageId, 'full') . ');"';
	}
	$newsCat = get_category_by_slug('news');
	$pageTitle = $newsCat->name;
	$pageSlug = $newsCat->slug;
} else if (is_404()) {
	$headImage = 'style="background-image: url(' . wp_get_attachment_image_url(87, 'full') . ');"';
}
if ($headImage === false) {
	$headImage = 'style="background-image: url(' . wp_get_attachment_image_url(87, 'full') . ');"';
}

if ($pageSlug != false && is_string($pageSlug)) {
	$pageSlug = str_replace('-', ' ', $pageSlug);
	$pageSlug = strtoupper($pageSlug);
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("title"); ?></title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<?php wp_head(); ?>
</head>

<body>
	<?php wp_body_open(); ?>
	<header>
		<div id="header">
			<h1 class="header__logo">
				<a href="<?php echo esc_url(home_url('')); ?>">
					<?php echo wp_get_attachment_image(5, 'full', false, ['class' => 'image--inline']); ?>
				</a>
			</h1>

			<input type="checkbox" id="gNavTrigger">
			<label for="gNavTrigger">
				<span></span>
				<span></span>
				<span></span>
			</label>

			<div id="gNav">
				<nav>
					<?php
					wp_nav_menu(array(
						'theme_location' => 'globalnavi',
						'depth'          => 0,
					));
					?>
					<div class="nav-contact">
						<a href="<?php echo esc_url(home_url('contact')); ?>"></a>
					</div>
				</nav>
			</div><!-- /#gNav -->
	</header>
	</div><!-- /#header -->
	<?php if (!is_home()) : ?>
		<?php if ($headImage) : ?>
			<div class="subpage__hero-img" <?php echo $headImage; ?>>
				<div class="hero-symbol">
					<?php if ($pageTitle) :
						if ($pageTitle === 'プライバシーポリシー') {
							$pageTitle = 'プライバシー<br>ポリシー';
						} else if($pageTitle === 'パートナー企業様'){
							$pageTitle = 'パートナー<br>企業様';
						}else if ($pageTitle === 'お問い合わせ') {
							$pageTitle = 'お問い<br>合わせ';
						}else if ($pageTitle === '採用エントリー') {
							$pageTitle = '採用情報';
						}
					?>
						<h2><?php echo $pageTitle; ?><span><?php echo $pageSlug; ?></span></h2>
					<?php endif; ?>
				</div>
			</div>
		<?php else : ?>
			<div class="subpage__hero-spacer"></div>
		<?php endif; ?>
		<?php //if (!is_404()) : 
		?>
		<div id="breadcrumbs">
			<?php if (function_exists('bcn_display')) {
				bcn_display();
			} ?>
		</div>
		<?php //endif; 
		?>
	<?php endif; ?>