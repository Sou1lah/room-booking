<?php
session_start();
?>
$base_url = "http://localhost/room-booking-website/add%20card/";
header("Location: " . $base_url);
exit();
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Apartment Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Add Apartment Details</h1>
        <form action="form.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="property_type">Property Type</label>
                <select id="property_type" name="property_type" required>
                    <option value="apartment">Apartment</option>
                    <option value="house">House</option>
                    <option value="condo">Condo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" id="location" name="location" placeholder="Enter location" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" step="0.01" placeholder="Enter price" required>
            </div>
            <div class="form-group">
                <label for="bedrooms">Bedrooms</label>
                <input type="number" id="bedrooms" name="bedrooms" placeholder="Enter number of bedrooms" required>
            </div>
            <div class="form-group">
                <label for="bathrooms">Bathrooms</label>
                <input type="number" id="bathrooms" name="bathrooms" placeholder="Enter number of bathrooms" required>
            </div>
            <div class="form-group">
                <label for="amenities">Amenities</label>
                <textarea id="amenities" name="amenities" rows="4" placeholder="Enter amenities (e.g., pool, gym, parking)"></textarea>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="4" placeholder="Enter a brief description"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Upload Images</label>
                <input type="file" id="image" name="image[]" accept="image/*" multiple>
            </div>
            <div class="form-group">
                <button type="submit">Add Apartment</button>
            </div>
        </form>
    </div>
</body>
</html>