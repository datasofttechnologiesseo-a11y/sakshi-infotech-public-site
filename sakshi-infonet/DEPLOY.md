# Sakshi Infonet — Production Deploy Checklist

Go-live steps for the Laravel site. Work top to bottom.

## 1. Environment (`.env` on the server) — REQUIRED

These are the launch-blockers. Edit `.env` on the production server:

```env
APP_NAME="Sakshi Infonet"
APP_ENV=production          # was: local
APP_DEBUG=false             # was: true  — CRITICAL, never true in production
APP_URL=https://YOURDOMAIN  # was: http://localhost:8000 — use the real https domain
```

- `APP_DEBUG=false` — with `true`, any error shows a full stack trace exposing `.env`
  values and secrets to visitors. Must be `false`.
- `APP_URL` drives the sitemap, canonical tags and social-share (OG) URLs. If it is
  left as localhost, Google and Facebook will index/preview `127.0.0.1`.
- Keep `APP_KEY` as-is (already set). If regenerating: `php artisan key:generate`.

## 2. Email — so enquiries actually arrive — REQUIRED

The contact form now (a) saves every enquiry to the `enquiries` DB table and
(b) emails `sakshiinfonet@gmail.com`. Email only sends once SMTP is configured:

```env
MAIL_MAILER=smtp            # was: log (log = goes nowhere)
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=sakshiinfonet@gmail.com
MAIL_PASSWORD="<gmail app password>"   # NOT the normal password — see note
MAIL_SCHEME=tls
MAIL_FROM_ADDRESS="sakshiinfonet@gmail.com"
MAIL_FROM_NAME="Sakshi Infonet Website"
```

- Gmail needs an **App Password** (Google Account → Security → 2-Step Verification →
  App passwords), not the account password.
- Alternatively use the hosting provider's SMTP or a service like Brevo/Mailgun.
- Even if email is misconfigured, no lead is lost — every enquiry is stored in the DB.
  View them with: `php artisan tinker` then `App\Models\Enquiry::latest()->get();`

## 3. Real content — RECOMMENDED

- **Social links** in `config/site.php` (`social.facebook/instagram/linkedin`) are
  placeholder homepages. Set the real profile URLs, or remove the icons from
  `resources/views/partials/footer.blade.php`. WhatsApp is already correct.

## 4. Build & cache (run on the server after each deploy)

```bash
composer install --no-dev --optimize-autoloader
php artisan migrate --force        # creates the enquiries table on first deploy
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

If content/config changes later, clear caches: `php artisan optimize:clear`.

## 5. Server / hosting

- Serve over **HTTPS** (SSL certificate). Point the web root at `public/`.
- Ensure `storage/` and `bootstrap/cache/` are writable by the web server.
- Database: SQLite (`database/database.sqlite`) is fine for this traffic level —
  make sure the file is writable and **included in backups**. For higher traffic,
  switch `DB_CONNECTION` to MySQL.
- Set up a cron for the scheduler only if you add scheduled tasks (not required now).

## 6. Post-launch smoke test

- [ ] Every page loads over https with no errors
- [ ] Submit the contact form → success message shows, email arrives, DB row created
- [ ] `https://YOURDOMAIN/sitemap.xml` lists the real domain (not localhost)
- [ ] `https://YOURDOMAIN/robots.txt` loads
- [ ] Trigger a 404 (e.g. /nope) → styled 404, no stack trace (confirms APP_DEBUG=false)
- [ ] Submit the sitemap in Google Search Console
- [ ] Check the site on mobile
