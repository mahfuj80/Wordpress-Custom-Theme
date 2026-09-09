<?php
/**
 * The footer for Mom IPTV Theme
 *
 * @package MomIPTV
 */
$pricing = mom_iptv_get_pricing();
?>
</main><!-- #main-content -->

<!-- CTA Section -->
<section class="cta-section section-pad">
    <div class="shell">
        <div class="cta-inner reveal">
            <h2>Ready to <span class="gradient-text">Stream Everything?</span></h2>
            <p>Join 27,000+ satisfied customers enjoying premium IPTV entertainment worldwide.</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url($pricing['subscribe_url']); ?>" class="btn-primary" id="footer-cta-subscribe">
                    Get Started Now
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="<?php echo esc_url(home_url('/#pricing')); ?>" class="btn-ghost">View Pricing</a>
            </div>
        </div>
    </div>
</section>

<footer class="site-footer" role="contentinfo">
    <div class="footer-inner">
        <div class="footer-grid">

            <!-- Brand Column -->
            <div class="footer-brand">
                <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="Mom IPTV home" style="display:inline-block; margin-bottom: 1rem;">
                    <span class="footer-logo-text">
                        <span class="mom">Mom</span>&nbsp;<span class="iptv">IPTV</span>
                    </span>
                </a>
                <p>Premium IPTV service with 50,000+ live TV channels, 180,000+ movies &amp; series in 4K/HD quality. Available worldwide, 24/7.</p>
            </div>

            <!-- Service Links -->
            <div class="footer-col">
                <h4>Service</h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/#pricing')); ?>">Pricing</a></li>
                    <li><a href="<?php echo esc_url($pricing['subscribe_url']); ?>">Subscribe</a></li>
                    <li><a href="<?php echo esc_url($pricing['signin_url']); ?>">Sign In</a></li>
                    <li><a href="<?php echo esc_url(home_url('/reseller/')); ?>">Reseller</a></li>
                </ul>
            </div>

            <!-- Help Links -->
            <div class="footer-col">
                <h4>Help</h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/installation-guide/')); ?>">Installation Guide</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#faq')); ?>">FAQ</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact Us</a></li>
                    <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a></li>
                </ul>
            </div>

            <!-- Legal Links -->
            <div class="footer-col">
                <h4>Legal</h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">Privacy Policy</a></li>
                    <li><a href="<?php echo esc_url(home_url('/terms-of-service/')); ?>">Terms of Service</a></li>
                    <li><a href="<?php echo esc_url(home_url('/refund-policy/')); ?>">Refund Policy</a></li>
                    <li><a href="<?php echo esc_url(home_url('/dmca/')); ?>">DMCA</a></li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Mom IPTV. All rights reserved.</p>

            <!-- Social Links -->
            <div class="footer-social">
                <a href="#" class="social-link" aria-label="Twitter / X" rel="noopener noreferrer">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.741l7.73-8.835L1.254 2.25H8.08l4.259 5.629L18.244 2.25zM17.083 20.015h1.833L7.084 4.126H5.117z"/>
                    </svg>
                </a>
                <a href="#" class="social-link" aria-label="Telegram" rel="noopener noreferrer">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8l-1.7 8.02c-.12.59-.48.73-.97.45l-2.69-1.98-1.3 1.25c-.14.14-.28.17-.55.17l.2-2.81 5.08-4.59c.22-.2-.05-.31-.34-.11L7.07 13.35 4.43 12.5c-.59-.18-.6-.59.12-.87l8.95-3.45c.49-.18.92.12.79.71l-.65-.09z"/>
                    </svg>
                </a>
                <a href="#" class="social-link" aria-label="Facebook" rel="noopener noreferrer">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
