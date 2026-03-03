/* Black Friday body-class toggler
   Adds `black-friday` to <body> when the date is between
   Nov 24 and Dec 25 (inclusive) for the current year.
   Supports a query override: `?force=black` for testing.
*/
(function () {
  try {
    const params = new URLSearchParams(window.location.search);
    if (params.get('force') === 'black') {
      document.body && document.body.classList.add('black-friday');
      return;
    }

    const now = new Date();
    const year = now.getFullYear();
    const start = new Date(year, 10, 21, 0, 0, 0); // Nov 21 (month 10)
    const end = new Date(year, 11, 25, 23, 59, 59); // Dec 25 (month 11)

    if (now >= start && now <= end) {
      document.body && document.body.classList.add('black-friday');
    }
  } catch (err) {
    // non-fatal; log for debugging
    if (window && window.console && window.console.error) {
      window.console.error('black-friday.js error', err);
    }
  }
})();
