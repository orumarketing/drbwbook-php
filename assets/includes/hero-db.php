<?php
require_once __DIR__ . '/db.php';

$hero_book = null;
if (isset($hero_slug)) {
    $hero_book = cms_get_book($hero_slug);
}

$hero_title = $hero_book ? $hero_book['title'] : ($hero_fallback_title ?? 'Book Title');
$hero_description = $hero_book ? $hero_book['description'] : ($hero_fallback_desc ?? '');
$hero_buy_link = $hero_book ? $hero_book['buy_link'] : ($hero_fallback_buy ?? '#');
$hero_free_link = $hero_book ? $hero_book['free_chapter_link'] : ($hero_fallback_free ?? '');
$hero_buy_label = $hero_fallback_buy_label ?? 'Buy Now';
$hero_free_label = $hero_fallback_free_label ?? 'Get A Free Chapter';
$hero_show_discount = $hero_show_discount ?? true;
?>

<div class="page-header page-header-small header-filter">
    <div class="page-header-image" style="<?php echo $hero_bg_style; ?>">
        <div class="text-center text-uppercase navbottom space-above-hero d-none">
            <p class="navbottom-text">&nbsp;</p>
        </div>
        <div class="container">
            <div class="row align-items-center text-left">
                <div class="col-lg-7 pl-0 position-relative">
                    <?php if ($hero_show_discount): ?>
                    <img class="discount-tag" src="<?php echo $base_url; ?>assets/img/new-images/discount-tag.png" alt="50% off">
                    <?php endif; ?>
                    <img class="pop-out-book mr-lg-5" src="<?php echo $hero_book_img; ?>" width="100%" alt="<?php echo htmlspecialchars($hero_book_img_alt ?? $hero_title); ?>">
                </div>
                <div class="col-lg-5 hero">
                    <h1 class="display-3 dark-text order-lg-0"><?php echo strtoupper(htmlspecialchars($hero_title)); ?></h1>
                    <p class="lead pb-0 dark-text order-lg-1"><?php echo $hero_description; ?></p>
                    <div class="my-5">
                        <div class="d-none d-lg-block">
                            <?php if ($hero_buy_link): ?>
                            <a class="btn btn-secondary hero-btn mt-2" href="<?php echo htmlspecialchars($hero_buy_link); ?>" target="_blank"><?php echo htmlspecialchars($hero_buy_label); ?></a>
                            <?php endif; ?>
                            <?php if ($hero_free_link): ?>
                            <a class="btn btn-secondary hero-btn mt-2" href="<?php echo htmlspecialchars($hero_free_link); ?>" target="_blank"><?php echo htmlspecialchars($hero_free_label); ?></a>
                            <?php endif; ?>
                        </div>
                        <div class="d-lg-none">
                            <?php if ($hero_buy_link): ?>
                            <a class="btn btn-dark btn-block hero-btn" href="<?php echo htmlspecialchars($hero_buy_link); ?>" target="_blank"><?php echo htmlspecialchars($hero_buy_label); ?></a>
                            <?php endif; ?>
                            <?php if ($hero_free_link): ?>
                            <a class="btn btn-dark btn-block hero-btn" href="<?php echo htmlspecialchars($hero_free_link); ?>" target="_blank"><?php echo htmlspecialchars($hero_free_label); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
