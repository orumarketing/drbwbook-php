<?php
require_once __DIR__ . '/db.php';

$testimonials = [];

if (isset($this_page_book_title)) {
    $page_slug = basename(dirname($_SERVER['SCRIPT_FILENAME']));
    $book = cms_get_book($page_slug);
    if (!$book) {
        // pages whose folder isn't a book slug (e.g. the site root) match by title
        $book = cms_get_book_by_title($this_page_book_title);
    }
    if ($book) {
        $testimonials = cms_get_testimonials($book['id']);
    }
}

if (!empty($testimonials)):
    $half = ceil(count($testimonials) / 2);
    $left_col = array_slice($testimonials, 0, $half);
    $right_col = array_slice($testimonials, $half);
?>
<section class="section testimonials team-1 bd-btm-true">
    <div class="container col-md-11 col-xl-10">
        <h3 class="display-3 px-3 mb-3 text-center text-uppercase"><?php echo htmlspecialchars($testimonials_heading ?? 'WHAT OTHERS ARE SAYING'); ?></h3>
        <div class="row">
            <div class="col-lg-6 profile">
                <div>
                    <?php foreach ($left_col as $t): ?>
                    <div class="testimony">
                        <p class="lead m-0 pb-3">
                            <b>&ldquo; <?php echo htmlspecialchars($t['quote']); ?> &rdquo;</b><br>
                            <em><?php echo htmlspecialchars($t['author']);
                                if ($t['author_title']) echo '; ' . htmlspecialchars($t['author_title']);
                            ?></em>
                        </p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-6 profile">
                <div>
                    <?php foreach ($right_col as $t): ?>
                    <div class="testimony">
                        <p class="lead m-0 pb-3">
                            <b>&ldquo; <?php echo htmlspecialchars($t['quote']); ?> &rdquo;</b><br>
                            <em><?php echo htmlspecialchars($t['author']);
                                if ($t['author_title']) echo '; ' . htmlspecialchars($t['author_title']);
                            ?></em>
                        </p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
