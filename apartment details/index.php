<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZHouse - Beautiful university apartment in Villeurbanne</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

    <main>
        <div class="container">
            <div class="property-gallery">
                <div class="main-image">
                    <img src="/placeholder.svg?height=400&width=600" alt="Living room with gray sofa and coffee table">
                </div>
                <div class="gallery-grid">
                    <div class="gallery-item">
                        <img src="/placeholder.svg?height=200&width=300" alt="Bathroom">
                    </div>
                    <div class="gallery-item">
                        <img src="/placeholder.svg?height=200&width=300" alt="Bedroom with green wall">
                    </div>
                    <div class="gallery-item">
                        <img src="/placeholder.svg?height=200&width=300" alt="Another room">
                        <div class="image-count">
                            <i class="fas fa-images"></i> 11+
                        </div>
                    </div>
                </div>
                <div class="gallery-actions">
                    <button class="share-btn"><i class="fas fa-share-alt"></i> Partager</button>
                    <button class="save-btn"><i class="far fa-heart"></i> Sauvegarder</button>
                </div>
            </div>

            <div class="property-details">
                <h1 class="property-title">Beautiful university apartment in Villeurbanne</h1>
                <p class="property-address">106 rue bonnet, Villeurbanne, 69100, Lyon</p>
                <div class="property-owner">
                    <span>Owner:</span> Masson 
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="property-info">
                    <div class="info-left">
                        <h2>About this accommodation</h2>
                        <p>A smoke-free apartment featuring laundry facilities and a fully equipped kitchen with a refrigerator, oven, stovetop, and microwave. It includes a washer/dryer, a separate dining area, and entertainment options such as cable TV and Netflix.</p>
                        
                        <h2>Rules and access method</h2>
                        <ul class="rules-list">
                            <li>- Check-in start time: 15:00; Check-in end time: 23:00.</li>
                            <li>- Minimum check-in age: 23 years</li>
                            <li>- Check-out before 10:00</li>
                            <li>- You will receive an email with check-in instructions and key collection information.</li>
                        </ul>
                    </div>
                    
                    <div class="info-right">
                        <div class="amenities">
                            <div class="amenity">
                                <i class="fas fa-parking"></i>
                                <span>Parking disponible</span>
                            </div>
                            <div class="amenity">
                                <i class="fas fa-utensils"></i>
                                <span>Barbecue</span>
                            </div>
                            <div class="amenity">
                                <i class="fas fa-snowflake"></i>
                                <span>Climatisation</span>
                            </div>
                        </div>
                        
                        <div class="reviews-button">
                            <button>Click to see user reviews <i class="fas fa-chevron-down"></i></button>
                        </div>
                        
                        <div class="booking-section">
                            <div class="instant-booking">
                                <span><i class="fas fa-thumbs-up"></i> Instant booking !</span>
                            </div>
                            <button class="booking-btn">Booking</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container footer-container">
            <div class="footer-column">
                <h3>About HomeAway</h3>
                <ul>
                    <li><a href="#">Post a Listing</a></li>
                    <li><a href="#">Trust & Safety</a></li>
                    <li><a href="#">Partner Resources</a></li>
                    <li><a href="#">Travel Guides</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Company</h3>
                <ul>
                    <li><a href="#">Who are we?</a></li>
                    <li><a href="#">Affiliation / Contact us</a></li>
                    <li><a href="#">Terms of use</a></li>
                    <li><a href="#">Privacy policy</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Meet our family</h3>
                <ul>
                    <li><a href="#">Vrbo</a></li>
                    <li><a href="#">Abritel.fr</a></li>
                    <li><a href="#">FeWo-direkt.de</a></li>
                    <li><a href="#">Bookabach.co.nz</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>