<?php
if (!isset($config)) {
    $config = require __DIR__ . '/config.php';
}
$page = $page ?? 'home';
$waPrimary = 'https://wa.me/' . $config['whatsapp_primary'];
$titles = [
    'home' => 'Pedima Enterprises | Line ya uwakala na Lipa Namba — Tanzania Nzima',
    'contact' => 'Wasiliana nasi | Pedima Enterprises, Tegeta Kibaoni',
];
$descriptions = [
    'home' => 'Karibu tukupatie line ya uwakala bure kabisa ndani ya masaa 24. Mitandao yote ya simu Tanzania. WhatsApp 0626 421 887.',
    'contact' => 'Wasiliana na Pedima Enterprises, Tegeta Kibaoni, Bagamoyo Rd, Dar es Salaam. WhatsApp 0626 421 887.',
];
$title = $titles[$page] ?? $titles['home'];
$description = $descriptions[$page] ?? $descriptions['home'];
$canonical = rtrim($config['site_url'], '/') . ($page === 'home' ? '/' : '/' . $page);
$ogImage = rtrim($config['site_url'], '/') . '/assets/images/hero-professionals.jpg';
$networksById = $config['brands'];
?>
<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?>">
    <link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="robots" content="index,follow">
    <meta name="theme-color" content="#0B0E13">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Pedima Enterprises">
    <meta property="og:title" content="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:description" content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:image" content="<?= htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:locale" content="sw_TZ">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/logo/favicon-32.png">
    <link rel="apple-touch-icon" href="assets/logo/apple-touch.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script type="application/ld+json">
    <?= json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'Pedima Enterprises',
        'url' => $config['site_url'],
        'logo' => rtrim($config['site_url'], '/') . '/assets/logo/pedima-navy-trans.png',
        'sameAs' => [$config['instagram']],
        'areaServed' => ['@type' => 'Country', 'name' => 'Tanzania'],
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => $config['address_line'],
            'addressLocality' => $config['address_city'],
            'addressCountry' => 'TZ',
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => $config['geo_lat'],
            'longitude' => $config['geo_lng'],
        ],
        'contactPoint' => [[
            '@type' => 'ContactPoint',
            'contactType' => 'customer service',
            'telephone' => '+255626421887',
            'availableLanguage' => ['sw', 'en'],
        ]],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
    </script>
</head>
<body>
<a class="skip-link" href="#main">Ruka kwenda maudhui</a>
<header class="site-header" id="top">
    <div class="container header-inner">
        <a class="logo" href="index.php" aria-label="Pedima Enterprises — nyumbani">
            <img src="assets/logo/pedima-white-trans.png" alt="PEDIMA" width="168" height="35">
        </a>
        <nav class="nav" id="site-nav" aria-label="Main menu">
            <?php $home = $page === 'home' ? '' : 'index.php'; ?>
            <a href="index.php" <?= $page === 'home' ? 'aria-current="page"' : '' ?>>Home</a>
            <a href="<?= $home ?>#huduma">Services</a>
            <a href="contact.php" <?= $page === 'contact' ? 'aria-current="page"' : '' ?>>Contact Us</a>
        </nav>
        <div class="header-actions">
            <div class="lang-switch" role="group" aria-label="Language">
                <button type="button" data-lang="sw" class="is-active" aria-label="Kiswahili">
                    <img src="assets/icons/flag-tz.png" alt="" width="18" height="18">
                    <span>SW</span>
                </button>
                <button type="button" data-lang="en" aria-label="English">
                    <img src="assets/icons/flag-gb.png" alt="" width="18" height="18">
                    <span>EN</span>
                </button>
            </div>
            <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="site-nav" aria-label="Open menu">
                <img class="icon-menu" src="assets/icons/menu-white.png" alt="" width="24" height="24">
                <img class="icon-close" src="assets/icons/close-white.png" alt="" width="24" height="24">
            </button>
        </div>
    </div>
</header>
