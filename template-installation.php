<?php
/**
 * Installation Guide Page Template
 * Template Name: Installation Guide
 *
 * @package MomIPTV
 */

get_header();
$pricing = mom_iptv_get_pricing();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="shell">
        <div class="hero-badge" style="justify-content:center; margin-bottom:1.5rem;">
            📖 Setup Guide
        </div>
        <h1>Installation <span class="gradient-text">Guide</span></h1>
        <p>Get started with Mom IPTV in minutes. Follow our step-by-step setup instructions for any device.</p>
    </div>
</section>

<!-- Device Selector -->
<section class="section-pad">
    <div class="shell">
        <div class="device-tabs-guide" role="tablist" aria-label="Select your device">
            <?php
            $guide_devices = [
                ['id' => 'firestick',  'label' => '🔥 Fire Stick'],
                ['id' => 'android',   'label' => '📱 Android'],
                ['id' => 'ios',       'label' => '🍎 iOS'],
                ['id' => 'smart-tv',  'label' => '📺 Smart TV'],
                ['id' => 'pc-mac',    'label' => '💻 PC / Mac'],
                ['id' => 'mag',       'label' => '📡 MAG Box'],
                ['id' => 'apple-tv',  'label' => '🍏 Apple TV'],
            ];
            foreach ($guide_devices as $i => $gd) :
            ?>
                <button
                    type="button"
                    class="guide-device-tab <?php echo $i === 0 ? 'active' : ''; ?>"
                    data-guide-device="<?php echo esc_attr($gd['id']); ?>"
                    role="tab"
                    aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>"
                ><?php echo $gd['label']; ?></button>
            <?php endforeach; ?>
        </div>

        <!-- Guide Steps — Fire Stick (Default) -->
        <div class="guide-steps" id="guide-firestick">
            <h2 style="font-size:1.5rem; margin-bottom:2rem; color:var(--brand-cyan);">Amazon Fire TV Stick Setup</h2>

            <?php
            $firestick_steps = [
                ['title' => 'Enable Apps from Unknown Sources',   'desc' => 'Go to Settings → My Fire TV → Developer Options, then enable "Apps from Unknown Sources" and "ADB Debugging".'],
                ['title' => 'Install Downloader App',             'desc' => 'Search for "Downloader" in the Amazon App Store and install it. This app lets you install APKs from external URLs.'],
                ['title' => 'Download IPTV Player',               'desc' => 'Open Downloader and enter the URL for IPTV Smarters Pro or TiviMate. Follow the installation prompts.'],
                ['title' => 'Enter Your Credentials',             'desc' => 'Open the IPTV player, select "Add Playlist/Xtream Codes", and enter the server URL, username, and password from your welcome email.'],
                ['title' => 'Start Streaming',                    'desc' => 'Once your playlist loads, browse through 50,000+ channels, movies, and series. Enjoy!'],
            ];
            foreach ($firestick_steps as $i => $step) :
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

        <!-- Guide Steps — Android -->
        <div class="guide-steps" id="guide-android" style="display:none;">
            <h2 style="font-size:1.5rem; margin-bottom:2rem; color:var(--brand-cyan);">Android Device Setup</h2>
            <?php
            $android_steps = [
                ['title' => 'Enable Unknown Sources',        'desc' => 'Go to Settings → Security → Enable "Install unknown apps" for your browser or file manager.'],
                ['title' => 'Download IPTV Player',          'desc' => 'Download IPTV Smarters Pro or TiviMate from the Google Play Store or from the official website.'],
                ['title' => 'Add Your Subscription',         'desc' => 'Open the app and choose "Add Playlist via Xtream Codes". Enter your server URL, username, and password.'],
                ['title' => 'Load Your Content',             'desc' => 'Wait for the app to sync your channels, movies, and series. This typically takes 1-2 minutes.'],
                ['title' => 'Enjoy Streaming',               'desc' => 'Browse your content library and start streaming in full HD or 4K quality.'],
            ];
            foreach ($android_steps as $i => $step) :
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

        <!-- Guide Steps — iOS -->
        <div class="guide-steps" id="guide-ios" style="display:none;">
            <h2 style="font-size:1.5rem; margin-bottom:2rem; color:var(--brand-cyan);">iPhone / iPad Setup</h2>
            <?php
            $ios_steps = [
                ['title' => 'Download GSE Smart IPTV or iPlayTV', 'desc' => 'Open the App Store and search for "GSE Smart IPTV" or "iPlayTV". Both are excellent IPTV players for iOS.'],
                ['title' => 'Open the App',                        'desc' => 'Launch the IPTV player app and navigate to the playlist/settings section.'],
                ['title' => 'Add Xtream Codes',                    'desc' => 'Select "Add Xtream Codes API" and enter your server URL, username, and password from your welcome email.'],
                ['title' => 'Sync Your Content',                   'desc' => 'The app will download your channel list, EPG, and VOD content. This may take a few minutes.'],
                ['title' => 'Start Watching',                      'desc' => 'You\'re all set! Browse and enjoy thousands of live channels and on-demand content.'],
            ];
            foreach ($ios_steps as $i => $step) :
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

        <!-- Guide Steps — Smart TV -->
        <div class="guide-steps" id="guide-smart-tv" style="display:none;">
            <h2 style="font-size:1.5rem; margin-bottom:2rem; color:var(--brand-cyan);">Smart TV Setup (Samsung / LG / Sony)</h2>
            <?php
            $smarttv_steps = [
                ['title' => 'Open the App Store',       'desc' => 'On your Smart TV, navigate to the app store (Samsung App Store, LG Content Store, or Google Play).'],
                ['title' => 'Search for IPTV Player',   'desc' => 'Search for "IPTV Smarters", "Smart IPTV", or "SS IPTV". Install your preferred player.'],
                ['title' => 'Note your MAC Address',    'desc' => 'Some apps require your TV MAC address for activation. Find it in the app\'s main screen or your TV\'s network settings.'],
                ['title' => 'Enter Your Credentials',   'desc' => 'Navigate to the app settings and add your Xtream Codes credentials: server URL, username, and password.'],
                ['title' => 'Enjoy on the Big Screen',  'desc' => 'Browse your channel list and start streaming in stunning 4K quality on your Smart TV.'],
            ];
            foreach ($smarttv_steps as $i => $step) :
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

        <!-- Guide Steps — PC/Mac -->
        <div class="guide-steps" id="guide-pc-mac" style="display:none;">
            <h2 style="font-size:1.5rem; margin-bottom:2rem; color:var(--brand-cyan);">PC / Mac Setup</h2>
            <?php
            $pc_steps = [
                ['title' => 'Download VLC Media Player',      'desc' => 'Download and install VLC from videolan.org. It\'s free, open-source, and works on Windows, macOS, and Linux.'],
                ['title' => 'Open Network Stream',            'desc' => 'In VLC, go to Media → Open Network Stream (or press Ctrl+N on Windows, Cmd+N on Mac).'],
                ['title' => 'Enter Your M3U URL',             'desc' => 'Paste your M3U playlist URL from your welcome email into the Network URL field. You can also use Xtream Codes in dedicated apps like IPTV Player.'],
                ['title' => 'Load Channels',                  'desc' => 'Click Play and VLC will load your M3U playlist. You can navigate through channels from the playlist panel.'],
                ['title' => 'Alternative: Use IPTV Player',   'desc' => 'For a better experience, use a dedicated IPTV player like Kodi (with PVR IPTV Simple plugin) or a browser-based IPTV player.'],
            ];
            foreach ($pc_steps as $i => $step) :
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

        <!-- Guide Steps — MAG Box -->
        <div class="guide-steps" id="guide-mag" style="display:none;">
            <h2 style="font-size:1.5rem; margin-bottom:2rem; color:var(--brand-cyan);">MAG Box Setup</h2>
            <?php
            $mag_steps = [
                ['title' => 'Find Your MAG MAC Address',      'desc' => 'Power on your MAG box and note the MAC address displayed on the screen during startup, or find it in Settings → System Settings.'],
                ['title' => 'Provide MAC to Support',         'desc' => 'After subscribing, send your MAG MAC address to our support team via live chat for portal activation.'],
                ['title' => 'Configure Portal URL',           'desc' => 'Go to Settings → Servers → Portals in your MAG box and enter the portal URL provided in your welcome email.'],
                ['title' => 'Restart Your MAG Box',           'desc' => 'Restart the device to apply the new portal settings. The MAG box will connect to our server automatically.'],
                ['title' => 'Start Streaming',                'desc' => 'Browse through live TV, VOD, and series on your MAG box using the remote control.'],
            ];
            foreach ($mag_steps as $i => $step) :
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

        <!-- Guide Steps — Apple TV -->
        <div class="guide-steps" id="guide-apple-tv" style="display:none;">
            <h2 style="font-size:1.5rem; margin-bottom:2rem; color:var(--brand-cyan);">Apple TV Setup</h2>
            <?php
            $appletv_steps = [
                ['title' => 'Open the App Store',             'desc' => 'On your Apple TV, navigate to the App Store using the remote.'],
                ['title' => 'Search for IPTV Player',         'desc' => 'Search for "GSE Smart IPTV" or "iPlayTV" and install the app.'],
                ['title' => 'Add Your Subscription',          'desc' => 'Open the app, go to Remote URL or Xtream Codes, and add your subscription credentials.'],
                ['title' => 'Sync and Browse',                'desc' => 'Allow the app to sync your channel list, EPG, and movie library.'],
                ['title' => 'Enjoy 4K Streaming',             'desc' => 'Apple TV 4K supports native 4K playback. Enjoy crystal clear content on your big screen.'],
            ];
            foreach ($appletv_steps as $i => $step) :
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

        <!-- Need Help CTA -->
        <div class="card" style="text-align:center; padding:3rem; margin-top:3rem; background:var(--bg-card-hi); border-color:var(--border-accent);">
            <p style="font-size:1.25rem; font-weight:700; margin-bottom:0.75rem;">Still need help?</p>
            <p style="color:var(--text-muted); margin-bottom:2rem;">Our 24/7 support team is ready to assist you with any setup issues.</p>
            <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
                <a href="<?php echo esc_url($pricing['subscribe_url']); ?>" class="btn-primary">Start Free Trial</a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn-ghost">Contact Support</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
