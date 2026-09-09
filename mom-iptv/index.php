<?php
/**
 * The main index template
 * Fallback for when no specific template matches
 *
 * @package MomIPTV
 */

get_header();
$pricing = mom_iptv_get_pricing();
?>

<?php if (is_front_page() && !is_home()) : ?>
    <?php get_template_part('template', 'home'); ?>
<?php else : ?>

<div class="shell section-pad">
    <h1 class="section-heading" style="text-align:left;"><?php the_archive_title(); ?></h1>

    <?php if (have_posts()) : ?>
        <div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(300px, 1fr)); gap:1.5rem;">
            <?php while (have_posts()) : the_post(); ?>
                <article class="card reveal" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                        <div style="border-radius:10px; overflow:hidden; margin-bottom:1.25rem; aspect-ratio:16/9;">
                            <?php the_post_thumbnail('medium_large', ['style' => 'width:100%; height:100%; object-fit:cover;']); ?>
                        </div>
                    <?php endif; ?>
                    <h2 style="font-size:1.25rem; margin-bottom:0.75rem;">
                        <a href="<?php the_permalink(); ?>" style="color:var(--text-white); transition:color 0.2s ease;">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <p style="color:var(--text-muted); font-size:0.9rem; margin-bottom:1rem;"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn-primary" style="padding:0.625rem 1.25rem; font-size:0.875rem; border-radius:8px; display:inline-flex;">
                        Read More
                    </a>
                </article>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div style="margin-top:3rem; display:flex; justify-content:center; gap:0.5rem;">
            <?php the_posts_pagination(['mid_size' => 2]); ?>
        </div>

    <?php else : ?>
        <div style="text-align:center; padding:4rem 0;">
            <p style="font-size:1.25rem; color:var(--text-muted);">No posts found.</p>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary" style="margin-top:1.5rem; display:inline-flex;">
                Back to Home
            </a>
        </div>
    <?php endif; ?>
</div>

<?php endif; ?>

<?php get_footer(); ?>
