<?php
/**
 * The header for Mom IPTV Theme
 *
 * @package MomIPTV
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" id="site-header" role="banner">
    <div class="header-inner">

        <!-- Brand -->
        <div class="header-brand">
            <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php bloginfo('name'); ?> home">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    ?>
                    <span class="header-logo-text">
                        <span class="mom">Mom</span>&nbsp;<span class="iptv">IPTV</span>
                    </span>
                    <?php
                }
                ?>
            </a>
        </div>

        <!-- Desktop Navigation -->
        <nav class="header-nav" aria-label="Main navigation">
            <ul>
                <li><a href="<?php echo esc_url(home_url('/')); ?>" <?php if (is_front_page()) echo 'class="active"'; ?>>Home</a></li>
                <li><a href="<?php echo esc_url(home_url('/#pricing')); ?>">Pricing</a></li>
                <li><a href="<?php echo esc_url(home_url('/installation-guide/')); ?>" <?php if (is_page('installation-guide')) echo 'class="active"'; ?>>Installation Guide</a></li>
                <li><a href="<?php echo esc_url(home_url('/reseller/')); ?>" <?php if (is_page('reseller')) echo 'class="active"'; ?>>Reseller</a></li>
            </ul>
        </nav>

        <!-- Header Actions -->
        <div class="header-actions">
            <?php $pricing = mom_iptv_get_pricing(); ?>
            <a href="<?php echo esc_url($pricing['signin_url']); ?>" class="sign-in-link">Sign in</a>
            <a href="<?php echo esc_url($pricing['subscribe_url']); ?>" class="header-cta" id="header-subscribe-btn">Get Started</a>
            <button class="burger-btn" aria-label="Toggle menu" aria-expanded="false" aria-controls="mobile-nav" id="burger-btn">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M3 6h18M3 12h18M3 18h18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Navigation -->
<nav class="mobile-nav" id="mobile-nav" aria-label="Mobile navigation" aria-hidden="true">
    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
    <a href="<?php echo esc_url(home_url('/#pricing')); ?>">Pricing</a>
    <a href="<?php echo esc_url(home_url('/installation-guide/')); ?>">Installation Guide</a>
    <a href="<?php echo esc_url(home_url('/reseller/')); ?>">Reseller</a>
    <?php $pricing = mom_iptv_get_pricing(); ?>
    <a href="<?php echo esc_url($pricing['signin_url']); ?>">Sign In</a>
    <a href="<?php echo esc_url($pricing['subscribe_url']); ?>" class="mobile-cta">Get Started →</a>
</nav>

<main id="main-content" role="main">
