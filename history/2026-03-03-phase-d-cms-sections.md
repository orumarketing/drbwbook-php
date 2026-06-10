# Phase D: CMS-driven page sections

**Date:** 2026-03-03
**Commits:** `9fe3506`, `450307e`

## What changed

- Hero sections, testimonials, and the "Other Titles" grids stopped being
  hardcoded HTML per page and became shared includes:
  `assets/includes/hero-db.php`, `testimonials-db.php`, `more-titles-db.php`.
- Each book page declares config variables at the top (`$hero_slug`,
  `$this_page_book_title`, colors, image paths) and includes the shared
  renderers.
- Content was served from a CMS database via lookup functions in
  `assets/includes/db.php` (`cms_get_book`, `cms_get_testimonials`,
  `cms_get_all_books`).

## Why

Every book page carried its own copy of the hero, testimonial, and
other-titles markup. Editing a testimonial or a buy link meant finding and
changing the same structure in up to eight places, and the copies had
already drifted (inconsistent labels, stale links). Moving the markup into
shared includes meant layout fixes happen once, and moving the content into
a queryable store meant text edits no longer require touching HTML. The
per-page config block kept what is genuinely per-page — palette, images,
title — while everything structural became shared. This was the foundation
the later JSON store and alt-language features built on.
