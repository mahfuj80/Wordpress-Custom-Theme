<?php
/**
 * Reseller Page Template
 * Template Name: Reseller Page
 *
 * @package MomIPTV
 */

get_header();
$pricing = mom_iptv_get_pricing();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="shell">
        <div class="reseller-hero-badge">
            💰 Partner Program
        </div>
        <h1>Become a <span class="gradient-text">Reseller</span></h1>
        <p>Start your own IPTV business with Mom IPTV's reseller program. Competitive pricing, full management panel, and 24/7 support.</p>
        <div style="margin-top:2rem; display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
            <a href="#reseller-plans" class="btn-primary">View Reseller Plans</a>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-ghost">Contact Us</a>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="section-pad">
    <div class="shell">
        <h2 class="section-heading">WHY RESELL <span>MOM IPTV</span>?</h2>

        <div class="reseller-grid reveal">
            <?php
            $benefits = [
                ['icon' => '📊', 'title' => 'Full Management Panel',    'desc' => 'Manage all your clients from a single powerful dashboard. Create, suspend, and renew subscriptions with one click.'],
                ['icon' => '💰', 'title' => 'Competitive Margins',      'desc' => 'Buy at wholesale prices and set your own retail price. Most resellers earn 40-60% profit margins.'],
                ['icon' => '🌍', 'title' => 'White Label Option',       'desc' => 'Brand the service as your own. Custom branding available on reseller panels and player apps.'],
                ['icon' => '🔒', 'title' => '99.9% Uptime Guarantee',  'desc' => 'Premium infrastructure ensures your clients always have access. Backed by multiple redundant servers.'],
                ['icon' => '📞', 'title' => 'Dedicated Support',        'desc' => 'Get priority support for you and your clients. Our team is available 24/7 to resolve any issues.'],
                ['icon' => '📈', 'title' => 'Scalable Business',        'desc' => 'Start small and scale as you grow. No minimum orders required. Add credits as your client base expands.'],
            ];
            foreach ($benefits as $b) :
            ?>
                <div class="reseller-card">
                    <div class="card-icon" aria-hidden="true"><?php echo $b['icon']; ?></div>
                    <h3><?php echo esc_html($b['title']); ?></h3>
                    <p><?php echo esc_html($b['desc']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Reseller Pricing Table -->
<section id="reseller-plans" class="section-pad" style="background:var(--bg-card); border-top:1px solid var(--border-color); border-bottom:1px solid var(--border-color);">
    <div class="shell">
        <h2 class="section-heading">RESELLER <span>CREDIT PACKAGES</span></h2>
        <p style="text-align:center; color:var(--text-muted); margin-top:-1.5rem; margin-bottom:2.5rem;">Credits are used to create and renew client subscriptions.</p>

        <div class="reveal" style="overflow-x:auto; border-radius:var(--radius-card); border:1px solid var(--border-color);">
            <table class="reseller-table">
                <thead style="background:var(--bg-card-hi);">
                    <tr>
                        <th>Package</th>
                        <th>Credits</th>
                        <th>Price</th>
                        <th>Cost per Credit</th>
                        <th>Saving</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $packages = [
                        ['name' => 'Starter',    'credits' => 10,  'price' => 89,   'saving' => '',     'popular' => false],
                        ['name' => 'Basic',      'credits' => 25,  'price' => 199,  'saving' => '10%',  'popular' => false],
                        ['name' => 'Standard',   'credits' => 50,  'price' => 349,  'saving' => '20%',  'popular' => true],
                        ['name' => 'Advanced',   'credits' => 100, 'price' => 599,  'saving' => '30%',  'popular' => false],
                        ['name' => 'Pro',        'credits' => 200, 'price' => 999,  'saving' => '40%',  'popular' => false],
                        ['name' => 'Enterprise', 'credits' => 500, 'price' => 1999, 'saving' => '50%',  'popular' => false],
                    ];
                    foreach ($packages as $pkg) :
                        $per_credit = number_format($pkg['price'] / $pkg['credits'], 2);
                    ?>
                        <tr style="<?php echo $pkg['popular'] ? 'background:rgba(59,91,232,0.06);' : ''; ?>">
                            <td>
                                <strong style="color:var(--text-white);"><?php echo esc_html($pkg['name']); ?></strong>
                                <?php if ($pkg['popular']) : ?>
                                    <span class="popular-badge" style="margin-left:0.5rem;">Most Popular</span>
                                <?php endif; ?>
                            </td>
                            <td style="color:var(--brand-cyan); font-weight:700;"><?php echo esc_html($pkg['credits']); ?></td>
                            <td style="color:var(--text-white); font-weight:700;">$<?php echo esc_html($pkg['price']); ?></td>
                            <td style="color:var(--text-muted);">$<?php echo esc_html($per_credit); ?></td>
                            <td>
                                <?php if ($pkg['saving']) : ?>
                                    <span style="color:#4ade80; font-weight:600;"><?php echo esc_html($pkg['saving']); ?> off</span>
                                <?php else : ?>
                                    <span style="color:var(--text-muted);">—</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo esc_url(home_url('/contact/?package=' . strtolower($pkg['name']))); ?>" class="btn-primary" style="padding:0.5rem 1.25rem; font-size:0.875rem; border-radius:8px;">
                                    Order
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <p style="text-align:center; color:var(--text-muted); margin-top:1.5rem; font-size:0.9rem;">
            Each credit = 1 month for 1 device. Need a custom package? <a href="<?php echo esc_url(home_url('/contact/')); ?>" style="color:var(--brand-cyan);">Contact us</a> for enterprise pricing.
        </p>
    </div>
</section>

<!-- How it Works -->
<section class="section-pad">
    <div class="shell">
        <h2 class="section-heading">HOW IT <span>WORKS</span></h2>

        <div class="guide-steps reveal" style="max-width:800px; margin:0 auto;">
            <?php
            $how_steps = [
                ['title' => 'Create Your Reseller Account', 'desc' => 'Contact us via live chat or the contact form to create your reseller account. Verification takes less than 24 hours.'],
                ['title' => 'Purchase Credits',             'desc' => 'Buy a credit package that suits your business scale. Credits never expire and can be used anytime.'],
                ['title' => 'Access Your Panel',            'desc' => 'Log in to your dedicated reseller panel where you can create and manage all your client subscriptions.'],
                ['title' => 'Sell to Your Clients',         'desc' => 'Create subscriptions for your clients at your own pricing. The panel provides easy-to-copy credential setup guides.'],
                ['title' => 'Scale Your Business',          'desc' => 'As your client base grows, purchase more credits at the same or better rates. There\'s no ceiling to your growth.'],
            ];
            foreach ($how_steps as $i => $step) :
            ?>
                <div class="guide-step">
                    <div class="step-number"><?php echo $i + 1; ?></div>
                    <div class="step-content">
                        <h3><?php echo esc_html($step['title']); ?></h3>
                        <p><?php echo esc_html($step['desc']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- CTA -->
        <div class="card reveal" style="text-align:center; padding:3rem; margin-top:3rem; background:var(--bg-card-hi); border-color:var(--border-accent);">
            <h3 style="font-size:1.75rem; margin-bottom:1rem;">Ready to Start Your IPTV Business?</h3>
            <p style="color:var(--text-muted); margin-bottom:2rem; max-width:500px; margin-left:auto; margin-right:auto;">Join hundreds of successful resellers already earning with Mom IPTV. Start as low as $89.</p>
            <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
                <a href="<?php echo esc_url(home_url('/contact/?type=reseller')); ?>" class="btn-primary">Become a Reseller</a>
                <a href="<?php echo esc_url($pricing['signin_url']); ?>" class="btn-ghost">Reseller Login</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
