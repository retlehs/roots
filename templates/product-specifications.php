      <?php if( get_field('specifications')) { ?>
      <div class="well">
      <?php $posts = get_field('specifications');
      if( $posts ): ?>
        <h4>Specifcations</h4>
      	<ul>
      	<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
      		<?php setup_postdata($post); ?>
      	    <li>
      	    	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      	    </li>
      	<?php endforeach; ?>
      	</ul>
      	<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
      <?php endif; ?>
      </div><?php // end .well ?>

      <?php } ?>