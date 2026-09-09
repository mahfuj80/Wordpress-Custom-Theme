<?php
/**
 * Mom IPTV Theme Functions
 *
 * @package MomIPTV
 */

// Theme setup
function mom_iptv_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form','comment-form','comment-list','gallery','caption']);
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 280,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Nav menus
    register_nav_menus([
        'primary'  => __('Primary Navigation', 'mom-iptv'),
        'footer'   => __('Footer Navigation', 'mom-iptv'),
    ]);
}
add_action('after_setup_theme', 'mom_iptv_setup');

// Enqueue styles & scripts
function mom_iptv_enqueue() {
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap',
        [],
        null
    );
    wp_enqueue_style('mom-iptv-style', get_stylesheet_uri(), ['google-fonts'], '1.0.0');
    wp_enqueue_style('mom-iptv-content', get_template_directory_uri() . '/assets/css/content.css', ['mom-iptv-style'], '1.0.0');
    wp_enqueue_script('mom-iptv-main', get_template_directory_uri() . '/assets/js/main.js', [], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'mom_iptv_enqueue');

// Register widget areas
function mom_iptv_widgets_init() {
    register_sidebar([
        'name'          => __('Footer Widget Area', 'mom-iptv'),
        'id'            => 'footer-widgets',
        'description'   => __('Add widgets here to appear in your footer.', 'mom-iptv'),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ]);
}
add_action('widgets_init', 'mom_iptv_widgets_init');

// Custom template tags
function mom_iptv_the_logo() {
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        echo '<span class="header-logo-text">
            <span class="mom">Mom</span> <span class="iptv">IPTV</span>
        </span>';
    }
}

// Excerpt length
function mom_iptv_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'mom_iptv_excerpt_length');

// Custom page templates
function mom_iptv_page_templates($templates) {
    $templates['template-home.php']         = 'Home Page';
    $templates['template-pricing.php']      = 'Pricing Page';
    $templates['template-installation.php'] = 'Installation Guide';
    $templates['template-reseller.php']     = 'Reseller Page';
    return $templates;
}
add_filter('theme_page_templates', 'mom_iptv_page_templates');

// Pricing data (filterable)
function mom_iptv_get_pricing() {
    return apply_filters('mom_iptv_pricing', [
        'plans' => [
            ['months' => 1,  'label' => '1 Month',    'usd' => 14.90, 'eur' => 13.90, 'gbp' => 11.90, 'popular' => false],
            ['months' => 3,  'label' => '3 Months',   'usd' => 34.90, 'eur' => 32.90, 'gbp' => 27.90, 'popular' => false],
            ['months' => 6,  'label' => '6 Months',   'usd' => 59.90, 'eur' => 55.90, 'gbp' => 47.90, 'popular' => false],
            ['months' => 12, 'label' => '12 Months',  'usd' => 89.90, 'eur' => 82.90, 'gbp' => 69.90, 'popular' => true],
            ['months' => 24, 'label' => '24 Months',  'usd' => 129.90,'eur' => 119.90,'gbp' => 99.90, 'popular' => false],
        ],
        'subscribe_url' => 'https://my.momiptv.com/subscribe',
        'signin_url'    => 'https://my.momiptv.com/sign-in',
        'features' => [
            'Fast activation',
            'Anti-buffering technology',
            'Electronic Program Guide (EPG)',
            '4K / FHD / HD channels',
            '24/7 live chat support',
            'Compatible with all devices',
        ],
    ]);
}

// Reviews/testimonials data
function mom_iptv_get_reviews() {
    return apply_filters('mom_iptv_reviews', [
        ['name' => 'Marcus Rodriguez', 'initials' => 'MR', 'stars' => 5, 'text' => 'Great customer support and lots of channels. Customer service is very good. They answer questions pretty quick. I had a small issue setting up IPTV on my Samsung TV but they helped me out. Very happy with the service.'],
        ['name' => 'Anissa Novak',     'initials' => 'AN', 'stars' => 5, 'text' => 'Fantastic service with excellent channel selection! The support team was incredibly helpful. I had a few questions about setting up my account, and they responded immediately with clear instructions.'],
        ['name' => 'Clara Rayes',      'initials' => 'CR', 'stars' => 5, 'text' => 'Amazing service and super fast response times! I had a few questions about streaming options, and the team was quick to answer. They really know their stuff. Very satisfied with my experience.'],
        ['name' => 'Jack Morrison',    'initials' => 'JM', 'stars' => 5, 'text' => 'Very happy with my subscription. Lots of variety in channels and excellent streaming quality. The support team is responsive and knowledgeable. Highly recommend this service!'],
        ['name' => 'Emily Carter',     'initials' => 'EC', 'stars' => 5, 'text' => "I've had a great experience with Mom IPTV. The picture quality is top-notch, and I love having access to so many channels from different countries. Setup was a breeze too!"],
        ['name' => 'Thomas Weber',     'initials' => 'TW', 'stars' => 5, 'text' => 'Switched from another IPTV service and the difference is night and day. No buffering, crystal clear quality, and hundreds of channels. Worth every penny!'],
    ]);
}

// FAQ data
function mom_iptv_get_faq() {
    return apply_filters('mom_iptv_faq', [
        ['q' => 'What is IPTV?', 'a' => 'IPTV stands for Internet Protocol Television. It delivers television content over the internet rather than through traditional satellite or cable formats. This allows you to stream live TV, movies, and series on any device with an internet connection.'],
        ['q' => 'What devices are supported?', 'a' => 'Mom IPTV works on virtually all devices: Smart TVs (Samsung, LG, Sony), Amazon Fire Stick, Android TV/Google TV, Apple TV, iOS & Android smartphones, PC/Mac via VLC or any IPTV player, Roku, MAG devices, and more.'],
        ['q' => 'How quickly will I receive my subscription?', 'a' => 'Your subscription is activated instantly after payment is confirmed. You\'ll receive your login credentials via email within minutes, available 24/7.'],
        ['q' => 'Do you offer a free trial?', 'a' => 'We offer a 24-hour free trial so you can test our service before committing to a subscription. Contact our support team through live chat to request your trial.'],
        ['q' => 'What internet speed do I need?', 'a' => 'We recommend at least 10 Mbps for HD content and 25 Mbps for 4K content. A stable connection is more important than raw speed. Most modern broadband connections work perfectly.'],
        ['q' => 'Can I use Mom IPTV on multiple devices simultaneously?', 'a' => 'Yes! We offer multi-device packages. Depending on your plan, you can stream on 1 to 5 devices simultaneously. Choose your desired number of connections when subscribing.'],
        ['q' => 'What payment methods do you accept?', 'a' => 'We accept major credit/debit cards (Visa, MasterCard, American Express), PayPal, and various cryptocurrencies. All transactions are secure and encrypted.'],
        ['q' => 'Is there a money-back guarantee?', 'a' => 'We offer a 7-day money-back guarantee if you\'re not satisfied with our service. Simply contact our support team within 7 days of your purchase.'],
    ]);
}
