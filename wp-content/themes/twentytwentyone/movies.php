<?php 
$loop = new WP_Query( array( 'post_type' => 'graves', 'posts_per_page' => 10 ) ); 

while ( $loop->have_posts() ) : $loop->the_post();

the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '" rel="bookmark">', '</a></h2>' ); 
?>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>

<?php endwhile; ?>