<?php get_header(); ?>

<section class="introdution">
    <div class="wrap">
        <h2>안녕하세요! 🙋</h2>
        <p>
            서울에 살고 있고, 디자인을 하고 웹을 개발하는 1인 에이전시 Bistro Sunny를 운영합니다.
            그 외 개인적으로 다양한 프로젝트를 진행하고 있어요. 자세한 내용은 여기를 클릭해주세요.
        </p>        
        <a href="<?php home_url() ?>/about">자세히 보기</a>
    </div>
</section>
<section class="content">
    <div class="wrap">
        <h2 class="category-name">Articles</h2>
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
        <a href="<?php home_url() ?>/category/articles">전체 글 보기</a>
    </div>
</section>
<?php get_footer(); ?>