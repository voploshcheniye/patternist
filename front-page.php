<?php get_header(); ?>

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
</div>

<section class="feature">

	<div class="container">

		<div class="header-serif">
			PATTERNIST
		</div>
		<h1>Something has shifted.</h1>

	</div>

</section>

<section class="medium">

	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
				<iframe src="https://player.vimeo.com/video/186375975" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-12 col-sm-12">
				<?php
				$original_query = $wp_query;
				$wp_query = null;
				$args=array('posts_per_page'=>1, 'tag' => 'intro-description');
				$wp_query = new WP_Query( $args );
				if ( have_posts() ) :
				    while (have_posts()) : the_post();
				        the_content();
				    endwhile;
				endif;
				$wp_query = null;
				$wp_query = $original_query;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>

</section>

<section class="feature-2">	

</section>

<a name="alloys">
	<section id="alloys" class="dark center">
		<div class="container">


			<?php
				$original_query = $wp_query;
				$wp_query = null;
				$args=array('posts_per_page'=>1, 'tag' => 'alloys-description');
				$wp_query = new WP_Query( $args );
				if ( have_posts() ) :
				    while (have_posts()) : the_post();
						echo '<h1>';
						the_title();
						echo '</h1>';
						if(has_post_thumbnail()){
							the_post_thumbnail();
						}
				        the_content();
				    endwhile;
				endif;
				$wp_query = null;
				$wp_query = $original_query;
				wp_reset_postdata();
			?>

		</div>
		
	</section>
</a>

<section class="feature-3">	

</section>

<a name="interface">
	<section class="blue">
		<div class="container">

			<div class="row">
				<div class="col-lg-12">
					<h1>Trade, craft and transform.</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-1 col-xs-1">
					<img src="/wp-content/themes/patternist-theme/images/game_UI_trading.png">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-1 col-xs-1">
					<img src="/wp-content/themes/patternist-theme/images/game_UI_crafting.png">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-1 col-xs-1">
					<img src="/wp-content/themes/patternist-theme/images/game_UI_building.png">
				</div>
			</div>

		</div>
	</section>
</a>

<section class="feature-5">
	<div class="container">
		<h1>WebGL Demo</h1>
	</div>
</section>

<a name="economics">
	<section>
		<div class="container">

			<img src="/wp-content/themes/patternist-theme/images/game-network-barter.jpg">

			<h1>Cryptoeconomica&#8212;Network Barter</h1>

		</div>
		
	</section>
</a>

<section class="feature-2">	

</section>

<a name="urban">
	<section class="medium">
		<div class="container">

			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">

			<?php
				$original_query = $wp_query;
				$wp_query = null;
				$args=array('posts_per_page'=>1, 'tag' => 'urban-description');
				$wp_query = new WP_Query( $args );
				if ( have_posts() ) :
				    while (have_posts()) : the_post();
						if(has_post_thumbnail()){
							the_post_thumbnail();
						}
				        the_content();
				    endwhile;
				endif;
				$wp_query = null;
				$wp_query = $original_query;
				wp_reset_postdata();
			?>

			</div>
			<div class="col-lg-5 col-md-5 col-sm-12 col-sm-12">
				<img src="/wp-content/themes/patternist-theme/images/axo.png">
			</div>

		</div>
		
	</section>
</a>

<section class="feature-4">	

</section>

<a name="backstory">
	<section class="purple">
		<div class="container">

			<h1>Narrative Backstory&#8212;Statement of the Mystery</h1>

		</div>
		
	</section>
</a>

<section class="feature-6">	

</section>

<section>
	<div class="container">
		<h1>
			Can You Imagine this landscape?
		</h1>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<img src="/wp-content/themes/patternist-theme/images/landscape-sketch-1.png">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<img src="/wp-content/themes/patternist-theme/images/landscape-sketch-2.png">
			</div>
		</div>
	</div>
</section>

<section class="feature-5">	
	<div class="container">
		<img src="/wp-content/themes/patternist-theme/images/landscape-topology.png">
	</div>
</section>

<section class="blue">
	<div class="container">

		<h1>Game Guide</h1>

	</div>
</section>

<?php get_footer(); ?>