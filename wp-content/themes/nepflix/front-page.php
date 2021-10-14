<?php
$args = array(
    'post_type' => 'movie',
    'order'    => 'DSC' // TODO sorteren op datum ooit
);
$the_query = new WP_Query($args);
?>

<?= get_header(); ?>
<div class="content">
    <h1>De laatste 5 films</h1>
    <div class="moviecards">
        <?php
        if ($the_query->have_posts()) : ?>
            <?php
            for ($i = 0; $i < 5; $i++) :
                $movie = $the_query->posts[$i];
                $category = get_the_category($movie->ID)[0]->name;
                $image = get_the_post_thumbnail_url($movie);
            ?>
                <a style="background-image:url(<?= $image ? $image : "https://lh3.googleusercontent.com/proxy/hWxD39UKAbAoNwJPNcqDKSxmxtRP2Z2MPLT0WIe6WtmdUc4QVsz6lJGpq_4bVsOg05M0WRC6IKOrVFn6ChnOLCC5VsSY8Oxf" ?>)" class="moviecard" id=<?= "card" . $i ?> href=<?= site_url(). "/movies/" . $movie->post_name //geen hard coding dus veranderen
                                                            ?>>
                    <p class="title"><?= $movie->post_title ?></p>
                </a>
            <?php endfor;
            wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div>