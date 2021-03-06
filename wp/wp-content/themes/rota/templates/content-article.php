<section class="editor_content">
	<?php the_post_thumbnail( 'full' ); ?>
	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>
	<p class="postmeta">
		<?php
		$article_tags = wp_get_post_terms( get_the_ID(), 'article_tag' );
		$article_tags_array = array();
		if($article_tags) :
			foreach($article_tags as $tag) :
				$article_tags_array[] = $tag->name;
			endforeach;
		endif;

		if($article_tags_array) :
			echo implode(', ', $article_tags_array) . '<br />';
		endif;

		echo get_the_time( 'd F Y' );
		?>
	</p>
</section>