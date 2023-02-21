<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dynamic Website</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class = "main">
        <nav>
            <a href="#" class = "logo">
                <img src="/Images/logo1.png">
            </a>
            <ul class = "menu">
                <li><a href="#"class = "active" >Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>Create perspetcives with virtual reality</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique facilis iste error excepturi dolore.</p>
            <a class = "main-btn" href = "#">Contact</a>
        </div>
    </section>
    <section class = "features">
        <div class = "feature-container">
            <div class = "feature-box">
                <div class = "f-img">
                    <img src="/Images/info-icon1.png"/>
                </div>
                <div class = "f-text">
                    <h4>Web Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href = "#" class = "main-btn">Check</a>
                </div>
            </div>
            <div class = "feature-box">
                <div class = "f-img">
                    <img src="/Images/info-icon2.png"/>
                </div>
                <div class = "f-text">
                    <h4>Software Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href = "#" class = "main-btn">Check</a>
                </div>
            </div>
            <div class = "feature-box">
                <div class = "f-img">
                    <img src="/Images/info-icon3.png"/>
                </div>
                <div class = "f-text">
                    <h4>App Development</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href = "#" class = "main-btn">Check</a>
                </div>
            </div>
        </div>
    </section>
    <section class = "about">
        <div class = about-img>
            <img src = "/Images/about.png">
        </div>
        <div class ="about-text">
            <h2>Start tracking your statistics</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis ipsa expedita illo, itaque sed commodi?</p>
            <button class = "main-btn" href="#">Read More</button>
        </div>
    </section>
    <section class = "contact">
        <div class = "contact-heading">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <form action = "userinformation.php" method = "POST">
            <input type="text" name = "user" placeholder="Your Full Name">
            <input type="email" name = "email" placeholder="Your E-Mail">
            <textarea name = "message" placeholder="Type your Message Here........"></textarea>
            <button class = "main-btn">Continue</button>
        </form>
    </section>
</body>
</html>