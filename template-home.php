<?php
/**
 * Home Page Template
 * Template Name: Home Page
 *
 * @package MomIPTV
 */

get_header();

$pricing = mom_iptv_get_pricing();
$reviews = mom_iptv_get_reviews();
$faq     = mom_iptv_get_faq();
?>

<!-- ============================================
     HERO SECTION
     ============================================ -->
<section class="hero-shell" aria-label="Hero">
    <div class="hero-card">
        <!-- Background Image -->
        <img
            src="<?php echo esc_url(get_template_directory_uri() . '/images/hero-background.jpg'); ?>"
            alt=""
            class="hero-bg"
            loading="eager"
            decoding="async"
            aria-hidden="true"
        >
        <div class="hero-shade" aria-hidden="true"></div>

        <!-- Hero Content -->
        <div class="hero-content fade-in-up">
            <div class="hero-badge">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                </svg>
                Official Mom IPTV &mdash; Best Service 2026
            </div>

            <h1 class="hero-title">
                Mom IPTV™ Official
                <span class="accent">Premium Streaming Service</span>
            </h1>

            <p class="hero-sub">
                50,000+ live TV channels and 180,000+ movies &amp; series,
                in 4K/HD quality from 170+ countries. Instant activation.
            </p>

            <div class="hero-cta-row">
                <a href="<?php echo esc_url($pricing['subscribe_url']); ?>" class="btn-primary" id="hero-subscribe-btn">
                    Subscribe Now
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="#pricing" class="btn-ghost" id="hero-pricing-btn">View Pricing</a>
            </div>

            <div class="hero-notes">
                <span class="hero-note-item">Instant activation</span>
                <span class="hero-note-item">99.9% uptime</span>
                <span class="hero-note-item">24/7 support</span>
                <span class="hero-note-item">No contract</span>
            </div>
        </div>
    </div>

    <!-- Logo / Brand Bar -->
    <div class="hero-logo-bar" aria-label="Compatible platforms">
        <div class="logo-track" aria-hidden="true">
            <!-- Duplicated for infinite scroll effect -->
            <span style="color:rgba(255,255,255,0.7); font-weight:700; font-size:0.9rem; white-space:nowrap;">Netflix</span>
            <span style="color:rgba(255,255,255,0.7); font-weight:700; font-size:0.9rem; white-space:nowrap;">Apple TV</span>
            <span style="color:rgba(255,255,255,0.7); font-weight:700; font-size:0.9rem; white-space:nowrap;">IPTV Smarters</span>
            <span style="color:rgba(255,255,255,0.7); font-weight:700; font-size:0.9rem; white-space:nowrap;">Android TV</span>
            <span style="color:rgba(255,255,255,0.7); font-weight:700; font-size:0.9rem; white-space:nowrap;">Fire TV Stick</span>
            <span style="color:rgba(255,255,255,0.7); font-weight:700; font-size:0.9rem; white-space:nowrap;">Samsung Smart TV</span>
            <span style="color:rgba(255,255,255,0.7); font-weight:700; font-size:0.9rem; white-space:nowrap;">LG WebOS</span>
            <span style="color:rgba(255,255,255,0.7); font-weight:700; font-size:0.9rem; white-space:nowrap;">Roku</span>
            <!-- Duplicate -->
            <span style="color:rgba(255,255,255,0.7); font-weight:700; font-size:0.9rem; white-space:nowrap;" aria-hidden="true">Netflix</span>
            <span style="color:rgba(255,255,255,0.7); font-weight:700; font-size:0.9rem; white-space:nowrap;" aria-hidden="true">Apple TV</span>
            <span style="color:rgba(255,255,255,0.7); font-weight:700; font-size:0.9rem; white-space:nowrap;" aria-hidden="true">IPTV Smarters</span>
            <span style="color:rgba(255,255,255,0.7); font-weight:700; font-size:0.9rem; white-space:nowrap;" aria-hidden="true">Android TV</span>
            <span style="color:rgba(255,255,255,0.7); font-weight:700; font-size:0.9rem; white-space:nowrap;" aria-hidden="true">Fire TV Stick</span>
            <span style="color:rgba(255,255,255,0.7); font-weight:700; font-size:0.9rem; white-space:nowrap;" aria-hidden="true">Samsung Smart TV</span>
            <span style="color:rgba(255,255,255,0.7); font-weight:700; font-size:0.9rem; white-space:nowrap;" aria-hidden="true">LG WebOS</span>
            <span style="color:rgba(255,255,255,0.7); font-weight:700; font-size:0.9rem; white-space:nowrap;" aria-hidden="true">Roku</span>
        </div>
    </div>
</section>

<!-- ============================================
     FEATURES / WHY SECTION
     ============================================ -->
<section class="features-section section-pad" aria-labelledby="features-heading">
    <div class="shell">
        <h2 class="section-heading" id="features-heading">WHY <span>MOM IPTV</span></h2>

        <div class="features-grid">
            <div class="feature-card reveal">
                <div class="feature-card-icon" aria-hidden="true">🎬</div>
                <h3>4K and HD Channels</h3>
                <p>Experience crystal-clear picture quality with our 4K Ultra HD, Full HD, and HD channel lineup. No more pixelated streams.</p>
                <div class="feature-img-wrap">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/hero-background.jpg'); ?>" alt="4K HD Channels" loading="lazy">
                </div>
            </div>

            <div class="feature-card reveal">
                <div class="feature-card-icon" aria-hidden="true">🎞️</div>
                <h3>Movies &amp; Series Galore</h3>
                <p>Access 180,000+ movies and TV series including the latest releases, classics, and exclusive content from around the world.</p>
                <div class="feature-img-wrap">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/hero-background.jpg'); ?>" alt="Movies and Series" loading="lazy">
                </div>
            </div>

            <div class="feature-card reveal">
                <div class="feature-card-icon" aria-hidden="true">⚽</div>
                <h3>Live Sports Channels</h3>
                <p>Never miss a game. Watch live sports including football, basketball, tennis, F1, UFC, and 200+ dedicated sports channels.</p>
                <div class="feature-img-wrap">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/hero-background.jpg'); ?>" alt="Live Sports" loading="lazy">
                </div>
            </div>

            <div class="feature-card reveal">
                <div class="feature-card-icon" aria-hidden="true">💬</div>
                <h3>24/7 Live Chat Support</h3>
                <p>Our dedicated support team is available around the clock to help you with setup, troubleshooting, and any questions you have.</p>
                <div class="feature-img-wrap">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/images/hero-background.jpg'); ?>" alt="24/7 Support" loading="lazy">
                </div>
            </div>
        </div>

        <!-- Stats Row -->
        <div class="stats-grid reveal">
            <div class="stat-card">
                <p class="stat-label">Uptime Guarantee</p>
                <p class="stat-value">99.9%</p>
            </div>
            <div class="stat-card">
                <p class="stat-label">Live TV Channels</p>
                <p class="stat-value">50,000+</p>
            </div>
            <div class="stat-card">
                <p class="stat-label">Movies &amp; Series (VODs)</p>
                <p class="stat-value">180,000+</p>
            </div>
            <div class="stat-card">
                <p class="stat-label">Happy Customers</p>
                <p class="stat-value">27,000+</p>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     PRICING SECTION
     ============================================ -->
<section id="pricing" class="pricing-section section-pad" aria-labelledby="pricing-heading" style="scroll-margin-top:80px;">
    <div class="shell">
        <h2 class="section-heading" id="pricing-heading">CUSTOMIZE YOUR <span>PACKAGE</span></h2>

        <!-- Controls -->
        <div class="pricing-controls reveal">
            <!-- Device Tabs -->
            <div class="device-tabs" role="tablist" aria-label="Select number of devices">
                <?php for ($d = 1; $d <= 5; $d++) : ?>
                    <button
                        type="button"
                        role="tab"
                        class="device-tab <?php echo $d === 1 ? 'active' : ''; ?>"
                        data-devices="<?php echo $d; ?>"
                        aria-selected="<?php echo $d === 1 ? 'true' : 'false'; ?>"
                    >
                        <span class="tab-num"><?php echo $d; ?></span>
                        <span class="tab-label"><?php echo $d === 1 ? 'Device' : 'Devices'; ?></span>
                    </button>
                <?php endfor; ?>
            </div>

            <!-- Currency selector -->
            <div class="currency-tabs" role="radiogroup" aria-label="Select currency">
                <button type="button" role="radio" class="currency-btn active" data-currency="usd" aria-checked="true">$ USD</button>
                <button type="button" role="radio" class="currency-btn" data-currency="eur" aria-checked="false">€ EUR</button>
                <button type="button" role="radio" class="currency-btn" data-currency="gbp" aria-checked="false">£ GBP</button>
            </div>
        </div>

        <!-- Plans Grid -->
        <div class="plans-grid reveal">
            <!-- Plan Rows -->
            <div class="plan-rows" id="plan-rows">
                <?php foreach ($pricing['plans'] as $plan) :
                    $is_popular = $plan['popular'];
                    $price = '$' . number_format($plan['usd'], 2);
                    $per_month = $plan['months'] > 1 ? '$' . number_format($plan['usd'] / $plan['months'], 2) . '/month' : '';
                    ?>
                    <a
                        href="<?php echo esc_url($pricing['subscribe_url'] . '?months=' . $plan['months'] . '&devices=1'); ?>"
                        class="plan-row <?php echo $is_popular ? 'popular' : ''; ?>"
                        aria-label="Subscribe — <?php echo esc_attr($plan['label']); ?>"
                        data-usd="<?php echo esc_attr(number_format($plan['usd'], 2)); ?>"
                        data-eur="<?php echo esc_attr(number_format($plan['eur'], 2)); ?>"
                        data-gbp="<?php echo esc_attr(number_format($plan['gbp'], 2)); ?>"
                        data-months="<?php echo esc_attr($plan['months']); ?>"
                        data-subscribe-base="<?php echo esc_url($pricing['subscribe_url']); ?>"
                    >
                        <div class="plan-row-left">
                            <span class="plan-name"><?php echo esc_html($plan['label']); ?></span>
                            <?php if ($is_popular) : ?>
                                <span class="popular-badge">Most Popular</span>
                            <?php endif; ?>
                        </div>
                        <div class="plan-row-right">
                            <div>
                                <span class="plan-price-main" data-price>
                                    <?php echo esc_html($price); ?>
                                </span>
                                <?php if ($per_month) : ?>
                                    <span class="plan-price-per" data-per><?php echo esc_html($per_month); ?></span>
                                <?php endif; ?>
                            </div>
                            <svg class="plan-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M9 6l6 6-6 6"/>
                            </svg>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>

            <!-- Features Included -->
            <div class="plan-features">
                <h3>All plans include:</h3>
                <ul class="feature-list">
                    <?php foreach ($pricing['features'] as $feature) : ?>
                        <li class="feature-list-item">
                            <span class="feature-check">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="rgba(41,182,212,0.9)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M5 13l4 4L19 7"/>
                                </svg>
                            </span>
                            <span><?php echo esc_html($feature); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <a href="<?php echo esc_url($pricing['subscribe_url'] . '?months=12&devices=1'); ?>" class="plan-cta-btn" id="pricing-cta-btn">
                    Subscribe Now
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     TRUSTED BY / REVIEWS SECTION
     ============================================ -->
<section class="reviews-section section-pad" aria-labelledby="reviews-heading">
    <div class="shell">
        <h2 class="section-heading" id="reviews-heading">
            TRUSTED BY <span>+27,000</span><br>CLIENTS WORLDWIDE
        </h2>

        <div class="reviews-carousel reveal" role="region" aria-label="Customer reviews">
            <div class="carousel-wrapper">
                <div class="carousel-track" id="review-carousel">
                    <?php foreach ($reviews as $i => $review) : ?>
                        <article class="review-slide" aria-label="Review <?php echo $i + 1; ?> of <?php echo count($reviews); ?> by <?php echo esc_attr($review['name']); ?>">
                            <div class="review-inner">
                                <div class="review-stars" aria-label="<?php echo $review['stars']; ?> stars out of 5">
                                    <?php for ($s = 0; $s < $review['stars']; $s++) : ?>
                                        <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true">
                                            <path fill="var(--brand-cyan)" d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                                        </svg>
                                    <?php endfor; ?>
                                </div>
                                <blockquote class="review-text"><?php echo esc_html($review['text']); ?></blockquote>
                                <div class="review-author">
                                    <div class="review-avatar" aria-hidden="true"><?php echo esc_html($review['initials']); ?></div>
                                    <cite class="review-name"><?php echo esc_html($review['name']); ?></cite>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="carousel-controls">
                <button class="carousel-arrow" id="review-prev" aria-label="Previous review" disabled>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M15 6l-6 6 6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <button class="carousel-arrow" id="review-next" aria-label="Next review">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     DEVICE COMPATIBILITY SECTION
     ============================================ -->
<section class="devices-section section-pad" aria-labelledby="devices-heading">
    <div class="shell">
        <h2 class="section-heading" id="devices-heading">WORKS ON <span>ALL DEVICES</span></h2>
        <p style="text-align:center; color:var(--text-muted); margin-top:-1.5rem; margin-bottom:0;">Compatible with virtually every screen you own</p>

        <div class="devices-grid reveal">
            <?php
            $devices = [
                ['icon' => '📺', 'name' => 'Smart TV'],
                ['icon' => '🔥', 'name' => 'Fire Stick'],
                ['icon' => '📱', 'name' => 'Android'],
                ['icon' => '🍎', 'name' => 'iOS / Apple'],
                ['icon' => '🍏', 'name' => 'Apple TV'],
                ['icon' => '💻', 'name' => 'PC / Mac'],
                ['icon' => '🎮', 'name' => 'Xbox'],
                ['icon' => '🎮', 'name' => 'PlayStation'],
                ['icon' => '📡', 'name' => 'MAG Box'],
                ['icon' => '🌊', 'name' => 'Formuler'],
                ['icon' => '⭕', 'name' => 'Roku'],
                ['icon' => '📡', 'name' => 'Enigma2'],
            ];
            foreach ($devices as $device) :
            ?>
                <div class="device-card">
                    <span class="device-icon" aria-hidden="true"><?php echo $device['icon']; ?></span>
                    <span class="device-name"><?php echo esc_html($device['name']); ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================
     FAQ SECTION
     ============================================ -->
<section id="faq" class="faq-section section-pad" aria-labelledby="faq-heading" style="scroll-margin-top:80px;">
    <div class="shell">
        <h2 class="section-heading" id="faq-heading">FREQUENTLY ASKED <span>QUESTIONS</span></h2>

        <div class="faq-list reveal" role="list">
            <?php foreach ($faq as $i => $item) : ?>
                <div class="faq-item" role="listitem">
                    <button
                        type="button"
                        class="faq-question"
                        aria-expanded="false"
                        aria-controls="faq-answer-<?php echo $i; ?>"
                        id="faq-question-<?php echo $i; ?>"
                    >
                        <?php echo esc_html($item['q']); ?>
                        <span class="faq-icon" aria-hidden="true">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M6 9l6 6 6-6"/>
                            </svg>
                        </span>
                    </button>
                    <div
                        class="faq-answer"
                        id="faq-answer-<?php echo $i; ?>"
                        aria-labelledby="faq-question-<?php echo $i; ?>"
                        role="region"
                    >
                        <div class="faq-answer-inner">
                            <?php echo esc_html($item['a']); ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
