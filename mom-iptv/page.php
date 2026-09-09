<?php
/**
 * Default page template
 *
 * @package MomIPTV
 */
get_header();
?>

<section class="page-hero">
    <div class="shell">
        <?php while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php if (get_the_excerpt()) : ?>
                <p><?php the_excerpt(); ?></p>
            <?php endif; ?>
        <?php endwhile; ?>
    </div>
</section>

<div class="shell section-pad">
    <div style="max-width:780px; margin:0 auto;">
        <?php while (have_posts()) : the_post(); ?>
            <div class="post-content" style="color:rgba(255,255,255,0.85); line-height:1.8; font-size:1.0625rem;">
                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>
