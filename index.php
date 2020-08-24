<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap" rel="stylesheet"> <!-- Google Fonts -->
    <link href="./styles.css" rel="stylesheet" type="text/css" />
    <title>Liam Sullivan</title>
</head>
<body>
    <div id="particles-js"></div>
    <div id="background"></div>
    <header>
        <div>
            <h1>Liam Sullivan</h1>
            <h2>Front End Web Developer</h2>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <main>
        <section id="about">
            <div class="triangle left-triangle"></div>
            <div class="about-info-container">
                <div>
                    <h1 class="titles">ABOUT</h1>
                    <p>Hi, I'm Liam</p>
                    <p>I'm a self taught web developer that has skills in a variety of web development technologies. If you have any job opportunities, feel free to get in touch. You can either use the contact field below or by emailing me at</p>
                    <br />
                    <span>liamsullivan43@gmail.com</span>
                    <br />
                    <br />
                    <a href="https://github.com/liamSully43" target="_blank" title="Click to visit my Github"><img src="./Assets/github.png" width="60" height="60" alt="Link to Github account" /></a>
                </div>
            </div>
            <div class="triangle right-triangle"></div>
        </section>
        <div class="break"></div>
        <section id="skills">
            <h1 class="titles">SKILLS</h1>
            <p>HTML</p>
            <p>CSS</p>
            <p>JavaScript</p>
            <p>SCSS</p>
            <p>jQuery</p>
            <p>Bootstrap</p>
            <p>React</p>
            <p>Adobe XD</p>
            <p>Angular</p>
            <p>PHP</p>
            <p>Node</p>
            <p>MongoDB</p>
            <p>Express</p>
            <p>FileZilla</p>
            <p>Git Version Control</p>
            <img src="./Assets/ball.png" width="auto" height="400" />
            <span></span>
        </section>
        <div class="break"></div>
        <section id="portfolio">
            <div>
                <h1 class="titles">PORTFOLIO</h1>
                <div id="portfolio-container">
                    <section class="portfolio-containers">
                        <a href="http:discoverdrink.org" target="_blank" title="Click to visit the Discover Drink project">
                            <img src="./Assets/Discover Drink.PNG" />
                            <div class="cover">
                                <p>A database for drinks and venues</p>
                            </div>
                        </a>
                        <p>Discover Drink</p>
                    </section>
                    <section class="portfolio-containers">
                        <a href="https://red-window.co.uk/" target="_blank" title="Click to visit the Red Window project">
                            <img src="./Assets/Red Window.png" />
                            <div class="cover">
                                <p>An image gallery that sources its images from unsplash.com</p>
                            </div>
                        </a>
                        <p>Red Window</p>
                    </section>
                    <section class="portfolio-containers">
                        <a href="https://liam-sullivan.co.uk/logo-creator" target="_blank" title="Click to visit the Graphic Logo Creator project">
                            <img src="./Assets/Logo Creator.png" />
                            <div class="cover">
                                <p>Create your own graphic images, icons or logos with this Graphic Logo Creator</p>
                            </div>
                        </a>
                        <p>Graphic Logo Creator</p>
                    </section>
                    <section class="portfolio-containers">
                        <a href="https://liamsully43.github.io/wheel-of-fortune/" target="_blank" title="Click to visit the Wheel of Fortune project">
                            <img src="./Assets/Wheel of Fortune.png" />
                            <div class="cover">
                                <p>An online game adaptation of the Wheel of Fortune game show</p>
                            </div>
                        </a>
                        <p>Wheel of Fortune</p>
                    </section>
                </div>
            </div>
        </section>
        <div class="break"></div>
        <section id="contact">
            <div>
                <h1 class="titles">CONTACT</h1>
                <form action="/#contact" method="POST">
                    <input class="fields" name="name" type="text" placeholder="Name" />
                    <input class="fields" name="email" type="email" placeholder="Email" />
                    <textarea class="fields" name="subject" placeholder="Subject"></textarea>
                    <div class="button-container">
                        <button type="submit"></button>
                        <div class="button-cover"></div>
                        <div class="text">
                            <p>Submit</p>
                        </div>
                    </div>
                </form>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = filter_var($name = $_POST["name"], FILTER_SANITIZE_STRING);
        $email = filter_var($name = $_POST["name"], FILTER_SANITIZE_EMAIL);
        $subject = filter_var($subject = $_POST["project"], FILTER_SANITIZE_STRING);
        $to = "liamsullivan43@gmail.com";
        $subjectHeader = "CV Website - " . $name;
        $subject = "
        <p>$name</p>
        <p>$email</p>
        <br />
        <p>$subject</p>";
        $headers = "Content-type: text/html";
        if(mail($to, $subjectHeader, $subject, $headers)){
            echo '<p class="message">Thank\'s for your message, I\'ll get back to you as soon as I can!</p>';
        }
        else {
            echo '<p class="message">Hmm, it seems like something went wrong, please try again later</p>';
        }
    }
?>
            </div>
        </section>
    </main>
    <footer><!-- Contains the wave animation --></footer>
</body>
    <script src="assets/particles.min.js"></script>
    <script src="./script.js" type="text/JavaScript"></script>
    <script src="./Assets/three.min.js"></script>
<script src="./Assets/vanta.waves.js"></script>
</html>