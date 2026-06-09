<?php
// JSON-backed content store. Book hero content and testimonials live in
// assets/json/books.json and assets/json/testimonials.json so the whole
// site is editable through the repo - no database required.

function cms_load_json($filename) {
    static $cache = [];
    if (!array_key_exists($filename, $cache)) {
        $raw = @file_get_contents(__DIR__ . '/../json/' . $filename);
        $data = $raw ? json_decode($raw, true) : null;
        if ($data === null && $raw !== false) {
            error_log("CMS JSON parse error in $filename: " . json_last_error_msg());
        }
        $cache[$filename] = is_array($data) ? $data : [];
    }
    return $cache[$filename];
}

function cms_get_book($slug) {
    $books = cms_load_json('books.json');
    if (!isset($books[$slug])) return null;
    $book = $books[$slug];
    $book['id'] = $slug;
    $book['slug'] = $slug;
    return $book;
}

function cms_get_book_by_title($title) {
    foreach (cms_load_json('books.json') as $slug => $book) {
        if (mb_strtolower($book['title'], 'UTF-8') === mb_strtolower($title, 'UTF-8')) {
            return cms_get_book($slug);
        }
    }
    return null;
}

function cms_get_testimonials($book_id) {
    $all = cms_load_json('testimonials.json');
    return $all[$book_id] ?? [];
}

// The "Other Titles" grids render from more-titles.json: returning an empty
// list sends more-titles-db.php down its JSON fallback (more-titles.php),
// which preserves the per-book button labels and price tags.
function cms_get_all_books() {
    return [];
}
?>
