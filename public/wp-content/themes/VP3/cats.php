<?php get_header();?>
<div class="main-content">
    <div class="content-wrapper">
        <div class="content">
            <h1 class="title-page">Поиск по категориям:</h1>
            <div class="posts-list">
                <?php if (have_posts()) : while (have_posts()) :the_post(); ?>
                    <div class="post-wrap">
                        <div class="post-thumbnail"><img src="<?php echo own_wp_thumbnail(); ?>" alt="Image поста"
                                                         class="post-thumbnail__image"></div>
                        <div class="post-content">
                            <div class="post-content__post-info">
                                <div class="post-date">
                                    <?php the_date(); ?>
                                </div>
                            </div>
                            <div class="post-content__post-text">
                                <div class="post-title">
                                    <?php the_title(); ?>
                                </div>
                                <p>
                                    <?php the_excerpt(); ?>
                                </p>
                            </div>
                            <div class="post-content__post-control"><a href="<?php the_permalink(); ?>" class="btn-read-post">Читать далее >></a></div>
                        </div>
                    </div>
                <?php endwhile; else: ?>
                    <p><?php _e('Ничего не найдено.'); ?></p>
                <?php endif; ?>
            </div>

            <?php the_posts_pagination(array(
                'mid_size' => 2,
                'prev_next' => true,
                'prev_text' => __('<<'),
                'next_text' => __('>>'),
            )); ?>
        </div>

        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>
