/* Black Friday toggler
   When the date is between Nov 21 and Dec 25 (inclusive) for the current year:
   1. adds `black-friday` to <body>, which shows the hero and "Other titles"
      50% off tags (see custom-local.css), and
   2. adds a lazy-loaded 50% off tag to every book thumbnail in the nav
      dropdowns (.nav-book-thumb in top-nav.php).
   Outside that window it does neither, so the nav tag is never in the page.
   Supports a query override: `?force=black` for testing.
*/
(function () {
  // Captured now: document.currentScript is only set while this file first runs.
  var script = document.currentScript;

  function isBlackFriday() {
    var params = new URLSearchParams(window.location.search);
    if (params.get('force') === 'black') return true;

    var now = new Date();
    var year = now.getFullYear();
    var start = new Date(year, 10, 21, 0, 0, 0); // Nov 21 (month 10)
    var end = new Date(year, 11, 25, 23, 59, 59); // Dec 25 (month 11)
    return now >= start && now <= end;
  }

  // Same image as the hero tag; resolved from this script's own URL
  // (assets/js/) so it works from the home folder and book folders alike.
  function tagSrc() {
    var base = script && script.src ? script.src : window.location.href;
    return new URL('../img/new-images/discount-tag.png', base).href;
  }

  function addNavTags() {
    var src = tagSrc();
    var thumbs = document.querySelectorAll('.nav-book-thumb');
    for (var i = 0; i < thumbs.length; i++) {
      if (thumbs[i].querySelector('.nav-discount-tag')) continue;
      var tag = document.createElement('img');
      tag.className = 'nav-discount-tag';
      tag.alt = '50% off';
      tag.loading = 'lazy';
      tag.decoding = 'async';
      tag.src = src;
      thumbs[i].appendChild(tag);
    }
  }

  try {
    if (!isBlackFriday()) return;
    document.body && document.body.classList.add('black-friday');
    addNavTags();
  } catch (err) {
    // non-fatal; log for debugging
    if (window && window.console && window.console.error) {
      window.console.error('black-friday.js error', err);
    }
  }
})();
