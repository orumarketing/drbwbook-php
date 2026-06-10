# Ayunar Para Avanzar page and language-split nav

**Date:** 2026-06-09
**Commit:** `f19aa12`

## What changed

- New landing page: `/ayunar-para-avanzar/` — the Spanish edition of
  *Fasting Forward* — built on the `el-poder-de-uno` template with the
  Fasting Forward palette, hero, about section, author bio, six
  testimonials, and CTA.
- Books in `assets/json/more-titles.json` gained a `"menu"` key
  (`default` | `spanish`).
- `assets/includes/top-nav.php` renders one dropdown per non-empty menu
  group: **Titles** (English) and **Títulos** (Spanish). A group with no
  books disappears automatically.
- On mobile, the dropdowns behave as accordions inside the hamburger menu
  (removed the always-open `display:block` override), book covers capped at
  two per row.

## Why

With a second Spanish title, one mixed nav list stopped working: Spanish
readers had to scan past six English covers to find their books, and the
list was getting long for the mobile hamburger. Grouping by language gives
each audience a one-tap path to their titles, and driving the grouping from
a data key (rather than hardcoding two lists) means a future book lands in
the right menu by setting one JSON field. The accordion behavior fixed a
real mobile bug — both dropdowns previously rendered permanently expanded,
pushing the page content down. The `menu` key deliberately describes nav
grouping, not book language; later features that need language semantics
should not overload it.
