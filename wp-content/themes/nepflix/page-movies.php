<?php
$args = array(
    'post_type' => 'movie',
    'order' => 'DSC', // TODO sorteren op datum ooit
);
$the_query = new WP_Query($args);
?>

<?= get_header(); ?>
<div class="content">
    <h1>Alle films</h1>
    <div class="moviecards moviecards-all">
        <?php if ($the_query->have_posts()) : ?>
            <?php foreach ($the_query->posts as $movie) :
                $category = get_the_category($movie->ID)[0]->name;
                $image = get_the_post_thumbnail_url($movie);
            ?>
                <a style="background-image:url(<?= $image ? $image : "https://lh3.googleusercontent.com/proxy/hWxD39UKAbAoNwJPNcqDKSxmxtRP2Z2MPLT0WIe6WtmdUc4QVsz6lJGpq_4bVsOg05M0WRC6IKOrVFn6ChnOLCC5VsSY8Oxf" ?>)" class="moviecard moviecard-all" href=<?= site_url() . "/movies/" . $movie->post_name
                                                                                                                                                                                                                                             ?>>
                    <p class="title"><?= $movie->post_title ?></p>
                </a>
            <?php endforeach;
            wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div>