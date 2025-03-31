<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZHouse - Subscription</title>
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

            <!--pop up winw-->
            <div id="loginModal" class="pop">
              <div class="pop-content">
                <span class="close" onclick="closeLoginModal()">&times;</span>
                <h2>Login</h2>
                <form>
                  <label>Username</label><br>
                  <input type="text"><br><br>
                  <label>Password</label><br>
                  <input type="password"><br><br>
                  <button type="submit">Login</button>
                </form>
              </div>
            </div>
                        <a href="profile">
                <img src="" alt="">
            </a>           
        </nav>
    </header>
    <main>
        <div class="card">
            <div class="card-header">
                <div class="card-title">Subscription</div>
            </div>
            <div class="card-content">
                <form action="form.php" method="post" enctype="multipart/form-data"> 

                    <div class="usr-option-con">
                        <label class="usr-option">
                            <input type="radio" name="user-type" value="tenant" checked>
                            Tenant
                        </label>
                        <label class="usr-option">
                            <input type="radio" name="user-type" value="owner">
                            Owner
                        </label>
                    </div>

                    <div class="form-row">
                        <div class="form-col">
                            <input type="text" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-col">
                            <input type="text" name="family-name" placeholder="Family name" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-col large">
                            <input type="text" name="phone" placeholder="Phone" required>
                        </div>
                    </div>

                    <div class="form-col large">
                        <input type="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="form-col large">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>

                    <div class="form-row">
                        <div class="form-col">
                            <label class="btn btn-upload">
                                Profile photo
                                <input type="file" name="profile-photo" accept="image/*" style="display: none;" required>
                            </label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-col">
                            <input type="text" name="address" placeholder="Address" required>
                        </div>
                    </div>
                    <button type="submit" class="btn">Subscribe</button>
                </form>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-con">
            <div class="footer-section">
                <h3>About HomeAway</h3>
                
                    <li><a href="post-listing.html">Post a Listing</a></li>
                    <li><a href="trust-safety.html">Trust & Safety</a></li>
                    <li><a href="partner-resources.html">Partner Resources</a></li>
                    <li><a href="travel-guides.html">Travel Guides</a></li>
            </div>
            <div class="footer-section">
                <h3>Company</h3>
                
                    <li><a href="who-are-we.html">Who are we?</a></li>
                    <li><a href="affiliation-contact.html">Affiliation / Contact us</a></li>
                    <li><a href="terms-of-use.html">Terms of use</a></li>
                    <li><a href="privacy-policy.html">Privacy policy</a></li>
                
            </div>
            <div class="footer-section">
                <h3>Meet our family</h3>
                
                    <li><a href="vrbo.html">Vrbo</a></li>
                    <li><a href="abritel.html">Abritel.fr</a></li>
                    <li><a href="fewo-direkt.html">FeWo-direkt.de</a></li>
                    <li><a href="bookabach.html">Bookabach.co.nz</a></li>
                
            </div>
        </div>
    </footer>
</body>
</html>
?>
