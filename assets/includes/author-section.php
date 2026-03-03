<?php
// Load the JSON file
$jsonData = file_get_contents(__DIR__ . '/../json/author-data.json');
$authorData = json_decode($jsonData, true);
?>

<section class="section center-text-block bd-btm-true" id="author" data-astro-cid-2ri7i3m6>
    <div class="container col-md-10" data-astro-cid-2ri7i3m6>
        <div class="row align-items-center" data-astro-cid-2ri7i3m6>
            <div class="col-lg-6 profile" data-astro-cid-2ri7i3m6>
                <h3 class="display-3" data-astro-cid-2ri7i3m6><?php echo $authorData['author']['name']; ?></h3>
                <p class="lead">
                    <?php echo $authorData['author']['description']; ?>
                </p>
            </div>
            <div class="col-lg-6 text-center" data-astro-cid-2ri7i3m6>
                <div class="the-right-image-square mx-auto" style="
                    background: url(<?php echo $authorData['author']['image']; ?>);
                    background-size: cover;
                    background-position: top;
                    " data-astro-cid-2ri7i3m6></div> 
                <a class="btn btn-secondary alt-about-color hero-btn mt-2"
                    href="<?php echo $authorData['author']['link']['url']; ?>" data-astro-cid-2ri7i3m6>
                    <?php echo $authorData['author']['link']['text']; ?>
                </a>
            </div>
        </div>
    </div>
</section>