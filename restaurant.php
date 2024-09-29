<?php
// Include the header
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" href="style.css"> <!-- Optional: link to your stylesheet -->
    <style>
        /* Add custom CSS for the gallery */
        .gallery img {
            width: 200px;  /* Set the desired width */
            height: 200px; /* Set the desired height */
            object-fit: cover; /* Ensures the images maintain aspect ratio while fitting */
            margin: 10px;    /* Optional: Adds space between images */
        }
        .container {
            text-align: center; /* Optional: Center the content */
        }
        .gallery {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Restaurant</h1>
        <p>Enjoy a variety of delicious meals prepared with the freshest ingredients.</p>
        
        <div class="gallery">
            <!-- Add your images here -->
            <img src="milkshake.jpg" alt="Dish 1" />
            <img src="shrimp.jpg" alt="Dish 2" />
            <img src="chicken.jpg" alt="Dish 3" />
            <!-- More images can be added as needed -->
        </div>

        <h2>Our Menu</h2>
        <ul>
            <li>Dish 1 - Is a simple vanilla milkshake, its delicious!</li>
            <li>Dish 2 - Shrimp thats been cooked and laced with some nice leaves for flavor!</li>
            <li>Dish 3 - Chicken alfredo a wonderfully tasty dish!</li>
            <!-- More menu items can be added -->
        </ul>
    </div>

<?php
// Include the footer
include 'footer.php';
?>
</body>
</html>