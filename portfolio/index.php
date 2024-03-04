
<?php

include('include/config.php');

$query="SELECT * FROM home";
$data=mysqli_query($connect,$query);
$result=mysqli_fetch_assoc($data)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--------- Header Begins -------->
    <header>
        <div class="portfolio-container">
            <div class="portfolio-row header-wrap">
                <div class="brand-name">
                    <a href="#" class="logo">Farzana</a>
                </div>

                <!----------------- Header Navigation Begins --------------->
                <div class="portfolio-navbar">
                    <ul>
                        <li>
                            <a href="#about" class="navbar-link active-link">Home</a>
                        </li>
                        <li>
                            <a href="#resume" class="navbar-link">Resume</a>
                        </li>
                        <li>
                            <a href="#sevices" class="navbar-link">Services</a>
                        </li>
                        <li>
                            <a href="#projects" class="navbar-link">Projects</a>
                        </li>
                        <li>
                            <a href="#contact" class="navbar-link">Contact</a>
                        </li>
                        <li>
                            <a href="http://localhost/crud/login.php" class="login-button">Login</a>
                        </li>
                    </ul>

                </div>
                <!------ Header Navigation Ends ----------->
                <div class="navbar-toggle">
                    <i class="lni lni-grid-alt"></i>
                  </div>
              <button type="button" class="theme-toggle">
                <i class="lni lni-night"></i>
                <i class="lni lni-sun"></i>
              </button>
            </div>
        </div>
    </header>
    <!--------- Header Ends -------->

    <!--------- About Section Begins --------->
    <section id="about">
        <div class="portfolio-container">
            <div class="portfolio-row about-content">
                <!------ Greetings and Introduction Begins ------>
                <div class="about-intro">
                    <div class="about-text">
                    <h1>👋Hey There ,</h1><br>
                       <h2> It's <?php echo $result['name']?></h2>
                    
                    <h3> Web Developer</h3>
                    <p> Hey, are you looking for a designer to build your Brand and grow your business ? let's shake
hands with me.,</p>
                        
                    </div>

                </div>
                <!------ Greetings and Introduction Ends ------>

                <div class="about-image">
                    <img src="image/profile.jpeg" alt="Profile">

                </div>
            </div>
        </div>
    </section>
    <!------- About Section Ends ------->

    <!------ Resume Section Begins ------>
    <section id="resume">
        <div class="portfolio-container">
            <div class="portfolio-row">
                <!------ Resume Intro Begins ------>
                <div class="resume-intro">
                    <h2><strong>About Me</strong></h2>
                    <div class="resume-text">
                        <p>
                            A senior full stack developer brings unparalleled expertise to the table, with a proven track
                            record of spearheading complex web development projects. Their in-depth knowledge
                            encompasses both front-end and back-end technologies, ensuring seamless integration.
                        </p><br>
                        <p>
                            Proficient in a plethora of programming languages and frameworks, they architect scalable
                            systems.
                        </p><br>
                        <p>
                            A developer is an invaluable asset, driving innovation and excellence in web development.
                        </p>
                    </div>
                    <div class="hello-btn">
                        <a href="#contact">
                            Say Hello
                        </a>
                    </div>

                </div>
                <!------ Resume Intro Ends ------>

                <!------ Resume Body Begins ------>
                <div class="resume-body">
                    <h2><strong>Qualification</strong></h2>

                    <!------ Resume Heading Begins ------>
                    <div class="resume-heading">
                        <button class="btn active" type="button" data-id="education">
                            Education
                        </button>
                        <button class="btn" type="button" data-id="experience">
                            Experience
                        </button>
                        <button class="btn" type="button" data-id="skills">
                            Skills
                        </button>

                    </div>
                    <!------ Resume Heading Ends ------>

                    <!------ Education Tab Begins ------>
                    <div class="resume-tab active" id="education">

                        <div class="qualification-content">
                            <h4 class="course">Master Of Design</h4>
                            <h6 class="institution">Khulna University of Engineering & Technology</h6>
                            <span class="years">2019-2021</span>
                        </div>
                        <div class="qualification-content">
                            <h4 class="course">BSc in CSE</h4>
                            <h6 class="institution">Khulna University of Engineering & Technology</h6>
                            <span class="years">2013-2016</span>
                        </div>
                        <div class="qualification-content">
                            <h4 class="course">Bsc</h4>
                            <h6 class="institution">Khulna University of Engineering & Technology</h6>
                            <span class="years">2010-2012</span>
                        </div>
                    </div>
                    <!------ Education Tab Ends ------>
                    <!------ Experience Tab Begins ------>
                    <div class="resume-tab" id="experience">
                        <div class="qualification-content">
                            <h4 class="role">Full Stack Web Developer</h4>
                            <h6 class="organization">Pixel Studios</h6>
                            <span class="years">2018-2020</span>
                        </div>
                        <div class="qualification-content">
                            <h4 class="role">Web Developer</h4>
                            <h6 class="organization">ByteBloom Tech</h6>
                            <span class="years">2016-20</span>
                        </div>
                        <div class="qualification-content">
                            <h4 class="role">UI/UX Designer</h4>
                            <h6 class="organization">Infinity Lab</h6>
                            <span class="years">2012-2017</span>
                        </div>
                    </div>

                     <!------ Experience Tab Ends ------>

                    <!------ Skills Tab Begins ------>
                    <div class="resume-tab" id="skills">
                        <div class="bar-content">
                            <div class="bar-heading">
                                <div class="bar-title">
                                    Design Tools
                                </div>
                                <div class="bar-percentage">
                                    90%
                                </div>
                            </div>
                            <div class="bar-progress">
                                <div class="progress-bar" style="width: 90%;"></div>
                            </div>
                        </div>
                        <div class="bar-content">
                            <div class="bar-heading">
                                <div class="bar-title">
                                   Front-End Development Basics
                                </div>
                                <div class="bar-percentage">
                                    85%
                                </div>
                            </div>
                            <div class="bar-progress">
                                <div class="progress-bar" style="width: 85%;"></div>
                            </div>
                        </div>
                        <div class="bar-content">
                            <div class="bar-heading">
                                <div class="bar-title">
                                    Database Management
                                </div>
                                <div class="bar-percentage">
                                    80%
                                </div>
                            </div>
                            <div class="bar-progress">
                                <div class="progress-bar" style="width: 80%;"></div>
                            </div>
                        </div>
                        <div class="bar-content">
                            <div class="bar-heading">
                                <div class="bar-title">
                                   Testing and Debugging
                                </div>
                                <div class="bar-percentage">
                                    85%
                                </div>
                            </div>
                            <div class="bar-progress">
                                <div class="progress-bar" style="width: 85%;"></div>
                            </div>
                        </div>
                        <div class="bar-content">
                            <div class="bar-heading">
                                <div class="bar-title">
                                    API Development
                                </div>
                                <div class="bar-percentage">
                                    95%
                                </div>
                            </div>
                            <div class="bar-progress">
                                <div class="progress-bar" style="width: 95%;"></div>
                            </div>
                        </div>

                    </div>
                    <!------ Skills Tab Ends ------>
                </div>
                <!------ Resume Body Ends ------>
            </div>
    </section>
    <!------ Resume Section Ends ------>

    <!------ Services Section Begins ------>
    <section id="services">
        <div class="portfolio-container">
            <h2>
                <strong>What Do I Help</strong> 🛠️
            </h2>
            <div class="service-row">
                <div class="service-card">
                    <div class="icon">
                    <i class="lni lni-css3"></i>
                    </div>
                    <div class="service-content">
                        <h6>Web Development</h6>
                        <p>Elevate your online presence with stunning web designs.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="icon">
                        <i class="lni lni-adobe"></i>
                    </div>
                    <div class="service-content">
                        <h6>Graphic Designer</h6>
                        <p>Transform your brand narrative with innovative designs.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="icon">
                        <i class="lni lni-python"></i>
                    </div>
                    <div class="service-content">
                        <h6>Data Analyst</h6>
                        <p>Make data-driven decisions with our expert data analytics.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!---------- Service Section Ends ---------->

    <!---------- Project Section Begins --------->
    <section id="projects">
        <div class="portfolio-container">
            <div class="portfolio-row filter-wrap">
                <h2><strong>Recent Wroks</strong></h2>

                <!---------- Portfolio Nav Filter Begins --------->
                <div class="portfolio-filter-nav">
                    <button class="btn active" data-id="all" type="button">All</button>
                    <button class="btn active" data-id="design" type="button">Design</button>
                    <button class="btn active" data-id="development" type="button">Development</button>

                </div>
                <!---------- Portfolio Nav Filter Ends --------->
            </div>
            <!---------- Main Portfolio Begins --------->
            <div class="portfolio-wrapper">
                <div class="portfolio-col">
                    <div class="portfolio-item design">
                        <img src="image/lens.jpg" alt="">
                        <div class="portfolio-item-content">
                            <div class="product-title">
                                <h4>UXALchemy</h4>
                                <p>Designing Visual Narratives</p>
                            </div>
                        </div>
                      

                    </div>
                    <div class="portfolio-item development">
                        <img src="image/light.jpg" alt="">
                        <div class="portfolio-item-content">
                            <div class="product-title">
                                <h4>WebWhisperer</h4>
                                <p>User Experiences</p>
                            </div>
                        </div>
                   </div>
                </div>
                <div class="portfolio-col">
                    <div class="portfolio-item development">

                        <img src="image/bottle.jpg" alt="">
                        <div class="portfolio-item-cotent">
                            <div class="product-title">
                                <h4>Pixel Craft</h4>
                                <p>Building Masterpieces</p>

                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item design">
                        <img src="image/ukulele.jpg" alt="">
                        <div class="portfolio-item-content">
                            <div class="product-title">
                                <h4>DevEssel</h4>
                                <p>Artistery in Development</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="portfolio-col">
                    <div class="portfolio-item development">
                        <img src="image/podium.jpg" alt="">
                        <div class="portfolio-item-content">
                            <div class="product-title">
                                <h4>CodeMosaic</h4>
                                <p>Transform User Experience
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="portfolio-item design">
                        <img src="image/sunglasses.jpg" alt="">
                        <div class="portfolio-item-content">
                            <div class="product-title">
                                <h4>Apexon</h4>
                                <p>The Future of UX</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!---------- Main Portfolio Ends --------->
        </div>
    </section>
    <!------- Project Section Ends -------->

    <!------ Contact Section Begins ------>
    <section id="contact">
        <div class="portfolio-container">
            <!-- Contact General Info Begins -->
            <div class="contact-general">
                <h2><strong>Get in touch</strong></h2>
                <div class="contact-card">
                    <div class="icon">
                        <i class="lni lni-map-marker"></i>
                    </div>
                    <div class="contact-content">
                        <h5>Location</h5>
                        <span>Teligati,fulbarigate,KUET</span>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="icon">
                        <i class="lni lni-phone"></i>
                    </div>
                    <div class="contact-content">
                        <h5>Phone</h5>
                        <span>01970*****</span>
                        <span>01770*****</span>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="icon">
                        <i class="lni lni-envelope"></i>
                    </div>
                    <div class="contact-content">
                        <h5>Email</h5>
                        <span>info@example.com</span>
                    </div>
                </div>

            </div>
            <!-- Contact General Info Ends -->
        </div>
        <div class="portfolio-container">
            <h2 style="text-align: center;"><strong>Contact Me</strong></h2>
            <div class="portfolio-row">
                <!------ Main Contact Form Begins ------->
                <form id="contact-form" method="POST" action="#">
                    <div class="portfolio-row">
                        <div class="name-email">
                            <div class="input-wrapper">
                                <label for="name">Name</label>
                                <input type="text" class="input-control" name="name" placeholder="Enter your name">
                            </div>
                            <div class="input-wrapper">
                                <label for="email">Email</label>
                                <input type="email" class="input-control" name="email" placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="input-subject">
                            <label for="subject">Subject</label>
                            <input type="text" class="input-control" name="subject" placeholder="Enter your subject">
                        </div>
                        <div class="input-subject">
                            <label for="message">Message</label>
                            <textarea name="message" class="contact-msg" rows="9" placeholder="Your Message"></textarea>
                        </div>
                    </div>
                    <div class="form-submit">
                        <button type="submit" class="btn-submit">Submit</button>
                        <div class="loader">
                            <i class="lni lni-spinner-solid"></i>
                        </div>
                        <div class="form-message"></div>
                    </div>
                </form>
                <!------- Main Contact Form Ends -------->
            </div>
        </div>
    </section>
    <!------ Contact Section Ends ------>

    <!------- Footer Section Begins ------>
    <footer>
        <div class="portfolio-container">
            <div class="portfolio-row footer-wrap">

                <div class="copyright-text">
                    <p>© Copyright 2024 by<strong>Farzana</strong></p>
                </div>
                <ul class="social-icons">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Linkedin</a></li>
                </ul>

            </div>
            
        </div>
    </footer>
    <!-- Footer Section Ends -->
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>