<?php get_header(); ?>
<div class="wrap">
    <a href="javascript:history.back()" id="back-link">← 뒤로가기</a>
    <div class="single-container">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post() ?>
                <div class="single-header">
                    <h2 class="single-title">
                        <?php the_title(); ?>
                    </h2>                    
                    <?php
                    $excerpt = get_the_excerpt();
                    if ($excerpt) {
                        echo '<p class="single-excerpt">' . $excerpt . '</p>';
                    }
                    ?>
                    <?php the_date('Y-m-d', '<span class="single-date">', '</span>') ?>
                </div>
                <div class="single-body"><?php the_content(); ?></div>
        <?php
            endwhile;
        endif;
        ?>
    </div>

</div>
<?php get_footer(); ?>