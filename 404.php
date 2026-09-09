<?php
/**
 * 404 Error Page Template
 *
 * @package MomIPTV
 */
get_header();
$pricing = mom_iptv_get_pricing();
?>

<section style="min-height:calc(100vh - 72px); display:flex; align-items:center; justify-content:center; text-align:center; padding:4rem var(--shell-x);">
    <div style="max-width:500px;">
        <div style="font-size:8rem; line-height:1; font-weight:900; background:var(--grad-primary); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; margin-bottom:1rem;">404</div>
        <h1 style="font-size:2rem; margin-bottom:1rem;">Page Not Found</h1>
        <p style="color:var(--text-muted); margin-bottom:2.5rem; font-size:1.125rem;">The page you're looking for doesn't exist or has been moved.</p>
        <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn-primary">Back to Home</a>
            <a href="<?php echo esc_url($pricing['subscribe_url']); ?>" class="btn-ghost">Subscribe</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
