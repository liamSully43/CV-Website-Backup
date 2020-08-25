<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet"> <!-- Google Fonts -->
    <script src="https://kit.fontawesome.com/70314bd783.js" crossorigin="anonymous"></script> <!-- Font Awesome -->
    <link href="./styles.css" rel="stylesheet" type="text/css" />
    <title>Liam Sullivan</title>
</head>
<body>
    <div id="particles-js"></div>
    <div id="background-cover"></div>
    <div id="background"></div>
    <header>
        <div>
            <h1>Liam Sullivan</h1>
            <h2>Front End Developer</h2>
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
                    <p>I'm a self taught front end developer that has skills in a variety of front end development technologies. If you have any job opportunities, feel free to get in touch. You can either use the contact field at the bottom of the page, or by emailing me at</p>
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
            <div> <!-- div required for animations - add floating animation to div & colour animation to img so that when the user hovers over the img the floating animation isn't reapplied -->
                <img src="./Assets/skills.png" height="auto" />
            </div>
        </section>
        <div class="break"></div>
        <section id="portfolio">
            <div>
                <h1 class="titles">PORTFOLIO</h1>
                <div id="portfolio-container">
                    <section class="portfolio-containers">
                        <a href="http:discoverdrink.org" target="_blank" title="View the Discover Drink project">
                            <img src="./Assets/Discover Drink.PNG" />
                            <div class="cover">
                                <p>A database for drinks and venues</p>
                            </div>
                        </a>
                        <br />
                        <br />
                        <div>
                            <a href="http:discoverdrink.org" target="_blank" title="View the Discover Drink project" class="title-links">Discover Drink</a>
                            <i class="far fa-eye-slash" title="Code not available"></i>
                        </div>
                        <p class="skills-used">JavaScript, Node.js & Express.js</p>
                    </section>
                    <section class="portfolio-containers">
                        <a href="https://red-window.co.uk/" target="_blank" title="View the Red Window project">
                            <img src="./Assets/Red Window.png" />
                            <div class="cover">
                                <p>An image gallery that sources its images from unsplash.com</p>
                            </div>
                        </a>
                        <br />
                        <br />
                        <div>
                            <a href="https://red-window.co.uk/" target="_blank" title="View the Red Window project" class="title-links">Red Window</a>
                            <a href="https://github.com/liamSully43/red-window" target="_blank" title="View the code" class="code-links"><i class="fas fa-code"></i></a>
                        </div>
                        <p class="skills-used">Angular JS & unsplash.com API</p>
                    </section>
                    <section class="portfolio-containers">
                        <a href="https://liam-sullivan.co.uk/logo-creator" target="_blank" title="View the Graphic Logo Creator project">
                            <img src="./Assets/Logo Creator.png" />
                            <div class="cover">
                                <p>Create your own graphic images, icons or logos with this Graphic Logo Creator</p>
                            </div>
                        </a>
                        <br />
                        <br />
                        <div>
                            <a href="https://liam-sullivan.co.uk/logo-creator" target="_blank" title="View the Graphic Logo Creator project" class="title-links">Graphic Logo Creator</a>
                            <a href="https://github.com/liamSully43/graphic-logo-creator" target="_blank" title="View the code" class="code-links"><i class="fas fa-code"></i></a>
                        </div>
                        <p class="skills-used">HTML, CSS & JavaScript</p>
                    </section>
                    <section class="portfolio-containers">
                        <a href="https://liamsully43.github.io/wheel-of-fortune/" target="_blank" title="View the Wheel of Fortune project">
                            <img src="./Assets/Wheel of Fortune.png" />
                            <div class="cover">
                                <p>An online game adaptation of the Wheel of Fortune game show</p>
                            </div>
                        </a>
                        <br />
                        <br />
                        <div>
                            <a href="https://liamsully43.github.io/wheel-of-fortune/" target="_blank" title="View the Wheel of Fortune project" class="title-links">Wheel of Fortune</a>
                            <a href="https://github.com/liamSully43/wheel-of-fortune" target="_blank" title="View the code" class="code-links"><i class="fas fa-code"></i></a>
                        </div>
                        <p class="skills-used">React.js</p>
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