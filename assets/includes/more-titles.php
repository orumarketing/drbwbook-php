<?php
// Load the JSON file using the correct path
$jsonData = file_get_contents(__DIR__ . '/../json/more-titles.json');
$books = json_decode($jsonData, true)['books'];

// Filter out the current page's book and limit to 4 books
$filteredBooks = array_filter($books, function ($book) use ($this_page_book_title) {
    return $book['title'] !== $this_page_book_title;
});
$booksToShow = array_slice($filteredBooks, 0, 4);

foreach ($booksToShow as $book) {
    // Determine the correct image path based on $is_home_folder
    $imagePath = $is_home_folder 
        ? $base_url . htmlspecialchars($book['image_path']) 
        : '../' . ltrim(htmlspecialchars($book['image_path']), '/');

    // Determine discount visibility based on price_tag
    $discountClass = $book['price_tag'] ? '' : 'd-none';
    
    echo '
        <div class="col-md-3 mb-5">
            <div class="card">
                <div class="discount ' . $discountClass . '"><img class="img-fluid" src="' . $base_url . 'assets/img/new-images/sale-tag.png" alt="50% off"></div>
                <div class="image">
                    <img class="card-img" src="' . $imagePath . '" alt="' . htmlspecialchars($book['title']) . '">
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
