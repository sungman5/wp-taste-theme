<?php get_header(); ?>
<div class="wrap">
    <ul class="article-list">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <li class="article-item">
                    <p class="date"><?php echo get_the_date('Y-m-d'); ?></p>
                    <h3>
                        <a href="<?php the_permalink() ?>">
                            <?php the_title() ?>
                        </a>
                    </h3>

                </li>
        <?php
            endwhile;
        endif;
        ?>
    </ul>

</div>
<?php get_footer(); ?>