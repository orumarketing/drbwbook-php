<?php
    $jsonData = file_get_contents(__DIR__ . '/../json/more-titles.json');
    // $books = json_decode($jsonData, true);
    $books = json_decode($jsonData, true)['books'];
?>

<!-- From Nav PHP -->
<div class="navbar-transparent">
    <nav class="navbar navbar-expand-lg">
        <div class="container col-sm-10 stormNav">
            <div class="navbar-translate">
                <a class="navbar-brand" href="<?php echo $base_url; ?>">Dr. Billy Wilson</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-header-6"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="example-header-6">
                <button type="button" class="navbar-toggler position-absolute" data-toggle="collapse"
                    data-target="#example-header-6" aria-controls="navigation-index" aria-expanded="false"
                    aria-label="Toggle navigation" style="top: 10px; right: 10px;">
                    <span></span>
                    <span></span>
                </button>
                <div class="navbar-nav ml-auto">
                    <div class="nav-item order-lg-last">
                        <a class="nav-link" href="<?php echo $is_home_folder ? './father-cry/#author' : '#author'; ?>">About Dr. Wilson</a>
                    </div>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">More Titles</a>
                        <div class="dropdown-menu">
                            <div class="d-flex flex-wrap">
                                <?php
                                foreach ($books as $book) {
                                    // Determine the correct image path based on $is_home_folder
                                    $imagePath = $is_home_folder 
                                    ? $base_url . htmlspecialchars($book['image_path']) 
                                    : '../' . ltrim(htmlspecialchars($book['image_path']), '/');

                                    // Find the URL where learn_more is true
                                    $learnMoreUrl = '';
                                    foreach ($book['buttons'] as $button) {
                                        if ($button['learn_more']) {
                                            $learnMoreUrl = $is_home_folder 
                                            ? $base_url . ltrim(htmlspecialchars($button['url']), '/') 
                                            : '../' . ltrim(htmlspecialchars($button['url']), '/');
                                            break;
                                        }else {
                                            $learnMoreUrl = htmlspecialchars($button['url']);
                                        }
                                    }
                                    
                                    echo '<li class="book-item">';
                                    echo '<a class="dropdown-item d-flex align-items-center" href="' . $learnMoreUrl . '">';
                                    echo '<img width="50px;" class="d-none d-md-block" src="' . $imagePath . '" alt="">';
                                    echo '<span class="ml-2" style="white-space: break-spaces;">' . htmlspecialchars($book['title']) . '</span>';
                                    echo '</a>';
                                    echo '</li>';
                                }
                                ?>
                            </div>
                        </div>
                        <!-- dropdown-menu  -->
                    </div>
                </div>
                <!-- navbar-nav -->
            </div>
        </div>
    </nav>
</div>