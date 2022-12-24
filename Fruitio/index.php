<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    
    <title>FRUITIO-Smart way to pick a movie</title>
    <link rel="icon" type="image/x-icon" href="img/iconn.jpg">
</head>
<body>
    <header class="showcase">
        <div class="showcase-top">
            <img src="img/finlogo.png" alt="Fruitio Logo">
            <a href="signin2.html" class="btn btn-rounded">Sign In</a>
        </div>

<div class="showcase-content" >
            <h1>Smart way to pick a movie.</h1>
            <h3>Watching movies is fun,but figuring out what movie to watch next is a nerve-racking experience.</h3>
            <p>So What Are You Waiting For?? Create Your Account And Get Started.</p>
        <form   action = "register.php" method = "POST" >
            <input type="email"  id="mail" placeholder="Email address" name="email">
            <input type = "submit" class = "btn btn-lg" value = "GET STARTED">
        </form>

 </div>
    </header>


    <section class="style-cards">
        
        <div class="card-1">
            <div class="desc-1">
                <h1>Use FRUITIO everywhere.</h1>
                <h3>Use on smart TVs, Laptop, Wearable watches and more.</h3>
            </div>
            <img src="img/tv.png" alt="Netflix TV">
            <video class="video-1" autoplay="" playsinline="" muted="" loop=""><source src="img/1.m4v" type="video/mp4"></video>
        </div>
       
        <div class="card-3">
            <div class="desc-3">
                <h1>Liked the movie poster?</h1>
                <h3>Still Not sure to watch? Don't worry we got you.Click on Trailer button and take your decision.</h3>
            </div>
            <img src="img/4.png" alt="Device-Pile-In">
            <video class="video-2" autoplay="" playsinline="" muted="" loop=""><source src="img/2.m4v" type="video/mp4"></video>
        </div>
    </section>

    <section class="lastsec">
        <div class="faq">
            <h1>Features</h1>
            <ul class="questions">
                <li>Hand-picked movies which assures high quality recommendations.</li>
                <li>Watch movie trailers directly on our website.</li>
                <li>No confusion,Get only one recommendation at a time.</li>
                <li>New movies are added consistently.</li>
                <li>Special recommendations for movie dates.</li>
                
            </ul>
            <p>So What Are You Waiting For?? Create Your Account And Get Started</p>
            <div class="input">
                <input type="email" name="email" placeholder="Email Address">
                <a href="#" class="btn-rounded"><button>GET STARTED ></button></a>
            </div>
        </div>
    </section>      

 <footer class="footer">
        <p>Questions? Call 080-654-465-6546</p>
        <div class="footer-cols">
            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Investor Relations</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Speed Test</a></li>
            </ul>
            <ul>
                <li><a href="#">Help Centre</a></li>
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Cookie Preferences</a></li>
                <li><a href="#">Watch for Free</a></li>
            </ul>
            <ul>
                <li><a href="#">Account</a></li>
                <li><a href="#">Ways to Watch</a></li>
                <li><a href="#">Corporate Information</a></li>
                <li><a href="#">Legal Notices</a></li>
            </ul>
            <ul>
                <li><a href="#">Media Centre</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Netflix Originals</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>