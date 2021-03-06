<?php
/*
	Template Name: Directory Page
*/

	get_header();
?>
   <main id="mainContent">
   		<section class="content directory page">
   			<?php custom_breadcrumbs(); ?>
   			<article class="activePost">
	   			<label for="dsearch" class="visuallyhidden" id="directorySearch">Directory Search: </label>
				        <input aria-labelledby="directorySearch" name="dsearch" type="text" class="text-input" id="filter" value="" placeholder="Search our staff..." />
				        <img id="directorySearchIcon" src="//globalassets.provo.edu/image/icons/search-dk.svg" alt="" />

			<?php
					if(have_posts()) :
						while (have_posts()) : the_post();?>
					   		<h1><?php the_title(); ?></h1>
					   		<article class="postgrid">
					   				<?php the_content(); ?>
					   		</article>
					   	<?php endwhile;
							else :
								echo '<p>No Content Found</p>';
					endif;
				?>
				<div class="clear"></div>
     		</article>
      	</section>
   		<?php
	   		$sidebar = get_field('sidebar');
	   		get_sidebar( $sidebar );
	   	?>
   </main>
<?php
	get_footer();
?>