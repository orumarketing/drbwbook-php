# Manual upload checklist — sync live server to repo HEAD

**Created:** 2026-06-11
**Why:** The live server (drbillywilsonbooks.com) is running the original
init-commit code. It predates Phase D (shared includes + JSON content
store), the Ayunar Para Avanzar page, the split nav, and this week's
alt-language and label work. This is everything needed to bring it current.

Verified against git (`a053668..HEAD`): **no JS files changed**, and
`custom-local.css` is the only stylesheet with real edits — every other
css/js/pdf file git flags as "modified" is line-ending/re-save noise with
zero content change. PDFs and existing images do not need re-uploading.

## Upload order matters

The pages fatal if the includes/JSON they reference are missing. Upload in
this order and the site stays working at every moment:

1. `assets/` files (includes, json, css, images)
2. Page `index.php` files last

## 1 — NEW files (create on server)

Includes & JSON engine:

- [ ] `assets/includes/db.php` — JSON content-store reader
- [ ] `assets/includes/hero-db.php` — shared hero renderer
- [ ] `assets/includes/testimonials-db.php` — shared testimonials renderer
- [ ] `assets/includes/more-titles-db.php` — Other Titles grid dispatcher
- [ ] `assets/json/books.json` — hero content per book
- [ ] `assets/json/testimonials.json` — testimonial content
- [ ] `assets/includes/author-section-emp-to-lead.php` — renamed from `author-section-25.php`
- [ ] `assets/json/author-data-emp-to-lead.json` — renamed from `author-data-25.json`

New page (create folder):

- [ ] `ayunar-para-avanzar/index.php`

New images:

- [ ] `assets/img/new-images/ayunar-para-avanzar-cover.jpg`
- [ ] `assets/img/new-images/ayunar-para-avanzar-hero.webp`

## 2 — REPLACE existing files

CSS (upload before pages — they reference `?v=1.0.1`):

- [ ] `assets/css/custom-local.css`

PHP includes:

- [ ] `assets/includes/top-nav.php`
- [ ] `assets/includes/more-titles.php`
- [ ] `assets/includes/footer.php`
- [ ] `assets/includes/social-icons.php`
- [ ] `assets/includes/author-section.php`
- [ ] `assets/includes/more-titles-hp.php`

JSON:

- [ ] `assets/json/more-titles.json`
- [ ] `assets/json/author-data.json`
- [ ] `assets/json/more-titles-hp.json`
- [ ] `assets/json/social-icons.json`

PHP pages (last):

- [ ] `config.php`
- [ ] `index.php` (site root)
- [ ] `born-4-the-storm/index.php`
- [ ] `deals/index.php`
- [ ] `el-poder-de-uno/index.php`
- [ ] `empowered-to-lead/index.php`
- [ ] `fasting-forward/index.php`
- [ ] `father-cry/index.php`
- [ ] `genz-download/index.php`
- [ ] `privacy-policy/index.php`
- [ ] `the-power-of-one/index.php`

## 3 — Optional cleanup (after everything above is live)

Orphaned once the new files land — nothing references them:

- [ ] Delete `assets/includes/author-section-25.php`
- [ ] Delete `assets/json/author-data-25.json`

Do **not** delete the server's stray `index.html` files until they are
archived — at least `fasting-forward/index.html` and
`born-4-the-storm/index.html` exist nowhere in git history
(see DEPLOYMENT.md).

## 4 — Post-upload verification

- [ ] `/ayunar-para-avanzar/` loads with the new hero image and Spanish buttons
- [ ] Nav shows two dropdowns: "Titles" and "Títulos" (Ayunar listed once)
- [ ] Fasting Forward page: Ayunar Para Avanzar is card #1 in Other Titles
- [ ] The Power of One page: El Poder de Uno is card #1 (and vice versa)
- [ ] El Poder de Uno page: buttons read "Comprar Ahora", CTA reads "¡Adquiere El Poder de Uno hoy!"
- [ ] Homepage, Father Cry, and Gen Z pages render normally (heroes + testimonials)
