<?php
session_start();
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
$base_url = "http://localhost/room-booking-website/home%20page/";
header("Location: " . $base_url);
exit;
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="../home page/index.html">DZ HOUSE</a>
        </div>
        <nav class="nav">
            <a href="../booking page/index.html">Book</a>
            <a href="Publish an ad">Publish an ad</a>
            <a href="Help">Help</a>
            <a href="#" onclick="openLoginModal()">Login ▸</a>
            <a href="profile">
                <img src="" alt="">
            </a>           
        </nav>
    </header>

    <div class="search-background">
        <div class="search-container">
            <input type="text" placeholder="Location">
            <input type="text" placeholder="Dates">
            <input type="text" placeholder="People">
            <button class="search-btn">Search</button>
        </div>
    </div>

    <div class="filter">
        <div class="filter-options">
            <label for="sort">Sort by:</label>
            <select id="sort" name="sort">
                <option value="popular">Popular</option>
                <option value="most-recent">Most Recent</option>
            </select>
        </div>
    </div>

    <!-- Dynamic Listings Section -->
    <section class="listings">
        <?php
        $conn = new mysqli('localhost', 'root', '', 'login_system');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query("SELECT * FROM properties ORDER BY id DESC");

        while ($row = $result->fetch_assoc()):
            // Decode the JSON string to get the array of image paths
            $imagePaths = json_decode($row['image'], true);
            // Use the first image in the array
            $mainImage = isset($imagePaths[0]) ? $imagePaths[0] : 'default.jpg'; // Fallback to 'default.jpg' if no images exist
        ?>
            <div class="listing-card">
                <div class="like-btn-container">
                    <button class="like-btn"></button>
                </div>
                <img src="../add card/<?php echo htmlspecialchars($mainImage); ?>" alt="Room Image">
                <a href="../apartment details/index.php?id=<?php echo $row['id']; ?>">
                    <h3><?php echo htmlspecialchars($row['property_type']); ?></h3>
                    <p><?php echo htmlspecialchars($row['location']); ?></p>
                    <p><span class="rating">★</span> <?php echo htmlspecialchars($row['amenities']); ?></p>
                    <p class="price"><?php echo htmlspecialchars($row['price']); ?> DA</p>
                </a>
            </div>
        <?php endwhile; ?>
    </section>

    <footer>
        <div class="footer-section">
            <h3>About HomeAway</h3>
            <ul>
                <li><a href="Post a Listing">Post a Listing</a></li>
                <li><a href="Trust & Safety">Trust & Safety</a></li>
                <li><a href="Partner Resources">Partner Resources</a></li>
                <li><a href="Travel Guides">Travel Guides</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Company</h3>
            <ul>
                <li><a href="Who are we?">Who are we?</a></li>
                <li><a href="Affiliation / Contact us">Affiliation / Contact us</a></li>
                <li><a href="Terms of use">Terms of use</a></li>
                <li><a href="Privacy policy">Privacy policy</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Meet our family</h3>
            <ul>
                <li><a href="Vrbo">Vrbo</a></li>
                <li><a href="Abritel.fr">Abritel.fr</a></li>
                <li><a href="FeWo-direkt.de">FeWo-direkt.de</a></li>
                <li><a href="Bookabach.co.nz">Bookabach.co.nz</a></li>
            </ul>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>