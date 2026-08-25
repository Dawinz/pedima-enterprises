<?php
$config = require __DIR__ . '/includes/config.php';
$page = 'contact';
$waPrimary = 'https://wa.me/' . $config['whatsapp_primary'];
require __DIR__ . '/includes/header.php';
?>
<main id="main">
    <section class="page-hero contact-hero">
        <div class="container reveal">
            <p class="kicker" data-sw="Mawasiliano" data-en="Contact">Mawasiliano</p>
            <h1 data-sw="Wasiliana nasi" data-en="Get in touch">Wasiliana nasi</h1>
            <p class="lead" data-sw="Tembelea ofisi yetu Tegeta Kibaoni, au tuma ujumbe sasa kupitia WhatsApp." data-en="Visit our office in Tegeta Kibaoni, or message us now on WhatsApp.">Tembelea ofisi yetu Tegeta Kibaoni, au tuma ujumbe sasa kupitia WhatsApp.</p>
        </div>
    </section>

    <section class="section contact-main">
        <div class="container contact-layout">
            <div class="contact-details reveal">
                <article class="contact-row">
                    <div class="icon-chip icon-chip-wa">
                        <img src="assets/icons/whatsapp-color.png" alt="" width="32" height="32">
                    </div>
                    <div>
                        <h2>WhatsApp</h2>
                        <a class="contact-value" href="<?= htmlspecialchars($waPrimary, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer"><?= htmlspecialchars($config['whatsapp_primary_display'], ENT_QUOTES, 'UTF-8') ?></a>
                        <p data-sw="Tuma ujumbe moja kwa moja. Tunajibu haraka." data-en="Message us directly. We reply quickly.">Tuma ujumbe moja kwa moja. Tunajibu haraka.</p>
                    </div>
                </article>
                <article class="contact-row">
                    <div class="icon-chip icon-chip-ig">
                        <img src="assets/icons/instagram-color.png" alt="" width="32" height="32">
                    </div>
                    <div>
                        <h2>Instagram</h2>
                        <a class="contact-value" href="<?= htmlspecialchars($config['instagram'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">@<?= htmlspecialchars($config['handle'], ENT_QUOTES, 'UTF-8') ?></a>
                        <p data-sw="Akaunti rasmi ya Pedima Enterprises." data-en="The official Pedima Enterprises account.">Akaunti rasmi ya Pedima Enterprises.</p>
                    </div>
                </article>
                <article class="contact-row">
                    <div class="icon-chip icon-chip-pin">
                        <img src="assets/icons/location-color.png" alt="" width="32" height="32">
                    </div>
                    <div>
                        <h2 data-sw="Ofisi" data-en="Office">Ofisi</h2>
                        <p class="contact-value" data-sw="<?= htmlspecialchars($config['address_display_sw'], ENT_QUOTES, 'UTF-8') ?>" data-en="<?= htmlspecialchars($config['address_display_en'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($config['address_display_sw'], ENT_QUOTES, 'UTF-8') ?></p>
                        <p data-sw="Huduma inaendelea Tanzania Nzima." data-en="Service continues across Tanzania.">Huduma inaendelea Tanzania Nzima.</p>
                    </div>
                </article>
                <article class="contact-row">
                    <div class="icon-chip icon-chip-clock">
                        <img src="assets/icons/clock-color.png" alt="" width="32" height="32">
                    </div>
                    <div>
                        <h2 data-sw="Saa za huduma" data-en="Hours">Saa za huduma</h2>
                        <p class="contact-value" data-sw="Masaa 24" data-en="24 hours">Masaa 24</p>
                        <p data-sw="Line ya uwakala na Lipa Namba ndani ya masaa 24." data-en="Agent lines and Lipa numbers within 24 hours.">Line ya uwakala na Lipa Namba ndani ya masaa 24.</p>
                    </div>
                </article>
                <article class="contact-row">
                    <div class="icon-chip icon-chip-web">
                        <img src="assets/icons/website-color.png" alt="" width="32" height="32">
                    </div>
                    <div>
                        <h2 data-sw="Tovuti" data-en="Website">Tovuti</h2>
                        <p class="contact-value"><?= htmlspecialchars($config['listed_website'], ENT_QUOTES, 'UTF-8') ?></p>
                    </div>
                </article>
                <a class="btn btn-primary" href="<?= htmlspecialchars($config['maps_directions'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">
                    <img src="assets/icons/map-color.png" alt="" width="18" height="18">
                    <span data-sw="Pata mwongozo" data-en="Get directions">Pata mwongozo</span>
                </a>
            </div>
            <div class="contact-map reveal">
                <iframe
                    title="Pedima Enterprises, Tegeta Kibaoni, Dar es Salaam"
                    src="<?= htmlspecialchars($config['maps_embed'], ENT_QUOTES, 'UTF-8') ?>"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen
                ></iframe>
            </div>
        </div>
    </section>

    <section class="section muted">
        <div class="container contact-form-card reveal">
            <div class="contact-form-intro">
                <div class="icon-chip icon-chip-wa">
                    <img src="assets/icons/whatsapp-color.png" alt="" width="32" height="32">
                </div>
                <h2 data-sw="Tuma ujumbe kwa WhatsApp" data-en="Send a WhatsApp message">Tuma ujumbe kwa WhatsApp</h2>
                <p data-sw="Jaza fomu. Ujumbe wako utafunguka moja kwa moja kwenye WhatsApp." data-en="Fill in the form. Your message will open directly in WhatsApp.">Jaza fomu. Ujumbe wako utafunguka moja kwa moja kwenye WhatsApp.</p>
            </div>
            <form id="wa-form" class="wa-form" data-wa="<?= htmlspecialchars($config['whatsapp_primary'], ENT_QUOTES, 'UTF-8') ?>">
                <div class="field">
                    <label for="name" data-sw="Jina" data-en="Name">Jina</label>
                    <input id="name" name="name" type="text" autocomplete="name" required>
                </div>
                <div class="field">
                    <label for="need" data-sw="Unahitaji nini?" data-en="What do you need?">Unahitaji nini?</label>
                    <select id="need" name="need">
                        <option value="Uwakala wa HaloPesa">Uwakala wa HaloPesa</option>
                        <option value="Lipa Namba ya HaloPesa">Lipa Namba ya HaloPesa</option>
                        <option value="M-Pesa Lipa Namba">M-Pesa Lipa Namba</option>
                        <option value="AzamPesa">AzamPesa</option>
                        <option value="Airtel Lipa / Lipa Voda">Airtel Lipa / Lipa Voda</option>
                        <option value="Fursa kwa vijana">Fursa kwa vijana</option>
                        <option value="Nyingine">Nyingine</option>
                    </select>
                </div>
                <div class="field">
                    <label for="message" data-sw="Ujumbe" data-en="Message">Ujumbe</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>
                <button class="btn btn-primary" type="submit">
                    <img src="assets/icons/whatsapp-color.png" alt="" width="20" height="20">
                    <span data-sw="Tuma kwa WhatsApp" data-en="Send on WhatsApp">Tuma kwa WhatsApp</span>
                </button>
            </form>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
