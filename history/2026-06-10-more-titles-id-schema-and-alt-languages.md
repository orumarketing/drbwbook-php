# ID-keyed more-titles schema and alt_languages

**Date:** 2026-06-10

## What changed

- `assets/json/more-titles.json`: `books` changed from an **array** of
  objects to an **object keyed by stable ID** (e.g. `"fasting-forward":
  {...}`). The old decorative numeric `id` field was dropped — it was never
  read by any renderer and had drifted (two books shared `id: 7`).
- Paired editions reference each other via a new `"alt_languages"` key — an
  array of IDs, bidirectional:
  `fasting-forward` ↔ `ayunar-para-avanzar`,
  `the-power-of-one` ↔ `el-poder-de-uno`.
- The four paired pages declare `$this_page_book_id = '<id>';` in their
  config block.
- `assets/includes/more-titles.php`: when the current book has
  `alt_languages`, those books are hoisted to the front of the grid (array
  order = display order) before the existing filter-and-slice-to-4. A
  reference to a nonexistent ID is `error_log`ged and skipped.
- `top-nav.php` needed no changes — it iterates values, never indexes.

## Why

Grid order was purely file order, so a book's other-language edition — the
single most relevant cross-sell for that reader — never appeared on its
counterpart's page (the Spanish entries sat past the 4-card cut). The
feature needed a way for one book to reference another, which forced an
identity decision. Titles are display text and drift; slugs are live
marketing URLs that belong to the URL, not to identity. Keying the object
by an internal stable ID decouples references from both: a slug or title
change touches one entry, and references survive. `alt_languages` is an
array rather than a scalar so adding a third language someday is a data
edit, not a schema migration. Keyed objects also can't hold duplicate
entries — an array-era bug that put the same book in the nav twice. Known
gap, accepted for now: nothing validates that refs resolve or stay
symmetric beyond the renderer's `error_log` guard; a pre-commit validator
was designed but deferred.
