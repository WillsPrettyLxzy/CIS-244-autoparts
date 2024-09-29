<?php
// Include the header
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Parts</title>
    <link rel="stylesheet" href="style.css"> <!-- Optional: link to your stylesheet -->
    <style>
        /* Add custom CSS for the gallery */
        .gallery img {
            width: 250px;  /* Set the desired width */
            height: 250px; /* Set the desired height */
            object-fit: cover; /* Ensures the images maintain aspect ratio */
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
        <h1>Auto Parts</h1>
        <p>Welcome to our auto parts page. Here you will find a variety of parts for your vehicle.</p>
        
        <div class="gallery">
            <!-- Add your images here -->
            <img src="engine.jpg" alt="Part 1" />
            <img src="tires.jpg" alt="Part 2" />
            <img src="carseat.jpg" alt="Part 3" />
            <!-- More images can be added as needed -->
        </div>
    </div>

<?php
// Include the footer
include 'footer.php';
?>
</body>
</html>