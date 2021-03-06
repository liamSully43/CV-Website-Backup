<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Full stack web developer in the Bristol area, available for work" >
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap" rel="stylesheet" id="fonts" disabled> <!-- Google Fonts -->
    <script defer src="https://kit.fontawesome.com/70314bd783.js" crossorigin="anonymous"></script> <!-- Font Awesome -->
    <link href="./styles.css" rel="stylesheet" type="text/css" />
    <link href="./tablet.css" rel="stylesheet" type="text/css" media="(max-width: 1024px)" />
    <link href="./mobile.css" rel="stylesheet" type="text/css" media="(max-width: 750px)" />
    <link href="./small-mobile.css" rel="stylesheet" type="text/css" media="(max-width: 400px)" />
    <link href="./Assets/icon.png" type="image/png" rel="shortcut icon" />
    <title>Liam Sullivan</title>
</head>
<body>
    <div id="particles-js"></div> <!-- Heading animation background -->
    <div id="background-cover"></div> <!-- Used to high the fixed background animation when fading in the heading animation -->
    <div id="background"></div> <!-- Fixed background animation -->
    <header>
        <div>
            <h1>Liam Sullivan</h1>
            <h2>Full Stack Developer</h2>
        </div>
    </header>
    <!-- Navigation -->
    <nav>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <main>
        <!-- About Section -->
        <section id="about">
            <div class="triangle left-triangle"></div>
            <div class="about-info-container">
                <div>
                    <h1 class="titles">ABOUT</h1>
                    <p>Hi, I'm Liam</p>
                    <p>I'm a self taught full stack developer that has skills in a variety of web development technologies. If you have any job opportunities, feel free to get in touch. You can either use the contact field at the bottom of the page, or by emailing me at</p>
                    <br />
                    <a href="mailto:liamsullivan43@gmail.com" class="email">liamsullivan43@gmail.com</span>
                    <br />
                    <br />
                    <a href="https://github.com/liamSully43" target="_blank" rel="noreferrer" title="Click to visit my Github"><img src="./Assets/github.png" width="60" height="60" alt="Link to Github account" /></a>
                </div>
            </div>
            <div class="triangle right-triangle"></div>
        </section>
        <div class="break"></div>
        <!-- Skills Section -->
        <section id="skills">
            <h1 class="titles">SKILLS</h1>
            <div class="skills-container">
                <!-- When updating the skill sets - update the width calculator vaiables in styles.scss, tablet.scss & mobile.scss in the #skills selector -->
                <div class="skills-row front-end">
                    <p>Front End</p>
                    <p>HTML</p>
                    <p>CSS</p>
                    <p>SCSS</p>
                    <p>JavaScript</p>
                    <p>jQuery</p>
                    <p>React</p>
                    <p>Angular</p>
                </div>
                <div class="skills-row back-end">
                    <p>Back End</p>
                    <p>Node.js</p>
                    <p>Express.js</p>
                    <p>PHP</p>
                    <p>MongoDB</p>
                </div>
                <div class="skills-row miscellaneous">
                    <p>Miscellaneous</p>
                    <p>Adobe XD</p>
                    <p>Git Version Control</p>
                    <p>FileZilla</p>
                </div>
            </div>
        </section>
        <div class="break"></div>
        <!-- Portfolio Section -->
        <section id="portfolio">
            <div>
                <h1 class="titles">PORTFOLIO</h1>
                <div id="portfolio-container">
                    <section class="portfolio-containers">
                        <!-- Blackpines -->
                        <!-- Photo & Container of Project -->
                        <a href="http://www.blackpines.co.uk/" target="_blank" rel="noreferrer" title="View the Blackpines project">
                            <img src="./Assets/Blackpines.WebP" alt="Link to the Blackpines project" />
                            <div class="cover">
                                <p>Manage multiple Twitter accounts in one place at one time.</p>
                            </div>
                        </a>
                        <br />
                        <br />
                        <!-- Text & Links Related to Project -->
                        <div>
                            <a href="http://www.blackpines.co.uk/" target="_blank" rel="noreferrer" title="View the Blackpines project" class="title-links">Blackpines</a>
                            <a href="https://github.com/liamSully43/Blackpines" target="_blank" rel="noreferrer" title="View the code" class="code-links"><i class="fas fa-code"></i></a>
                            <i class="fas fa-video" title="Video demo"></i>
                        </div>
                        <p class="skills-used">MongoDB, Express.js, Node.js & Angular</p>
                    </section>
                    <section class="portfolio-containers">
                        <!-- Discover Drink -->
                        <!-- Photo & Container of Project -->
                        <a href="http:discoverdrink.org" target="_blank" rel="noreferrer" title="View the Discover Drink project">
                            <img src="./Assets/Discover Drink.webp" alt="Link to the Discover Drink project" />
                            <div class="cover">
                                <p>A database for drinks and venues</p>
                            </div>
                        </a>
                        <br />
                        <br />
                        <!-- Text & Links Related to Project -->
                        <div>
                            <a href="http:discoverdrink.org" target="_blank" rel="noreferrer" title="View the Discover Drink project" class="title-links">Discover Drink</a>
                            <i class="far fa-eye-slash" title="Code not available"></i>
                        </div>
                        <p class="skills-used">JavaScript, Node.js & Express.js</p>
                    </section>
                    <section class="portfolio-containers">
                        <!-- Red Window -->
                        <!-- Photo & Container of Project -->
                        <a href="https://red-window.co.uk/" target="_blank" rel="noreferrer" title="View the Red Window project">
                            <img src="./Assets/Red Window.webp" alt="Link to the Red Window project" />
                            <div class="cover">
                                <p>An image gallery that sources its images from the Unsplash API</p>
                            </div>
                        </a>
                        <br />
                        <br />
                        <!-- Text & Links Related to Project -->
                        <div>
                            <a href="https://red-window.co.uk/" target="_blank" rel="noreferrer" title="View the Red Window project" class="title-links">Red Window</a>
                            <a href="https://github.com/liamSully43/red-window" target="_blank" rel="noreferrer" title="View the code" class="code-links"><i class="fas fa-code"></i></a>
                        </div>
                        <p class="skills-used">Angular & Unsplash API</p>
                    </section>
                    <section class="portfolio-containers">
                        <!-- Wheel of Fortune -->
                        <!-- Photo & Container of Project -->
                        <a href="https://liamsully43.github.io/wheel-of-fortune/" target="_blank" rel="noreferrer" title="View the Wheel of Fortune project">
                            <img src="./Assets/Wheel of Fortune.webp" alt="Link to the Wheel of Fortune project" />
                            <div class="cover">
                                <p>An online game adaptation of the Wheel of Fortune game show</p>
                            </div>
                        </a>
                        <br />
                        <br />
                        <!-- Text & Links Related to Project -->
                        <div>
                            <a href="https://liamsully43.github.io/wheel-of-fortune/" target="_blank" rel="noreferrer" title="View the Wheel of Fortune project" class="title-links">Wheel of Fortune</a>
                            <a href="https://github.com/liamSully43/wheel-of-fortune" target="_blank" rel="noreferrer" title="View the code" class="code-links"><i class="fas fa-code"></i></a>
                        </div>
                        <p class="skills-used">React.js</p>
                    </section>
                    <div class="video-container">
                        <video width="95%" height="auto" controls>
                            <source src="./Assets/Blackpines Demo.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </section>
        <div class="break"></div>
        <!-- Contact Section -->
        <section id="contact">
            <div>
                <h1 class="titles">CONTACT</h1>
                <form action="/#contact" method="POST">
                    <label for="name" >Name</label>
                    <label for="email" >Email</label>
                    <label for="subject" >Subject</label>
                    <input class="fields" id="name" name="name" type="text" placeholder="Name" />
                    <input class="fields" id="email" name="email" type="email" placeholder="Email" />
                    <textarea class="fields" id="subject" name="subject" placeholder="Subject"></textarea>
                    <!-- Container to handle button animation -->
                    <div class="button-container">
                        <button type="submit">Submit</button> <!-- The button itself -->
                        <div class="button-cover"></div> <!-- What hides the text -->
                        <div class="text"> <!-- The text -->
                            <p>Submit</p> 
                        </div>
                    </div>
                    <!-- 
                        The animation works by changing the height of the button & cover at the same time (although one grows and the other shrinks) to either reveal or hide the text beneath 
                    -->
                </form>
                <!-- PHP Code to handle form -->
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = filter_var($name = $_POST["name"], FILTER_SANITIZE_STRING);
        $email = filter_var($email = $_POST["email"], FILTER_SANITIZE_EMAIL);
        $subject = filter_var($subject = $_POST["subject"], FILTER_SANITIZE_STRING);
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