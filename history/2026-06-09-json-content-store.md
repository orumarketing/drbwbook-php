# JSON content store replaces the database

**Date:** 2026-06-09
**Commit:** `f19aa12`

## What changed

- The Phase D Postgres CMS was replaced with flat JSON files in
  `assets/json/`:
  - `books.json` — hero content per book, keyed by slug
  - `testimonials.json` — testimonial lists, keyed by book
  - `more-titles.json` — the "Other Titles" grid cards and nav entries
- `assets/includes/db.php` now reads these files (with a parse-error log
  guard) instead of querying a database.
- Site content was captured verbatim from the live site and verified
  element-by-element against production before the switch.
- Renderer fixes along the way: hero titles no longer force-uppercased,
  malformed cover `<img>` tag fixed, site-relative links get `base_url`
  prepended, testimonial headings became per-page.

## Why

The database added operational weight a brochure site doesn't need: a
running Postgres instance, credentials in the environment, and a content
store invisible to code review. Moving content into JSON files in the repo
means the whole site is one checkout — content edits are diffs, reviewable
and revertable like any code change, and a local MAMP setup works with zero
provisioning. The tradeoff (no admin UI, editors touch JSON by hand) is
acceptable at this scale: nine books, one editor. The include layer from
Phase D was kept, so pages didn't change — only where the data comes from.
