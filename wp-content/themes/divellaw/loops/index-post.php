<?php
/*
The Index Post (or excerpt)
===========================
Used by index.php, category.php and author.php
*/
?>

	<article class="mb-5" role="article" id="post_<?php the_ID()?>" <?php post_class(); ?> >
		<main>
		<a href="<?php the_permalink(); ?>">
            <h3>
				
					<?php the_title()?>
				
			</h3>
			<?php the_post_thumbnail(); ?>		
			
		
			</a>

			

			<p class="text-right"><a href="<?php the_permalink(); ?>">Read more..</a></p>
			
		</main>
	</article>
