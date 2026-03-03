<?php
// Load the JSON file using the correct path
$jsonData = file_get_contents(__DIR__ . '/../json/more-titles-hp.json');
$books = json_decode($jsonData, true)['books'];

// Filter out the current page's book and limit to 4 books
$filteredBooks = array_filter($books, function ($book) use ($this_page_book_title) {
    return $book['title'] !== $this_page_book_title;
});
$booksToShow = array_slice($filteredBooks, 0, 4);

foreach ($booksToShow as $book) {
    // Ensure the image path starts with "/"
    $imagePath = $book['image_path'];
    if (strpos($imagePath, '/') !== 0) {
        $imagePath = '/' . $imagePath;
    }

    echo '
        <div class="col-md-3 mb-5">
            <div class="card">
                <div class="image">
                    <img class="card-img" src="' .$base_url . htmlspecialchars($book['image_path']) . '" alt="' . htmlspecialchars($book['title']) . '">
                </div>
                <div class="overlay">';
    foreach ($book['buttons'] as $button) {
        echo '
                    <a href="' . htmlspecialchars($button['url']) . '" class="btn btn-primary mt-3" target="_blank">' . htmlspecialchars($button['label']) . '</a>';
    }
    echo '
                </div>
            </div>
        </div>';
}
?>
