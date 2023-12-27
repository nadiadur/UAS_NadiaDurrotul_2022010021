<?php
// includes/functions.php

function displayProductImage($imagePath) {
    // Ganti '/uploads/posts/' sesuai dengan path yang benar
    $basePath = '/uploads/posts/';
    $imageSrc = $basePath . $imagePath;

    // Tampilkan tag img dengan path yang benar
    echo '<img src="' . $imageSrc . '" class="img-fluid" alt="Product Image">';
}
?>
