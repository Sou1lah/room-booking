<?php 
session_start();
?>
<!DOCTYPE html>
<a href="http://localhost/room-booking-website/booking%20page/index.php" target="_blank">Open this page in browser</a>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="container">
    <link rel="stylesheet" href="style.css">
</head>
<body>  
    <header class="header">
        <div class="logo">
            <a href="../home page/index.html">
                DZ HOUSE
            </a>
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
        <div class="main-content">
        <form action="form.php" method="post" enctype="multipart/form-data">
            <div class="form-section">                
                <div>
                    <h2 class="section-title">Tenant Information:</h2>
                    <div class="form-row">
                        <input type="text" name="name" placeholder="Name" class="half-width" required>
                        <input type="text" name="family_name" placeholder="Family name" class="half-width" required>
                    </div>
                    <div class="form-row">
                        <input type="email" name="email" placeholder="Email" class="full-width" required>
                    </div>
                    <div class="form-row">
                        <input type="tel" name="phone" placeholder="Phone" class="phone-number" pattern="[0-9]{10}" required>
                    </div>
                </div>
                <div>
                    <h2 class="section-title">Contact Information (in case of emergency):</h2>
                    <div class="form-row">
                        <input type="tel" name="emergency_contact" placeholder="Phone" class="phone-number" pattern="[0-9]{10}" required>
                    </div>
                </div>
                
                <div>
                    <h2 class="section-title">Payment Information:</h2>
                    <div class="form-row">
                        <input type="text" name="card_number" placeholder="Card number" class="full-width" pattern="[0-9]{16}" required>
                    </div>
                    <div class="form-row">
                        <input type="text" name="card_code" placeholder="Card Code" class="half-width" pattern="[0-9]{3,4}" required>
                        <input type="text" name="card_expiration" placeholder="Expiration date (MM/YY)" class="half-width" pattern="(0[1-9]|1[0-2])\/[0-9]{2}" required>
                    </div>
                </div>
            </div>
        <button type="submit" class="confirm-btn">Confirm Booking</button>
        </form>
            
            <div class="form-section">
                <div class="property-details">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVWBoxHYKqga1R2RdPbp6TO2LgmmSRuBjjkg&s" alt="Apartment" class="property-image">
                    <div class="property-info">
                        <h3 class="property-title">Beautiful university apartment in Villeurbanne</h3>
                        <p class="property-address">106 rue bonnet, Villeurbanne, 69100, Lyon</p>
                        <div class="property-owner">
                            <span>Owner: Masson</span>
                            <span class="stars">★★★☆☆</span>
                        </div>
                    </div>
                </div>
                
                
                <div class="price-details">
                    <div class="price-row">
                        <span>Fees / night:</span>
                        <span>3000 DA</span>
                    </div>
                    <div class="price-row">
                        <span>Total fees (03 nights):</span>
                        <span>9000 DA</span>
                    </div>
                </div>
            </div>
        </div>
        
        
        <footer>
            <div class="footer-section">
                <h3>About HomeAway</h3>
                <ul>
                    <li><a href="#">Post a Listing</a></li>
                    <li><a href="#">Trust & Safety</a></li>
                    <li><a href="#">Partner Resources</a></li>
                    <li><a href="#">Travel Guides</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Company</h3>
                <ul>
                    <li><a href="#">Who are we?</a></li>
                    <li><a href="#">Affiliation / Contact us</a></li>
                    <li><a href="#">Terms of use</a></li>
                    <li><a href="#">Privacy policy</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Meet our family</h3>
                <ul>
                    <li><a href="#">Vrbo</a></li>
                    <li><a href="#">Abritel.fr</a></li>
                    <li><a href="#">FeWo-direkt.de</a></li>
                    <li><a href="#">Bookabach.co.nz</a></li>
                </ul>
            </div>
        </footer>
    </div>, initial-scale=1.0">
    <title>Document</title>  
</body>
</html>