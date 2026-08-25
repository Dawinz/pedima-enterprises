# Pedima Enterprises website

Official site for **Pedima Enterprises** — line ya uwakala and Lipa Namba, Tanzania Nzima.

Local preview:

```bash
php -S localhost:8080 router.php
```

Then open http://localhost:8080

## What to upload to cPanel

This is PHP + HTML + CSS + JS. **No Node.js build** is required.

Upload these into `public_html` (or the addon-domain folder):

```
public_html/
  .htaccess          ← required (enable “Show Hidden Files” in File Manager)
  index.php
  contact.php
  404.php
  robots.txt
  sitemap.xml
  css/
  js/
  assets/
  includes/
```

You do **not** need to upload:

- `docs/`
- `assets/instagram/` (original Instagram downloads)
- `assets/logos/seek/` (logo source copies)
- `tmp-ig/`
- `router.php` (only used for local `php -S`)
- `README.md`

PHP **7.4+ or 8.x** is enough. Pretty URLs (`/contact`) need Apache `mod_rewrite`, which cPanel usually has on.

---

## Host on cPanel — File Manager (easiest)

1. In GitHub, open the repo → **Code** → **Download ZIP**. Unzip it on your computer.
2. Log in to **cPanel**.
3. Open **File Manager**.
4. Go to `public_html` for the main domain, **or** the folder shown for `pedima.co.tz` if it is an addon / parked domain.
5. Top-right: **Settings** → tick **Show Hidden Files (dotfiles)** → Save. You need this so `.htaccess` is visible and uploads correctly.
6. If `public_html` still has a default `index.html` from the host, delete or rename it so it does not override `index.php`.
7. Upload the site files listed above. Either:
   - zip the project on your computer, upload the zip, then **Extract**, or
   - upload folders one by one.
8. Confirm `.htaccess` is in the same folder as `index.php`.
9. In cPanel, open **Select PHP Version** (or MultiPHP) and choose **8.1**, **8.2**, or **8.3**.
10. Visit `https://www.pedima.co.tz/` and `https://www.pedima.co.tz/contact`.
11. If the browser warns about HTTP, use **SSL/TLS Status** or **Let’s Encrypt** in cPanel and force HTTPS.

## Host on cPanel — Git Version Control

The GitHub repo is **private**, so cPanel must use **SSH**, not HTTPS.

1. In cPanel open **SSH Access** → generate a key **with no passphrase** → **Authorize** it → **View/Download** the **public** key.
2. On GitHub: https://github.com/Dawinz/pedima-enterprises/settings/keys → **Add deploy key** → paste the public key. Read-only is enough.
3. In **Git Version Control** → **Create**, fill:

   - **Clone a Repository:** on
   - **Clone URL:** `ssh://git@github.com/Dawinz/pedima-enterprises.git`
   - **Repository Path:** `/home/pedimaco/pedima-enterprises`

   Do **not** set the path to `public_html`. That folder is the live site; Git should live beside it.
4. Click **Create**.
5. Open the repo → **Pull or Deploy** → **Deploy HEAD Commit**.

`.cpanel.yml` copies the site files into `/home/pedimaco/public_html/`.

Later updates: pull from remote, then deploy again.

## After it is live

- Home: `https://www.pedima.co.tz/`
- Contact: `https://www.pedima.co.tz/contact`
- WhatsApp and the map should open from the contact page.

Edit `includes/config.php` to change WhatsApp, address, services, and news.

If CSS or images look old after an update, hard-refresh the browser (`Cmd+Shift+R`) or clear the host cache.
