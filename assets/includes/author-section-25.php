<?php
// Load the JSON file
$jsonData = file_get_contents(__DIR__ . '/../json/author-data-25.json');
$authorData = json_decode($jsonData, true);
?>

<section class="section center-text-block bd-btm-true" id="author" data-astro-cid-2ri7i3m6>
    <div class="container col-md-10" data-astro-cid-2ri7i3m6>
        <div class="row align-items-center" data-astro-cid-2ri7i3m6>
            <div class="col-lg-6 profile" data-astro-cid-2ri7i3m6>
                <h3 class="display-3" data-astro-cid-2ri7i3m6><?php echo $authorData['author']['name']; ?></h3>
                <p class="lead">
                    DR. BILLY WILSON serves as the fourth president of Oral Roberts University. Since taking office in 2013, he has guided the university through the largest campus expansion in its history and a season of unprecedented growth and global impact. With more than four decades of executive leadership experience, Dr. Wilson also serves as global chair of Empowered21 and chair of the historic Pentecostal World Fellowship. He is recognized globally for his unwavering ethics in leadership and as a champion for new generations of Spirit-empowered leaders. Previously, Dr. Wilson served as executive officer of the Azusa Street Centennial and helped launch the Awakening America Alliance, fostering national prayer and spiritual renewal movements. He has authored several books, including Generation Z: Born for the Storm, The Power of One, and the revised editions of Fasting Forward and Father Cry. A sought-after Bible communicator, his weekly television program, <em>World Impact with Dr. Billy Wilson</em>, can be seen in over 150 nations. Dr. Wilson and his wife, Lisa, have two children and seven grandchildren.
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