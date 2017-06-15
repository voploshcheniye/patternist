<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- User Interface -->
<div class="ui">
	<div class="dials hidden-md hidden-sm hidden-xs">
		<a href="#alloys">
			<img class="dial-ring" src="/wp-content/themes/patternist-theme/images/dial-ring-rg.png">
		</a>
		<a href="#interface">
			<img class="dial-ring" src="/wp-content/themes/patternist-theme/images/dial-ring-rg.png">
		</a>
		<a href="#economics">
			<img class="dial-ring" src="/wp-content/themes/patternist-theme/images/dial-ring-rg.png">
		</a>
		<a href="#urban">
			<img class="dial-ring" src="/wp-content/themes/patternist-theme/images/dial-ring-rg.png">
		</a>
	</div>

	<div class="dials hidden-lg">
		<a href="#alloys">
			<img class="dial-ring" src="/wp-content/themes/patternist-theme/images/dial-ring-sm.png">
		</a>
		<a href="#interface">
			<img class="dial-ring" src="/wp-content/themes/patternist-theme/images/dial-ring-sm.png">
		</a>
		<a href="#economics">
			<img class="dial-ring" src="/wp-content/themes/patternist-theme/images/dial-ring-sm.png">
		</a>
		<a href="#urban">
			<img class="dial-ring" src="/wp-content/themes/patternist-theme/images/dial-ring-sm.png">
		</a>
	</div>

	<div class="hidden-sm hidden-xs">
		<img id="ui-top" src="/wp-content/themes/patternist-theme/images/grid_top.png">
		<img id="ui-right" src="/wp-content/themes/patternist-theme/images/grid_right.png">
		<img id="ui-left" src="/wp-content/themes/patternist-theme/images/grid_left.png">
		<img id="ui-toggle" src="/wp-content/themes/patternist-theme/images/grid_toggle.png">
		<div id="language-toggle">
				<?php if ( function_exists( 'the_msls' ) ) the_msls(); ?>
		</div>
	</div>

	<div class="hidden-lg hidden-md">
		<img id="ui-top" src="/wp-content/themes/patternist-theme/images/grid_top_sm.png">
		<img id="ui-right" src="/wp-content/themes/patternist-theme/images/grid_right_sm.png">
		<img id="ui-left" src="/wp-content/themes/patternist-theme/images/grid_left_sm.png">
		<img id="ui-toggle" src="/wp-content/themes/patternist-theme/images/grid_toggle_sm.png">
	</div>

	<div class="hidden-md hidden-sm hidden-xs">
		<img id="ui-wasd" src="/wp-content/themes/patternist-theme/images/ui_wasd.png">
	</div>

	<div class="hidden-lg">
		<img id="ui-wasd" src="/wp-content/themes/patternist-theme/images/ui_wasd_sm.png">
	</div>

	<div class="chat">
		<span id="chat-text">
		</span>
	</div>



</div>
