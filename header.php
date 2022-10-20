<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("title"); ?></title>
	<?php wp_head(); ?>

</head>
<body>
<?php wp_body_open(); ?>
<header>
	<div id="header">
		<div class="container">
		<?php if(is_home()): ?>
			<h1 class="header__logo">
				<a href="<?php echo esc_url(home_url('')); ?>">
					<?php echo wp_get_attachment_image(60, 'full', false, ['class' => 'image--inline']); ?>
				</a>
			</h1><!-- /.header__logo -->
		<?php else: ?>
			<div class="header__logo">
				<a href="<?php echo esc_url(home_url('')); ?>">
					<?php echo wp_get_attachment_image(60, 'full', false, ['class' => 'image--inline']); ?>
				</a>
			</div><!-- /.header__logo -->
		<?php endif; ?>
		</div>
		<!-- /.container -->
		<a class="menu-trigger" href="/">
			<span></span>
			<span></span>
			<span></span>
		</a>
			
		<div id="gNavi">
		<?php
		    wp_nav_menu(array(
			'theme_location' => 'globalnavi',
			'container'      => 'nav',
			'depth'          => 0,
		    ) );
		?>
		</div><!-- /#gNavi -->

	</div><!-- /#header -->
	<?php if(!is_home()): ?>
	<div id="breadcrumbs">
		<div class="breadcrumbs container" typeof="BreadcrumbList" vocab="https://schema.org/">
		    <?php if(function_exists('bcn_display'))
		    {
			bcn_display();
		    }?>
		</div>
	</div><!-- /#breadcrumbs -->
	<?php endif; ?>
</header>
