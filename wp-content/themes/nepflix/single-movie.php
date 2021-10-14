<?= get_header(); ?>

<div class="content">
    <div class="smallcenter">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1><?= the_title() ?></h1>
                <p><?=the_content()?></p>
                <?php
                $category = get_the_category(get_the_ID())[0]->name;
                $image = get_the_post_thumbnail_url();
                ?>
                <?php if ($category) : ?>
                    <p>Deze film valt onder de genre <?= $category ?></p>
                <?php else : ?>
                    <p>Deze film heeft geen genre</p>
                <?php endif; ?>

                <img src=<?= $image ? $image : "https://lh3.googleusercontent.com/proxy/hWxD39UKAbAoNwJPNcqDKSxmxtRP2Z2MPLT0WIe6WtmdUc4QVsz6lJGpq_4bVsOg05M0WRC6IKOrVFn6ChnOLCC5VsSY8Oxf" ?>>
                <img><?= get_the_post_thumbnail_url() ?></img>

        <?php endwhile;
        endif;
        wp_reset_postdata(); ?>
    </div>

</div>