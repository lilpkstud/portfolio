<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Paul Kwon | Home</title>
    <meta name="description" content="Paul Kwon - Project Manager and Freelance Web Developer Portfolio">
    <meta name="keywords" content="Paul Kwon, Kwon, paulskwon, project manager, portfolio">
    <meta name="author" content="Paul Kwon">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">

    
    <!-- Bootstrap JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    
    <!-- Navigation CSS -->
    <link rel="stylesheet" type="text/css" href="/css/navigation.css">

    <!-- Index CSS -->
    <link rel="stylesheet" type="text/css" href="/css/index.css">

    <!-- Emjoi CSS -->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    
    <!-- Global Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91000241-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-91000241-1');
    </script>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
    <nav class="nav navbar fixed-top">
        <div id="topnav" class='col navv'>
            <a href="#intro">HOME</a>
            <a href="#about">ABOUT</a>
            <a href="#projects">PROJECTS</a>
            <a href="/views/resume.php" target='_blank'>RESUME</a>
        </div>  
    </nav>

    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
    <div id="content">
        <div class="container-fluid">
            <section id='intro' class='container'>
                <div class='container-fluid'>
                    <div class='row'>
                        <div class='col'>
                            <h1 class='introText'>Hello, my name is Paul <i class="em em-wave"></i> </h1>
                        </div>
                    </div>
                    <div>
                        <h3 class='introText1'>I'm a FullStackWebDeveloper & Project Manager based in Tacoma, WA</h3>
                        <h4 class='aboutMe'> <strong> About Me: </strong> <i class="em em-kr"></i><i class="em em-us"></i>,  <i class="em em-church"></i>,  <i class="em em-coffee"></i>,  <i class="em em-beer"></i>,  <i class="em em-basketball"></i>,  <i class="em em-man-lifting-weights"></i>,  <i class="em em-snow_capped_mountain"></i>,  <i class="em em-golf"></i>
                        </h4>
                        <p>Clarifications about the emojis can be found  <a href="#about"> here</a>. </p>
                        <h4> 
                            <a href="mailto:paul.s.kwon24@gmail.com" style="text-decoration: none;">
                                <span style="font-size: 1.5em;">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                
                            </a>
                            |
                            <a href="https://www.linkedin.com/in/pskwon" target="_blank" style="text-decoration:none;">
                                <span style="font-size: 1.5em;">
                                    <i class="fab fa-linkedin-in"></i>
                                </span>
                            </a> 
                            |
                            <a href="https://github.com/lilpkstud" target="_blank" style="text-decoration:none;">
                                <span style="font-size: 1.5em;">
                                    <i class="fab fa-github"></i>
                                </span>
                            </a>
                        </h4>
                    </div>
                </div>
            </section>

            <section id='projects' class='container'>
                <h3>Projects</h3>
                <hr style='border-width: 3px'>
                <div class='row container-fluid '>
                    <div class='col-lg-4 col-md-6 project'>
                        <a href="/views/homebuilding.php" target="_blank">
                            <img class='project_img img-fluid' src="/img/projects/home.jpg" alt="">
                            <div class='overlay'>
                                <h3 class='title'>Homebuilding Case</h3>
                                <p class='projectType'><strong>(Project Management)</strong></p>
                                <p class='projectText'>Constructing John Smith's 2.500 square foot home within 8 months while controlling the $250,000 budget.</p>
                            </div>
                        </a>
                    </div>
                    <div class='col-lg-4 col-md-6 project'>
                        <a href="http://www.sharonharrah.com" target="_blank" style="text-decoration:none;">
                            <img class='project_img img-fluid' src="/img/projects/sharon.png" alt="">
                            <div class='overlay'>
                                <h3 class='title'>Sharon Harrah</h3>
                                <div class="projectType">
                                    <p class="projectType"><strong>(Freelance)</strong></p>
                                    <p style="color:whitesmoke; text-align:center;">Social Media & Content Marketing specialist's portfolio</p>
                                    <a class="projectText btn btn-primary" href="https://github.com/lilpkstud/SharonPortfolio" role="button" style="margin: 0 10px;">View Code</a>
                                    <a class="projectText btn btn-primary" href="http://www.sharonharrah.com" role="button">View Project</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-lg-4 col-md-6 project'>
                        <a href="https://pauls-movies.herokuapp.com/" target='_blank' style="text-decoration:none;">
                            <img class='project_img img-fluid' src="/img/projects/movie.jpg" alt="">
                            <div class='overlay'>
                                <h3 class='title'>My Movies</h3>
                                <div class="projectType">
                                    <p class='projectType'><strong>(Personal Project)</strong></p>
                                    <p style='color:whitesmoke; text-align:center;'>My personal korean movie/drama recommendations.</p>
                                    <a class="projectText btn btn-primary" href="https://github.com/lilpkstud/PaulsMovie" role="button" style="margin: 0 10px;">View Code</a>
                                    <a class="projectText btn btn-primary" href="https://pauls-movies.herokuapp.com/" role="button">View Project</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-lg-4 col-md-6 project'>
                        <a href="http://www.tcpcmuyg.com" target='_blank' style="text-decoration:none;">
                            <img class='project_img img-fluid' src="/img/projects/mu_logo.png" alt="">
                            <div class='overlay'>
                                <h3 class='title'>TCPCMUYG.COM</h3>
                                <div class="projectType">
                                    <p class='projectType'><strong>(Freelance)</strong></p>
                                    <p class='projectText'>Responsive website built to inform users of latest events, pastor sermon notes, and information about the youth group.</p>
                                    <a class="projectText btn btn-primary" href="https://github.com/lilpkstud/TCPCMU_Homepage" role="button" style="margin: 0 10px;">View Code</a>
                                    <a class="projectText btn btn-primary" href="http://www.tcpcmuyg.com" role="button">View Project</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-lg-4 col-md-6 project'>
                        <a href="https://github.com/lilpkstud/Travel-Buddy" target='_blank' style="text-decoration:none;">
                            <img class='project_img img-fluid' src="/img/projects/travel.jpg" alt="">
                            <div class='overlay'>
                                <h3 class='title'> Travel Buddy</h3>
                                <div class="projectType">
                                    <p class='projectType'> <strong> (School: LAMP Stack Test where students had 4 hours to complete the project) </strong></p>
                                    <p class='projectText'>Fullstack website that allows users to create and share their own traveling plans to find others who are interested in joining. </p>
                                    <a class="projectText btn btn-primary" href="https://github.com/lilpkstud/Travel-Buddy" role="button" style="margin: 0 10px;">View Code</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class='col-lg-4 col-md-6 project'>
                        <a href="https://github.com/lilpkstud/Quotes" target='_blank' style="text-decoration:none;">
                            <img class='project_img img-fluid' src="/img/projects/quotes.jpg" alt="">
                            <div class='overlay'>
                                <h3 class='title'> Quotes Generator</h3>
                                <div class="projectType">
                                    <p class='projectType'><strong>(School: LAMP Stack Test where students had 4 hours to complete the project)</strong></p>
                                    <p class='projectText'>Fullstack website that allows users to create quotes while view and favorite other user's quotes.</p>
                                    <a class="projectText btn btn-primary" href="https://github.com/lilpkstud/Quotes" role="button" style="margin: 0 10px;">View Code</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>

            <section id='about' class="container-fluid">
                <div id='aboutRow' class='row'>
                    <div class='col-md-12 col-lg-6'>
                        <img class='img-fluid'src="/img/mt_rainer.jpg" alt="">
                    </div>
                    <div id="bio" class='col-md-12 col-lg-6' style="border: solid">
                        <h1 style='text-align:center'>PAUL S. KWON</h1>
                        <p class='bioText'> My first "Hello, World" program was in Java when I was taking a computer science course during my sophomore year in college. I failed that course because of pure laziness, but I was fascinated on how I was able to create anything on my computer....just not in Java. I decided to take a three month coding program where I became proficient in the LAMP Stack while dabbling with the MEAN Stack.</p>
                        <p class='bioText'> I also have experience as a project manager. I have recently attained my project management certification from the University of Washington in  2018. My capstone project is a perfect example where I successfully led my team to identify project requirements and specifications to create a defined scope and a Work Breakdown Structure (WBS) during project planning. I also developed estimates of activity resources and activity durations to create the project's schedule using Microsoft Project. </p>
                        <p class="bioText">I am currently a freelance web developer that helps local businesses and organizations while also looking for project management positions to gain experience as a PM.</p>
                        <h3>ABOUT ME:</h3>
                        <ul>
                            <li class='aboutEmoji'> Korean-American <i class="em em-kr"></i><i class="em em-us"></i> </li>
                            <li class='aboutEmoji'> Christian <i class="em em-church"></i> </li>
                            <li class='aboutEmoji'> Coffee Connoisseur <i class="em em-coffee"></i> </li>
                            <li class='aboutEmoji'> "Occasional" Beer Consumer <i class="em em-beer"></i></li>
                            <li class='aboutEmoji'> Basketball Player | Avid San Antonio Spurs & Seattle SuperSonics [They will come back] fan <i class="em em-basketball"></i> </li>
                            <li class='aboutEmoji'> Don't Skip Leg Day Advocate <i class="em em-man-lifting-weights"></i> </li>
                            <li class='aboutEmoji'> Hiking for the Gram  <i class="em em-snow_capped_mountain"></i> </li>
                            <li class='aboutEmoji'> Perfecting the Happy Gilmore Swing <i class="em em-golf"></i> </li>
                        </ul>
                        <p class='bioText'> You can reach me for an inquiry via email at<a class='contactEmoji' href="mailto:paul.s.kwon24@gmail.com"><strong>paul.s.kwon24@gmail.com</strong></a>or more information about myself: 
                            <div class='moreInfo'>
                                <a class='contactEmoji' href="https://www.linkedin.com/in/pskwon" target='_blank'><strong>LinkedIn</strong></a> <a class='contactEmoji' href="https://github.com/lilpkstud" target='_blank'><strong>Github</strong></a> <a class='contactEmoji' href="/views/resume.php" target='_blank'><strong>Resume</strong></a>
                            </div>
                        </p>
                    </div>
                    
                </div>
            </section>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <!-- Smooth Scrolling -->
    <script src="/js/navigation.js"></script>
</body>
</html>