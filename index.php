<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Paul Kwon | Home</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
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
    
    <!--Google AdSense-->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-7242937084219096",
        enable_page_level_ads: true
    });
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
                    </div>
                </div>
            </section>

            <section id='projects' class='container'>
                <h3>Projects</h3>
                <hr style='border-width: 3px'>
                <div class='row container-fluid '>
                    <div class='col-lg-4 col-sm-6 project'>
                        <a href="/views/projects/homebuilding.php">
                            <img class='project_img' src="/img/projects/home.jpg" alt="">
                            <div class='overlay'>
                                <h3 class='title'>Homebuilding Case</h3>
                                <p class='projectType'><strong>(Project Management)</strong></p>
                                <p class='projectText'>Constructing John Smith's 2.500 square foot home within 8 months while controlling the $250,000 budget.</p>
                            </div>
                        </a>
                    </div>
                    <div class='col-lg-4 col-sm-6 project'>
                        <a href="http://www.sharonharrah.com">
                        <!-- Working File: <a href="/views/lunchbox/index.php" target='_blank'> -->
                            <img class='project_img' src="/img/projects/sharon.png" alt="">
                            <div class='overlay'>
                                <h3 class='title'>Sharon Harrah</h3>
                                <p class='projectType'><strong>(Freelance)</strong></p>
                                <p class='projectText'>Social Media & Content Marketing specialist's portfolio</p>
                                <p class='underDevelopment'> [Under Development]</p>
                            </div>
                        </a>
                    </div>
                    <div class='col-lg-4 col-sm-6 project'>
                        <a href="https://pauls-movies.herokuapp.com/" target='_blank'>
                            <img class='project_img' src="/img/projects/movie.jpg" alt="">
                            <div class='overlay'>
                                <h3 class='title'>My Movies</h3>
                                <p class='projectType'><strong>(Personal Project)</strong></p>
                                <p class='projectText'>My personal korean movie/drama recommendations.</p>
                            </div>
                        </a>
                    </div>
                    <div class='col-lg-4 col-sm-6 project'>
                        <a href="/views/yellow/index.php" target='_blank'>
                            <img class='project_img' src="/img/projects/yellow.jpg" alt="">
                            <div class='overlay'>
                                <h3 class='title'>Lots of Yellow</h3>
                                <p class='projectType'><strong>(Freelance)</strong></p>
                                <p class='projectText'>Photographer's portfolio to show her work and find future clients.</p>
                            </div>
                        </a>
                    </div>
                    <div class='col-lg-4 col-sm-6 project'>
                        <a href="http://www.tcpcmuyg.com" target='_blank'>
                            <img class='project_img' src="/img/projects/mu_logo.png" alt="">
                            <div class='overlay'>
                                <h3 class='title'>TCPCMUYG.COM</h3>
                                <p class='projectType'><strong>(Freelance)</strong></p>
                                <p class='projectText'>Responsive website built to inform users of latest events, pastor sermon notes, and information about the youth group.</p>
                            </div>
                        </a>
                    </div>
                    <div class='col-lg-4 col-sm-6 project'>
                        <a href="https://github.com/lilpkstud/Travel-Buddy" target='_blank'>
                            <img class='project_img' src="/img/projects/travel.jpg" alt="">
                            <div class='overlay'>
                                <h3 class='title'> Travel Buddy</h3>
                                <p class='projectType'> <strong> (School: LAMP Stack Test where students had 4 hours to complete the project) </strong></p>
                                <p class='projectText'>Fullstack website that allows users to create and share their own traveling plans to find others who are interested in joining. </p>
                            </div>
                        </a>
                    </div>
                    <div class='col-lg-4 col-sm-6 project'>
                        <a href="https://github.com/lilpkstud/Quotes" target='_blank'>
                            <img class='project_img' src="/img/projects/quotes.jpg" alt="">
                            <div class='overlay'>
                                <h3 class='title'> Quotes Generator</h3>
                                <p class='projectType'><strong>(School: LAMP Stack Test where students had 4 hours to complete the project)</strong></p>
                                <p class='projectText'>Fullstack website that allows users to create quotes while view and favorite other user's quotes.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </section>

            <section id='about'>
                <div id='aboutRow' class='row'>
                    <div class='col-lg-6'>
                        <div class='container'>
                            <img id='PaulKwon'src="/img/mt_rainer.jpg" alt="">
                        </div>
                    </div>
                    <div class='col-lg-6'>
                        <h1 style='text-align:center'>PAUL S. KWON</h1>
                        <p class='bio'> My first "Hello, World" program was in Java when I was taking a computer science course during my sophomore year in college. I failed that course because of pure laziness, but I was fascinated on how I was able to create anything on my computer....just not in Java. I decided to take a three month coding program where I became proficient in the LAMP Stack while dabbling with the MEAN Stack.</p>
                        <p class='bio'> I am currently attending the Univeristy of Washington to get my Project Management Certification in order to take the PMP Exam. I have previous experience as a Quality Assurance Test Engineer and a freelance web developer for local businesses. I am looking for Project Management roles while available to meet future clients to help build their website. </p>
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
                        <p class='bio'> You can reach me for an inquiry via email at<a class='contactEmoji' href="mailto:paul.s.kwon24@gmail.com"><strong>paul.s.kwon24@gmail.com</strong></a>or more information about myself: 
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>