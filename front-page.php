<?php get_header(); ?>

<div class="clearfix">
	<!-- Row 1 -->
	<section class="feature">
	</section>

	<section class="feature">

		<div class="container">

			<div class="header-serif">
				PATTERNIST
			</div>
			<h1>Something has shifted.</h1>

		</div>
	</section>

	<section class="feature">
	</section>


	<!-- Row 2 -->
	<section class="feature-2">	
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


	<!-- Row 3 -->
	<section class="purple">
		<div class="container">
		 	<p>
		 	This is a little information about the game for public clarity. Patternist out of world game description. In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation. Replacing meaningful content with placeholder text allows designers to design the form of the content before the content itself has been produced.
		 	</p>
		 	<p>
		 	Folklore is the body of expressive culture shared by a particular group of people; it encompasses the traditions common to that culture, subculture or group. These include oral traditions such as tales, proverbs and jokes. They include material culture, ranging from traditional building styles to handmade toys common to the group. Folklore also includes customary lore.
		 	</p>
		</div>
	</section>

	<section class="feature-2">	
	</section>

	<section class="purple">
		<div class="container">
		 	<p>
		 	This is a little information about the game for public clarity. Patternist out of world game description. In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation. Replacing meaningful content with placeholder text allows designers to design the form of the content before the content itself has been produced.
		 	</p>
		 	<p>
		 	Folklore is the body of expressive culture shared by a particular group of people; it encompasses the traditions common to that culture, subculture or group. These include oral traditions such as tales, proverbs and jokes. They include material culture, ranging from traditional building styles to handmade toys common to the group. Folklore also includes customary lore.
		 	</p>
		</div>
	</section>

	<!-- Row 4 -->
	<section class="feature-3">	
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


	<!-- Row 5 -->
	<section class="purple">
		<div class="container">
		 	<p>
		 	This is a little information about the game for public clarity. Patternist out of world game description. In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation. Replacing meaningful content with placeholder text allows designers to design the form of the content before the content itself has been produced.
		 	</p>
		 	<p>
		 	Folklore is the body of expressive culture shared by a particular group of people; it encompasses the traditions common to that culture, subculture or group. These include oral traditions such as tales, proverbs and jokes. They include material culture, ranging from traditional building styles to handmade toys common to the group. Folklore also includes customary lore.
		 	</p>
		</div>
	</section>

	<section class="feature-3">	
	</section>

	<section class="purple">
		<div class="container">
		 	<p>
		 	This is a little information about the game for public clarity. Patternist out of world game description. In publishing and graphic design, lorem ipsum is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation. Replacing meaningful content with placeholder text allows designers to design the form of the content before the content itself has been produced.
		 	</p>
		 	<p>
		 	Folklore is the body of expressive culture shared by a particular group of people; it encompasses the traditions common to that culture, subculture or group. These include oral traditions such as tales, proverbs and jokes. They include material culture, ranging from traditional building styles to handmade toys common to the group. Folklore also includes customary lore.
		 	</p>
		</div>
	</section>


	<!-- Row 6 -->
	<section class="feature-4">	
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

	<section class="feature-4">	
	</section>


	<!-- Row 6 -->
	<section class="purple">
		<div class="container">
		 	<h1>
		 		Placeholder
		 	</h1>
		</div>
	</section>

	<section class="feature-5">
		<div class="container">
			<h1>WebGL Demo</h1>
		</div>
	</section>

	<section class="purple">
		<div class="container">
		 	<h1>
		 		Placeholder
		 	</h1>
		</div>
	</section>


	<!-- Row 7 -->
	<section class="feature-5">
	</section>

	<a name="economics">
		<section>
			<div class="container">

				<img src="/wp-content/themes/patternist-theme/images/game-network-barter.jpg">

				<h1>Cryptoeconomica&#8212;Network Barter</h1>

			</div>
			
		</section>
	</a>

	<section class="feature-5">
	</section>


	<!-- Row 8 -->
	<section class="feature-6">
	</section>

	<section class="feature-6">
	</section>

	<section class="feature-6">
	</section>


	<!-- Row 9 -->
	<section class="feature">
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

	<section class="feature">
	</section>


	<!-- Row 10 -->
	<section class="feature-2">
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

	<section class="feature-2">
	</section>


	<!-- Row 11 -->
	<section class="feature-5">	
	</section>

	<section class="feature-5">	
		<div class="container">
			<img src="/wp-content/themes/patternist-theme/images/landscape-topology.png">
		</div>
	</section>

	<section class="feature-5">	
	</section>


	<!-- Row 12 -->
	<section class="feature-3">
	</section>
	<a name="backstory">
		<section class="purple">
			<div class="container">

				<h1>Narrative Backstory&#8212;Statement of the Mystery</h1>

			</div>
			
		</section>
	</a>
	<section class="feature-3">
	</section>


	<!-- Row 13 -->
	<section class="purple">
		<div class="container">
		 	<h1>
		 		Placeholder
		 	</h1>
		</div>
	</section>
	<section class="blue">
		<div class="container">

			<h1>Game Guide</h1>

		</div>
	</section>
	<section class="purple">
		<div class="container">
		 	<h1>
		 		Placeholder
		 	</h1>
		</div>
	</section>




</div>

<?php get_footer(); ?>