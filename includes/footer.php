<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-brand">
            <a href="index.php" aria-label="Pedima Enterprises — nyumbani">
                <img class="footer-logo" src="assets/logo/pedima-white-trans.png" alt="PEDIMA" width="180" height="39">
            </a>
            <p class="footer-tag" data-sw="Karibu kwenye familia kubwa. Line ya uwakala na Lipa Namba — Tanzania Nzima." data-en="Welcome to the big family. Agent lines and Lipa numbers — across Tanzania.">Karibu kwenye familia kubwa. Line ya uwakala na Lipa Namba — Tanzania Nzima.</p>
        </div>
        <nav class="footer-col" aria-label="Footer">
            <h2 data-sw="Kurasa" data-en="Pages">Kurasa</h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#huduma">Services</a></li>
                <li><a href="index.php#kuhusu" data-sw="Kuhusu" data-en="About">Kuhusu</a></li>
                <li><a href="contact.php" data-sw="Mawasiliano" data-en="Contact Us">Mawasiliano</a></li>
            </ul>
        </nav>
        <div class="footer-col">
            <h2 data-sw="Wasiliana" data-en="Contact">Wasiliana</h2>
            <ul class="footer-contact">
                <li>
                    <span class="footer-label">WhatsApp</span>
                    <a href="<?= htmlspecialchars($waPrimary, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer"><?= htmlspecialchars($config['whatsapp_primary_display'], ENT_QUOTES, 'UTF-8') ?></a>
                </li>
                <li>
                    <span class="footer-label">Instagram</span>
                    <a href="<?= htmlspecialchars($config['instagram'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">@<?= htmlspecialchars($config['handle'], ENT_QUOTES, 'UTF-8') ?></a>
                </li>
                <li>
                    <span class="footer-label" data-sw="Ofisi" data-en="Office">Ofisi</span>
                    <a href="<?= htmlspecialchars($config['maps_place'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer"><?= htmlspecialchars($config['address_display_sw'], ENT_QUOTES, 'UTF-8') ?></a>
                </li>
                <li>
                    <span class="footer-label" data-sw="Tovuti" data-en="Website">Tovuti</span>
                    <span><?= htmlspecialchars($config['listed_website'], ENT_QUOTES, 'UTF-8') ?></span>
                </li>
            </ul>
        </div>
        <div class="footer-col">
            <h2 data-sw="Huduma" data-en="Service">Huduma</h2>
            <ul>
                <li data-sw="Masaa 24" data-en="24 hours">Masaa 24</li>
                <li data-sw="Tanzania Nzima" data-en="Across Tanzania">Tanzania Nzima</li>
                <li data-sw="Line ya uwakala" data-en="Agent lines">Line ya uwakala</li>
                <li>Lipa Namba</li>
            </ul>
        </div>
    </div>
    <div class="container footer-bar">
        <p class="footer-networks-label" data-sw="Mitandao" data-en="Networks">Mitandao</p>
        <?php
        $network_variant = 'footer';
        require __DIR__ . '/network-logos.php';
        ?>
        <div class="footer-bottom">
            <p>© <?= date('Y') ?> Pedima Enterprises.</p>
            <p class="source-note" data-sw="Maudhui yanafuata @pedima_enterprises." data-en="Content follows @pedima_enterprises.">Maudhui yanafuata @pedima_enterprises.</p>
        </div>
    </div>
</footer>

<a class="float-wa" href="<?= htmlspecialchars($waPrimary, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer" data-sw="WhatsApp Pedima" data-en="WhatsApp Pedima" aria-label="WhatsApp Pedima Enterprises">
    <img src="assets/icons/whatsapp-white.png" alt="" width="28" height="28">
</a>

<script src="js/main.js" defer></script>
</body>
</html>
