# drbwbook-php

PHP version of [drbillywilsonbooks.com](https://drbillywilsonbooks.com/).

## Where content lives

All site content is stored in flat JSON files under `assets/json/` — there is no
database. Edit the JSON, commit, and deploy.

| File | Drives | Rendered by |
|---|---|---|
| `books.json` | Hero section of each book page (title, description, buy / free-chapter links, hero image), keyed by page folder name | `assets/includes/hero-db.php` |
| `testimonials.json` | "What Others Are Saying" sections, keyed by page folder name | `assets/includes/testimonials-db.php` |
| `more-titles.json` | "More Titles" nav dropdown and the "Other Titles by Dr. Wilson" card grids | `assets/includes/top-nav.php`, `assets/includes/more-titles.php` |
| `author-data.json` / `author-data-emp-to-lead.json` | About-the-author sections (two copy variants; El Poder de Uno and Ayunar Para Avanzar have their bios inline in the page) | `assets/includes/author-section*.php` |
| `social-icons.json` | Footer social icons | `assets/includes/social-icons.php` |

`assets/includes/db.php` is the lookup layer the includes call
(`cms_get_book`, `cms_get_testimonials`).

## Adding a new book page

1. Create `<slug>/index.php` — copy an existing page (`el-poder-de-uno/` for a
   Spanish page, `fasting-forward/` for English) and adjust the PHP variables at
   the top (`$hero_slug`, background, cover image, button labels) plus the
   About / Author / CTA sections.
2. Add a `"<slug>"` entry to `assets/json/books.json` (hero content) and
   `assets/json/testimonials.json` (quotes). The slug must match the folder name.
3. Add the book to `assets/json/more-titles.json` so it appears in the nav
   dropdown and the title grids.
4. Drop cover art in `assets/img/new-images/`.

## Local development

Serve the repo root with any PHP server, e.g.:

```sh
php -S localhost:8123
```

(`config.php` derives `$base_url` automatically, so subfolder setups like MAMP's
`htdocs/drbwbook-php` also work.)
