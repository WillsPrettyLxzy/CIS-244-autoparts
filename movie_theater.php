<?php
// Include the header
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Theater</title>
    <link rel="stylesheet" href="style.css"> <!-- Optional: link to your stylesheet -->
    <style>
        /* Add custom CSS for the gallery */
        .gallery img {
            width: 200px; /* Set your desired width */
            height: 300px; /* Set your desired height */
            object-fit: cover; /* Ensures the images maintain aspect ratio */
            margin: 10px; /* Optional: Add some margin between images */
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
        <h1>Welcome to Our Movie Theater</h1>
        <p>Catch the latest blockbusters and enjoy a great cinematic experience!</p>
        
        <div class="gallery">
            <!-- Add your images here -->
            <img src="thebatman.jpg" alt="Movie 1" />
            <img src="Avengers_infinity_War_logo_001.jpg" alt="Movie 2" />
            <img src="american_psycho.png" alt="Movie 3" />
            <!-- More images can be added as needed -->
        </div>

        <h2>Current Showings</h2>
        <ul>
            <li>Movie 1 - (The Batman) Time: 7:00 PM</li>
            <li>Movie 2 - (Avengers: Infinity War) Time: 9:30 PM</li>
            <li>Movie 3 - (American Psycho) Time: 5:00 PM</li>
            <!-- More showings can be added -->
        </ul>
    </div>

<?php
// Include the footer
include 'footer.php';
?>
</body>
</html>