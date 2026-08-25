<?php
http_response_code(404);
$config = require __DIR__ . '/includes/config.php';
$page = 'home';
$waPrimary = 'https://wa.me/' . $config['whatsapp_primary'];
require __DIR__ . '/includes/header.php';
?>
<main id="main">
    <section class="page-hero">
        <div class="container">
            <h1>404</h1>
            <p class="lead" data-sw="Ukurasa haujapatikana." data-en="Page not found.">Ukurasa haujapatikana.</p>
            <a class="btn btn-primary" href="index.php" data-sw="Rudi nyumbani" data-en="Back home">Rudi nyumbani</a>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
