# Spanish button-label localization

**Date:** 2026-06-10

## What changed

- The two Spanish book cards in `assets/json/more-titles.json` ("El Poder
  de Uno", "Ayunar Para Avanzar") changed from "Buy Now" / "Learn More" to
  **"Comprar Ahora"** / **"Conozca Más"**.
- `el-poder-de-uno/index.php`: hero button and bottom-CTA button changed
  from "Adquirir ahora" to "Comprar Ahora"; the bottom-CTA line "Order
  *El Poder de Uno* Today!" became "¡Adquiere *El Poder de Uno* hoy!".
- `ayunar-para-avanzar/index.php`: "Comprar ahora" normalized to
  "Comprar Ahora" (hero and bottom CTA).
- Buy links for both Spanish titles point to
  `shop.harpandswordmedia.com/products/<book>` everywhere they appear:
  hero (via `books.json`), bottom CTA, and grid card.

## Why

Spanish landing pages were showing English button labels in the "Otros
títulos" grid, and the two Spanish pages disagreed with each other —
"Adquirir ahora" on one, "Comprar ahora" on the other, plus an untranslated
English CTA sentence on the El Poder de Uno page. Mixed-language UI on a
page whose entire purpose is serving Spanish readers undermines trust at
the exact moment of the buy decision. "Comprar Ahora" (capital case) was
chosen as the single standard for every buy button across Spanish pages and
JSON cards, with "Conozca Más" matching the wording already used elsewhere
on the pages ("Conozca más sobre el Dr. Wilson").
