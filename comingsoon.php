<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="4; URL=index.php">
    <title>Under Construction</title>
    <style>
        /* Set height to 100% for body and html to enable the background image to cover the whole page: */
        body, html {
            height: 100%
        }

        .bgimg {
            /* Background image */
            background-image: url('img/comingsoon.gif');
            /* Full-screen */
            height: 100%;
            /* Center the background image */
            background-position: center;
            /* Scale and zoom in the image */
            background-size: cover;
            /* Add position: relative to enable absolutely positioned elements inside the image (place text) */
            position: relative;
            /* Add a white text color to all elements inside the .bgimg container */
            color: white;
            /* Add a font */
            font-family: "Courier New", Courier, monospace;
            /* Set the font-size to 25 pixels */
            font-size: 25px;
        }

        /* Position text in the top-left corner */
        .topleft {
            position: absolute;
            top: 0;
            left: 16px;
        }

        /* Position text in the bottom-left corner */
        .bottomleft {
            position: absolute;
            bottom: 0;
            left: 16px;
        }

        /* Position text in the middle */
        .middle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        /* Style the <hr> element */
        hr {
            margin: auto;
            width: 40%;
        }
    </style>
    <!-- Global Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91000241-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-91000241-1');
    </script>
</script>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
    <div class="bgimg">
        <div class="topleft">
            <p>Paul Kwon</p>
        </div>
        <div class="middle">
            <h1>COMING SOON</h1>
            <hr>
            <p>Sorry this page is under construction!</p>
            <p>Will update soon.</p>
        </div>
        <div class="bottomleft">
            <p>Some text</p>
        </div>
    </div>
</body>
</html>