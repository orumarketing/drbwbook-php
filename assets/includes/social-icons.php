<?php
// Load the JSON file
$jsonData = file_get_contents(__DIR__ . '/../json/social-icons.json');
$socialIcons = json_decode($jsonData, true)['socialMedia'];

// Loop through the social media icons and echo the HTML
foreach ($socialIcons as $icon) {
     // Extract the part of the linkId before the "-"
     $linkIdParts = explode('-', $icon['linkId']);
     $classSuffix = htmlspecialchars($linkIdParts[0]); // Get the first part of the linkId
    echo '
        <a id="' . htmlspecialchars($icon['linkId']) . '" 
           target="_blank" 
           href="' . htmlspecialchars($icon['url']) . '" 
           rel="nofollow" 
           class="btn btn-icon-only rounded-circle btn-' . $classSuffix . '" 
           data-toggle="tooltip" 
           data-original-title="' . htmlspecialchars($icon['hoverTitle']) . '">
            <span class="btn-inner--icon">
                <i class="' . htmlspecialchars($icon['faIconClass']) . '"></i>
                <span class="sr-only">' . htmlspecialchars($icon['displayName']) . '</span>
            </span>
        </a>
    ';
}
?>