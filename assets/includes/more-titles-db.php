<?php
require_once __DIR__ . '/db.php';

$cms_books = cms_get_all_books();

if (!empty($cms_books)) {
    $filteredBooks = array_filter($cms_books, function ($book) use ($this_page_book_title) {
        return $book['title'] !== $this_page_book_title;
    });
    $booksToShow = array_slice($filteredBooks, 0, 4);

    foreach ($booksToShow as $book) {
        $imagePath = $is_home_folder
            ? $base_url . ltrim(htmlspecialchars($book['cover_image']), '/')
            : '../' . ltrim(htmlspecialchars($book['cover_image']), '/');

        $learnMoreUrl = '/' . htmlspecialchars($book['slug']);
        $buyUrl = htmlspecialchars($book['buy_link'] ?? '#');
        $freeUrl = $book['free_chapter_link'] ? htmlspecialchars($book['free_chapter_link']) : '';

        echo '
        <div class="col-md-3 mb-5">
            <div class="card">
                <div class="discount"><img class="img-fluid" src="' . $base_url . 'assets/img/new-images/sale-tag.png" alt="50% off"></div>
                <div class="image">
                    <img class="card-img" src="' . $imagePath . '" alt="' . htmlspecialchars($book['title']) . '">
                </div>
                <div class="overlay">';
        if ($buyUrl && $buyUrl !== '#') {
            echo '
                    <a href="' . $buyUrl . '" class="btn btn-primary mt-3" target="_blank">Buy Now</a>';
        }
        echo '
                    <a href="' . $learnMoreUrl . '" class="btn btn-primary mt-3">Learn More</a>';
        if ($freeUrl) {
            echo '
                    <a href="' . $freeUrl . '" class="btn btn-primary mt-3" target="_blank">Get A Free Chapter</a>';
        }
        echo '
                </div>
            </div>
        </div>';
    }
} else {
    include __DIR__ . '/more-titles.php';
}
?>
