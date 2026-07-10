# Sakshi Infonet — Website

A 4-page Laravel 12 marketing website for **Sakshi Infonet** (Faridabad, Delhi NCR) —
Security · IT Hardware · Communication · Networking Solutions.

## Pages
- **Home** (`/`) — hero, services overview, about, why-choose-us, how-we-work, CTA
- **About Us** (`/about-us`) — story, mission/vision/values, why choose us
- **Services** (`/services`) — detailed CCTV/hardware/communication/networking, FAQ
- **Contact Us** (`/contact-us`) — contact info, working enquiry form, Google Map

## Run locally
```bash
cd sakshi-infonet
php artisan serve --port=8000
```
Then open http://127.0.0.1:8000

> PHP is XAMPP's (`C:\xampp\php\php.exe`). Composer, if needed:
> `php C:\Users\bkvam\composer.phar <command>`

## Edit business details
All company info (phone, email, GST, address, service lists) is in **one file**:
`config/site.php`. Change it there and every page + SEO tag updates automatically.

## Styling
Hand-written CSS in `public/css/style.css` (brand navy `#14245f` + red `#e01a22`).
No `npm` build step is required — `php artisan serve` renders the fully styled site.

## SEO features
- Unique title, meta description & keywords per page
- Open Graph + Twitter Card tags (logo used as share image)
- Canonical URLs, geo tags (Faridabad / Delhi NCR)
- JSON-LD structured data (LocalBusiness + Service schema)
- `/sitemap.xml` and `public/robots.txt`

## Contact form
Submissions are validated and logged to `storage/logs/laravel.log`.
To email enquiries instead, configure mail in `.env` and update
`PageController@contactSubmit`.
