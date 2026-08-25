<?php
$config = require __DIR__ . '/includes/config.php';
$page = 'home';
$waPrimary = 'https://wa.me/' . $config['whatsapp_primary'];
require __DIR__ . '/includes/header.php';

$months = [
    '01' => 'Januari', '02' => 'Februari', '03' => 'Machi', '04' => 'Aprili',
    '05' => 'Mei', '06' => 'Juni', '07' => 'Julai', '08' => 'Agosti',
    '09' => 'Septemba', '10' => 'Oktoba', '11' => 'Novemba', '12' => 'Desemba',
];
?>
<main id="main">
    <section class="hero">
        <div class="container hero-layout">
            <div class="hero-copy reveal">
                <p class="kicker">— Welcome to Pedima Enterprises</p>
                <h1>
                    <span data-sw="Karibu Tukupatie " data-en="Welcome — get ">Karibu Tukupatie </span>
                    <span class="accent" data-sw="Line ya Uwakala Bure" data-en="a free agent line">Line ya Uwakala Bure</span>
                    <span data-sw=" na " data-en=" and "> na </span>
                    <span class="accent" data-sw="Huduma ya Masaa 24" data-en="24-hour service">Huduma ya Masaa 24</span>
                </h1>
                <p class="lead" data-sw="Huduma za kifedha zinazokupa urahisi, usalama na fursa zaidi kupitia mitandao yote ya simu Tanzania." data-en="Financial services that give you ease, security and more opportunity across all mobile networks in Tanzania.">Huduma za kifedha zinazokupa urahisi, usalama na fursa zaidi kupitia mitandao yote ya simu Tanzania.</p>
                <div class="hero-actions">
                    <a class="btn btn-primary" href="contact.php">
                        <span data-sw="Wasiliana nasi" data-en="Contact Us">Wasiliana nasi</span>
                        <img src="assets/icons/arrow-white.png" alt="" width="16" height="16">
                    </a>
                    <a class="btn btn-outline-orange" href="#huduma">
                        <span>Our Services</span>
                        <img src="assets/icons/arrow-orange.png" alt="" width="16" height="16">
                    </a>
                </div>
            </div>
            <div class="hero-visual reveal">
                <img class="hero-photo" src="assets/images/hero-professionals.jpg" alt="Timu ya Pedima Enterprises" width="1200" height="800">
                <aside class="float-cards">
                    <article class="float-card">
                        <div class="icon-bubble"><img src="assets/icons/exchange-orange.png" alt="" width="20" height="20"></div>
                        <div>
                            <h3>Float Services</h3>
                            <p data-sw="Fanya miamala ya float kupitia mitandao yote ya simu." data-en="Run float transactions across all mobile networks.">Fanya miamala ya float kupitia mitandao yote ya simu.</p>
                        </div>
                    </article>
                    <article class="float-card">
                        <div class="icon-bubble"><img src="assets/icons/user-orange.png" alt="" width="20" height="20"></div>
                        <div>
                            <h3>Mobile Money Agents</h3>
                            <p data-sw="Jiunge na HaloPesa na kukuza biashara yako ya uwakala." data-en="Join HaloPesa and grow your agency business.">Jiunge na HaloPesa na kukuza biashara yako ya uwakala.</p>
                        </div>
                    </article>
                    <article class="float-card">
                        <div class="icon-bubble"><img src="assets/icons/qr-orange.png" alt="" width="20" height="20"></div>
                        <div>
                            <h3>Lipa Namba</h3>
                            <p>Lipa bili na nunua bidhaa kupitia <strong class="mpesa-name">M-Pesa</strong> na <strong class="halotel-name">HaloTel</strong> Lipa Namba.</p>
                        </div>
                    </article>
                </aside>
            </div>
        </div>
        <div class="container network-wrap">
            <div class="reveal">
                <?php require __DIR__ . '/includes/network-logos.php'; ?>
            </div>
        </div>
    </section>

    <section class="stats-bar" aria-label="Takwimu">
        <div class="container stats-grid">
            <article class="stat">
                <img src="assets/icons/people-gold.png" alt="">
                <strong>2,000+</strong>
                <span data-sw="Mawakala waliojiunga" data-en="Agents joined">Mawakala waliojiunga</span>
            </article>
            <article class="stat">
                <img src="assets/icons/location-gold.png" alt="">
                <strong>50+</strong>
                <span data-sw="Maeneo nchini" data-en="Locations nationwide">Maeneo nchini</span>
            </article>
            <article class="stat">
                <img src="assets/icons/money-gold.png" alt="">
                <strong>100K+</strong>
                <span data-sw="Miamala kila siku" data-en="Transactions every day">Miamala kila siku</span>
            </article>
            <article class="stat">
                <img src="assets/icons/clock-gold.png" alt="">
                <strong>24/7</strong>
                <span data-sw="Huduma bila kikomo" data-en="Uninterrupted service">Huduma bila kikomo</span>
            </article>
            <article class="stat">
                <img src="assets/icons/shield-gold.png" alt="">
                <strong>100%</strong>
                <span data-sw="Usalama na uaminifu" data-en="Safety and trust">Usalama na uaminifu</span>
            </article>
        </div>
    </section>

    <section class="section" id="kuhusu">
        <div class="container split">
            <figure class="reveal">
                <img src="assets/images/about-office.jpg" alt="Mteja akitumia huduma ya malipo kwenye simu" width="1200" height="800">
            </figure>
            <div class="reveal">
                <p class="kicker">About Us</p>
                <h2>Pedima Family</h2>
                <p data-sw="Karibu kwenye familia kubwa upate huduma kadha wa kadha toka Pedima Enterprises." data-en="Welcome to the big family — get various services from Pedima Enterprises.">Karibu kwenye familia kubwa upate huduma kadha wa kadha toka Pedima Enterprises.</p>
                <p data-sw="Pedima Enterprises inakaribisha wateja kupata line ya uwakala bure kabisa ndani ya masaa 24. Huduma za kifedha zinazokupa urahisi, usalama na fursa zaidi — Tanzania Nzima." data-en="Pedima Enterprises welcomes people to get an agent line completely free within 24 hours. Financial services that give you ease, security and more opportunity — across Tanzania.">Pedima Enterprises inakaribisha wateja kupata line ya uwakala bure kabisa ndani ya masaa 24. Huduma za kifedha zinazokupa urahisi, usalama na fursa zaidi — Tanzania Nzima.</p>
                <a class="btn btn-primary" href="contact.php">
                    <span data-sw="Wasiliana nasi" data-en="Contact Us">Wasiliana nasi</span>
                    <img src="assets/icons/arrow-white.png" alt="" width="14" height="14">
                </a>
            </div>
        </div>
        <div class="container quote-grid mt">
            <blockquote class="reveal">
                <p>“Karibu tukupatie line ya uwakala Bure kabisa ndani ya masaa 24”</p>
            </blockquote>
            <blockquote class="reveal">
                <p>“Tupo tayari kukusajili haraka na urahisi”</p>
            </blockquote>
            <blockquote class="reveal">
                <p>“Kuwa wa tofauti ukiwa nasi”</p>
            </blockquote>
            <blockquote class="reveal">
                <p>“Kila siku mpya inakuja na baraka zake”</p>
            </blockquote>
        </div>
    </section>

    <section class="section muted" id="huduma">
        <div class="container">
            <div class="section-head reveal">
                <p class="kicker">Services</p>
                <h2 data-sw="Uwakala na Lipa Namba" data-en="Agent lines and Lipa numbers">Uwakala na Lipa Namba</h2>
                <p class="lead" data-sw="Line ya uwakala, Lipa Namba, na fursa kwa vijana — bure kabisa ndani ya masaa 24." data-en="Agent lines, Lipa numbers, and opportunities for young people — completely free within 24 hours.">Line ya uwakala, Lipa Namba, na fursa kwa vijana — bure kabisa ndani ya masaa 24.</p>
            </div>
            <div class="card-grid">
                <?php foreach ($config['services'] as $service): ?>
                    <article class="service-card reveal" id="<?= htmlspecialchars($service['id'], ENT_QUOTES, 'UTF-8') ?>">
                        <?php if (!empty($service['logos'])): ?>
                            <div class="brand-logos">
                                <?php foreach ($service['logos'] as $logoId): ?>
                                    <?php if (!empty($networksById[$logoId])): $brand = $networksById[$logoId]; ?>
                                        <img
                                            class="network-logo network-logo--<?= htmlspecialchars($brand['shape'], ENT_QUOTES, 'UTF-8') ?>"
                                            src="<?= htmlspecialchars($brand['logo'], ENT_QUOTES, 'UTF-8') ?>"
                                            alt="<?= htmlspecialchars($brand['alt'], ENT_QUOTES, 'UTF-8') ?>"
                                            width="<?= (int) $brand['width'] ?>"
                                            height="<?= (int) $brand['height'] ?>"
                                        >
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <h3 data-sw="<?= htmlspecialchars($service['name_sw'], ENT_QUOTES, 'UTF-8') ?>" data-en="<?= htmlspecialchars($service['name_en'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($service['name_sw'], ENT_QUOTES, 'UTF-8') ?></h3>
                        <p data-sw="<?= htmlspecialchars($service['desc_sw'], ENT_QUOTES, 'UTF-8') ?>" data-en="<?= htmlspecialchars($service['desc_en'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($service['desc_sw'], ENT_QUOTES, 'UTF-8') ?></p>
                        <a class="text-link" href="<?= htmlspecialchars($waPrimary, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer" data-sw="Jiunge nasi" data-en="Join us">Jiunge nasi</a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section" id="solutions">
        <div class="container">
            <div class="section-head reveal">
                <p class="kicker">Solutions</p>
                <h2 data-sw="Kwa mawakala, biashara na vijana" data-en="For agents, businesses and young people">Kwa mawakala, biashara na vijana</h2>
            </div>
            <div class="card-grid">
                <article class="service-card reveal">
                    <?php
                    $network_variant = 'inline';
                    $network_filter = ['halopesa', 'azampesa'];
                    require __DIR__ . '/includes/network-logos.php';
                    ?>
                    <h3 data-sw="Kwa mawakala" data-en="For agents">Kwa mawakala</h3>
                    <p data-sw="Pata line ya uwakala ya HaloPesa au AzamPesa. Huduma inaelezwa kuwa bure kabisa ndani ya masaa 24." data-en="Get a HaloPesa or AzamPesa agent line. The service is described as completely free within 24 hours.">Pata line ya uwakala ya HaloPesa au AzamPesa. Huduma inaelezwa kuwa bure kabisa ndani ya masaa 24.</p>
                </article>
                <article class="service-card reveal">
                    <?php
                    $network_variant = 'inline';
                    $network_filter = ['mpesa', 'halopesa', 'airtel'];
                    require __DIR__ . '/includes/network-logos.php';
                    ?>
                    <h3 data-sw="Kwa biashara" data-en="For businesses">Kwa biashara</h3>
                    <p data-sw="Pata Lipa Namba ya M-Pesa, HaloPesa au Airtel ili wateja walipie kwa urahisi." data-en="Get an M-Pesa, HaloPesa or Airtel Lipa number so customers can pay easily.">Pata Lipa Namba ya M-Pesa, HaloPesa au Airtel ili wateja walipie kwa urahisi.</p>
                </article>
                <article class="service-card reveal">
                    <?php
                    $network_variant = 'inline';
                    $network_filter = ['azampesa', 'halopesa', 'mpesa', 'airtel'];
                    require __DIR__ . '/includes/network-logos.php';
                    ?>
                    <h3 data-sw="Kwa vijana" data-en="For young people">Kwa vijana</h3>
                    <p data-sw="Tunatoa fursa kwa vijana kufanya kazi chini yetu kwa kutengeneza Lipa Namba na uwakala nchi nzima." data-en="We offer young people the chance to work with us making Lipa numbers and agent lines nationwide.">Tunatoa fursa kwa vijana kufanya kazi chini yetu kwa kutengeneza Lipa Namba na uwakala nchi nzima.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="section muted" id="mahitaji">
        <div class="container split">
            <div class="reveal">
                <p class="kicker">Requirements</p>
                <h2 data-sw="Mahitaji (HaloPesa)" data-en="Requirements (HaloPesa)">Mahitaji (HaloPesa)</h2>
                <ul class="check-list">
                    <?php foreach ($config['requirements'] as $req): ?>
                        <li>
                            <img src="assets/icons/check-orange.png" alt="" width="16" height="16">
                            <span data-sw="<?= htmlspecialchars($req['sw'], ENT_QUOTES, 'UTF-8') ?>" data-en="<?= htmlspecialchars($req['en'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($req['sw'], ENT_QUOTES, 'UTF-8') ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="reveal" id="tariffs">
                <p class="kicker">Tariffs</p>
                <h2 data-sw="Bei na tariffs" data-en="Rates and tariffs">Bei na tariffs</h2>
                <p data-sw="Hatuchapishi jedwali la bei hapa kwa sababu viwango vinaweza kubadilika. Wasiliana nasi ili upate tariffs za sasa." data-en="We do not publish a rate table here because charges can change. Contact us for current tariffs.">Hatuchapishi jedwali la bei hapa kwa sababu viwango vinaweza kubadilika. Wasiliana nasi ili upate tariffs za sasa.</p>
                <a class="btn btn-primary" href="<?= htmlspecialchars($waPrimary, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">
                    WhatsApp <?= htmlspecialchars($config['whatsapp_primary_display'], ENT_QUOTES, 'UTF-8') ?>
                </a>
            </div>
        </div>
    </section>

    <section class="section" id="habari">
        <div class="container">
            <div class="news-head reveal">
                <div>
                    <p class="kicker">— Habari na Updates</p>
                    <h2 data-sw="Habari na updates" data-en="News & updates">Habari na updates</h2>
                </div>
                <a href="<?= htmlspecialchars($config['instagram'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">@<?= htmlspecialchars($config['handle'], ENT_QUOTES, 'UTF-8') ?> →</a>
            </div>
            <div class="news-list news-list-long">
                <?php foreach ($config['updates'] as $update):
                    $ts = strtotime($update['date']);
                    $pretty = $months[date('m', $ts)] . ' ' . date('j, Y', $ts);
                    $href = $update['url'] ?? $config['instagram'];
                ?>
                    <a class="news-item reveal" href="<?= htmlspecialchars($href, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener noreferrer">
                        <img class="news-photo" src="<?= htmlspecialchars($update['image'], ENT_QUOTES, 'UTF-8') ?>" alt="" width="96" height="72">
                        <div>
                            <h3 data-sw="<?= htmlspecialchars($update['title_sw'], ENT_QUOTES, 'UTF-8') ?>" data-en="<?= htmlspecialchars($update['title_en'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($update['title_sw'], ENT_QUOTES, 'UTF-8') ?></h3>
                            <p data-sw="<?= htmlspecialchars($update['excerpt_sw'], ENT_QUOTES, 'UTF-8') ?>" data-en="<?= htmlspecialchars($update['excerpt_en'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($update['excerpt_sw'], ENT_QUOTES, 'UTF-8') ?></p>
                            <time datetime="<?= htmlspecialchars($update['date'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($pretty, ENT_QUOTES, 'UTF-8') ?></time>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="cta-final">
        <div class="container reveal">
            <p class="kicker" data-sw="Jiunge nasi leo" data-en="Join us today">Jiunge nasi leo</p>
            <h2 data-sw="Pata Lipa Namba rahisi" data-en="Get a Lipa number, easily">Pata Lipa Namba rahisi</h2>
            <p data-sw="Wasiliana nasi sasa kupitia WhatsApp." data-en="Contact us now on WhatsApp.">Wasiliana nasi sasa kupitia WhatsApp.</p>
            <a class="btn btn-primary" href="contact.php">
                <span data-sw="Wasiliana nasi" data-en="Contact Us">Wasiliana nasi</span>
                <img src="assets/icons/arrow-white.png" alt="" width="16" height="16">
            </a>
        </div>
    </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
