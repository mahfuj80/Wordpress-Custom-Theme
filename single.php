<?php
/**
 * Single post template
 *
 * @package MomIPTV
 */
get_header();
?>

<div class="shell section-pad">
    <?php while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="max-width:780px; margin:0 auto;">
        <!-- Post Header -->
        <header style="margin-bottom:2.5rem;">
            <div style="margin-bottom:1rem;">
                <a href="<?php echo esc_url(get_home_url() . '/blog/'); ?>" style="color:var(--brand-cyan); font-size:0.9rem; display:inline-flex; align-items:center; gap:0.375rem;">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M19 12H5M12 5l-7 7 7 7"/></svg>
                    Blog
                </a>
            </div>
            <h1 style="font-size:clamp(1.75rem, 4vw, 2.75rem); margin-bottom:1rem;"><?php the_title(); ?></h1>
            <div style="display:flex; align-items:center; gap:1rem; color:var(--text-muted); font-size:0.875rem; flex-wrap:wrap;">
                <span><?php echo get_the_date(); ?></span>
                <span>•</span>
                <span><?php echo get_the_author(); ?></span>
            </div>
        </header>

        <!-- Featured Image -->
        <?php if (has_post_thumbnail()) : ?>
            <div style="border-radius:var(--radius-card); overflow:hidden; margin-bottom:2.5rem; aspect-ratio:16/9;">
                <?php the_post_thumbnail('large', ['style' => 'width:100%; height:100%; object-fit:cover;']); ?>
            </div>
        <?php endif; ?>

        <!-- Post Content -->
        <div class="post-content" style="color:rgba(255,255,255,0.85); line-height:1.8; font-size:1.0625rem;">
            <?php the_content(); ?>
        </div>
    </article>

    <?php endwhile; ?>
</div>

<?php get_footer(); ?>
