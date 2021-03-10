<!DOCTYPE html>
<html lang="it-IT">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog sul web design » Belotti Digital</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="./images/favicons/favicon.png">
    <link rel="apple-touch-icon" href="./images/favicons/favicon.png">

    <!-- SEO Tags -->
    <meta name="description" content="L'unico blog sul web design che va dritto al punto! Scopri tutte le risorse necessarie per portare la tua attività online. Articoli sul digital marketing.">
    <meta name="keywords" content="blog, web design, blog sul web design, digital marketing blog, blog sul design, blog sulla programmazione">
    <meta name="robots" content="index, follow">

    <!-- Social Tags -->
    <meta property="og:title" content="Blog sul web design » Belotti Digital">
    <meta property="og:locale" content="it-IT">
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://belottidigital.com/" />
    <meta property="og:image" content="https://belottidigital.com/images/blog/blog-sul-web-design-hero-image.png" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Blog sul web design » Belotti Digital" />
    <meta name="twitter:description" content="L'unico blog sul web design che va dritto al punto! Scopri tutte le risorse necessarie per portare la tua attività online. Articoli sul digital marketing." />  
    <meta name="twitter:image" content="https://belottidigital.com/images/blog/blog-sul-web-design-hero-image.png" />

    <!-- To run web application in full-screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- Status Bar Style (see Supported Meta Tags below for available values) -->
    <meta name="apple-mobile-web-app-status-bar-style" content="blue">

    <!-- Font Imports -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

    <!-- Styling -->
    <link rel="stylesheet" href="./css/setup.css">
    <link rel="stylesheet" href="./css/setup-mobile.css">
    <link rel="stylesheet" href="./css/blog.css">
    <link rel="stylesheet" href="./css/blog-mobile.css">

    <!-- Google Search Console -->


</head>
<body class="not-webp">
    
    <?php include_once("includes/header.php"); ?>

    <div class="hero-section">
        <div class="block">
            <div class="content">
                <h1>Blog Belotti Digital</h1>
                <p>L'unico blog sul web design che va dritto al punto! Portare il tuo business online non deve essere così difficile e costoso. Con questo blog ti spiegherò tutto ciò che c'è da sapere su: web design, digital marketing, logo e tanto altro.</p>
                <center class="btn btn-blue"><a href="https://calendly.com/belottidigital/chiamata-gratuita">NON TROVI L'ARTICOLO CHE CERCHI? SCRIVICI!</a></center>
            </div>
        </div>
    </div>

    <div class="articles-list">

        <h2>Ultimi articoli pubblicati</h2>

        <p>Nessun articolo pubblicato per ora... Controlla fra una settimana ;)</p>
        <!--
        <div class="block">
            <div class="articleCard">
                <img src="../images/" alt="alt">
                <p class="publisher">Scritto da <strong>Alessandro</strong> il <strong>{{ Data completa }}</strong></p>
                <h3>{{ Article Title }}</h3>
                <p class="description">{{ Article description }}</p>
                <a href="http://belottidigital.com/blog/'. $post[$i]['articleUrl'] .'">Leggi di più...</a>
            </div>
            <div class="articleCard">
                <img src="../images/" alt="alt">
                <p class="publisher">Scritto da <strong>Alessandro</strong> il <strong>{{ Data completa }}</strong></p>
                <h3>{{ Article Title }}</h3>
                <p class="description">{{ Article description }}</p>
                <a href="http://belottidigital.com/blog/'. $post[$i]['articleUrl'] .'">Leggi di più...</a>
            </div>
            <div class="articleCard">
                <img src="../images/" alt="alt">
                <p class="publisher">Scritto da <strong>Alessandro</strong> il <strong>{{ Data completa }}</strong></p>
                <h3>{{ Article Title }}</h3>
                <p class="description">{{ Article description }}</p>
                <a href="http://belottidigital.com/blog/'. $post[$i]['articleUrl'] .'">Leggi di più...</a>
            </div>
        </div>
        -->

        <!-- <h2>Tutti gli articoli: </h2> -->

    </div>

    <?php include_once("includes/footer.php"); ?>

    <!-- Check WebP Support -->
    <script src="./js/modernizr.min.js"></script>
    <script>
        let body = document.getElementsByTagName("BODY")[0];

        Modernizr.on('webp', function (result) {
            if (result) {
                body.classList.remove("not-webp");
                body.classList.add("webp");
            }
        });
    </script>

    <!-- Crisp Chat -->
    <script defer type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="73180a7c-2f34-4d5f-9e4a-bb1746d1445c";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

</body>
</html>
